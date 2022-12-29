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
        Schema::create('fillieres', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->primary("id");
            $table->string("name");
            $table->integer("departement_id");
            $table->foreign("departement_id")->references("id")->on("departement")->onDelete("cascade")->onUpdate("restrict");
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
        Schema::dropIfExists('fillieres');
    }
};
