<?php
    //indice
    /*$arr=array(1,"string",3,4,array("uno","dos"),9);
    for($i=0;$i<6;$i++){
        if($i==4) {
        }else{
        echo $arr[$i]."<br>";
    }
    }*/
?>
<?php
    //clave-valor
    /*$persona=array("nombre"=>"Pedro",
                   "edad"=>23,
                    "ciudad"=>"Barranquilla",
                   "sexo"=>"M");
                   //echo $persona["ciudad"];
            foreach($persona as $cla=>$val){
            echo $cla.": " .$val."<br>";
            }*/
?>
<?php                $asignaturas[0]=array("nombre"=>"algebralineal","HT"=>4,"HP"=>0,"tipo"=>"A");
        $asignaturas[1]=array("nombre"=>"algoritmia","HT"=>4,"HP"=>4,"tipo"=>"B");
        $asignaturas[2]=array("nombre"=>"etica","HT"=>2,"HP"=>4,"tipo"=>"A");
        for($i=0;$i<count($asignaturas);$i++){
            foreach ($asignaturas[$i] as $cla=>$val){
        echo $cla.": " .$val."<br>";
    }
        }
?>



