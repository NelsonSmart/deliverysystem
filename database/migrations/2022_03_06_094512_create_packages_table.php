<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('packageName');
            $table->string('customerNumber');
            $table->string('customerAddress');
            $table->string('deliveryEmail');
            $table->string('deliveryName');
            $table->string('deliveryNumber');
            $table->string('deliveryAddress');
            $table->string('deliveryState');
            $table->string('deliveryCountry');
            $table->integer('packageNumber');
            $table->float('packageWeight');
            $table->string('trackNumber')->unique();
        
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
        Schema::dropIfExists('packages');
    }
}
