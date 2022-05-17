<?php 
function getPairsCount($arr, $n, $sum)
{
    
    $count = 0;
 
    for ($i = 0; $i < $n; $i++)
        for ($j = $i + 1; $j < $n; $j++)
            if ($arr[$i] + $arr[$j] == $sum)
                $count++;
 
    return $count;
}
 
    
    $arr = array(1, 5, 7, -1, 5) ;
    $arr=array_unique($arr);
    $n = sizeof($arr);
    $sum = 6;
    echo "Count of pairs is "
         , getPairsCount($arr, $n, $sum);
          //rita kumari

?>
