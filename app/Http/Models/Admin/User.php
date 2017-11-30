<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    /*protected $table = 'users';*/
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
