<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUser extends Model
{
    protected $hidden = ['pass'];
    /*protected $table = 'users';*/
    use SoftDeletes;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
