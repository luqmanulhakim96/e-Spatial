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

      // DB::table('users')-> insert(
      //   [
      //   'kategori' => 'dalaman',
      //   'name' => 'PS - AHMAD RAUF',
      //   'kerakyatan' => 'Warganegara',
      //   'kad_pengenalan' => '900102034568',
      //   'tarikh_lahir' => '1990/1/1',
      //   'tempat_lahir' => 'KUANTAN',
      //   'jawatan' => 'PENTADBIR SISTEM',
      //   'bahagian' => 'TEKNOLOGI MAKLUMAT',
      //   'no_tel_rumah' => '035684259',
      //   'no_tel_bimbit' => '01284593214',
      //   'email' => 'PentadbirSistem@gmail.com',
      //   'password' => $hashed_random_password,
      //   'status'=> true,
      //   'role' => '0',
      //   ]
      // );

      DB::table('users')-> insert(
        [
        'kategori' => 'dalaman',
        'name' => 'MAZURAA BINTI MARZUKI',
        'kerakyatan' => 'Warganegara',
        'kad_pengenalan' => '810110065118',
        'tarikh_lahir' => '1981/01/10',
        'tempat_lahir' => 'JENGKA',
        'jawatan' => 'PENOLONG PENGARAH, PENGKALAN DATA',
        'bahagian' => 'PENGURUSAN MAKLUMAT',
        'no_tel_rumah' => '0326164488',
        'no_tel_bimbit' => '01132304058',
        'email' => 'mazuraa@forestry.gov.my',
        'password' => $hashed_random_password,
        'status'=> true,
        'role' => '0',
        ]
      );

      DB::table('users')-> insert(
        [
        'kategori' => 'dalaman',
        'name' => 'NOR WAHIDAH BINTI AMRAN',
        'kerakyatan' => 'Warganegara',
        'kad_pengenalan' => '851215086004',
        'tarikh_lahir' => '1985/12/15',
        'tempat_lahir' => 'IPOH',
        'jawatan' => 'PENOLONG PEGAWAI KANAN (PENGKALAN DATA)',
        'bahagian' => 'PENGURUSAN MAKLUMAT',
        'no_tel_rumah' => '0326164452',
        'no_tel_bimbit' => '0133940231',
        'email' => 'wahidah@forestry.gov.com',
        'password' => $hashed_random_password,
        'status'=> true,
        'role' => '0',
        ]
      );

      DB::table('users')-> insert(
        [
        'kategori' => 'dalaman',
        'name' => 'ASIAH YAACOB',
        'kerakyatan' => 'Warganegara',
        'kad_pengenalan' => '760505035578',
        'tarikh_lahir' => '1975/05/05',
        'tempat_lahir' => 'KOTA BHARU',
        'jawatan' => 'PENOLONG PENGARAH KANAN',
        'bahagian' => 'PENGURUSAN MAKLUMAT',
        'no_tel_rumah' => '0326164488',
        'no_tel_bimbit' => '01284593214',
        'email' => 'asiah@gmail.com',
        'password' => $hashed_random_password,
        'status'=> true,
        'role' => '1',
        ]
      );

      DB::table('users')-> insert(
        [
        'kategori' => 'dalaman',
        'name' => 'MOHAMAD SABRI BIN SALEH',
        'kerakyatan' => 'Warganegara',
        'kad_pengenalan' => '660330075237',
        'tarikh_lahir' => '1966/03/30',
        'tempat_lahir' => 'PULAU PINANG',
        'jawatan' => 'PENGARAH',
        'bahagian' => 'PENGURUSAN MAKLUMAT',
        'no_tel_rumah' => '0326164488',
        'no_tel_bimbit' => '0192244221',
        'email' => 'sabri@forestry.gov.my',
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

      // DB::table('users')-> insert(
      //   [
      //   'kategori' => 'dalaman',
      //   'name' => 'DATO\' MOHD RIDZA BIN AWANG',
      //   'kerakyatan' => 'Warganegara',
      //   'kad_pengenalan' => '640508015859',
      //   'tarikh_lahir' => '1964/05/08',
      //   'tempat_lahir' => 'JOHOR',
      //   'jawatan' => 'KETUA PENGARAH',
      //   'bahagian' => 'JABATAN PERHUTANAN SEMENANJUNG MALAYSIA',
      //   'no_tel_rumah' => '0326164488',
      //   'no_tel_bimbit' => '0199102466',
      //   'email' => 'ridza@forestry.gov.my',
      //   'password' => $hashed_random_password,
      //   'status'=> true,
      //   'role' => '3',
      //   ]
      // );

      // DB::table('users')-> insert(
      //   [
      //   'name' => 'U1 - Siti Aminah',
      //   'email' => 'User1@gmail.com',
      //   'password' => $hashed_random_password,
      //   'role' => '5',
      //   'kategori' => 'kementerian',
      //   'kad_pengenalan' => '900102034572',
      //   'kerakyatan' => 'Warganegara',
      //   'poskod' => '40150',
      //   'negeri' => 'Selangor',
      //   'tarikh_lahir' => '1990/1/02',
      //   'tempat_lahir' => 'Kuantan',
      //   'jawatan' => 'Pentadbir Sistem',
      //   'alamat_kediaman' => 'Shah Alam',
      //   'nama_kementerian' => 'KPM',
      //   'alamat_kementerian' => 'Putrajaya',
      //   'jenis_perniagaan' => 'Kesihantan',
      //   'no_tel_rumah' => '035684259',
      //   'no_tel_bimbit' => '01284593214',
      //   'status'=> true
      //   ]
      // );
      // DB::table('users')-> insert(
      //   [
      //   'name' => 'U2 - Nurul Aminah',
      //   'email' => 'User2@gmail.com',
      //   'password' => $hashed_random_password,
      //   'role' => '5',
      //   'kategori' => 'dalaman',
      //   'kad_pengenalan' => '900102034573',
      //   'kerakyatan' => 'Warganegara',
      //   'tarikh_lahir' => '1990/1/02',
      //   'bahagian' => 'IT Department',
      //   'tempat_lahir' => 'Kuantan',
      //   'jawatan' => 'Pentadbir Sistem',
      //   'alamat_kediaman' => 'Shah Alam',
      //   'nama_kementerian' => 'KPM',
      //   'alamat_kementerian' => 'Putrajaya',
      //   'jenis_perniagaan' => 'Kesihantan',
      //   'no_tel_rumah' => '035684259',
      //   'no_tel_bimbit' => '01284593214',
      //   'status'=> true
      //   ]
      // );


    }
}
