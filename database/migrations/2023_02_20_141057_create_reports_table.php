<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements("id");
            //$table->foreign("etudiant_id")->references("id")->on("etudiants")->onUpdate("restrict")->onDelete("cascade");
            $table->string("mat1");
            $table->string("mat2")->nullable()->default(null);
            $table->string("report");
            $table->string("filiere");
            $table->string("enterprise");
            $table->string("email");
            $table->string("contact");
            $table->string("report_master");


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
        Schema::dropIfExists('reports');
    }
};
