<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    //
    public function index()
    {
        # code...
        $companies = Company::all();
        return view('company.index',compact('companies'));

    }
    public function create ()
    {
        # code...
        return view('company.create');
    }
    public function store(Request $request)
    {
        # code...
        $companies = Company::create($request->all());
        return redirect('companies')->whith('status-1','se a creado correctamente');
    }
    public function show($id)
    {
        # code...
        $companies =Company::find($id);
        return view('company.show',compact('companies'));
    }
    public function destroy($id)
    {
        # code...
        $companies = Company::find($id)->delete();
        return redirect('companies')->whith('status-2','se a eliminado correctamente');
    }

    public function edit($id)
    {
        # code...
        $companies = Company::find($id);
        return view('company.edit',compact('companies'));
    }

    public function update(Request $request, $id)
    {
        # code...
        $companies =Company::find($id)->update($request->all());
        return redirect('companies')->with('status-3','Se guardaron los cambios correctamente');
    }
}