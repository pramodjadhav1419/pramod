<?php include"../../include/nav.php" ?>



	<h1 class="p-20">Shopping Cart</h1>
<div class="display-flex p-20">
<div class="shopping-cart col-50 summery-cart">
  <div class="product1">
    <h1>Order Summery</h1>
  <div class="product">
    <div class="product-image m-b">
      <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
    </div>
    <div class="product-details summery-details">
      <div class="product-title"><h4>Coke Bottles</h4></div>
      <p class="product-description">35ml</p>
    </div>
    <div class="product-price summery-price">12.99</div>
    <div class=" col-30" style="float: left;"><h4>Estimated Total Value -</h4></div><div class="product-line-price summery-estimated">25.98</div>
      <div class="product-quantity summery-qnty">
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal summery-remove">
      <button class="remove-product">
       <a href="#">Remove</a>
      </button>
    </div>
  </div>
  </div>

<hr class="line">
  <div class="product">
    <div class="product-image m-b">
      <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
    </div>
    <div class="product-details summery-details">
      <div class="product-title"><h4>Coke Bottles</h4></div>
      <p class="product-description">35ml</p>
    </div>
    <div class="product-price summery-price">12.99</div>
    <div class=" col-30" style="float: left;"><h4>Estimated Total Value -</h4></div><div class="product-line-price summery-estimated">25.98</div>
      <div class="product-quantity summery-qnty">
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal summery-remove">
      <button class="remove-product">
       <a href="#">Remove</a>
      </button>
    </div>
  </div>
  <div class="display-flex p-20">
    <p>Order Confirmation email will be sent to <span>abc@gmail.com</span></p><button class="btn">Continue</button>
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
<div class="p-20">
<div class="shopping-cart col-50 summery-cart">
  <div class="product1">
    <h1>DELIVERY ADDRESS</h1>
    <div class="deliver-address">
      <h3>Vishal Agarval <span>Work</span> 9814456789 <span><i class="fas fa-times"></i></span></h3>
      <p class="deliver-add m-b">Your Address Will be Here.......</p>
      <button class="btn">DELIVERY HERE</button>
    </div>
     <div class="deliver-address">
      <h3>Vishal Agarval <span>Home</span> 9814456789</h3> <span></span>
      <p class="deliver-add m-b">Your Address Will be Here.......</p>
      <button class="btn">DELIVERY HERE</button>
    </div>
  </div>
</div>
</div>

<div class="p-20">
<div class="shopping-cart col-50 summery-cart">
  <div class="product1">
    <h1>PAYMENT</h1>
  </div>
</div>
</div>




<?php include"../../include/footer.php" ?>