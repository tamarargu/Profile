<?php
if (!empty ($_POST)){
    $respuesta = true ;

}else{
    $respuesta = false ;
}
echo(jsaon_encode($respuesta));
