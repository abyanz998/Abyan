<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // faker untuk mengenerate data dummy

      $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 10; $i++){
        
      // insert data ke table pegawai
      DB::table('chef')->insert([
        'nama' => $faker->name,
        'alamat' => $faker->address
      ]);
    }
}
}
