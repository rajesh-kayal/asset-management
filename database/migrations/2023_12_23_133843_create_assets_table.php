<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fixed_asset_id')->nullable();
            $table->string('status');
            $table->string('asset_description');
            $table->string('asset_models');
            $table->string('asset_vendor');
            $table->string('asset_manufacturing');
            $table->string('department_code');
            $table->string('room_no');
            $table->string('location');
            $table->integer('quantity');
            $table->date('acquisition_date');
            $table->decimal('original_cost', 10, 2);
            $table->date('depreciation_beg_date');
            $table->string('account_number');
            $table->string('life');
            $table->decimal('replacement_value', 10, 2);
            $table->decimal('depreciation_amount', 10, 2);
            $table->string('invoice')->nullable(); // Nullable as it might not be present for all assets
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
        Schema::dropIfExists('assets');
    }
}
