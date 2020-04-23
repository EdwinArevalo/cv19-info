<?php
session_start();

function conec()
{
    if (!($conexion =new   mysqli('l6slz5o3eduzatkw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'n877zmeh7sw73tpj','h33j8hd6l66i1woh','lwehqrjlb0w2nsac'))) {
                    echo "-coneción inválida";
        exit();
    }
    return $conexion;
}

$conn = conec();



/*
if(isset($conn)){
    echo 'correct';
}
*/

?>