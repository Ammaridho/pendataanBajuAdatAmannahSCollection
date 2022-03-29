<?php

use Illuminate\Database\Seeder;

class provinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('provinsi')->insert(['nama_provinsi' => 'Aceh',
                                        'namaButton_provinsi' => 'aceh',
                                        'deskripsi_provinsi' => 'Aceh adalah sebuah provinsi di Indonesia yang ibu kotanya berada di Banda Aceh. Aceh merupakan salah satu provinsi di Indonesia yang diberi status sebagai daerah istimewa dan juga diberi kewenangan otonomi khusus. Aceh terletak di ujung utara pulau Sumatra dan merupakan provinsi paling barat di Indonesia. Menurut hasil sensus Badan Pusat Statistik tahun 2019, jumlah penduduk provinsi ini sekitar 5.281.891Jiwa.[10] Letaknya dekat dengan Kepulauan Andaman dan Nikobar di India dan terpisahkan oleh Laut Andaman. Aceh berbatasan dengan Teluk Benggala di sebelah utara, Samudra Hindia di sebelah barat, Selat Malaka di sebelah timur, dan Sumatra Utara di sebelah tenggara dan selatan.',
                                        'gambar_provinsi' => 'aceh-01.png']);

        // DB::table('provinsi')->insert(['nama_provinsi' => 'Aceh Darussalam']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Sumatra Utara']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Riau']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Sumatra Barat']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Kepulauan Riau']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Bangka Belitung']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Jambi']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Bengkulu']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Sumatra Selatan']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Lampung']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Banten']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'DKI Jakarta']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Jawa Barat']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Jawa Tengah']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Jogjakarta']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Jawa Timur']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Bali']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'NTB']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'NTT']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Kalimantan Barat']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Kalimantan Tengah']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Kalimantan Timur']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Barat']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Selatan']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Tenggara']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Gorontalo']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Utara']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Maluku Utara']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Maluku']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Papua']);
        // DB::table('provinsi')->insert(['nama_provinsi' => 'Papua Barat']);
    }
}
