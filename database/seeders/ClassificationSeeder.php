<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classifications')->insert([
           'class_code'=>'IDI',
           'class_name'=>'Idiofon',
           'description'=>'Idiofon ialah macam-macam alat musik yang sumber bunyinya berasal dari bahan dasarnya (getaran badan alat musiknya).',
           'created_at'=>\Carbon\Carbon::now(),
           'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('classifications')->insert([
        'class_code'=>'MEM',
        'class_name'=>'Membranofon',
        'description'=>'Membranofon ialah alat musik yang sumber bunyinya berasal dari membran atau selaput yang terdapat pada instrumen tersebut.',
        'created_at'=>\Carbon\Carbon::now(),
        'updated_at'=>\Carbon\Carbon::now()
        ]);
        DB::table('classifications')->insert([
        'class_code'=>'KOR',
        'class_name'=>'Kordofon',
        'description'=>'Kordofon ialah jenis instrumen musik yang sumber bunyinya berasal dari seutas tali yang disebut dawai atau senar.',
        'created_at'=>\Carbon\Carbon::now(),
        'updated_at'=>\Carbon\Carbon::now()
        ]);
    }
}
