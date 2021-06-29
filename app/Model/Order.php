<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{

    protected $table = 'order';

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'address1',
        'address2',
        'address3',
        'phone_number',
        'task_completed',
        'payment_recieved',
        'remember_token',
        'created_at',
        'updated_at',

    ];



}
