<?php
/**
 * Created by PhpStorm.
 * User: Benedikt
 * Date: 29.04.2016
 * Time: 22:39
 */

namespace Hackathon\Heatmap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTemperatures extends Migration
{
    public function up()
    {
        Schema::create('heatmap_temperatures', function($table) {
            $table->increments('id');
            $table->integer('heatmap_users_id');
            $table->date("timestamp");
            $table->string("outdoor_temperature_celsius");
            $table->integer("indoor_target_temperature_celsius");
            $table->string("energy_consumption_kwh");
            $table->tinyinteger("online_state");
        });
    }

    public function down()
    {
        Schema::drop('heatmap_temperature');
    }
}