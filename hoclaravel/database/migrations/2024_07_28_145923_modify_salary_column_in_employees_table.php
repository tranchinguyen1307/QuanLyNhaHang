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
        Schema::table('employees', function (Blueprint $table) {
            $table->bigInteger('salary')->change();
        });
    }
    
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            // Đảm bảo rằng bạn cung cấp đúng kiểu dữ liệu ban đầu trong hàm down
            $table->decimal('salary', 15, 2)->change(); // hoặc kiểu dữ liệu cũ của bạn
        });
    }
    
};
