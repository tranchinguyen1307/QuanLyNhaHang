<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD

=======
use App\Models\Admin\Employee;
use App\Models\Role;
>>>>>>> 2f6ada3 (CRUD người dùng)
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('admin.pages.employees');
=======

        $employees = Employee::orderBy('id', 'asc')->paginate(5);
        $roles = Role::all();
        return view('admin.Modules.Employees.employees', [
            'employees' => $employees,
            'roles' => $roles,
        ]);
>>>>>>> 2f6ada3 (CRUD người dùng)
    }
    public function create()
    {
        return view('admin.pages.create-employees');
    }
    public function edit()
    {
<<<<<<< HEAD
        return view('admin.pages.edit-employees');
=======
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
        $validatedData['status'] = $request->input('status');
        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($request->input('password'));
        } else {
            $validatedData['password'] = $request->input('old_password');
        }
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

            return redirect()->intended('admin/customer'); 
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
>>>>>>> 2f6ada3 (CRUD người dùng)
    }
}
