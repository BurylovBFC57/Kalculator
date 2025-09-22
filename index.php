<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="tailwindcss.js"></script>
</head>
<body class="p-4">
    <h1 class="font-bold text-3xl">Метод половинного деления</h1>
    <form action="" class="grid gap-y-2 border p-4 border-gray-300">
        <div class="grid">
            <label for="">Правая граница отрезка a</label>
            <input type="text" name="a" require value="-1" class="border p-1">
        </div>
        <div class="grid">
            <label for="">Правая граница отрезка b</label>
            <input type="text" name="b" require value="0,4" class="border p-1">
        </div>
        <div class="grid">
            <label for="">Эпсилон</label>
            <input type="text" name="e" require value="0.0001" class="border p-1">
        </div>
        <div class="grid">
            <label for="">Формула</label>
            <input type="text" name="str" require value="$x**3+1*$x+1" class="border p-1">
        </div>

        <button type="submit" class="bg-gray-800 text-white py-2 hover:text-cyan-500 cursor-pointer">Send</button>
    </form>

    <?php
        // error_reporting(E_ALL);
	    // ini_set('display_errors', 'on');

        if( !empty($_GET) ){
            $a = (float) $_GET['a'];
            $b = (float) $_GET['b'];
            $e = (float) $_GET['e'];
            $str = $_GET['str'];
            do
                {
                    $c = ($a + $b)/2;
                    $x = $a;
                    eval('$fa = '. $str .';');
                    $x = $c;
                    eval('$fc = '. $str .';');
                    echo 'fa='.$fa.' '.'fc='.$fc.' '.'c='.$c.'</br>';
                    if($fa * $fc < 0){
                        $b = $c;
                    }else{
                        $a = $c;
                    }
                }
            while($b - $a > $e);
            // eval('$res = '. $str .';');
            // echo $res;
            echo 'x='.$c;
        }

    ?>
</body>
</html>