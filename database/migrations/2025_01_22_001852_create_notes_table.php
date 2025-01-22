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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            //string is a column type, 255 is the length of the column
            $table->string('title', 255);
            $table->string('description', 255)->nullable();
            $table->boolean('is_done')->default(false);

            //other values
            /* $table->integer('example_integer')->nullable();
            $table->unsignedInteger('example_unsigned_integer')->nullable(); // only positive numbers
            $table->bigInteger('example_big_integer');
            $table->float('example_float')->nullable();
            $table->unsignedBigInteger('example_unsigned_big_integer');
            $table->text('example_text');
            $table->float('example_float')->nullable();
            $table->double('example_double')->nullable();
            $table->enum('state', ['DRAFT', 'PUBLISHED', 'DELETED']); */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
