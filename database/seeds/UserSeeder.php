<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $hashed_random_password = Hash::make("1234567890");

      DB::table('users')-> delete();
      DB::table('users')-> insert(
        [
        'name' => 'SuperAdmin',
        'email' => 'SuperAdmin@gmail.com',
        'password' => $hashed_random_password,
        'role' => '4',
        'kategori' => 'dalaman',
        'kad_pengenalan' => '900102034567',
        'kerakyatan' => 'bumiputera',
        'tarikh_lahir' => '1990/1/02',
        'tempat_lahir' => 'Kuantan',
        'jawatan' => 'SuperAdmin',
        'alamat_kediaman' => 'Shah Alam',
        'nama_kementerian' => 'KPM',
        'alamat_kementerian' => 'Putrajaya',
        'jenis_perniagaan' => 'Kesihantan',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'status'=> true
        ]
      );
      DB::table('users')-> insert(
        [
        'name' => 'PS - Ahmad Rauf',
        'email' => 'PentadbirSistem@gmail.com',
        'password' => $hashed_random_password,
        'role' => '0',
        'kategori' => 'dalaman',
        'kad_pengenalan' => '900102034568',
        'kerakyatan' => 'bumiputera',
        'tarikh_lahir' => '1990/1/02',
        'tempat_lahir' => 'Kuantan',
        'jawatan' => 'Pentadbir Sistem',
        'alamat_kediaman' => 'Shah Alam',
        'nama_kementerian' => 'KPM',
        'alamat_kementerian' => 'Putrajaya',
        'jenis_perniagaan' => 'Kesihantan',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'status'=> true
        ]
      );
      DB::table('users')-> insert(
        [
        'name' => 'P1 - Ahmad Junaidi',
        'email' => 'Penyokong1@gmail.com',
        'password' => $hashed_random_password,
        'role' => '1',
        'kategori' => 'dalaman',
        'kad_pengenalan' => '900102034569',
        'kerakyatan' => 'bumiputera',
        'tarikh_lahir' => '1990/1/02',
        'tempat_lahir' => 'Kuantan',
        'jawatan' => 'Pentadbir Sistem',
        'alamat_kediaman' => 'Shah Alam',
        'nama_kementerian' => 'KPM',
        'alamat_kementerian' => 'Putrajaya',
        'jenis_perniagaan' => 'Kesihantan',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'status'=> true
        ]
      );
      DB::table('users')-> insert(
        [
        'name' => 'P2 - Mohd Ali',
        'email' => 'Penyokong2@gmail.com',
        'password' => $hashed_random_password,
        'role' => '2',
        'kategori' => 'dalaman',
        'kad_pengenalan' => '900102034570',
        'kerakyatan' => 'bumiputera',
        'tarikh_lahir' => '1990/1/02',
        'tempat_lahir' => 'Kuantan',
        'jawatan' => 'Pentadbir Sistem',
        'alamat_kediaman' => 'Shah Alam',
        'nama_kementerian' => 'KPM',
        'alamat_kementerian' => 'Putrajaya',
        'jenis_perniagaan' => 'Kesihantan',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'status'=> true
        ]
      );
      DB::table('users')-> insert(
        [
        'name' => 'KP - Siti Sarah',
        'email' => 'KetuaPengarah@gmail.com',
        'password' => $hashed_random_password,
        'role' => '3',
        'kategori' => 'dalaman',
        'kad_pengenalan' => '900102034571',
        'kerakyatan' => 'bumiputera',
        'tarikh_lahir' => '1990/1/02',
        'tempat_lahir' => 'Kuantan',
        'jawatan' => 'Pentadbir Sistem',
        'alamat_kediaman' => 'Shah Alam',
        'nama_kementerian' => 'KPM',
        'alamat_kementerian' => 'Putrajaya',
        'jenis_perniagaan' => 'Kesihantan',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'status'=> true
        ]
      );
      DB::table('users')-> insert(
        [
        'name' => 'U1 - Siti Aminah',
        'email' => 'User1@gmail.com',
        'password' => $hashed_random_password,
        'role' => '5',
        'kategori' => 'dalaman',
        'kad_pengenalan' => '900102034572',
        'kerakyatan' => 'bumiputera',
        'tarikh_lahir' => '1990/1/02',
        'tempat_lahir' => 'Kuantan',
        'jawatan' => 'Pentadbir Sistem',
        'alamat_kediaman' => 'Shah Alam',
        'nama_kementerian' => 'KPM',
        'alamat_kementerian' => 'Putrajaya',
        'jenis_perniagaan' => 'Kesihantan',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'status'=> true
        ]
      );
      DB::table('users')-> insert(
        [
        'name' => 'U2 - Nurul Aminah',
        'email' => 'User2@gmail.com',
        'password' => $hashed_random_password,
        'role' => '5',
        'kategori' => 'dalaman',
        'kad_pengenalan' => '900102034573',
        'kerakyatan' => 'bumiputera',
        'tarikh_lahir' => '1990/1/02',
        'tempat_lahir' => 'Kuantan',
        'jawatan' => 'Pentadbir Sistem',
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
