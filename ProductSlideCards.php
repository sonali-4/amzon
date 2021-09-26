<?php

  function getProductIds(){
    $product_ids = array();

    for( $i=0; $i<12; $i++){
      array_push($product_ids, mt_rand(1,40));
    }

    return $product_ids;
  }

  function getSliderDiv($id, $title, $top_text="Shop Now" ){
    $product_images = "";

    $product_ids = getProductIds();

    for( $i=0; $i<12; $i++){
      $product_images .= "<img src='product-images/".$product_ids[$i].".jpg' />";
    }

    return "
      <div class='sliding-products'>
        <div class='sliding-products-head'>
          <h2>".$title."</h2>
          <a href='#'>".$top_text."</a>
        </div>
    
        <div class='product-slider'>
          <div class='products-lists' id='".$id."'>
            ". $product_images ." 
            </div>
      
          <div class='arrows' >
            <button type='button' class='arrow-left' onClick='slideLeft(\"".$id."\")'>
              <i class='fas fa-chevron-left'></i>
            </button>
            <button type='button' class='arrow-right' onClick='slideRight(\"".$id."\")'>
              <i class='fas fa-chevron-right'></i>
            </button>
          </div>
      </div>
    </div>
    ";
  }


?>