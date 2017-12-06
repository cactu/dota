<?php

namespace App\Http\Controllers\Home;

use App\Http\Models\Admin\AdminUser as User;
use App\Http\Models\Home\HomeUser;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Validator;

class IndexController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 首页
     */
    public function index(Request $request){
        return view('home.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 登录页面
     */
    public function login(){
        return view('home.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * 登录判断
     */
    public function loginDO(Request $request){
        $data = $request->except('_token');
        $validator = Validator::make($data,$this->loginRules(),$this->loginMessage());
        if($validator->fails()){
            return redirect()->back()->withInput()->with(['message'=>$validator->errors()->all()]);
        }
        $model = HomeUser::login($data['keywords'])->first();
        if($model && Hash::check($data['password'],$model->password)){
            $request->session()->put('home',$model);
            return redirect('index');
        }else{
            return redirect()->back()->withInput()->with(['message'=>['用户名或者密码错误!']]);
        }
    }




    /**
     * @return array
     * 登录规则
     */
    protected function loginRules(){
        return [
            'keywords' => 'required|max:50',
            'password' => 'required',
        ];
    }

    /**
     * @return array
     * 登录错误提醒
     */
    protected function loginMessage(){
        return [
            'keywords.required' => '请输入账号!',
            'keywords.max' => '账号过长!',
            'password.required' => '请输入密码!',
        ];
    }

    /**
     * 发送邮件
     */
    protected function mail(){
        /*$user = User::find(1);
        $result = Mail::send('emails.email',['model'=>$user],function ($message) {
            $message->to('896707622@qq.com');
            // 邮件主题
            $message->subject('DOTA注册激活邮件');
        });*/
        $user = User::find(1);
        $title = 'DOTA注册激活邮件';
        $result = Mail::to('896707622@qq.com')->send(new OrderMail($title,$user->name));
        dd($result);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 页面贪吃蛇
     */
    public function snake(){
        return view('home.snake');
    }

    public function test(){
        return 123;
    }
}
