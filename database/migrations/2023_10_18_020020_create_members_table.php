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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('handphone', 16)->nullable();
            $table->string('nama');
            $table->text('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->string('hobby')->nullable();
            $table->string('thn_lahir', 4)->nullable();
            $table->string('umur', 4)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
