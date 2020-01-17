<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>Trabajo </title>
  </head>
     <body>
      <h1>punto 1 (Factoriales) </h1>
        
       <form name="form1" method="POST" action="index.php">
           Ingrese un numero : <input type="text" name="txtnumero1">
          <br>
   
            <br>
          <input type="submit" name="calcular" value="Calcular">
              
        </form>

       <?php 
        if(isset($_POST["calcular"])) 
        {
         
                     $n = $_POST["txtnumero1"];
                     function factorial($n) {
                     if ($n <= 1) {
                       return 1;
                     }
             
                    return $n * factorial($n - 1);
                       }
             
            echo factorial($n);
         }
         echo "<br>"   
        ?>
        <h2> punto 3 </h2>

       

     <?php
    
        
    $array=array(1,2,3,4,5);
    $total=0;
    foreach ($array as $value) {
        $total+=$value;
       
    }
    echo $total;
     
        
    
     

     ?>
     <h2> punto 4 </h2>

       

<?php

   
$datos[0][0] = "45";
$datos[0][1] = "4";
$datos[0][2] = "6";
$datos[0][3] = "7";
$datos[1][0] = "23";
$datos[1][1] = "45";
$datos[1][2] = "67";
$datos[1][3] = "1";
$datos[2][0] = "3";
$datos[2][1] = "4";
$datos[2][2] = "7";
$datos[2][3] = "9";
$datos[3][0] = "5";
$datos[3][1] = "4";
$datos[3][2] = "3";
$datos[3][3] = "2";
$datos[4][0] = "1";
$datos[4][1] = "2";
$datos[4][2] = "1";
$datos[4][3] = "4";

$array = array();
$array2 = array();
for ($i = 0 ; $i<5 ; $i++ ) {

    for ($j = 0 ; $j<4 ; $j++ ) {
       
        if(($datos[$i][$j] % 2) == 0) {

            $array[] = $datos[$i][$j];
            
            
        }
         else {
         
            
            
            $array2[] = $datos[$i][$j];
                
            }
            

    }
}  

foreach($array as $valor) {
    Echo "los numeros pares son: ";
    echo $valor . "<br>"; 
}

    foreach($array2 as $valor2) {
        Echo "los numeros impares son: ";
        echo $valor2 . "<br>"; 
    }
 
?>

    </body>

</html>
