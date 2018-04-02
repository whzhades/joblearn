<?php
/**
 * Created by PhpStorm.
 * User: win10
 * Date: 2018/1/8
 * Time: 17:26
 */
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller {

    public function index () {
        return view('Admin.index');
    }
}