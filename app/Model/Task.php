<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    protected $table = 'task';

    protected $fillable = [
        'id',
        'task_name',
        'task description',
        'image',
        'created_at',
        'updated_at',
    ];

}
