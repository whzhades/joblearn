<?php
/**
 * Created by PhpStorm.
 * User: win10
 * Date: 2018/1/25
 * Time: 11:57
 */

namespace App\Http\Controllers;

use Excel;
use Illuminate\Database\Eloquent\Model;
use App\admin;

class ExcelController extends Controller
{
    public function export(){

        $a = '42';
        $b = 42;
        date_default_timezone_set('Asia/Shanghai');
        $t = time();
        echo $t;
        $t1 = strtotime('2012-12-7');
        echo "<br/>";
        echo $t1;
        $t3 = date('y-m-d h-i-s',$t);
        echo "<br/>";
        echo $t3;
        exit;
if( $a != $b ) {
    echo '111';
}else{
    echo 222;
}
exit();

        $cellData = [
            ['学号','姓名','成绩'],
            ['10001','AAAAA','99','99'],
            ['10002','BBBBB','92','99'],
            ['10003','CCCCC','95','99'],
            ['10004','DDDDD','89','99'],
            ['10005','EEEEE','96','99'],
        ];
        Excel::create('学生成绩',function($excel) use ($cellData){
            $excel->sheet('score', function($sheet) use ($cellData){
                for($i = 0; $i < count($cellData); $i++) {
                    $row = $i + 1;
                    /*$rowdata = $cellData[$i];
                    $sheet->cell('A' . $row, function($cell) use ($rowdata) {
                        $cell->setValue($rowdata[0]);
                    });
                    $sheet->cell('B' . $row, function($cell) use ($rowdata) {
                        $cell->setValue($rowdata[1]);
                    });
                    $sheet->cell('C' . $row, function($cell) use ($rowdata) {
                        $cell->setValue($rowdata[2]);
                    });*/
                    $sheet->setCellValue('A' . $row, $cellData[$i][0])
                        ->setCellValue('B' . $row, $cellData[$i][1])
                        ->setCellValue('C' . $row, $cellData[$i][2]);
                }
//                $sheet->rows($cellData);
            });
        })->export('xlsx');
    }

}