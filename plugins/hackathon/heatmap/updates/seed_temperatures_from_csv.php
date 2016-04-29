<?php
/**
 * Created by PhpStorm.
 * User: Benedikt
 * Date: 29.04.2016
 * Time: 23:09
 */

namespace Hackathon\Heatmap\Updates;

use Seeder;
use Hackathon\Heatmap\Models\Temperature;
use League\Csv\Reader;

class SeedTemperaturesFromCsv extends Seeder
{
    public function run() {
        $files = Storage::files('csv');

        $user = 0;

        foreach($files as $file) {
            $reader = Reader::createFromString($file->get());
            $csvData = $reader->fetchAssoc();

            $dataArray = ['users_id' => $user];
            foreach($csvData as $csvRow) {
                Temperature::create(array_merge($dataArray, $csvRow));
            }
        }
    }
}