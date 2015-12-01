<?php

namespace ACGJ\Http\Controllers\Admin;

use Illuminate\Http\Request;

use ACGJ\Http\Requests;
use ACGJ\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('controllers.admin.project.index');
    }
}
