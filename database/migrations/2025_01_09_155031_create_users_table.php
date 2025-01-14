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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // 主キー
            $table->string('name', 15);
            $table->string('email', 150)->unique();
            $table->string('tel', 12);
            $table->string('post', 7);
            $table->string('address', 30);
            $table->boolean('is_admin')->default(false);
            $table->string('password', 300);
            $table->timestamps(); // created_at と updated_at を追加
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
