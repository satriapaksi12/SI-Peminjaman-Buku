<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_induk');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama_foto')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('role_id')->nullable(); // Kolom role_id harus bertipe unsignedBigInteger
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade'); // Tambahkan foreign key dengan onDelete cascade
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
