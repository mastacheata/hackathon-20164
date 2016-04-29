<?php
/**
 * Created by PhpStorm.
 * User: Benedikt
 * Date: 29.04.2016
 * Time: 23:06
 */

namespace Hackathon\Heatmap\Models;

use Model;

class User extends Model
{
    protected $table = 'heatmap_users';

    public function temperatures() {
        $this->hasMany('Temperature');
    }
}