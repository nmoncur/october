<?php namespace Catapult\Episodes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCatapultEpisodesList extends Migration
{
    public function up()
    {
        Schema::create('catapult_episodes_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('episode_id');
            $table->string('title');
            $table->string('short_desc')->nullable();
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('catapult_episodes_list');
    }
}
