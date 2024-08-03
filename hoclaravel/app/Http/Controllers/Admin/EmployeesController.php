<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Employee\StoreEmployeeRequest;
use App\Http\Requests\Admin\Employee\UpdateEmployeeRequest;

class EmployeesController extends Controller
{
    public function index()
    {

        $employees = Employee::orderBy('id', 'asc')->get();
        $roles = Role::all();
        return view('admin.Modules.Employees.employees', [
            'employees' => $employees,
            'roles' => $roles,
        ]);
    }


    public function create()
    {
        $roles = Role::orderBy('id', 'asc')->get();
        return view('admin.Modules.Employees.create-employees', [
            'roles' => $roles,
        ]);
    }


    public function edit($id)
    {
        $employees = Employee::where('id', $id)->get();
        $roles = Role::all();
        return view('admin.Modules.Employees.edit-employees', [
            'employees' => $employees,
            'roles' => $roles,
        ]);
    }

    public function update(UpdateEmployeeRequest $request, $id)
    {
        $validatedData = $request->validated();
        $validatedData['img'] = $request->input('img');
        $employee = Employee::findOrFail($id);
        $employee->update($validatedData);

        return redirect()->route('admin.employees.index')->with('success', 'Cập nhật thông tin thành công.');
    }


    public function store(StoreEmployeeRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['img'] = $request->input('img');
        $employee = Employee::create($validatedData);
        return redirect()->route('admin.employees.index')->with('success', 'Thêm nhân viên thành công.');
    }


    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('admin.employees.index')->with('success', 'Xóa nhân viên thành công.');
    }
}
