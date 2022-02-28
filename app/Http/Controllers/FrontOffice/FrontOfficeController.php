<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{
    public function index(Request $request)
    {
        //return redirect()->route("login");
        return view("myViews.frontOffice.index");
    }

    public function evisa(Request $request)
    {
        return view("myViews.frontOffice.evisa");
    }

    public function epasseport(Request $request)
    {
        return view("myViews.frontOffice.epasseport");
    }

}
