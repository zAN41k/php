<?php

$firstKatet=readline("firstKatet="); 
$secondKatet=readline("secondKatet=");
$ygolA=0;
$ygolB=0;
$ygolC=90;     


echo 'Гипотенуза = '. $gipotenyza=sqrt(pow($firstKatet,2)+pow($secondKatet,2));
print "\n";
echo 'Площадь = ' . $S=($firstKatet*$secondKatet)/2;
print "\n";
echo 'Периметр = '. $P=$firstKatet+$secondKatet+$gipotenyza; 
print "\n";
echo 'Тангенс a= ' . $tangens=$firstKatet/$secondKatet;
print "\n";
		if($tangens > 0.075 and $tangens < 0.0349) $ygolA=1;
		if($tangens > 0.0349 and $tangens < 0.0524) $ygolA=2;
		if($tangens > 0.524 and $tangens < 0.0699) $ygolA=3;
		if($tangens > 0.0699 and $tangens < 0.0875) $ygolA=4;
		if($tangens > 0.0875 and $tangens < 0.1051) $ygolA=5;
		if($tangens > 0.1051 and $tangens < 0.1228) $ygolA=6;
		if($tangens > 0.1228 and $tangens < 0.1405) $ygolA=7;
		if($tangens > 0.1405 and $tangens < 0.1584) $ygolA=8;
		if($tangens > 0.1584 and $tangens < 0.1763) $ygolA=9;
		if($tangens > 0.1763 and $tangens < 0.1944) $ygolA=10;
		if($tangens > 0.1944 and $tangens < 0.2126) $ygolA=11;
		if($tangens > 0.2126 and $tangens < 0.2309) $ygolA=12;
		if($tangens > 0.2309 and $tangens < 0.2493) $ygolA=13;
		if($tangens > 0.2493 and $tangens < 0.2679) $ygolA=14;
		if($tangens > 0.2679 and $tangens < 0.2867) $ygolA=15;
		if($tangens > 0.2867 and $tangens < 0.3057) $ygolA=16;
		if($tangens > 0.3057 and $tangens < 0.3249) $ygolA=17;
		if($tangens > 0.3249 and $tangens < 0.3443) $ygolA=18;
		if($tangens > 0.3443 and $tangens < 0.364) $ygolA=19;

 		if($tangens > 0.364 and $tangens < 0.3839) $ygolA=20;
		if($tangens > 0.3839 and $tangens < 0.404) $ygolA=21;
		if($tangens > 0.404 and $tangens < 0.4245) $ygolA=22;
		if($tangens > 0.4245 and $tangens < 0.4452) $ygolA=23;
		if($tangens > 0.4452 and $tangens < 0.4663) $ygolA=24;
		if($tangens > 0.4663 and $tangens < 0.4877) $ygolA=25;
		if($tangens > 0.4877 and $tangens < 0.5095) $ygolA=26;
		if($tangens > 0.5095 and $tangens < 0.5317) $ygolA=27;
		if($tangens > 0.5317 and $tangens < 0.5543) $ygolA=28;
		if($tangens > 0.5543 and $tangens < 0.5774) $ygolA=29;
		if($tangens > 0.5774 and $tangens < 0.6009) $ygolA=30;
		if($tangens > 0.6009 and $tangens < 0.6249) $ygolA=31;
		if($tangens > 0.6249 and $tangens < 0.6494) $ygolA=32;
		if($tangens > 0.6494 and $tangens < 0.6745) $ygolA=33;
		if($tangens > 0.6745 and $tangens < 0.7002) $ygolA=34;
		if($tangens > 0.7002 and $tangens < 0.7265) $ygolA=35;
		if($tangens > 0.7265 and $tangens < 0.7536) $ygolA=36;
		if($tangens > 0.7536 and $tangens < 0.7813) $ygolA=37;
		if($tangens > 0.7813 and $tangens < 0.8098) $ygolA=38;
		if($tangens > 0.8098 and $tangens < 0.8391) $ygolA=39;
		if($tangens > 0.8391 and $tangens < 0.8693) $ygolA=40;
		if($tangens > 0.8693 and $tangens < 0.9004) $ygolA=41;
		if($tangens > 0.9004 and $tangens < 0.9325) $ygolA=42;
		if($tangens > 0.9325 and $tangens < 0.9657) $ygolA=43;
		if($tangens > 0.9657 and $tangens < 1) $ygolA=44;
		if($tangens > 1 and $tangens < 1.0355) $ygolA=45;
		if($tangens > 1.0355 and $tangens < 1.0724) $ygolA=46;
		if($tangens > 1.0724 and $tangens < 1.1106) $ygolA=47;
		if($tangens > 1.1106 and $tangens < 1.1504) $ygolA=48;
		if($tangens > 1.1504 and $tangens < 1.1918) $ygolA=49;
		if($tangens > 1.1918 and $tangens < 1.2349) $ygolA=50;
		if($tangens > 1.2349 and $tangens < 1.2799) $ygolA=51;
		if($tangens > 1.2799 and $tangens < 1.327) $ygolA=52;
		if($tangens > 1.327 and $tangens < 1.3764) $ygolA=53;
		if($tangens > 1.3764 and $tangens < 1.4281) $ygolA=54;
		if($tangens > 1.4281 and $tangens < 1.4826) $ygolA=55;
		if($tangens > 1.4826 and $tangens < 1.5399) $ygolA=56;
		if($tangens > 1.5399 and $tangens < 1.6003) $ygolA=57;
		if($tangens > 1.6003 and $tangens < 1.6643) $ygolA=58;
		if($tangens > 1.6643 and $tangens < 1.7321) $ygolA=59;
		if($tangens > 1.7321 and $tangens < 1.804) $ygolA=60;
		if($tangens > 1805) echo "Треугольник не прямоугольный";





echo 'Угол a= ' . $ygolA;
print "\n";
echo 'Угол б= ' . $ygolB=180-$ygolC-$ygolA;

	
	


