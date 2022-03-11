<?php
$AllAmount = $rowrscbproduct_amount["BookAmount"];
if (isset($rowrscbproduct_amount["BookAmount"])){
    if ($AllAmount > 199){
      $shippingcost = 1500;
    }
    elseif ($AllAmount > 99){
      $shippingcost = 800;
    }
    elseif ($AllAmount > 49){
      $shippingcost = 500;
    }
    elseif ($AllAmount > 29){
      $shippingcost = 300;
    }
    elseif ($AllAmount > 19){
      $shippingcost = 200;
    }
    elseif ($AllAmount > 9){
      $shippingcost = 120;
    }
    elseif ($AllAmount > 5){
      $shippingcost = 70;
    }
    elseif ($AllAmount > 4){
      $shippingcost = 50;
    }
    elseif ($AllAmount > 3){
      $shippingcost = 45;
    }
    elseif ($AllAmount > 2){
      $shippingcost = 40;
    }
    elseif ($AllAmount > 1){
      $shippingcost = 35;
    }
    elseif ($AllAmount > 0){
      $shippingcost = 30;
    }
    else {
      $shippingcost = null;
    }
    }
    else {
      $shippingcost = null;
    }
?>