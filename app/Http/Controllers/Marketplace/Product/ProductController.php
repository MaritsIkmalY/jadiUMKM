<?php

namespace App\Http\Controllers\Marketplace\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\MarketPlace;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = MarketPlace::getUser(Auth::user()->id)->product()->get();

        return view('marketplace.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marketplace.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->file('photo')) {
            $filename = basename($request->file('photo')->getClientOriginalName(), '.' . $request->file('photo')->getClientOriginalExtension());
            $path = $request->file('photo')->storeAs('/assets/images', $filename . "-" . Auth::user()->email . "." . $request->file('photo')->getClientOriginalExtension(), 'public');

            $validatedData['photo'] = $path;
        }

        $marketplace = User::getMarketplaceId(Auth::user()->id);
        $validatedData['marketplace_id'] = $marketplace->id;

        Product::create($validatedData);

        return redirect()->route('produk.index')->with('success', 'Product berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        return view('marketplace.product.edit', [
            'produk' => Product::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $validatedData = $request->validated();
        if ($request->file('photo')) {
            $filename = basename($request->file('photo')->getClientOriginalName(), '.' . $request->file('photo')->getClientOriginalExtension());
            $path = $request->file('photo')->storeAs('/assets/images', $filename . "-" . Auth::user()->email . "." . $request->file('photo')->getClientOriginalExtension(), 'public');
            if (!is_null($request->user()->photo)) {
                Storage::disk('public')->delete($request->user()->photo);
            }
            $validatedData['photo'] = $path;
        }

        Product::where('id', $id)->update($validatedData);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
    }
}
