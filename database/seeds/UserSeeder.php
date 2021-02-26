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
        'kategori' => 'dalaman',
        'name' => 'NORISWANI BINTI ZA\'ZLDIN',
        'kerakyatan' => 'Warganegara',
        'kad_pengenalan' => '840906146164',
        'tarikh_lahir' => '1984/09/06',
        'tempat_lahir' => 'KUALA LUMPUR',
        'jawatan' => 'PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT',
        'bahagian' => 'BAHAGIAN PENGURUSAN MAKLUMAT',
        'no_tel_rumah' => '0326164488',
        'no_tel_bimbit' => '0123168913',
        'email' => 'noris@forestry.gov.my',
        'password' => $hashed_random_password,
        'status'=> true,
        'role' => '4',
        ]
      );

      DB::table('users')-> insert(
        [
        'kategori' => 'dalaman',
        'name' => 'PS - AHMAD RAUF',
        'kerakyatan' => 'Warganegara',
        'kad_pengenalan' => '900102034568',
        'tarikh_lahir' => '1990/1/1',
        'tempat_lahir' => 'KUANTAN',
        'jawatan' => 'PENTADBIR SISTEM',
        'bahagian' => 'TEKNOLOGI MAKLUMAT',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'email' => 'PentadbirSistem@gmail.com',
        'password' => $hashed_random_password,
        'status'=> true,
        'role' => '0',
        ]
      );

      DB::table('users')-> insert(
        [
        'kategori' => 'dalaman',
        'name' => 'P1 - AHMAD JUNAIDI',
        'kerakyatan' => 'Warganegara',
        'kad_pengenalan' => '900102034569',
        'tarikh_lahir' => '1990/1/1',
        'tempat_lahir' => 'KUANTAN',
        'jawatan' => 'PENYOKONG 1',
        'bahagian' => 'TEKNOLOGI MAKLUMAT',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'email' => 'Penyokong1@gmail.com',
        'password' => $hashed_random_password,
        'status'=> true,
        'role' => '1',
        ]
      );

      DB::table('users')-> insert(
        [
        'kategori' => 'dalaman',
        'name' => 'P2 - MOHAMMAD ALI',
        'kerakyatan' => 'Warganegara',
        'kad_pengenalan' => '900102034570',
        'tarikh_lahir' => '1990/1/1',
        'tempat_lahir' => 'KUANTAN',
        'jawatan' => 'PENYOKONG 2',
        'bahagian' => 'TEKNOLOGI MAKLUMAT',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'email' => 'Penyokong2@gmail.com',
        'password' => $hashed_random_password,
        'status'=> true,
        'role' => '2',
        ]
      );

      DB::table('users')-> insert(
        [
        'kategori' => 'dalaman',
        'name' => 'KP - SITI SARAH',
        'kerakyatan' => 'Warganegara',
        'kad_pengenalan' => '900102034571',
        'tarikh_lahir' => '1990/1/1',
        'tempat_lahir' => 'KUANTAN',
        'jawatan' => 'KETUA PENGARAH',
        'bahagian' => 'PENTADBIRAN',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
        'email' => 'KetuaPengarah@gmail.com',
        'password' => $hashed_random_password,
        'status'=> true,
        'role' => '3',
        ]
      );

      DB::table('users')-> insert(
        [
        'name' => 'U1 - Siti Aminah',
        'email' => 'User1@gmail.com',
        'password' => $hashed_random_password,
        'role' => '5',
        'kategori' => 'kementerian',
        'kad_pengenalan' => '900102034572',
        'kerakyatan' => 'Warganegara',
        'poskod' => '40150',
        'negeri' => 'Selangor',
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
        'kerakyatan' => 'Warganegara',
        'tarikh_lahir' => '1990/1/02',
        'bahagian' => 'IT Department',
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
