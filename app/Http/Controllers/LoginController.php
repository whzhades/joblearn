<?php
/**
 * Created by PhpStorm.
 * User: win10
 * Date: 2018/1/8
 * Time: 17:26
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller {

    function login () {
        return view('Admin.login');
    }
}