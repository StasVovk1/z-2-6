<?php 
    $mass = [1,2,3,4,5,6,7,8,9,0,12];
    echo 'Исходные данные: '.json_encode($mass);

    for ($i = 0; $i < counts($mass); $i++){
        if ($mass[$i] % 2 == 0){
            $mass[$i] = $i;
        }
    }
    
    echo '<br>Ответ: '.json_encode($mass);

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>