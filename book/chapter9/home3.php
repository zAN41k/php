<?php
/*
Отобразите файл формата CSV в виде HTML-таблицы. Если у вас нет под рукой такого файла
(или программы электронных таблиц), воспользуйтесь данными из примера 9.9.
*/?>

<table>
	<tr>
		<th>name</th>
		<th>price</th>
		<th>spicy</th>
	</tr>
 	<?php
$row = 1;
$i = 0;
$arr=[];
if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
      //echo "<p> $num fields in line $row: <br /></p>\n";
       $arr[$i]=$data;
       $row++;
       $i++;			
   //var_dump($arr);
  //  file_put_contents('data2.csv',$data,FILE_APPEND);
    }
    fclose($handle);
}
          // var_dump($arr);
           // foreach($arr as $v) {
	//	echo $v;
	//	print "\n";

//}
                         
                       //  var_dump($arr);
			$keys=['name','price','spicy'];
			$associalArr=array_combine($keys,$arr);
                      var_dump($arr);
 			$result = '';
                  foreach ($associalArr as $elem) {
            //              $result .= '<tr>';
                          
              //            $result .= '<td>' . $associalArr['name'] . '</td>';
                //          $result .= '<td>' . $associalArr['price'] . '</td>';
                  //        $result .= '<td>' . $associalArr['spicy'] . '</td>';
                          
                    //      $result .= '</tr>';
                  }
                  
                //  echo $result;






	?>
</table>

