<?php

namespace App\Http\Controllers;

use App\Attendize\Utils;
use Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SpController extends Controller
{

    public function showVendors()
    {

        return view('Public.ViewSp.SpPage');
    }

}
