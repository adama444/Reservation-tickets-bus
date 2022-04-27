<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::all();
        return view('pages.company', [
            'companies' => $companies
        ]);
    }

    public function show($id) {
        $company = Company::findOrFail($id);
        return view('pages.details-company', [
            'company' => $company
        ]);
    }
}
