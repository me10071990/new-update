<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use Session;


class SettingController extends Controller
{




    public function index()
    {
        return view('admin.settings.setting')->with('settings',Setting::first());

       // $this->validate(request(),[

         //   'site_name'=>'required',
           // 'contact_number'=>'required',
            //'contact_email'=>'required',
            //'address'=>'required',

        //]);
        

    }

    public function update()

            {


                $this->validate(request(),[

                   'site_name'=>'required',
                    'contact_number'=>'required',
                    'contact_email'=>'required',
                    'address'=>'required',

                ]);

                $settings=Setting::first();

                $settings->site_name=request()->site_name;
                $settings->contact_number=request()->contact_number;
                $settings->address=request()->address;
                $settings->contact_email=request()->contact_email;

                $settings->save();



                Session::flash('success','CERCA setting has updated with details ');

                return redirect()->back();



    }

}
