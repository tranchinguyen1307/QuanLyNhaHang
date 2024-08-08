<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoteToReservationsTable extends Migration
{
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Thêm cột `note` kiểu text
            $table->text('note')->nullable()->after('deposit');
        });
    }

    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Xóa cột `note` nếu rollback
            $table->dropColumn('note');
        });
    }
}
