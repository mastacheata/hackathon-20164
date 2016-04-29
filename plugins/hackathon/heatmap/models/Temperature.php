<?php
/**
 * Created by PhpStorm.
 * User: Benedikt
 * Date: 29.04.2016
 * Time: 23:05
 */

namespace Hackathon\Heatmap\Models;

use Model;

class Temperature extends Model
{
    protected $table='heatmap_temperatures';

    public function user() {
        return $this->hasOne('User');
    }
}