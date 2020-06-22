<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $nomes =[
            'nilson', 'fabiana', 'miguel', 'sarah', 'leide'
        ];

        $rgs =[
            '111111', '22222', '333333', '4444444', '555555'
        ];

        $cpfs =[
            '81066287104', '98325160849', '11122233344', '55566677788', '00011122233356'
        ];

        $celulares =[
            '995022652', '96896647', '96998899', '97778899', '95444466'
        ];

        $emails =[
            'nilson711@gmail.com', 'sarabi@hotmail.com', 'miguel@gmailcom', 'sarahcoelhinha@gmail.com', 'leideauau@gmail.com'
        ];
        $level =[
            '1', '2', '3', '3', '4'
        ];

        for($indice = 0; $indice<count($nomes); $indice++){
            $dados = [
                'nomeUserProtocolo'=>$nomes[$indice],
                'rgUserProtocolo'=>$rgs[$indice],
                'cpfUserProtocolo'=>$cpfs[$indice],
                'celularUserProtocolo'=>$celulares[$indice],
                'emailUserProtocolo'=>$emails[$indice],
                'levelUserProtocolo'=>$level[$indice]

            ];

            DB::table('usersprotocolo')->insert($dados);
        }





    }
}
