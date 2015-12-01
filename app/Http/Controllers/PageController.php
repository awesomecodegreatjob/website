<?php

namespace ACGJ\Http\Controllers;

use Illuminate\Http\Request;

use ACGJ\Http\Requests;
use ACGJ\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('controllers.page.home');
    }

}
