<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view("admin.home");
    }

    public function addCompany() {
        return view("admin.company.add-company");
    }

    public function add(Request $request) {
        Company::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'description' => $request->description
        ]);
        return view('admin.company.list-company');
    }

    public function delCompany() {
        return view("admin.company.del-company");
    }

    public function updateCompany() {
        return view("admin.company.update-company");
    }

    public function listCompany() {
        $companies = Company::all();
        return view('admin.company.list-company', [
            'companies' => $companies
        ]);
    }
}
