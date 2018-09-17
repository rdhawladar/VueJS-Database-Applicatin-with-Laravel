<?php

namespace App\Http\Controllers;
use App\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        return view('admin.companies.index');
    }

}
