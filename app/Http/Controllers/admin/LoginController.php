<?php
/**
 * Created by PhpStorm.
 * User: win10
 * Date: 2018/1/8
 * Time: 17:26
 */
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\admin;
use App;
class LoginController extends Controller {

    public function __construct(){

    }

    public function login () {
        return view('Admin.login');
    }

    public function store(Request $request) {
        $username = $this->validate($request,[
           'username'=>'required|unique:post|max:255',
           'password'=>'required',
        ]);
        return redirect('admin.save');
    }
    public function save (Request $request) {
        $admin = new admin();
        $username = $request->username;
        $password = $request->password;
        $query = $admin->where('username',$username)->first();
        if (empty($query)) {
            $admin->username = $username;
            $admin->password = $password;
            $result = $admin->save();
        }else{
            $result = false;
        }

        if ($result) {
            return view('Admin.index',['username'=>$username])->with('message','注册成功');
        }else{
            $request->session()->put('message', '注册失败,请重新注册');
            return view('Admin.login');
        }

    }

    public function savetest (Request $request) {
        $username = $request->username;
        $password = $request->password;
        $url = $request->url();
        $path = $request->path();
        $bool = $request->isMethod('post');
        $bool_has = $request->has('username');

           DB::table('admin')->insert(['username'=>$username,'password'=>$password]);
//         DB::table('admin')->insert(['username'=>'hahaha','password'=>'ahahaha']);
    }
    public function ormtest (){
            /*        $data = App\admin::all();
                    foreach ($data as $value) {
                        var_dump($value->username);
                    }*/
            //   $data = App\admin::create(['username'=>'test1','password'=>'12344134']);  插入方法一,必须在model类中声明字段;
            /*    $data = new App\admin();
                $data->username ='test2';
                $data->password = 'test2';
                $data->save();*/
            //插入方法二,
            $data = App\admin::insert(['username'=>'testsfdsfs111','password'=>'test2222']);
            var_dump($data);
            $data1 = App\admin::all();
            var_dump($data1);

    }
    public function page () {
        $user = DB::table('sy_member')->paginate(15);
//        var_dump($user);
        return view('Admin.test',['user' =>$user]);
    }

    public function test() {
        $a = '';
        if ($a == null){
            echo 1233;
            echo '<br/>';
        }
        if (empty($a)) {
            echo 1111;
        }
    }

}