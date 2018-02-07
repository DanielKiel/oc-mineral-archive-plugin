<?php namespace Dionyseos\MineralArchive\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMineralsTable extends Migration
{
    public function up()
    {
        Schema::create('dionyseos_mineralarchive_minerals', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');

            $table->string('color');
            $table->string('hardness')->nullable();
            $table->float('density_from');
            $table->float('density_to');
            $table->string('chemical_formula');
            $table->string('typicality');
            $table->string('crystal_system');
            $table->string('streal_colour');
            $table->string('opacity');
            $table->string('lustre');
            $table->string('ima_state');
            $table->string('naming');
            $table->string('synonyms');

            $table->longText('description');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dionyseos_mineralarchive_minerals');
    }
}
