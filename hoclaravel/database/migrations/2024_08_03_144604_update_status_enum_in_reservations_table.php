<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Đảm bảo tất cả các giá trị không hợp lệ được cập nhật
        DB::statement("UPDATE reservations SET status = 'Chưa thanh toán cọc' WHERE status NOT IN ('Chưa thanh toán cọc', 'Đã thanh toán cọc', 'Đã hủy', 'Thanh toán thành công')");

        Schema::table('reservations', function (Blueprint $table) {
            $table->enum('status', [
                'Chưa thanh toán cọc',
                'Đã thanh toán cọc',
                'Đã hủy',
                'Thanh toán thành công',
            ])->default('Chưa thanh toán cọc')->change();
        });
    }

    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->enum('status', [
                'Chưa thanh toán cọc',
                'Chưa xác nhận',
                'Đã xác nhận',
                'Đã thanh toán',
                'Đã hủy',
            ])->default('Chưa thanh toán cọc')->change();
        });
    }
};
