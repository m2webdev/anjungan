<?php

namespace App\Http\Controllers;

use App\Models\ISDHTL;
use App\Models\Layanan;
use App\Models\PKH;
use App\Models\Profile;
use App\Models\Publikasi;
use App\Models\TataUsaha;
use Illuminate\Http\Request;

class ContentShowController extends Controller
{
    public function showProfile($title)
    {
        $profile = Profile::where('title', $title)->first();
        if (!$profile)
            abort(404);
        return response()->view('contents.show', [
            'item' => $profile,
            'items' => Profile::latest()->get(),
            'commentParam' => ['type' => 'profile']
        ]);
    }

    public function showTataUsaha($title)
    {
        $tataUsaha = TataUsaha::where('title', $title)->first();
        if (!$tataUsaha)
            abort(404);
        return response()->view('contents.show', [
            'item' => $tataUsaha,
            'items' => TataUsaha::latest()->get(),
            'commentParam' => ['type' => 'tata-usaha']
        ]);
    }

    public function showPKH($title)
    {
        $pkh = PKH::where('title', $title)->first();
        if (!$pkh)
            abort(404);
        return response()->view('contents.show', [
            'item' => $pkh,
            'items' => PKH::latest()->get(),
            'commentParam' => ['type' => 'pkh']
        ]);
    }

    public function showISDHTL($title)
    {
        $isdhtl = ISDHTL::where('title', $title)->first();
        if (!$isdhtl)
            abort(404);
        return response()->view('contents.show', [
            'item' => $isdhtl,
            'items' => ISDHTL::latest()->get(),
            'commentParam' => ['type' => 'isdhtl']
        ]);
    }

    public function showPublikasi()
    {
        return response()->view('contents.show', [
            'item' => 'Publikasi',
            'items' => Publikasi::latest()->get(),
            'commentParam' => ['type' => 'publikasi']
        ]);
    }

    public function showLayanan($title)
    {
        $layanan = Layanan::where('title', $title)->first();
        if (!$layanan)
            abort(404);
        return response()->view('contents.show', [
            'item' => $layanan,
            'items' => Layanan::latest()->get(),
            'commentParam' => ['type' => 'layanan']
        ]);
    }

}