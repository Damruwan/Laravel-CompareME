<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('image_link')->nullable();
            $table->string('brand');
            $table->string('model');
            $table->string('technology')->nullable();
            $table->string('announced')->nullable();
            $table->string('status')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->string('sim')->nullable();
            $table->string('type')->nullable();
            $table->string('size')->nullable();
            $table->string('resolution')->nullable();
            $table->string('multitouch')->nullable();
            $table->string('os')->nullable();
            $table->string('chipset')->nullable();
            $table->string('cpu')->nullable();
            $table->string('gpu')->nullable();
            $table->string('card_slot')->nullable();
            $table->string('internal')->nullable();
            $table->string('primary')->nullable();
            $table->string('features')->nullable();
            $table->string('video')->nullable();
            $table->string('secondary')->nullable();
            $table->string('alert_types')->nullable();
            $table->string('loudspeaker')->nullable();
            $table->string('audio_jack')->nullable();
            $table->string('wlan')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('gps')->nullable();
            $table->string('nfc')->nullable();
            $table->string('radio')->nullable();
            $table->string('usb')->nullable();
            $table->string('sensors')->nullable();
            $table->string('messaging')->nullable();
            $table->string('browser')->nullable();
            $table->string('colors')->nullable();
            $table->decimal('price',8,2)->default(0);
            $table->string('battery')->nullable();
            //laptops
            $table->string('optical_drive')->nullable();
            $table->string('web_cam')->nullable();
            $table->string('pointing_device')->nullable();
            $table->string('audio')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
