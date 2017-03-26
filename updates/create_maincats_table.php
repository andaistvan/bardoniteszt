<?php namespace Arteriaweb\Bardoniteszt\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMaincatsTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_bardoniteszt_maincats', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_bardoniteszt_maincats');
    }
}
