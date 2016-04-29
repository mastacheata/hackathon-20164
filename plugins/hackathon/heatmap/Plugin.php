<?php
/**
 * Created by PhpStorm.
 * User: Benedikt
 * Date: 29.04.2016
 * Time: 22:23
 */

namespace Hackathon\Heatmap;

namespace Acme\Blog;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Heatmap',
            'description' => 'Maps heat and power consumption of intelligent Viessmann boilers',
            'author' => 'Hackathon',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Hackathon\Heatmap\Components\Map' => 'heatMap'
        ];
    }
}