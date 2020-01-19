<?php

use App\Models\Tipologie;
use Illuminate\Database\Seeder;

class SeddTipologieTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Tipologie::truncate();
        factory(App\Models\Tipologie::class,5)->create();
    }
}
