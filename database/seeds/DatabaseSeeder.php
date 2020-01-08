<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      $this->call([PessoaSeeder::class,
                   UsuarioSeeder::class]);
    }
}
