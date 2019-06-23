<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileFieldInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('designation')->nullable();
            $table->string('company_name')->nullable();
            $table->string('professional_email')->nullable();
            $table->string('contact_number')->nullable();
            $table->longText('breif_intro')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('designation');
            $table->dropColumn('company_name');
            $table->dropColumn('professional_email');
            $table->dropColumn('contact_number');
            $table->dropColumn('breif_intro');
        });
    }
}
