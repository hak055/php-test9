<?php
// создаем функцию для чисел фибоначи
function fibonacci($n)
{
    if ($n < 3) {
        return 1; 
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}
    $fib = [];
   for ($n = 1; $n <= 36; $n++) 
		{
			$fib[] = fibonacci($n);//получаем масив количеством элементов 36
		}

//var_dump($fib);

?>