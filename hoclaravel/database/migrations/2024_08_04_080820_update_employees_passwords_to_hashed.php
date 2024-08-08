<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;

class UpdateEmployeesPasswordsToHashed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Thay đổi kiểu dữ liệu cột password từ varchar nếu cần
        Schema::table('employees', function (Blueprint $table) {
            $table->string('password', 255)->change();
        });

        // Mã hóa mật khẩu hiện có
        Employee::all()->each(function ($employee) {
            if (strlen($employee->password) < 60) { // Kiểm tra nếu mật khẩu chưa được mã hóa
                $employee->password = Hash::make($employee->password);
                $employee->save();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Đổi kiểu dữ liệu cột password về dạng varchar nếu cần
        Schema::table('employees', function (Blueprint $table) {
            $table->string('password')->change();
        });
    }
}
