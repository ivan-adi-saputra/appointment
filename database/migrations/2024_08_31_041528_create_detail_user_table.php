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
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('type_user_id');
            $table->string('contact')->nullable();
            $table->longText('address')->nullable();
            $table->longText('photo')->nullable();
            $table->enum('gender', [1,2])->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('detail_user');
    }
};
