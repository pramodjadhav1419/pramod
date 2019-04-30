<?php include"../../include/nav.php" ?>



	<h1 class="p-20">Shopping Cart</h1>
<div class="display-flex p-20">
<div class="shopping-cart col-70 summery-cart">
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
  <div class="display-flex p-20 center">
    <p>Order Confirmation email will be sent to <span>abc@gmail.com</span></p><button class="btn">Continue</button>
    </div>
</div>






<div class="col-20 p-20 fixed">
  <h4 class="text-center white">Price Details</h4>
  <hr class="hr-white line">
   <div class="totals">
    <div class="totals-item">
      <label>Estimated Price Details <span>(2 item)</span></label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Skilled DELIVERY</label>
        <p class="totals-value">sad</p>
        <!-- <span class="tooltiptext">Tooltip text</span> -->
    </div>
     <div class="totals-item">
      <label>Delivery Charges</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <hr class="hr-white line">
    <div class="totals-item">
      <label>Minimum Deposite </label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Estimated Amount  Payable</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
    <div class="text-center">
     <button class="checkout">Checkout</button>
     </div>
  </div>
      
     
      </div>

</div>
<div class="p-20">
<div class="shopping-cart col-70 summery-cart">
  <div class="product1">
    <h1>DELIVERY ADDRESS</h1>
    <div class="deliver-address p-20">
      <h3>Vishal Agarval <span>Work</span> 9814456789 <span><i class="fas fa-times"></i></span></h3>
      <div class="form-section">
          <form action="/action_page.php">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Phone No:</label>
            <input type="text" id="phone" name="phone" placeholder="Your Phone Number..">

            <label for="lname">Pincode</label>
            <input type="text" id="product-name" name="product_name" placeholder="">

             <label for="lname">Locality</label>
            <input type="text" id="brand" name="brand" placeholder="">

             <label for="subject">Address</label>
            <textarea id="subject" name="subject" placeholder="Write Address Here" style="height:200px"></textarea>

            <label for="lname">City/Town</label>
            <input type="text" id="brand" name="brand" placeholder="">

            <label for="lname">State</label>
            <input type="text" id="price" name="price" placeholder="">

            
            <label for="lname">Landmark (Optional)</label>
            <input type="text" id="price" name="price" placeholder="">

           <label for="lname">Alternate Number (Optional)</label>
            <input type="text" id="price" name="price" placeholder="">

          <div class="text-center">
      <button type="submit" class="btn">SAVE AND DELIVERY HERE</button>
</div>
      </form>
    </div>
     <div class="deliver-address p-20">
      <h3>Vishal Agarval <span>Home</span> 9814456789</h3> <span></span>
      <p class="deliver-add m-b">Your Address Will be Here.......</p>
      <button class="btn">DELIVERY HERE</button>
    </div>
  </div>
</div>
</div>

<div class="p-20">
<div class="shopping-cart col-70 summery-cart">
  <div class="product1">
    <h1>PAYMENT</h1>
  </div>
</div>
</div>




<?php include"../../include/footer.php" ?>