<?php include"../../include/nav.php" ?>

<section class="deals-on-product">
		<section class="order-status-filter p-20">
			
				<hr class="line">
			
				<form class="search-container m-b">
				    <input type="text" id="search-bar" placeholder="Search By Purchase Order no">
				    <a href="#"><i class="fas fa-search search-icon"></i></a>
				</form>
				<form class="search-container m-b">
				    <input type="text" id="search-bar" placeholder="Search By Order no">
				    <a href="#"><i class="fas fa-search search-icon"></i></a>
				</form>
				
						<div class="catelouge-section1 display-flex m-b center">
							<div class="col-70">
										
									
								
								<div include="form-input-select()" id="button-width">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value="" hidden>Auction Type</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
									<div include="form-input-select()" id="button-width">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value=""
									            hidden
									    >Category</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
									<div include="form-input-select()" id="button-width">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value=""
									            hidden
									    >From Date</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
									<div include="form-input-select()" id="button-width">
									  <select required>
									    <!--
									      This is how we can do "placeholder" options.
									      note: "required" attribute is on the select
									    -->
									    <option value=""
									            hidden
									    >To Date</option>

									    <!-- normal options -->
									    <option value="1">Option 1</option>
									    <option value="2">Option 2</option>
									    <option value="3">Option 3</option>
									    <option value="4">Option 4</option>
									    <option value="5">Option 5</option>
									  </select>
									</div>
									
									</div>
									
									 <div class="col-20 ">
									 <button class="btn">Filter</button>
									</div>
						</div>
						<div class="table-inside">
									<table id="t01">
									  <tr>
									    <th>No.</th>
									    <th>Date</th> 
									    <th>Purchase Order No</th>
									    <th>Order No</th>
									    <th>Auction Id</th>
									    <th>Due Date</th>
									    <th>Balance Amount</th>
									    <th>Auction Type</th>
									    <th>Status</th>
									    <th>Auction</th>
									  </tr>
									  <tr>
									    <td>1.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									    <td class="wid-2">23-3-18</td>
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>Paid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
									    </button>
										</div>
									    </td>
									    
									  </tr>
									    <tr>
									    <td>2.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									    <td class="wid-2">23-3-18</td>  
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>UnPaid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
									    </button>
										</div>
									    </td>
									    
									  </tr>
									  <tr>
									    <td>3.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									   <td class="wid-2">23-3-18</td>   
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>Paid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
									    </button>
										</div>
									    </td>
									    
									  </tr>
									    <tr>
									    <td>4.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									    <td class="wid-2">23-3-18</td>  
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>unPaid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
									    </button>
										</div>
									    </td>
									    
									  </tr>
									     <tr>
									    <td>5.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									    <td class="wid-2">23-3-18</td>  
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>unPaid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
									    </button>
										</div>
									    </td>
									    
									  </tr>
									     <tr>
									    <td>6.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									    <td class="wid-2">23-3-18</td>  
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>unPaid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
									    </button>
										</div>
									    </td>
									    
									  </tr>
									     <tr>
									    <td>7.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									    <td class="wid-2">23-3-18</td>  
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>unPaid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
									    </button>
										</div>
									    </td>
									    
									  </tr>
									     <tr>
									    <td>8.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									    <td class="wid-2">23-3-18</td>  
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>unPaid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
									    </button>
										</div>
									    </td>
									    
									  </tr>
									     <tr>
									    <td>9.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									    <td class="wid-2">23-3-18</td>  
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>unPaid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
									    </button>
										</div>
									    </td>
									    
									  </tr>
									     <tr>
									    <td>10.</td>
									    <td class="wid-2">23-3-18</td>
									    <td class="wid-2">po-S-2022</td>
									    <td>#B-1345</td>
									    <td>ind-525</td>
									    <td class="wid-2">23-3-18</td>  
									    <td>$6,970</td>
									    <td>Indivitual</td>
									    <td>unPaid</td>
									    <td>
									    <div class="btn-edit">
									    <button class="btn"><a href="#">View</a>
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
						
						
		</section>
</section>
<?php include"../../include/footer.php" ?>
