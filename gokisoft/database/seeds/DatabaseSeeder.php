
<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     * document : https://laravel.com/docs/5.8/seeding
     * @return void
     */
    public function run() {
        //lệnh dưới để tạo chạy
        // $this->call(UsersTableSeeder::class);
//        $this->call(products::class);
//        $currentTime = date('Y-m-d H:i:s');
//        DB::table('students')->insert([
//            'rollno'     => '20060780',
//            'fullname'   => 'TRAN VAN DIEP',
//            'email'      => 'tranvandiep.it@gmail.com',
//            'address'    => 'Nam Dinh',
//            'age'        => 32,
//            'created_at' => $currentTime,
//            'updated_at' => $currentTime
//        ]);

//        $this->call(sinh_vien::class);
//        $this->call(mon_hoc::class);
        $this->call(bang_diem::class);

    }
}