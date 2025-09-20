<?php
    function init($a, $b)
    {
        if((int) $a == 0 or (int) $b == 0)
            {
                return false;
            }
            return true;
    }

    include('sum.php');

    function sum($a, $b)
    {
        return $a.'+'.$b.'='.$a+$b;
    }
    function minus($a, $b)
    {
        return $a.'-'.$b.'='.$a-$b;
    }
    function delenie($a, $b)
    {
        return $b == 0 ? 'Деление на 0' : $a.'/'.$b.'='.$a/$b;
    }
    function umnozhenie($a, $b)
    {
        return $a.'*'.$b.'='.$a*$b;
    }

    error_reporting(E_ALL);
    ini_set('display errors', 'on');
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $smak = $_GET['smak'];

    init($num1, $num2);
    
    if(!init($num1, $num2))
        {
            echo "Это не числа";
        }
        else
        {
            
            $response = match($smak)
            {
                '+' => sum($num1, $num2),
                '-' => minus($num1, $num2),
                '/' => delenie($num1, $num2),
                '*' => umnozhenie($num1, $num2),
            };
            echo $response;
        }

?>
<a href="/">Back</a>