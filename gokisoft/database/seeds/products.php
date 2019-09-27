<?php

use Illuminate\Database\Seeder;

class products extends Seeder
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
        DB::table('products')->insert([
            'title' => 'Ao',
            'price' => 20000,
            'sale' => 10000,
            'image' =>'anh',
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        ]);
    }
}
