<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch($lang)
    {
        Session::put('app_locale', $lang);
        App::setLocale($lang);

        return redirect()->back();
    }
}

