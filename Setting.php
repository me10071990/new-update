<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Setting;

class Setting extends Model
{
    protected $fillable=['site_name', 'contact_number', 'address','contact_email'];
}


