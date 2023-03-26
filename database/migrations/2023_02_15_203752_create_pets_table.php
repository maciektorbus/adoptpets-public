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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            // Stored in years, -1 = unknown age
            $table->tinyInteger("age");
            // Based on ISO/IEC 5218 standard 
            // The four codes are: 0 = Not known; 1 = Male; 2 = Female; 9 = Not applicable.
            $table->tinyInteger("sex");
            $table->tinyText("short_description");
            $table->text("description");
            $table->enum("type", ['dog', 'cat']);
						$table->string("photo")->nullable();
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
        Schema::dropIfExists('pets');
    }
};
