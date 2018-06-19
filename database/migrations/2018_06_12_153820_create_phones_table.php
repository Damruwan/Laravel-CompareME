<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('phonepicture');
            $table->string('model');
            $table->string('technology');
            $table->string('announced');
            $table->string('status');
            $table->string('dimensions');
            $table->string('weight');
            $table->string('sim');
            $table->string('displayType');
            $table->string('displaySize');
            $table->string('displayResolution');
            $table->string('multitouch');
            $table->string('os');
            $table->string('chipset');
            $table->string('cpu');
            $table->string('gpu');
            $table->string('cardslot');
            $table->string('internalMemory');
            $table->string('primaryCamera');
            $table->string('cameraFeatures');
            $table->string('video');
            $table->string('secondaryCamera');
            $table->string('alertTypes');
            $table->string('loudspeaker');
            $table->string('audiojack');
            $table->string('wlan');
            $table->string('bluetooth');
            $table->string('gps');
            $table->string('nfc');
            $table->string('radio');
            $table->string('usb');
            $table->string('sensors');
            $table->string('messaging');
            $table->string('browser');
            $table->string('battery');
            $table->string('colors');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
}
