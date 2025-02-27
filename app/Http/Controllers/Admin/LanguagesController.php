<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LanguagesController extends Controller
{
    public function change(Request $request){
        $lang = $request->lang;
        Session::put('locale' , $lang);

        return redirect()->back();
    }
}
