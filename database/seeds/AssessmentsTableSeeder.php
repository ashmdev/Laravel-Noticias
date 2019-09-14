<?php

use Illuminate\Database\Seeder;

class AssessmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Assessment::class,20)->create();

        factory(\App\Assessment::class,300)->create()->each(function (App\Assessment $ass){
            $ass->users()->attach([
                rand(1,5),
                rand(6,14),
                rand(15,20),
            ]);

        });
    }
}
