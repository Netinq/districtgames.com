<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|url',
            'url2' => 'required|url',
        ]);

        $tarif = Tarif::first();
        if ($tarif == null) $tarif = new Tarif();
        $tarif->url = request('url');
        $tarif->url2 = request('url2');
        $tarif->save();

        return redirect()->back()->with(['message' => 'URL modifié avec succès !']);
    }

    public function index()
    {
        $tarifs = Tarif::first();
        if ($tarifs != null) return view('admin.tarifs', compact('tarifs'));
        else return view('admin.tarifs');
    }
}
