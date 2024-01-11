<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_classes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('class_id')->unique();
            $table->string('class_description');
            $table->integer('asset_life');
            $table->string('account_description');
            $table->string('category_description');
            $table->string('account_code');
            $table->string('category_code');
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
        Schema::dropIfExists('asset_classes');
    }
}
