
<?php include"../../include/nav.php" ?>


<section class="deals-on-product">
		<section class="order-status-filter">
			<div class="product-new p-20">
				<div class="product-head">
				<h3>Catelouge</h3>
			</div>
			</div>
				<hr class="line">
				<div class="p-20">
				<form class="search-container m-b">
				    <input type="text" id="search-bar" placeholder="What can I help you with today?">
				    <a href="#"><i class="fas fa-search search-icon"></i></a>
				</form>
				
						<div class="catelouge-section1 m-b">
							<div include="form-input-select()" class="status-col-1 m-r">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value="" hidden>Category</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
									<div include="form-input-select()" class="status-col-1 m-r">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value="" hidden>opted in</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
									<div include="form-input-select()" class="status-col-1 m-r">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value="" hidden>opted in</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
									
									 <button class="btn">Filter</button>
						</div>
						<hr class="line">
						<div class="product-details-catelouge">
							<div class="start-date">
								<h3>Apple Iphone 7plus</h3>
							</div>
							<div class="end-date">
								<h1>product id : 123</h1>
							</div>
						</div>
						<div class="product-details-inner">
							<p> Electronics / Mobiles / Ios / Apple Iphone</p>
							<div class="display-flex">
								<div class="product-image">
									<img src="../../include/img/2.jpg">
								</div>
							<div class="product-info">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								<div class="checkout">
									<div class="quantity-col-1"><h4>Choose Type : </h4></div> 
								<div include="form-input-select()" class="status-col-1 m-r">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value="" hidden>Choose Size</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
									<div include="form-input-select()" class="status-col-1 m-r">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value="" hidden>Choose Color</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>

								<h4 class="price" data-price="400">Max Value : $400</h4>
								<div class="quantity-flex">	
								<div class="quantity-col-1"><h4>Quantity : </h4></div> <div class="quantity-col-2"><div class="quantity buttons_added product-info">
									<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
								</div>	</div>
								
								</div><h4  class="total">Total Max Value : <span id="total">$400</span> </h4>	
											
								<button class="btn m-r">Add to Wishlist </button>
										<button class="btn">Add to Cart</button>

							</div>
							</div>
						</div>
					</div>
		</section>
</section>
<?php include"../../include/footer.php" ?>


