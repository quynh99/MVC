<?php

    //bai 1
 function LongestWord($string){
    
    $substring = explode(" ", $string);
    $n = str_word_count($string);
    $max = strlen($substring[0]);
        $neo = 0;
    for($i=0; $i<$n-1;$i++){
        if(strlen($substring[$i+1])>$max){
            $max = strlen($substring[$i+1]);
            $neo = $i+1;
        }
        // else if(strlen($substring[$i+1])==$max){
        //     break;
        // }
        // else
        //     continue;
    }
    echo $substring[$neo];
}
    $string = "d love adog hdhss ndaa";
    LongestWord($string);

    // bai 2
function LetterChages($str)
{

    
    $replaces = array(
        'a' => 'b',
        'b' => 'c',
        'c' => 'd',
        'd' => 'e',
        'e' => 'f',
        'f' => 'g',
        'g' => 'h',
        'h' => 'i',
        'i' => 'j',
        'j' => 'k',
        'k' => 'l',
        'l' => 'm',
        'm' => 'n',
        'n' => 'o',
        'o' => 'p',
        'p' => 'q',
        'q' => 'r',
        'r' => 's',
        's' => 't',
        't' => 'u',
        'u' => 'v',
        'v' => 'w',
        'w' => 'x',
        'x' => 'y',
        'y' => 'z',
        'z' => 'a',

                    );
    $str = strtr($str,$replaces);

    echo "dap an ".$str;
}
    
    echo "<br>";
    $str = "hello*3";
    LetterChages($str);
    
    //bai 3
    function phoneNumber($fromNum)
    {   
        $fromNum = "1234567890";
        $toFomat = sprintf("(%s)-%s-%s",
              substr($fromNum, 0, 3),
              substr($fromNum, 3, 3),
              substr($fromNum, 6));
            

        echo "<br>$toFomat";
    }
        echo "<br>";
        $num = "1234561234";
        phoneNumber($num);


        // bai 4
    function Xoa($xau)
    {
        $mang = str_split($xau);
        $size = sizeof($mang);
        $i = 1;
        // reset();
        // && $i>sizeof($mang)
        while((strpos($xau,"#") !== false ) && ($i< $size) ){
            if($mang[$i]=="#"){
                        unset($mang[$i]);
                        unset($mang[$i-1]);
            }
            $i++;
            
        }
        
        // for($i=1; $i<sizeof($mang);$i++){
        //     if($mang[$i]=="#"){
        //         unset($mang[$i]);
        //         unset($mang[$i-1]);
        //     }
        // }
        $xaumoi = implode("",$mang);
        echo $xaumoi;
    }

    echo "<br>";
    $xau = "abc#d##c##";
    Xoa($xau);


    //bai 10
    function ReverseVowels($bai10)
    {

        $v = array("a","e","i","o","u");
        $replace = array();

        for($i=0;$i<strlen($bai10);$i++){
            if(in_array($bai10[$i],$v))
                $replace[$i] = $bai10[$i];
        }

        $replaceIndex = array_reverse(array_keys($replace));
        $replaceValue = array_values($replace);
        $replace = array_combine($replaceIndex,$replaceValue);

        foreach($replace as $key=>$value){
            $bai10[$key] = $replace[$key];
        }

        echo $bai10;  
    }

    echo "<br>";
    $bai10 = "helaloddu!";
    ReverseVowels($bai10);
    echo "<br>";

    //bai 9
    function ExchageAndReversing($my_array, $other_array)
    {
        substr_replace($my_array,$other_array,0);
        $my_string = implode("",$my_array);
        echo strrev($my_string);
        echo "<br>";
        $other_string = implode("",$other_array);
        echo strrev($other_string);
        
    }
    $my_array = ['a', 'b', 'c'];

    $other_array= [1, 2, 3];

    ExchageAndReversing($my_array,$other_array);
    echo "<br>";


    //bai 7
    function VowelCount($bai7)
    {
        $v = array("a","e","i","o","u");
        $count = 0;
        for($i=0;$i<strlen($bai7);$i++){
            if(in_array($bai7[$i],$v))
                $count++;
        }
        echo $count;
    }

    $bai7 = "hellosds aeddu";
    VowelCount($bai7);

    // bai5
    // function NumberString($bai5)
    // {
    //     $num = array(1,2,3,4,5,6,7,8,9,0);
        
    //     $len = strlen($bai5);
    //     $list = array();
    //     for($i = 0; $i<$len; $i++){
    //         $pos = strpos($bai5,$num);
    //         $pos2 = strpos($bai5, $num, $i +1);
    //         $list[$i] = substr($bai5,$pos,$pos2);
                
    //     }

    //     print_r($list);
        

    // }

    // $bai5 = "abc123cb23";
    // NumberString($bai5);

    echo "<br>";
    //bai 6
    $ASCII_SIZE = 256;  
    function CommonChar($bai6)
    {
        // global  $ASCII_SIZE;
        
        // $count  = array_fill(0,$ASCII_SIZE,null);
        // $len = strlen($bai6);
        // $max = 0;
        // $result;
        // for($i =0; $i<$len; $i++){
        //     $count[ord($bai6[$i])]++;
        //     if($max<$count[ord($bai6[$i])]){
        //         $max = $count[ord($bai6[$i])];
        //         $result = $bai6[$i];
        //     }
            
        // }

        // echo $max;
        // echo $result;

        $totals = array_count_values(str_split($bai6));
        arsort($totals);
        // echo array_keys($totals)[0];
        print_r($totals);
    }

    $bai6 = "toi di hoc";
    CommonChar($bai6);
    
    // bài 8
    echo "<br>";

    function CommasNumber($bai8)
    {
        $number_format = number_format($bai8, 2, ".",",");
        echo $number_format;
    }
    $bai8 = "10000.989";
    CommasNumber($bai8);

    // $str = 'abcdefghdiklm';
    // $pos = strpos($str, 'd');
    // $pos2 = strpos($str, 'd', 4);
    // echo $pos . "<br />";
    // echo $pos2;
    // echo "<br>";
    // $var = "abc123sdfhd";
    // $v = "1";
    // $result = strchr($var, $v);
    // $result_2 = strchr($var, $v, true);
    // $result_3 = strchr($var, $v, false);
    // echo $result . "<br />";
    // echo $result_2 . "<br />";
    // echo $result_3 . "<br />";

?>