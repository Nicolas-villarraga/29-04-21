<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        # code...
        $employees = Employee::orderBy('id','desc')->paginate(10);
        return view('employee.index',compact('employees'));

    }
    public function create ()
    {
        # code...
        return view('employee.create');
    }
    public function store(Request $request)
    {
        # code...
        $employees = Employee::create($request->all());
        return redirect('employees')->whith('status-1','se a creado correctamente');
    }
    public function show($id)
    {
        # code...
        $employees =Employee::find($id);
        return view('employee.show',compact('employees'));
    }
    public function destroy($id)
    {
        # code...
        $employees = Employee::find($id)->delete();
        return redirect('employees')->whith('status-2','se a eliminado correctamente');
    }

    public function edit($id)
    {
        # code...
        $employees = Employee::find($id);
        return view('employee.edit',compact('employees'));
    }

    public function update(Request $request, $id)
    {
        # code...
        $employees =Employee::find($id)->update($request->all());
        return redirect('employees')->with('status-3','Se guardaron los cambios correctamente');
    }
}
