<?php
/**
 * Created by PhpStorm.
 * User: Benedikt
 * Date: 30.04.2016
 * Time: 00:08
 */

namespace Hackathon\Heatmap\Components;

use Cms\Classes\ComponentBase;

class Map extends ComponentBase
{

    /**
     * Returns information about this component, including name and description.
     */
    public function componentDetails()
    {
        return [
            'name' => 'HeatMap',
            'description' => 'Displays a map.'
        ];
    }

    public function map() {

    }

    public function scores() {

    }

    public function ajax() {

    }
}