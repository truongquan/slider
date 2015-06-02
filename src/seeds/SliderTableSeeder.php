<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use QuanDT\Slider\models\Slider;

class SliderTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Slider::create([
            'name' => 'Main Single slide',
            'navigation' => true,
            'slideSpeed' => 300,
            'paginationSpeed' => 400,
            'singleItem' => true,
        ]);
    }

}
