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
    Schema::table('transaksis', function (Blueprint $table) {
        $table->string('status', 20)->change(); // Sesuaikan panjang sesuai kebutuhan
    });
}

public function down()
{
    Schema::table('transaksis', function (Blueprint $table) {
        $table->string('status', 15)->change(); // Kembalikan ke nilai sebelumnya
    });
}
};
