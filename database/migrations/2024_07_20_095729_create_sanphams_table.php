<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('hinh')->nullable();
            $table->double('gia');
            $table->text('mota');
            $table->integer('iddm')->unsigned()->nullable();
            $table->foreign('iddm')
                ->references('id')->on('danhmucs')
//                ->onDelete('cascade');
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanphams');
    }
};
