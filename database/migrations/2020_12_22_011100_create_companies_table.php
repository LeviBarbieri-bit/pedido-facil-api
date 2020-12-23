<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 200);
            $table->string('fantasy_name', 200);
            $table->string('phone_number', 30)->nullable();
            $table->string('email', 100);
            $table->string('cnpj', 30)->nullable();
            $table->string('address', 200);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('country', 100);
            $table->string('number', 30);
            $table->string('site', 100);
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
        Schema::dropIfExists('companies');
    }
}
