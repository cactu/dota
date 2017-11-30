<?php

namespace App\Http\Controllers\Admin\Login;

use App\Http\Models\Admin\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 登录首页
     * @author xueyi
     * @time 2017-11-30
     */
    public function index(){
        return view('admin.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * 登录操作
     * @author  xueyi
     * @time 2017-11-30
     */
    public function loginDo(Request $request){
        $post = $request->except('_token');
        $model = User::where('name',$post['name'])->first();
        if($model && Hash::check($post['password'].$model->salt,$model->password)){
            $request->session()->put('admin',$model);
            $txt = '现在是北京时间: '.date('Y-m-d H:i:s').',欢迎登录DOTA后台!';
            return redirect('admin/index')->with(['msg'=>['type'=>'success','txt'=>$txt]]);
        }else{
            return back()->withInput()->with(['msg'=>['type'=>'danger','txt'=>'用户名或者密码不正确!']]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * 登出操作
     * @author
     * @time 2017-11-30
     */
    public function loginOut(Request $request){
        $request->session()->forget('admin');
        return redirect('admin/login');
    }
}
