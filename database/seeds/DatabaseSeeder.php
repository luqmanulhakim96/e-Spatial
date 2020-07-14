<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UsersTableSeeder::class);
      //   DB::table('senarai_hargas')-> delete();
      //   DB::table('senarai_hargas')-> insert(
      //   [
      //     'id' => 1,
      //     'jenis_data' => 'digitals',
      //     'saiz_data' => '120',
      //     'negeri' => 'selangor',
      //     'tahun' => '2012',
      //     'harga_asas' => '1200.00',
      //     'jumlah_harga' => '9000.99',
      //     'created_at' => '2020/1/1',
      //     'updated_at' => '2020/1/1',
      //   ],[
      //     'id' => 2,
      //     'jenis_data' => 'kertas',
      //     'saiz_data' => '360',
      //     'negeri' => 'kedah',
      //     'tahun' => '1967',
      //     'harga_asas' => '45.00',
      //     'jumlah_harga' => '200.99',
      //     'created_at' => '2020/1/1',
      //     'updated_at' => '2020/1/1',
      //   ]
      // );
      $hashed_random_password = Hash::make("1234567890");

      DB::table('users')-> delete();
      DB::table('users')-> insert(
        [
        'id' => 1,
        'name' => 'Luqman',
        'email' => 'hakim9608@gmail.com',
        'password' => $hashed_random_password,
        'role' => '0',
        'kategori' => 'dalaman',
        'kad_pengenalan' => '960813065687',
        'kerakyatan' => 'bumiputera',
        'tarikh_lahir' => '1997/1/28',
        'tempat_lahir' => 'Kuantan',
        'jawatan' => 'Pen. Ketua Pengarah',
        'alamat_kediaman' => 'Shah Alam',
        'nama_kementerian' => 'KPM',
        'alamat_kementerian' => 'Putrajaya',
        'jenis_perniagaan' => 'Kesihantan',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'status'=> true
        ]
      );
    }
}
