<?php
function component($productname,$productprice,$productimg,$productid){
    $element = "

            <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
             <form action=\"index.php\" method =\"post\">
              <div class=\"card-shadow\">
                <div>
                    <img src=\"$productimg\" alt=\"product31\" class=\"img-fluid card-img-top\"> 
                </div>
                <div class=\"card-body\">
                   <div class=\"card-title\">
                   <h5>$productname</h5>
                   
                   </div>
                   <h6>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   <i class=\"fas fa-star\"></i>
                   </h6>
                </div>
                  <p class=\"card-text\">
                     Some quick example
                  </p>
                  <h5>
                  <small><s class=\"text-secondary\">$300</s></small>
                  <span class=\"price\"  name =\"product-price\">$productprice</span>
                  </h5>

                  <button type=\"submit\" class =\"btn btn-success my-3\" name =\"add\">Add to Cart <i class =\"fas fa-shopping-cart\"></i></button>
                  
                  <input type =\"hidden\" name=\"product_id\" value=\"$productid\">
               </div>
             
             
             
             </form>
            
            </div>
    
    
    
    
    ";
   echo $element;

}


function cartElement($productimg,$productname,$productprice,$productid){
   $element="

   <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                <div class=\"border rounded\">
                  <div class=\"row bg-white\">
                    <div class=\"col-md-3 pl-0\">
                        <img src=\"$productimg\" alt=\"product1\" class=\"img-fluid\">
                    </div>
                    <div class=\"col-md-6\">
                        <h5 class =\"pt-2\">$productname</h5>
                        <small class=\"text-secondary\">Seller:dailytuition</small>
                        <h5 class=\"pt-5\">$productprice</h5>
                        <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                        <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\"><i class=\"fas fa-trash\"></i></button>

                      </div>
                      <div class=\"col-md-3 py-5\">
                         <div>
                         <h6> Quantity </h6>
                         <input type=\"number\" id =\"quantity\" name = \"quantity\"value=\"1\" style=\"width:50px\">
                         </div>
                      </div>

                  </div>
                </div>
              </form>
           
   
   ";
   echo $element;
}