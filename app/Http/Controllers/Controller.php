<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $tarifs = Tarif::first();
        if ($tarifs != null) view()->share(compact('tarifs'));
    }
}
