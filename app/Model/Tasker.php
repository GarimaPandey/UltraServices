<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Tasker extends Model
{
    protected $table = 'tasker';

    protected $fillable = [
        'id',
        'name',
        'profession',
        'contact_no',
        'aadhar_card_no',
        'adhar_card_no',
        'experience',
        'vehicle_number_name',
        'date_and_time',
    ];

}
