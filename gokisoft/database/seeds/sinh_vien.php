<?php

use Illuminate\Database\Seeder;

class sinh_vien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$currentTime = date('Y-m-d H:i:s');
        //
        DB::table('sinh_vien')->insert([
            [
                'rollNo'=>1,
                'ten'=>'A',
                'tuoi'=>12,
                'diaChi'=>'Ha Noi',
                'email'=>'abc@123',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],[
                'rollNo'=>2,
                'ten'=>'B',
                'tuoi'=>12,
                'diaChi'=>'Thai Binh',
                'email'=>'abc@123',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ]
        ]);
    }
}
