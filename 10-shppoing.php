<?php include"../../include/nav.php" ?>



	<h1 class="p-20">Shopping Cart</h1>
<div class="display-flex">
<div class="shopping-cart col-70">

  <div class="column-labels">
    <label class="product-image">image</label>
    <label class="product-details">Product Name</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>  
    <label class="product-line-price">Total</label>
    <label class="product-removal">Remove</label>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
    </div>
    <div class="product-details">
      <div class="product-title"><h4>Coke Bottles</h4></div>
      <p class="product-description">Product Specification Paper Colour White Sheet Size 190 x 100mm</p>
    </div>
    <div class="product-price">12.99</div>
    <div class="product-quantity">
      <input type="number" value="2" min="1">
    </div>
    
    <div class="product-line-price">25.98</div>
    <div class="product-removal">
      <button class="remove-product">
       <i class="fas fa-times"></i>
      </button>
    </div>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
    </div>
    <div class="product-details">
      <div class="product-title"><h4>Chips Packet</h4></div>
      <p class="product-description">Product Specification Paper Colour White Sheet Size 190 x 100mm</p>
    </div>
    <div class="product-price">45.99</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
   
    <div class="product-line-price">45.99</div>

     <div class="product-removal">
      <button class="remove-product">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  
 

</div>






<div class="col-20 p-20 fixed">
  <h4 class="text-center white">Review Your Cart</h4>
   <div class="totals">
    <div class="totals-item">
      <label>Estimated Cart Value</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>GST (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Minimum Deposite </label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Estimated Order Value</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
    <div class="text-center">
     <button class="checkout">Checkout</button>
     </div>
  </div>
      
     
      </div>
</div>
<div class="couponcode p-20">
  <h1>
    Have You Got Coupon Code ?
  </h1>
  <div class="display-flex">
    <div class="col-50 display-flex">
      <input type="text" name="" class="apply-input">
      <button class="btn apply">Apply</button>    
    </div>
    <div class="col-50">
      <button class="btn">
        Countinue Shopping
      </button>
    </div>
  </div>
</div>




<?php include"../../include/footer.php" ?>