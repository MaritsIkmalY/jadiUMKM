<?php

namespace App\Http\Controllers\Marketplace\NIB;

use App\Http\Controllers\Controller;
use App\Http\Requests\Marketplace\NibRequest;
use App\Models\NomorIndukBerusaha;
use App\Services\MarketplaceService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NomorIndukBerusahaController extends Controller
{
    private $marketplaceService;

    public function __construct(MarketplaceService $marketplaceService)
    {
        $this->marketplaceService = $marketplaceService;
    }

    public function index(): View
    {
        $marketplaceId = $this->marketplaceService->getMarketplaceId(Auth::user()->id);
        $nib = NomorIndukBerusaha::where('marketplace_id', $marketplaceId)->get();
        return view('marketplace.nib.index', compact('nib'));
    }

    public function create(): View
    {
        return view('marketplace.nib.create');
    }

    public function store(NibRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if($request->hasFile(['akte_perusahaan','sketsa_lokasi']))
        {
            $data['akte_perusahaan'] = $this->marketplaceService->getPath($request);
            $data['sketsa_lokasi'] = $this->marketplaceService->getPath($request);
        }
        $data['ktp'] = $this->marketplaceService->getPath($request);
        $data['npwp'] = $this->marketplaceService->getPath($request);
        $data['marketplace_id'] = $this->marketplaceService->getMarketPlaceId(Auth::user()->id);
        NomorIndukBerusaha::create($data);
        return redirect()->route('nib.index')->with('success', 'NIB berhasil diminta');
    }

    public function show(NomorIndukBerusaha $nib): View
    {
        return view('marketplace.nib.show', compact('nib'));
    }

    public function edit(NomorIndukBerusaha $nib): View
    {
        return view('marketplace.nib.edit');
    }

    public function destroy(NomorIndukBerusaha $nib): RedirectResponse
    {
        Storage::disk('public')->delete($nib);
        $nib->delete();
        return redirect()->route('nib.index')->with('success', 'NIB berhasil dihapus');
    }
}
