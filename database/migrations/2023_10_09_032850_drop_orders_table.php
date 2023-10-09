<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class DropOrdersTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('orders');
    }

    public function down()
    {
        // Tambahkan kembali kode migrasi jika diperlukan
    }
}

