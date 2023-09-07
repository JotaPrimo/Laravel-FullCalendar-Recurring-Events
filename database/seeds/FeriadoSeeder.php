<?php

use App\Feriado;
use Illuminate\Database\Seeder;

class FeriadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feriados = [
            [
                'data' => '2023-09-08',
                'nome' => 'Teste Amanha'
            ]
            ,[
                'data' => '2023-09-07',
                'nome' => 'Independência do Brasil'
            ],
            [
                'data' => '2023-09-09',
                'nome' => 'Nossa Senhora Aparecida'
            ],
            [
                'data' => '2023-09-10',
                'nome' => 'Finados'
            ],
            [
                'data' => '2023-09-11',
                'nome' => 'Proclamação da República'
            ],
            [
                'data' => '2023-09-12',
                'nome' => 'Dia da Consciência Negra'
            ],
            [
                'data' => '2023-09-13',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-14',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-15',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-16',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-17',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-18',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-19',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-20',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-21',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-22',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-23',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-24',
                'nome' => 'Natal'
            ],
            [
                'data' => '2023-09-25',
                'nome' => 'Natal'
            ]

        ];

        foreach ($feriados as $feriado) {
           Feriado::create([
            'data' => $feriado['data'],
            'nome' => $feriado['nome'],
           ]);
        }
    }
}
