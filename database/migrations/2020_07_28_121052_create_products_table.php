<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
          //Define product tbls columuns
          $table->increments('id');
          $table->string('name', 100);
          $table->text('description')->nullable();
          $table->float('price');
         /*  $table->dateTime('created_at');
          $table->dateTime('update_at'); you can timestamps functions instead*/
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
        Schema::dropIfExists('products');
    }
}
