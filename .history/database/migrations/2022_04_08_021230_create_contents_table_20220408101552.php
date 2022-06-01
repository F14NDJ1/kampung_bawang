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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('name_content');
            $table->string('url');
            $table->text('content');
            $table->string('thumbnail');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('content_kind_id');
            $table->timestamps();

            $table->unique(['user_id', 'content_kind_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('content_kind_id')->references('id')->on('content_kind')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
};
