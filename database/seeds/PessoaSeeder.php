<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pessoas')->truncate();
      $faker = Faker::create();

      foreach (range(1,100) as $i)
          \App\Pessoa::create([
              'nome_RazaoSocial' => $faker->name,
              'apelido_nomeFantasia' => $faker->name,
              'cliente' => 'N',
              'proprietario' => 'S',
              'interessado' => 'N',
              'corretor' => 'N',
              'outro' => 'N',
              'tipo' => 'F'
          ]);
    }
}
