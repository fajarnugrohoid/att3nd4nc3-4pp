<?php

use Illuminate\Database\Seeder;
class SeederTableAnggota extends Seeder {

public function run()
 {
 // kosongkan table anggota
 DB::table('anggota')->delete();
 // buat data berupa array untuk diinput ke database
 $anggota = array(
 array('id'=>1, 'nama'=>'Akhmad Dharma kasman', 'alamat'=>'Jalan Kebahagiaan No. 23'),
 array('id'=>2, 'title'=>'Kresna Abimanyu', 'alamat'=>'jalan Kebagusan No. 28'),
 array('id'=>3, 'title'=>'Dewi Retno Wulan', 'alamat'=>'Jalan Peninggilan No 45')
 );
 // masukkan data ke database
 DB::table('anggota')->insert($anggota);
 }
 }
