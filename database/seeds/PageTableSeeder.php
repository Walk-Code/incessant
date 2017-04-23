<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pages')->truncate();
        $faker = Faker\Factory::create();
        for ($i = 0;$i < 30; $i++){
            App\Models\Page::create([
                'title' =>$faker->sentence,
                'body' =>$faker->paragraphs(6,true),
                'slug' =>join(",",$faker->words(5)),
                'user_id' =>1
            ]);
        }

    }
}
