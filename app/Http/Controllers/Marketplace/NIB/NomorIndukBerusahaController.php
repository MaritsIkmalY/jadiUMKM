<?php

namespace App\Http\Controllers\Marketplace\NIB;

use App\Http\Controllers\Controller;
use App\Http\Requests\Marketplace\NibEditRequest;
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
        if($request->hasFile('akte_perusahaan') && $request->hasFile('sketsa_lokasi'))
        {
            $data['akte_perusahaan'] = $this->marketplaceService->getPath($request->akte_perusahaan);
            $data['sketsa_lokasi'] = $this->marketplaceService->getPath($request->sketsa_lokasi);
        }
        $data['ktp'] = $this->marketplaceService->getPath($request->ktp);
        $data['npwp'] = $this->marketplaceService->getPath($request->npwp);
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
        return view('marketplace.nib.edit', compact('nib'));
    }

    public function update(NibEditRequest $request, NomorIndukBerusaha $nib)
    {
        $data = $request->validated();
        if ($request->hasFile('ktp')) {
            Storage::disk('public')->delete($nib->ktp);
            $data['ktp'] = $this->marketplaceService->getPath($request->ktp);
        }
        if ($request->hasFile('npwp')) {
            Storage::disk('public')->delete($nib->npwp);
            $data['npwp'] = $this->marketplaceService->getPath($request->npwp);
        }
        if ($request->hasFile('akte_perusahaan')) {
            Storage::disk('public')->delete($nib->akte_perusahaan);
            $data['akte_perusahaan'] = $this->marketplaceService->getPath($request->akte_perusahaan);
        }
        if ($request->hasFile('sketsa_lokasi')) {
            Storage::disk('public')->delete($nib->sketsa_lokasi);
            $data['sketsa_lokasi'] = $this->marketplaceService->getPath($request->sketsa_lokasi);
        }
        $nib->update($data);
        return redirect()->route('nib.index')->with('success', 'NIB berhasil diedit');
    }

    public function destroy(NomorIndukBerusaha $nib): RedirectResponse
    {
        Storage::disk('public')->delete($nib->ktp);
        Storage::disk('public')->delete($nib->npwp);
        Storage::disk('public')->delete($nib->akte_perusahaan);
        Storage::disk('public')->delete($nib->sketsa_lokasi);
        $nib->delete();
        return redirect()->route('nib.index')->with('success', 'NIB berhasil dihapus');
    }
}
