<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
    	foreach (range(1, 10) as $index) {
            DB::table('posts')->insert([
                'author_id' => 1,
                'title' => $faker->name,
                'content' => $faker->text,
                'is_draft' => 0
            ]);
	    }
    }
}
