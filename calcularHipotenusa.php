<?php 

if (!empty($_POST['cateto1']) && !empty($_POST['cateto2'])) {

    $hipotenusa = sqrt(pow($_POST['cateto1'],2) + pow($_POST['cateto2'],2));

     if (is_numeric($hipotenusa) && $hipotenusa>=0){echo json_encode($hipotenusa);} else {echo json_decode("Los cálculos han salido mal");}

} else echo json_encode("No se ha podido calcular el valor");


?>