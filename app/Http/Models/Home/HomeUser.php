<?php

namespace App\Http\Models\Home;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;

class HomeUser extends Model
{
    protected $hidden = ['pass'];
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * @param $query
     * @param $keywords
     * @return mixed
     * 手机号/邮箱/账号登录
     */
    public function scopeLogin($query,$keywords){
        return $query->where(['name'=>$keywords])->orWhere(['tel'=>$keywords])->orWhere(['email'=>$keywords]);
    }
}
