<?php
/**
 * Created by PhpStorm.
 * User: Benedikt
 * Date: 29.04.2016
 * Time: 22:34
 */

namespace Hackathon\Heatmap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        Schema::create('heatmap_users', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->integer('deviceId');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('heatmap_users');
    }
}