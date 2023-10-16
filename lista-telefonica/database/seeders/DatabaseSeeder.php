<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contato;
use App\Models\Endereco;
use App\Models\Telefone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Endereco::factory(2)->create();
         Contato::factory(2)->create();
         Telefone::factory(2)->create();
    }
}
