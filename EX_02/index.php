<?php
/*Declaro las variables co el precio de la cesta, si son cables o perifericos y el precio final a cero.*/
$shopping_cart = 120;
$tipo = 'perifericos';
$shipping_price = 0;

/*Hago un if else para saber que precio tendran que pagar, si se pueden enviar y se calcula el precio final.*/
if ($shopping_cart<=20){
    if ($tipo=='cables'){
        echo 'No se puede enviar'.'<br />';
        $shipping_price = 0;
    } else if ($tipo='perifericos'){
        echo 'Los gastos de envío son 4.99€'.'<br />';
        $shipping_price = $shopping_cart+4.99;
    }
} else if ($shopping_cart>20 && $shopping_cart<50){
    echo 'Los gastos de envío son 4.99€'.'<br />';
    $shipping_price = $shopping_cart+4.99;
} else if ($shopping_cart>50){
    echo 'El envio es gratuito'.'<br />';
    $shipping_price = $shopping_cart;
    if ($shopping_cart>150){
        echo 'Codigo de descuento: GIMBERNAT_20_%'.'<br />';
        $shipping_price = $shopping_cart;
    }
}
/*Muestra el precio final de los productos.*/
    echo 'Precio final: '.$shipping_price.'€';
?>


