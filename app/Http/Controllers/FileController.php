<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function colsVsRows()
    {
        $file_n = public_path('upload/slatecodetest.csv');
        $fp = fopen($file_n,"r");



$f_pointer = fopen($file_n,"r"); // file pointer


while(! feof($f_pointer)) {
    $ar = fgetcsv($f_pointer);

    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
             echo "[ $ar[$i] , $ar[$j] ] <br/>";
        }

    }

}
fclose($fp);

}


public function allRows(){

    $file_n = public_path('upload/slatecodetest.csv');
    $fp = fopen($file_n,"r");
    $row = 1;
     if (($handle = fopen($file_n, "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
              $num = count($data);
              echo "<p> Total number of $num fields in file <br /></p>\n";
              $row++;
              for ($c = 0; $c < $num; $c++) {
                  echo $data[$c] . ", ";
              }
          }
          fclose($handle);
      }


}
}
