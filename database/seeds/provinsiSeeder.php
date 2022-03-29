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
        DB::table('provinsi')->insert(['nama_provinsi' => 'Aceh Darussalam']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sumatra Utara']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Riau']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sumatra Barat']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Kepulauan Riau']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Bangka Belitung']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jambi']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Bengkulu']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sumatra Selatan']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Lampung']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Banten']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'DKI Jakarta']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jawa Barat']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jawa Tengah']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jogjakarta']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Jawa Timur']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Bali']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'NTB']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'NTT']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Kalimantan Barat']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Kalimantan Tengah']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Kalimantan Timur']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Barat']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Selatan']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Tenggara']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Gorontalo']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Sulawesi Utara']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Maluku Utara']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Maluku']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Papua']);
        DB::table('provinsi')->insert(['nama_provinsi' => 'Papua Barat']);
    }
}
