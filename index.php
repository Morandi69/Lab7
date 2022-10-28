<?php 

function task1(){
    $var='Hello';
    echo $var[0],$var[1],$var[4];
}

function task2(){
    echo 1*60*60;
}

function task3(){
    $var=1;
    $var+=12;
    $var-=14;
    $var*=5;
    $var/=7;
    $var++;
    $var--;
    echo $var;
}
function task4(){
    $a=3;
     echo $a;
 }
 function task5(){
    $a=10;
    $b=2;
    echo ($a+$b);
    echo "\n";
    echo ($a-$b);
    echo "\n";
    echo $a*$b;
    echo "\n";
    echo $a/$b;
 }
 function task6(){
    $c=15;
    $d=2;
     $result=$c+$d;
     echo $result;
    
 }
 function task7(){
    $a=10;
    $b=2;
    $c=5;
    echo $a+$b+$c;
    
 }
 function task8(){
    $a=17;
    $b=10;
    $c=$a-$b;
    $d=7;
    $result=$c+$d;
    echo $result;
    
 }
 function task9(){
    $text="Hello World!";
    echo $text;
     
  }
  function task10(){
    $text="Hello ";
    $text2="World!";
    echo $text.$text2;
     
  }
  function task11(){
    $name="Nikita";
    echo "Hello, ".$name;  
  }
  function task12(){
    $age=21;
    echo "Im ".$age." years old";
     
  }
  function task13(){
    $text="abcde";
    echo $text[0].'  '.$text[2].'  '.$text[4];
     
  }
  function task14(){ 
    $text="Hello, world! ";
    $text[0]='!';
    echo $text;
}
function task15(){ 
    $snum="12345";
    $summ=0;
    $n=strlen($snum);
     for ($i = 0; $i < $n; $i++) 
   {
       $summ+=$snum[$i];
       
   }
    echo $summ;
}
function task16(){ 
    $h=60*60;
    $d=$h*24;
    $m=$d*30;
    echo $h.'  '.$d.'  '.$m.'  ';
}
function task17(){
  $h=date('H');
$m=date('i');
$s=date('s');
echo $h." : ".$m." : ".$s;
}
function task18(){
  $n=6;
echo ($n*$n);
}
function task19(){
  $var = 47;
$var += 7;
$var -=  18;
$var *= 10;
$var /= 20;
echo $var;
}
function task20(){
  $text = 'Я';
  $text .=' хочу';
  $text .=' знать';
  $text .= ' PHP!';
  echo $text;
}
function task21(){
  $var = 10;
$var ++;
$var ++;
$var --;
echo $var;
}
function task22(){
  $var = 10;
$var += 7;
$var ++;
$var --;
$var +=12;
$var *=7;
$var -=15;
echo $var;
}
echo "Задание 1 "."<br>";
task1();
echo "<br>"."Задание 2 "."<br>";
task2();
echo "<br>"."Задание 3 "."<br>";
task3();
echo "<br>"."Задание 4 "."<br>";
task4();
echo "<br>"."Задание 5 "."<br>";
task5();
echo "<br>"."Задание 6 "."<br>";
task6();
echo "<br>"."Задание 7 "."<br>";
task7();
echo "<br>"."Задание 8 "."<br>";
task8();
echo "<br>"."Задание 9 "."<br>";
task9();
echo "<br>"."Задание 10 "."<br>";
task10();
echo "<br>"."Задание 11 "."<br>";
task11();
echo "<br>"."Задание 12 "."<br>";
task12();
echo "<br>"."Задание 13 "."<br>";
task13();
echo "<br>"."Задание 14 "."<br>";
task14();
echo "<br>"."Задание 15 "."<br>";
task15();
echo "<br>"."Задание 16 "."<br>";
task16();
echo "<br>"."Задание 17 "."<br>";
task17();
echo "<br>"."Задание 18 "."<br>";
task18();
echo "<br>"."Задание 19 "."<br>";
task19();
echo "<br>"."Задание 20 "."<br>";
task20();
echo "<br>"."Задание 21 "."<br>";
task21();
echo "<br>"."Задание 22 "."<br>";
task22();
?>