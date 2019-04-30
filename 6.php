
<?php include"../../include/nav.php" ?>


<section class="deals-on-product">
		<section class="order-status-filter">
			<div class="product-new display-flex center p-20">
				<div class="product-head">
				<h3>Catelouge</h3>
			</div>
			</div>
				<hr class="line">
				<div class="catelouge-search-section p-20">
				<form class="search-container m-b">
				    <input type="text" id="search-bar" placeholder="What can I help you with today?">
				    <a href="#"><i class="fas fa-search search-icon"></i></a>
				</form>
				
						<div class="catelouge-section1 m-b">
							<div include="form-input-select()" class="status-col-1">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value="" hidden>Search by Category</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
									<div include="form-input-select()" class="status-col-1">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value="" hidden>Search by Sub Category</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
										<div include="form-input-select()" class="status-col-1">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value="" hidden>Search by Sub Category2</option>

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
						<div class="table-inside">
									<table id="t01">
									  <tr>
									  	<th>No</th>
									    <th>Product Name </th>
									    <th>Category</th> 
									    <th>Max-Value</th>
									    <th>Quantity</th>
									    <th>Auction</th>
									    
									  </tr>
									  <tr>
									    <td>1.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>

									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>
							    
									    <td><div class="center jcenter display-flex">
									    <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>							   								
										</div>
										</td>								   
									  </tr>
									  <tr>
									    <td>2.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>
									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>							    
									    <td><div class="center jcenter display-flex">
									    <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>		
										</div>
										</td>								   
									  </tr>
									  <tr>
									    <td>3.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>
									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>							    
									    <td><div class="center jcenter display-flex">
									   <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>	
										</div>
										</td>								   
									  </tr>
									  <tr>
									    <td>4.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>
									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>						    
									    <td><div class="center jcenter display-flex">
									    <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>
										</div>
										</td>								   
									  </tr>
									  <tr>
									    <td>5.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>
									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>								    
									    <td><div class="center jcenter display-flex">
									   <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>
										</div>
										</td>								   
									  </tr>
									  <tr>
									    <td>6.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>
									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>							    
									    <td><div class="center jcenter display-flex">
									   <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>
										</div>
										</td>								   
									  </tr>
									  <tr>
									    <td>7.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>
									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>							    
									    <td><div class="center jcenter display-flex">
									    <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>
										</div>
										</td>								   
									  </tr>
									  <tr>
									    <td>8.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>
									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>							    
									    <td><div class="center jcenter display-flex">
									  <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>	
										</div>
										</td>								   
									  </tr>
									  <tr>
									    <td>9.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>
									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>							    
									    <td><div class="center jcenter display-flex">
									    <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>	
										</div>
										</td>								   
									  </tr>
									   <td>10.</td>
									    <td>Diet-Coke</td>
									    <td>Food</td>
									    <td class="price" data-price="100">$100</td>	
									    <td>													
								 			<div class="quantity-col-2">
								 				<div class="quantity buttons_added text-center product-info">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id="quantity"><input type="button" value="+" class="plus">
												</div>
											</div>								
										</td>							    
									    <td><div class="center jcenter display-flex">
									   <button class="btn m-10"><a href="#">View</a>
									    </button>		
									    <button class="btn m-10"><a href="#">View</a>
									    </button>
										</div>
										</td>								   
									  </tr>
									</table>
								</div>
								<div class="pagination">
								  <a href="#" class="active">&laquo;</a>
								  <a href="#">1</a>
								  <a href="#">2</a>
								  <a href="#">3</a>
								  <a href="#">4</a>
								  <a href="#">5</a>
								  <a href="#">6</a>
								  <a href="#" class="active">&raquo;</a>
								</div>
							</div>
					
					</div>
		</section>
</section>


<?php include"../../include/footer.php" ?>
