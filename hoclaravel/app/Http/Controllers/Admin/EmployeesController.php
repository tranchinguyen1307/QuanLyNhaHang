<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Employee\StoreEmployeeRequest;
use App\Http\Requests\Admin\Employee\UpdateEmployeeRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

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
        if ($request->has('password')) {
            $validatedData['password'] = Hash::make($request->input('password'));
        }
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

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('employee')->attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('admin/employees'); 
        }

        // Đăng nhập thất bại
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không chính xác',
            'password' => 'Email hoặc mật khẩu không chính xác',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('employee')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
