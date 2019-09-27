<?php

use Illuminate\Database\Seeder;

class mon_hoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $currentTime = date('Y-m-d H:i:s');
        //
        DB::table('mon_hoc')->insert ([
            [
                'maMonHoc'=>'toan',
                'tenMonHoc'=>'Toan',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],[
                'maMonHoc'=>'van',
                'tenMonHoc'=>'Van',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ]
        ]);
    }
}
