<?php

use App\Models\News;
use Illuminate\Database\Seeder;

class SeddNewsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        News::truncate();
        factory(App\Models\News::class,10)->create();
    }
}
