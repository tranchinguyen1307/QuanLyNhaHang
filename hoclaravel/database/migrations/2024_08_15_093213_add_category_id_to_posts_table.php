<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->after('id'); // Thêm cột category_id
            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            // Thiết lập khóa ngoại
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Xóa khóa ngoại
            $table->dropColumn('category_id'); // Xóa cột category_id
        });
    }
}

