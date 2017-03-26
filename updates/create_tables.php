<?php namespace Arteriaweb\Bardoniteszt\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTables extends Migration
{
    public function up()
    {
        // product ------------------------
        Schema::create('arteriaweb_bardoniteszt_products', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('maincat_id')->unsigned();
            $table->string('product_title_hu');
            $table->string('product_title_en')->nullable();
            $table->text('description_hu')->nullable();
            $table->text('description_en')->nullable();
            $table->decimal('price', 8)->nullable()->default(null);
            $table->boolean('showroom')->default(false);
            $table->string('slug')->nullable();

            $table->timestamps();
        });

        // main category ------------------------
        Schema::create('arteriaweb_bardoniteszt_maincats', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cat_title');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_bardoniteszt_products');
        Schema::dropIfExists('arteriaweb_bardoniteszt_maincats');
    }
}
