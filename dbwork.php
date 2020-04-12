<?php 
    
$sql="SELECT * FROM products";

$result = $db->query($sql);

$products = $result->fetchAll(PDO::FETCH_ASSOC);


						
?>