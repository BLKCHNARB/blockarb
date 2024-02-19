<?php

namespace Database\Seeders;

use App\Models\Token;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Token::create([
            'name' => 'USDT'
        ]);

        Token::create([
            'name' => 'Bitcoin'
        ]);

        Token::create([
            'name' => 'Ethereum'
        ]);
    }
}
