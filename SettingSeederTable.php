<?php

use Illuminate\Database\Seeder;

class SettingSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        \DB::table('settings')->delete();


        \App\Setting::create([


            'site_name'=>"laravel",
            'address'=>"laravel ",
            'contact_number'=>"1000",
            'contact_email'=>"mirink.com",


        ]);




    }



}
