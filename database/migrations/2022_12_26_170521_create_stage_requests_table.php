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
            $table->primary("id");
            $table->string("etudiant_name");
            $table->string("etudiant_mail");
            $table->integer("enterprise_id");
            $table->boolean("is_valid");
            $table->foreign("enterprise_id")->references("id")->on("enterprise")->onDelete("cascade");
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
