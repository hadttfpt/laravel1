<?php

use Illuminate\Database\Seeder;

class bang_diem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = date('Y-m-d H:i:s');
        //
        DB::table('bang_diem')->insert ([
            [
                'maMonHoc'=>'toan',
                'rollNo'=>1,
                'diem'=>8,
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],[
                'maMonHoc'=>'toan',
                'rollNo'=>2,
                'diem'=>9,
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ]
        ]);
    }
}
