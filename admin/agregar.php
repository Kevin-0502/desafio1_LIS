<?php
    $res=petition_evaluate($_POST['codigo'],$_POST['nombre'],$_POST['categoria'],$_POST['descripcion'],$_POST['existencias'],$_POST['precio']);
    $productos=simplexml_load_file('../productos.xml');
    if ($res) {
        $producto=$productos->addChild('producto');
        $producto->addChild('codigo',$_POST['codigo']);
        $producto->addChild('nombre',$_POST['nombre']);
        $producto->addChild('categoria',$_POST['categoria']);
        $producto->addChild('descripcion',$_POST['descripcion']);
        $producto->addChild('existencias',$_POST['existencias']);
        $producto->addChild('precio',round($_POST['precio'],2));
        file_put_contents('productos.xml',$productos->asXML());
        header('location:product.php?exito=1');
    }else{
        var_dump($res);
        header('location:add_product.php?exito=0');
    }
    

    function petition_evaluate($codigo,$nombre,$categoria,$descripcion,$existencias,$precio){
        $petition_state=false;

        if (preg_match("/^[P][R][O][D][0-9]{5}$/",$codigo)==1) {
            $char=is_char($nombre,$categoria,$descripcion);
            if($char)
            {
                $petition_state=true;
            }
        }
        
        return $petition_state;
    }

    function is_char($var1,$var2,$var3){
        $char=false;
        if(preg_match("/[A-Za-z0-9]+/",$var1)==1&&preg_match("/[A-Za-z0-9]+/",$var2)==1&&preg_match("/[A-Za-z0-9]+/",$var3)==1){
            $char=true;
        }
        return $char;
    }
?>
