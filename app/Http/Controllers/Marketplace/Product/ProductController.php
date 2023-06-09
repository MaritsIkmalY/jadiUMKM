<?php

namespace App\Http\Controllers\Marketplace\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\MarketPlace;
use App\Models\Product;
use App\Models\User;
use App\Services\MarketplaceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    private $marketplaceService;

    public function __construct(MarketplaceService $marketplaceService)
    {
        $this->marketplaceService = $marketplaceService;
    }

    public function index(): View
    {
        $marketplaceId = $this->marketplaceService->getMarketplaceId(Auth::user()->id);
        $products = Product::where('marketplace_id', $marketplaceId)->get();
        return view('marketplace.product.index', compact('products'));
    }

    public function create(): View
    {
        return view('marketplace.product.create');
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->marketplaceService->getPath($request);
        }
        $data['marketplace_id'] = $this->marketplaceService->getMarketplaceId(Auth::user()->id);
        Product::create($data);
        return redirect()->route('products.index')->with('success', 'Product berhasil ditambahkan');
    }

    public function edit(Product $product): View
    {
        return view('marketplace.product.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $data = $request->validated();
        if ($request->file('photo')) {
            Storage::disk('public')->delete($product);
            $data['photo'] = $this->marketplaceService->getPath($request);
        }
        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Produk berhasil diedit');
    }

    public function destroy(Product $product): RedirectResponse
    {
        Storage::disk('public')->delete($product->photo);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }
}
