<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_account', function (Blueprint $table) {
            $table->id('account_id');
            $table->integer('user_kbn');
            $table->string('mail')->unique();
            $table->string('password');
            $table->string('family_name', 10);
            $table->string('first_name', 10);
            $table->string('tel1', 5);
            $table->string('tel2', 4);
            $table->string('tel3', 4);
            $table->string('zip', 7)->nullable();
            $table->string('address', 500)->nullable();
            $table->timestamps();
            $table->timestamp('last_login_timestamp')->nullable();
            $table->timestamp('upd_password_timestamp');
            $table->integer('del_flg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_account');
    }
};
