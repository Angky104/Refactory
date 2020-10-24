<?php

    function sorting($data){

        $jmlSwap = 0; 

        $i=0;
        while($i<count($data)-1){

            if ($data[$i] > $data[$i+1]) 
            { 
                $t = $data[$i]; 
                $data[$i] = $data[$i+1]; 
                $data[$i+1] = $t; 
                $jmlSwap += 1;

                echo $jmlSwap .". [".$data[$i].",".$data[$i+1]."] => ";
                for ($k=0; $k < count($data); $k++) {                       
                    echo $data[$k]." ";
                }
                echo "<br /><br />"; 

                $i=0;
            }else{
                $i++;
            }  
        }
        
        echo "Jumlah swap: ".$jmlSwap;

    }

    $num = "4 9 7 5 8 9 3";
    $data   = preg_split('/\s+/', $num);

    sorting($data);

?>