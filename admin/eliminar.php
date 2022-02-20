<?php
    $cod=$_GET['cod'];
    $indice=0;
    $i=0;

    $productos=simplexml_load_file('../productos.xml');
    foreach($productos->producto as $row){
        if($row->codigo == $cod){
            $indice=$i;
            break;
        }
        $i++;
    }
    unset($productos->producto[$indice]);
    file_put_contents('productos.xml',$productos->asXML());
    header('location:product.php?borrado=1');
?>