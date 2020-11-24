<?php

function salat(string $string) {
    $str="";
    $arr=str_split($string,1);
//	var_dump($arr);
    foreach($arr as $v) {
	switch($v) {
	case 'a': 
	  $str.='d';
	  break;

	case 'b':
	  $str.='e';
	  break;

	case 'c':
            $str.='f';
            break;

	case 'd':
            $str.='g';
            break;

	case 'e':
            $str.='h';
            break;

	case 'f':
            $str.='i';
            break;

	case 'g':
            $str.='j';
            break;

	case 'h':
            $str.='k';
            break;

	case 'i':
            $str.='l';
            break;

	case 'j':
            $str.='m';
            break;

	case 'k':
            $str.='n';
            break;
	case 'l':
            $str.='o';
            break;

	case 'm':
            $str.='p';
            break;

	case 'n':
            $str.='q';
            break;

	case 'o':
            $str.='r';
            break;

	case 'p':
            $str.='s';
            break;

	case 'q':
            $str.='t';
            break;

	case 'r':
            $str.='u';
            break;

	case 's':
            $str.='v';
            break;

        case 't':
            $str.='w';
            break;

	case 'u':
            $str.='x';
            break;

	case 'v':
            $str.='y';
            break;
	
	case 'w':
            $str.='z';
            break;

	case 'x':
            $str.='a';
            break;

	case 'y':
            $str.='b';
            break;

	case 'z':
            $str.='c';
            break;

        case ' ':
            $str.=' ';
            break;


     }
   }   
return $str;
}


function deSalat(string $string) {
    $str="";
    $arr=str_split($string,1);
    foreach($arr as $v) {
	switch($v) {
	case 'd': 
	  $str.='a';
	  break;

	case 'e':
	  $str.='b';
	  break;

	case 'f':
            $str.='c';
            break;

	case 'g':
            $str.='d';
            break;

	case 'h':
            $str.='e';
            break;

	case 'i':
            $str.='f';
            break;

	case 'j':
            $str.='g';
            break;

	case 'k':
            $str.='h';
            break;

	case 'l':
            $str.='i';
            break;

	case 'm':
            $str.='j';
            break;

	case 'n':
            $str.='k';
            break;
	case 'o':
            $str.='l';
            break;

	case 'p':
            $str.='m';
            break;

	case 'q':
            $str.='n';
            break;

	case 'r':
            $str.='o';
            break;

	case 's':
            $str.='p';
            break;

	case 't':
            $str.='q';
            break;

	case 'u':
            $str.='r';
            break;

	case 'v':
            $str.='s';
            break;

        case 'w':
            $str.='t';
            break;

	case 'x':
            $str.='u';
            break;

	case 'y':
            $str.='v';
            break;
	
	case 'z':
            $str.='w';
            break;

	case 'a':
            $str.='x';
            break;

	case 'b':
            $str.='y';
            break;

	case 'c':
            $str.='z';
            break;

        case ' ':
            $str.=' ';
            break;


     }
   }   
return $str;
}





$cezar='hello world hello there obi one';
$shifr=salat($cezar);
echo $shifr;
print "\n";
echo deSalat($shifr);
