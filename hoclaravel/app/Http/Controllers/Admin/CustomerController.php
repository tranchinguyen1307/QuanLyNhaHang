<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customer;
use App\Http\Requests\Admin\Customer\StoreCustomerRequest;
use App\Http\Requests\Admin\Customer\UpdateCustomerRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::orderBy('id', 'asc')->paginate(5);
        return view('admin.modules.Customer.customers',[
            'customers' => $customer
        ]);
    }
    public function create()
    {
        return view('admin.modules.Customer.create-customer');
    }
    public function edit($id)
    {
        $customer = Customer::where('id',$id)->first();
        return view('admin.modules.Customer.edit-customer',[
            'customer' => $customer
        ]);
    }

    public function store(StoreCustomerRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->has('password')) {
            $validatedData['password'] = Hash::make($request->input('password'));
        }
        $customer = Customer::create($validatedData);
        return redirect()->route('admin.customer.index')->with('success', 'Thêm khách hàng thành công.');
    }

    public function destroy($id)
    {
        $employee = Customer::findOrFail($id);
        $employee->delete();
        return redirect()->route('admin.customer.index')->with('success', 'Xóa khách hàng thành công.');
    }
    public function update(UpdateCustomerRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $validatedData = $request->validated();
        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($request->input('password'));
        } else {
            $validatedData['password'] = $request->input('old_password');
        }
        $customer->update($validatedData);
        return redirect()->route('admin.customer.index')->with('success', 'Cập nhật khách hàng thành công.');
    }
}
