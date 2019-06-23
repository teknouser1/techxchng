<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->default(0);
            $table->unsignedBigInteger('admin_id')->default(0);
            $table->string('title');
            $table->longText('summary')->nullable();
            $table->string('category')->nullable();
            $table->string('operation_of_technology')->nullable();
            $table->string('business_case')->nullable();
            $table->string('applicability_domain')->nullable();
            $table->string('technology_readiness')->nullable();
            $table->string('technology_name')->nullable();
            $table->string('patended_status')->nullable();
            $table->longText('brief')->nullable();
            $table->string('upload_main_image')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('technologies');
    }
}
