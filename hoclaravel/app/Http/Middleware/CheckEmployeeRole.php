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
        // Kiểm tra xác thực người dùng
        if (!Auth::guard('employee')->check() && $request->is('admin/*')) {
            return redirect('/admin/login');
        }

        // Nếu đã đăng nhập, kiểm tra quyền truy cập
        $employee = Auth::guard('employee')->user();
        
        if ($employee->role_id == $roleId) {
            return $next($request);
        }

        // Nếu không có quyền truy cập, trả về lỗi hoặc chuyển hướng
        return response()->json(['message' => 'Forbidden'], 403);
    }
}
