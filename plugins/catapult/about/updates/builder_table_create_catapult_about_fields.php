<?php namespace Catapult\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCatapultAboutFields extends Migration
{
    public function up()
    {
        Schema::create('catapult_about_fields', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('image_url');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('catapult_about_fields');
    }
}
