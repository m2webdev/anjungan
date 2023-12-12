<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
            'commentParam' => get_class($profile),
            'comments' => Comment::where('model', get_class($profile))->get()
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
            'commentParam' =>  get_class($tataUsaha),
            'comments' => Comment::where('model', get_class($tataUsaha))->get()
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
            'commentParam' => get_class($pkh),
            'comments' => Comment::where('model', get_class($pkh))->get()
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
            'commentParam' => get_class($isdhtl),
            'comments' => Comment::where('model', get_class($isdhtl))->get()
        ]);
    }

    public function showPublikasi()
    {
        $publikasi = new Publikasi();
        return response()->view('contents.show', [
            'item' => 'Publikasi',
            'items' => Publikasi::latest()->get(),
            'commentParam' => get_class($publikasi),
            'comments' => Comment::where('model', get_class($publikasi))->get()
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
            'commentParam' => get_class($layanan),
            'comments' => Comment::where('model', get_class($layanan))->get()
        ]);
    }

}