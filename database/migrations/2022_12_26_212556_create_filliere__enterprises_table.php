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
        Schema::create('filliere_enterprises', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("filliere_id");
            $table->unsignedBigInteger("enterprise_id");
            $table->integer("number_place");
            $table->timestamps();
            $table->foreign("enterprise_id")->references("id")->on("enterprises")->onUpdate("restrict")->onDelete("cascade");
            $table->foreign("filliere_id")->references("id")->on("fillieres")->onUpdate("restrict")->onDelete("cascade");
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
