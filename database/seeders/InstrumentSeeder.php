<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instruments')->insert([
            'inst_name'=>'Gitar',
            'inst_url'=>'https://images.all-free-download.com/images/graphicthumb/acoustic_guitar_184807.jpg',
            'inst_class'=>'KOR',
            'inst_play'=>'Dipetik',
            'description'=>'Gitar adalah sebuah alat musik berdawai yang dimainkan dengan cara dipetik, umumnya menggunakan jari maupun plektrum. Gitar terbentuk atas sebuah bagian tubuh pokok dengan bagian leher yang padat sebagai tempat senar yang umumnya berjumlah enam didempetkan. Gitar secara tradisional dibentuk dari berbagai jenis kayu dengan senar yang terbuat dari nilon maupun baja.',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('instruments')->insert([
            'inst_name'=>'Biola',
            'inst_url'=>'https://upload.wikimedia.org/wikipedia/commons/1/1b/Violin_VL100.png',
            'inst_class'=>'KOR',
            'inst_play'=>'Digesek',
            'description'=>'Biola adalah sebuah alat musik dawai yang dimainkan dengan cara digesek. Biola memiliki empat senar (G-D-A-E) yang disetel berbeda satu sama lain dengan interval sempurna kelima. Nada yang paling rendah adalah G. Di antara keluarga biola, yaitu dengan biola alto, cello dan double bass atau kontra bass, biola memiliki nada yang tertinggi.',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('instruments')->insert([
            'inst_name'=>'Angklung ',
            'inst_url'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Indonesianbamboomusicangklung.jpg/187px-Indonesianbamboomusicangklung.jpg',
            'inst_class'=>'IDI',
            'inst_play'=>'Digoyang',
            'description'=>'Angklung adalah alat musik multitonal (bernada ganda) yang berkembang dari masyarakat Sunda. Alat musik ini dibuat dari bambu, dibunyikan dengan cara digoyangkan (bunyi disebabkan oleh benturan badan pipa bambu) sehingga menghasilkan bunyi yang bergetar dalam susunan nada 2, 3, sampai 4 nada dalam setiap ukuran, baik besar maupun kecil. Dictionary of the Sunda Language karya Jonathan Rigg, yang diterbitkan pada tahun 1862 di Batavia, menuliskan bahwa angklung adalah alat musik yang terbuat dari pipa-pipa bambu yang dipotong ujung-ujungnya menyerupai pipa-pipa dalam suatu organ, dan diikat bersama dalam suatu bingkai, digetarkan untuk menghasilkan bunyi. ',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('instruments')->insert([
            'inst_name'=>'Gong',
            'inst_url'=>'https://upload.wikimedia.org/wikipedia/commons/7/76/COLLECTIE_TROPENMUSEUM_Gong_hangend_in_een_standaard_onderdeel_van_gamelan_Semar_Pagulingan_TMnr_1340-13.jpg',
            'inst_class'=>'IDI',
            'inst_play'=>'Dipukul',
            'description'=>'Gong merupakan alat musik pukul yang terkenal di Asia Tenggara dan Timur. Instrumen ini termasuk kedalam jenis idiofon karena suara yang dihasilkan berasal dari getaran dari keseluruhan alat musik itu sendiri. Suara yang didengar juga berkepanjangan dan stabil.Alat musik gong berasal dari Vietnam yang biasanya terbuat dari logam-logam seperti tembaga dan kuningan, secara umum alat musik gong dimainkan dengan cara dipukul menggunakan alat pemukulnya yang dilapisi kain ataupun pelapis lainnya.',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('instruments')->insert([
            'inst_name'=>'Gendang',
            'inst_url'=>'https://upload.wikimedia.org/wikipedia/commons/8/88/Traditional_indonesian_drums.jpg',
            'inst_class'=>'MEM',
            'inst_play'=>'Dipukul',
            'description'=>'Kendhang atau gendang adalah instrumen dalam gamelan yang salah satu fungsi utamanya mengatur irama. Instrument ini dibunyikan dengan tangan, tanpa alat bantu. Jenis kendhang yang kecil disebut ketipung, yang menengah disebut kendhang ciblon/kebar.',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('instruments')->insert([
            'inst_name'=>'Rebana',
            'inst_url'=>'https://upload.wikimedia.org/wikipedia/commons/a/ad/COLLECTIE_TROPENMUSEUM_Enkelvellige_lijsttrom_met_rinkelschijven_TMnr_1032-2.jpg',
            'inst_class'=>'MEM',
            'inst_play'=>'Dipukul',
            'description'=>'Rebana adalah gendang berbentuk bundar dan pipih yang merupakan khas suku melayu. Bingkai berbentuk lingkaran terbuat dari kayu yang dibubut, dengan salah satu sisi untuk ditepuk berlapis kulit kambing.',
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now()
        ]);
        
    }
}
