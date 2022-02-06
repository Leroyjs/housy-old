<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainInfoBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_info_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('info')->nullable();
            $table->string('url_text')->nullable();
            $table->string('url')->nullable();
            $table->boolean('is_shown')->default(true);
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
        Schema::dropIfExists('main_info_blocks');
    }
}
