<?php 

include_once('./connect.php');

$sentencia = $conn->query("select COUNT(*) as cantidad_registros, rango_dias from ( select case when edad between 20 and 24 then 'a) 20 a 24' when edad between 25 and 29 then 'a) 25 a 29' when edad between 30 and 34 then 'b) 30 a 34' when edad BETWEEN 35 and 39 then 'c) 35 a 39' else 'c) mas de 40' end as rango_dias, edad from ( select TIMESTAMPDIFF(YEAR,birthdate, CURDATE()) AS edad from authors) res) tabla group by rango_dias order by rango_dias;");


if(!$sentencia){
  die('query faild');
}
$json = array();

while($row = $sentencia->fetch_assoc()){
  $json[]=array(
    
    'rango'=>$row['rango_dias'],
    'suma'=>$row['cantidad_registros']
  );
}

  $jsonstring = json_encode($json);
  echo $jsonstring;

?>
