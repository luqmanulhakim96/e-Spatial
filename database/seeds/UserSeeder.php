<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')-> delete();
      DB::table('users')-> insert(
      [
        'id' => 2,
        'name' => 'AMIRUL AMSYAR',
        'email' => 'amirul.cloud001@gmail.com',
        'password' => '111111',
        'role' => 'admin',
        'kad_pengenalan' => '970128565287',
        'kerakyatan' => 'bumiputera',
        'tarikh_lahir' => '1997/1/28',
        'jawatan' => 'Pen. Ketua Pengarah',
        'alamat_kediaman' => 'Shah Alam',
        'nama_kementarian' => 'KPM',
        'alamat_kementarian' => 'Putrajaya',
        'jenis_perniagaan' => 'Kesihantan',
        'no_tel_rumah' => '035684259',
        'no_tel_bimbit' => '01284593214',
      ]
    );
    }
}
