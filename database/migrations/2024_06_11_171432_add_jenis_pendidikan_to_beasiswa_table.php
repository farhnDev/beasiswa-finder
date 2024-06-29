<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisPendidikanToBeasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beasiswa', function (Blueprint $table) {
            $table->string('jenis_pendidikan')->after('kontak')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beasiswa', function (Blueprint $table) {
            $table->dropColumn('jenis_pendidikan');
        });
    }
}
