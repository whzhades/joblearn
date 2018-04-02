<?php
/**
 * Created by PhpStorm.
 * User: win10
 * Date: 2018/1/9
 * Time: 11:59
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class admin extends Model
{
    protected $table = 'admin';
    public $timestamps = false;
//    protected $fillable = ['username','password'];
}