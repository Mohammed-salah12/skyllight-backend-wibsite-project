<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropServiceDescriptionIdForeignFromServiceImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_images', function (Blueprint $table) {
            $table->dropForeign('service_images_serviceDescription_id_foreign');
            $table->dropColumn('serviceDescription_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_images', function (Blueprint $table) {
            //
        });
    }
}