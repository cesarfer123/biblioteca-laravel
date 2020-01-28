<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols=[ 
            "administrador",
            "editor",
            "supervisor"
        ];

        foreach($rols as $key=>$value){

            DB::table('rols')->insert([
                'nombre' => $value,
                "created_at"=>Carbon::now()->format("Y-m-d H:i:s")
            ]);

        }

        
    }
}
