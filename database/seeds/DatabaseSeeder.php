<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('senarai_hargas')-> delete();
        DB::table('senarai_hargas')-> insert(
        [
          'id' => 1,
          'jenis_data' => 'digitals',
          'saiz_data' => '120',
          'negeri' => 'selangor',
          'tahun' => '2012',
          'harga_asas' => '1200.00',
          'jumlah_harga' => '9000.99',
          'created_at' => '2020/1/1',
          'updated_at' => '2020/1/1',
        ],[
          'id' => 2,
          'jenis_data' => 'kertas',
          'saiz_data' => '360',
          'negeri' => 'kedah',
          'tahun' => '1967',
          'harga_asas' => '45.00',
          'jumlah_harga' => '200.99',
          'created_at' => '2020/1/1',
          'updated_at' => '2020/1/1',
        ]
      );
    }
}
