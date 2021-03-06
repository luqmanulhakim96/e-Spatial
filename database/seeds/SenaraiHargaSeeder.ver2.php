<?php

use Illuminate\Database\Seeder;

class SenaraiHargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('senarai_hargas')-> delete();

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Semenanjung Malaysia
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Johor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Kedah
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Kelantan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Negeri Sembilan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Pahang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Perak
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Perlis
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Pulau Pinang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Selangor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Terengganu
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Melaka
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Litupan Kawansan Hutan | 2010-2019 | Wilayah Persekutuan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2010,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2012,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2014,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2017,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Litupan Kawasan Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 72.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Semenanjung Malaysia
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Johor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Kedah
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Kelantan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Negeri Sembilan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Pahang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Perak
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Perlis
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Pulau Pinang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Selangor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Terengganu
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Melaka
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Sempadan Hutan Simpanan Kekal | 2007-2019 | Wilayah Persekutuan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2007,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2011,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2015,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2016,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2018,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => 2019,
        'harga_asas' => 127.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Semenanjung Malaysia
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Johor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Kedah
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Kelantan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Negeri Sembilan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Pahang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Perak
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Perlis
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 |  Pulau Pinang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Selangor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Terengganu
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Melaka
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Inventori Hutan Nasional | 1961-2010 | Wilayah Persekutuan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => '1961-1970',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => '1971-1980',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => '1981-1990',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => '1991-2000',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Inventori Hutan Nasional',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => '2001-2010',
        'harga_asas' => 187.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Semenanjung Malaysia
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Johor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Kedah
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Kelantan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Negeri Sembilan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Pahang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Perak
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Perlis
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Pulau Pinang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Selangor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Terengganu
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Melaka
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Kelas Fungsi Hutan | 2010-2019 | Wilayah Persekutuan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => '2010',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => '2015',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Kelas Fungsi Hutan',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => '2019',
        'harga_asas' => 36.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Semenanjung Malaysia
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Johor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Johor',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Johor',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Johor',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Johor',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Johor',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Kedah
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kedah',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kedah',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kedah',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kedah',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kedah',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Kelantan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kelantan',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kelantan',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kelantan',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kelantan',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Kelantan',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Negeri Sembilan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Pahang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pahang',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pahang',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pahang',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pahang',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pahang',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Perak
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perak',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perak',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perak',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perak',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perak',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Perlis
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perlis',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perlis',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perlis',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perlis',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Perlis',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Pulau Pinang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Selangor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Selangor',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Selangor',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Selangor',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Selangor',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Selangor',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Terengganu
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Terengganu',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Terengganu',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Terengganu',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Terengganu',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Terengganu',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Melaka
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Melaka',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Melaka',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Melaka',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Melaka',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Melaka',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Petak Kajian | Fenologi-CFI | Wilayah Persekutuan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => 'Fenologi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => 'Growth Ploth',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => 'G&Y',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => 'Restorasi',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Petak Kajian',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => 'CFI',
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Semenanjung Malaysia
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Semenanjung Malaysia',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Johor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Johor',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Kedah
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Kedah',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Kelantan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Kelantan',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Negeri Sembilan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Negeri Sembilan',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Pahang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Pahang',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Perak
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Perak',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Perlis
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Perlis',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Pulau Pinang
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Pulau Pinang',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Selangor
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Selangor',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Terengganu
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Terengganu',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Melaka
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Melaka',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Vektor Shapefile | Lain-Lain | Wilayah Persekutuan
      DB::table('senarai_hargas')-> insert(
        [
        'jenis_dokumen' => 'Vektor Shapefile',
        'jenis_kertas' => null,
        'saiz_data' => 100,
        'jenis_data' => 'Lain-Lain',
        'negeri' => 'Wilayah Persekutuan',
        'kategori_data' => null,
        'tahun' => null,
        'harga_asas' => 134.00,
        'jumlah_harga' => 0.00,
        'status' => 'Aktif',
        ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Semenanjung Malaysia
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Johor
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Kedah
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Kelantan
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Negeri Sembilan
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Pahang
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Perak
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Perlis
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Pulau Pinang
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Selangor
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Terengganu
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Melaka
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

      //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Wilayah Persekutuan
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2012',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2014',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2017',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );
      DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Litupan Kawasan Hutan',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
      );

    //Vektor Shapefile | Inventori Hutan Nasional | 2010-2019 | A0-A4 | Semenanjung Malaysia
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1961-1970',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1961-1970',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1961-1970',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1961-1970',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1961-1970',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1971-1980',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1981-1990',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1981-1990',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1981-1990',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1981-1990',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1981-1990',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1991-2000',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1991-2000',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1991-2000',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1991-2000',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '1991-2000',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Vektor Shapefile',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Inventori Hutan Nasional',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2001-2010',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Litupan Kawansan Hutan | '2010'-'2019' | 'A0'-'A4' | Wilayah Persekutuan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2012',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2012',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2012',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2012',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2012',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2014',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2014',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2014',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2014',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2014',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2016',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2016',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2016',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2016',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2016',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2017',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2017',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2017',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2017',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2017',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2018',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2018',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2018',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2018',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2018',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Litupan Kawasan Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Semenanjung Malaysia
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Johor
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A3',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2007',
         'harga_asas' => 110.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A4',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2007',
         'harga_asas' => 60.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A0',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2011',
         'harga_asas' => 770.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A1',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2011',
         'harga_asas' => 390.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A2',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2011',
         'harga_asas' => 210.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A3',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2011',
         'harga_asas' => 110.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A4',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2011',
         'harga_asas' => 60.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A0',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2015',
         'harga_asas' => 770.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A1',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2015',
         'harga_asas' => 390.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A2',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2015',
         'harga_asas' => 210.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A3',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2015',
         'harga_asas' => 110.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A4',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2015',
         'harga_asas' => 60.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
         'jenis_dokumen' => 'Bercetak',
         'jenis_kertas' => 'A0',
         'saiz_data' => 100,
         'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
         'negeri' => 'Johor',
         'kategori_data' => null,
         'tahun' => '2016',
         'harga_asas' => 770.00,
         'jumlah_harga' => 0.00,
         'status' => 'Aktif',
       ]
     );

      DB::table('senarai_hargas')-> insert(
        [
          'jenis_dokumen' => 'Bercetak',
          'jenis_kertas' => 'A1',
          'saiz_data' => 100,
          'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
          'negeri' => 'Johor',
          'kategori_data' => null,
          'tahun' => '2016',
          'harga_asas' => 390.00,
          'jumlah_harga' => 0.00,
          'status' => 'Aktif',
        ]
      );

      DB::table('senarai_hargas')-> insert(
        [
          'jenis_dokumen' => 'Bercetak',
          'jenis_kertas' => 'A2',
          'saiz_data' => 100,
          'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
          'negeri' => 'Johor',
          'kategori_data' => null,
          'tahun' => '2016',
          'harga_asas' => 210.00,
          'jumlah_harga' => 0.00,
          'status' => 'Aktif',
        ]
      );

      DB::table('senarai_hargas')-> insert(
        [
          'jenis_dokumen' => 'Bercetak',
          'jenis_kertas' => 'A3',
          'saiz_data' => 100,
          'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
          'negeri' => 'Johor',
          'kategori_data' => null,
          'tahun' => '2016',
          'harga_asas' => 110.00,
          'jumlah_harga' => 0.00,
          'status' => 'Aktif',
        ]
      );

      DB::table('senarai_hargas')-> insert(
        [
          'jenis_dokumen' => 'Bercetak',
          'jenis_kertas' => 'A4',
          'saiz_data' => 100,
          'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
          'negeri' => 'Johor',
          'kategori_data' => null,
          'tahun' => '2016',
          'harga_asas' => 60.00,
          'jumlah_harga' => 0.00,
          'status' => 'Aktif',
        ]
      );

      DB::table('senarai_hargas')-> insert(
        [
          'jenis_dokumen' => 'Bercetak',
          'jenis_kertas' => 'A0',
          'saiz_data' => 100,
          'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
          'negeri' => 'Johor',
          'kategori_data' => null,
          'tahun' => '2018',
          'harga_asas' => 770.00,
          'jumlah_harga' => 0.00,
          'status' => 'Aktif',
        ]
      );

      DB::table('senarai_hargas')-> insert(
        [
          'jenis_dokumen' => 'Bercetak',
          'jenis_kertas' => 'A1',
          'saiz_data' => 100,
          'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
          'negeri' => 'Johor',
          'kategori_data' => null,
          'tahun' => '2018',
          'harga_asas' => 390.00,
          'jumlah_harga' => 0.00,
          'status' => 'Aktif',
        ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Kedah
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kedah',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Kelantan
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Negeri Sembilan
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Negeri Sembilan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Pahang
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pahang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Perak
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perak',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Perlis
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Perlis',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Pulau Pinang
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Pulau Pinang',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Selangor
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Selangor',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Terengganu
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',

'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Terengganu',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Melaka
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Sempadan Hutan Simpanan Kekal | '2007'-'2019' | 'A0'-'A4' | Wilayah Persekutuan
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2007',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2011',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2015',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2016',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2018',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Sempadan Hutan Simpanan Kekal',
       'negeri' => 'Wilayah Persekutuan',
       'kategori_data' => null,
       'tahun' => '2019',
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Semenanjung Malaysia
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Johor
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Kedah
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Kelantan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Negeri Sembilan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Pahang
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Perak
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Perlis
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Pulau Pinang
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Selangor
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Terengganu
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Melaka
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Inventori Hutan Nasional | 1961-2010 | A0-A4 | Wilayah Persekutuan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1961-1970',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1971-1980',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1981-1990',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '1991-2000',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Inventori Hutan Nasional',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2001-2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Semenanjung Malaysia
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Johor
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Johor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Kedah
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Kelantan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Kelantan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Negeri Sembilan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Pahang
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Perak
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Perlis
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Pulau Pinang
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Selangor
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Terengganu
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Melaka
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Melaka',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Kelas Fungsi Hutan | 2010-2019 | A0-A4 | Wilayah Persekutuan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2010',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2015',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Kelas Fungsi Hutan',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => '2019',
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Semenanjung Malaysia
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Semenanjung Malaysia',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Johor
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Johor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Kedah
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kedah',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Kelantan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Kelantan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Negeri Sembilan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Negeri Sembilan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Pahang
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pahang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Perak
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perak',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Perlis
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Perlis',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Pulau Pinang
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Selangor
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Selangor',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Terengganu
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Terengganu',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Melaka
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Melaka',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Petak Kajian | 2010-2019 | A0-A4 | Wilayah Persekutuan
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Fenologi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Growth ploth',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'G&Y',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'Restorasi',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );
     DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Petak Kajian',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => 'CFI',
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
     );

     //Kertas | Lain-Lain | null | 'A0'-'A4' | Semenanjung Malaysia
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Semenanjung Malaysia',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

     //Kertas | Lain-Lain | null | 'A0'-'A4' | Johor
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Johor',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

    //Kertas | Lain-Lain | null | 'A0'-'A4' | Kedah
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Kedah',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );

     //Kertas | Lain-Lain | null | 'A0'-'A4' | Kelantan
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Kelantan',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

    //Kertas | Lain-Lain | null | 'A0'-'A4' | Pahang
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pahang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );

    //Kertas | Lain-Lain | null | 'A0'-'A4' | Perak
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perak',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );

    //Kertas | Lain-Lain | null | 'A0'-'A4' | Perlis
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Perlis',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );

    //Kertas | Lain-Lain | null | 'A0'-'A4' | Pulau Pinang
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Pulau Pinang',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );

    //Kertas | Lain-Lain | null | 'A0'-'A4' | Selangor
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Selangor',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );

    //Kertas | Lain-Lain | null | 'A0'-'A4' | Terengganu
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Terengganu',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );

     //Kertas | Lain-Lain | null | 'A0'-'A4' | Melaka
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A0',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 770.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A1',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 390.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A2',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 210.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A3',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 110.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );
     DB::table('senarai_hargas')-> insert(
       [
       'jenis_dokumen' => 'Bercetak',
       'jenis_Kertas' => 'A4',
       'saiz_data' => 100,
       'jenis_data' => 'Lain-Lain',
       'negeri' => 'Melaka',
       'kategori_data' => null,
       'tahun' => null,
       'harga_asas' => 60.00,
       'jumlah_harga' => 0.00,
       'status' => 'Aktif',
       ]
     );

    //Kertas | Lain-Lain | null | 'A0'-'A4' | Wilayah Persekutuan
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A0',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 770.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A1',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 390.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A2',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 210.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A3',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 110.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );
    DB::table('senarai_hargas')-> insert(
      [
      'jenis_dokumen' => 'Bercetak',
      'jenis_Kertas' => 'A4',
      'saiz_data' => 100,
      'jenis_data' => 'Lain-Lain',
      'negeri' => 'Wilayah Persekutuan',
      'kategori_data' => null,
      'tahun' => null,
      'harga_asas' => 60.00,
      'jumlah_harga' => 0.00,
      'status' => 'Aktif',
      ]
    );

  }
}
