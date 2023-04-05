<?php 
include_once 'productData.php';
$str="";
$i=0;
// function for display data
foreach ($data->products as $key => $value) {
    $str.="
    <div id='product-". $value['id']." 'class='product border border-dark m-2 '>
    <div class='text-end'> <i class='fa-solid fa-heart' style='color: #8e9195;'></i> </div>
    <img src= ' ". $value['img'] ." '>
    <h3 class='title'><a href='#'>".$value['name']."</a></h3>
    <span>Price: $".$value['price']."</span>
    <span class='actions'>
    <Button class='mt-2 m-1 btn btn-warning' onclick=addCart(".$key.")>Add Cart</Button>
    <Button class='mt-2 m-1 btn btn-danger' onclick=addCart(".$key.")>Buy Now</Button>
    </span>
    </div>

   ";
}
echo $str;
?>