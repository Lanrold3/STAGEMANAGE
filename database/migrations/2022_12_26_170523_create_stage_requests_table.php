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
        Schema::create('stage_requests', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("mat1");
            $table->string("mat2");
            $table->string("mail1");
            $table->string("mail2");
            //$table->unsignedbigInteger("enterprise_id");
            $table->boolean("is_valid")->default(0);
            //$table->foreign("enterprise_id")->references("id")->on("enterprises")->onDelete("cascade")->onUpdate("restrict");
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
        Schema::dropIfExists('stage_requests');
    }
};
