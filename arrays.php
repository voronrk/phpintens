<?php 

// $products=["iPhone XR", "MacBook", "Apple Watch", "iPhone XR", "MacBook", "Apple Watch"];

// echo("<ol>");
// foreach ($products as $item) {
//     echo ("<li>" . $item . "</li>");
// }
// echo("</ol>")

$iphone=["title"=>"iPhone XR", "price"=>48000, "desc"=>"Cool Phone"];
$ipad=["title"=>"iPad", "price"=>54000, "desc"=>"Cool Table"];
$macBook=["title"=>"MacBook Pro", "price"=>148000, "desc"=>"Cool Book"];

$products=[$iphone, $ipad, $macBook];

foreach($products as $product) {
    echo("<ul>");
    foreach($product as $key => $item) {
            echo ("<li>$key=>$item</li>");
    }
    echo("</ul>");
}

?>