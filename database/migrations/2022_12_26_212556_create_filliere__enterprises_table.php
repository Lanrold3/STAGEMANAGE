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
        Schema::create('filliere__enterprises', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->primary("id");
            $table->integer("filliere_id");
            $table->integer("enterprise_id");
            $table->integer("number_place");
            $table->timestamps();
            $table->foreign("filliere_id")->references("id")->on("filliere")->onUpdate("restrict")->onDelete("cascade");
            $table->foreign("enterprise_id")->references("id")->on("enterprise")->onUpdate("restrict")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filliere__enterprises');
    }
};
