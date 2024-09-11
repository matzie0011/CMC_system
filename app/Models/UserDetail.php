<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details'; // specify the table name if it differs from the plural form
    protected $primaryKey = 'id'; // if 'serial_number' is the primary key
    
}