<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;

class CheckEmployeeRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $roleId
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $roleId)
    {
      
        $employee = Auth::guard('employee')->user();
        
        if ($employee->role_id == $roleId) {
            return $next($request);
        }

        
        return redirect()->route('admin.customer.index')->with('error', 'Bạn không có quyền truy cập trang này');
    }
}
