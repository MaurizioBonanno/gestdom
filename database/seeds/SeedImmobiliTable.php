<?php

use App\Models\Immobili;
use Illuminate\Database\Seeder;

class SeedImmobiliTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Immobili::truncate();
        factory(App\Models\Immobili::class,5)->create();
    }
}
