<?php
session_start();
if($_POST){
	$_SESSION["user"] = $_POST["user"];
}

include './co.php';
$arreglo=$_SESSION['carrito'];
$numeroventa=0;
$re= mysql_query("select * from ventas_online order by id_ventaonline DESC limit 1") or die(mysql_error());
while ($f=  mysql_fetch_array($re)){
    $numeroventa=$f['numeroventa'];
    
}
if($numeroventa==0){
    $numeroventa=1;
}else{
    $numeroventa=$numeroventa+1;
}
echo $_SESSION['id'];

for($i=0;$i<count($arreglo);$i++){
    mysql_query("insert into ventas_online(id_ventaonline,id_perfume,id_cliente,cantidad,tarjeta,total)values(
            ".$numeroventa.",
           '".$arreglo[$i]['Id']."',
           '".($_SESSION['id'])."',
           '".$arreglo[$i]['Cantidad']."',
           '".$_POST[$i]['tarjeta']."',
           '".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
            )")or die(mysql_error());
                
}
unset($_SESSION['carrito']);
?>
<h1> 
    La compra se realizo con exito
</h1>