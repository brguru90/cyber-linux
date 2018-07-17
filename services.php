<?php include("header.php"); ?>
<script type="text/javascript" language="javascript">  
   $(document).ready(function() {   
      $("#catagories a").click(function(event){ 
         event.preventDefault(); 
      });  
   }); 
   </script> 
	 	<div id="left_side">
	 		<div id="catagories">
	 			<h2>Services:</h2>
	 			<ul>
	 				<li><a href="#">Computers Installation & Repair</li></a>
	 				<li><a href="#">Printers & Scanners Installation & Repair</li></a>
	 				<li><a href="#">CCTV Installation & Repair</li></a>
	 				<li><a href="#">OS,Antiviruse & Other software installation</li></a>
	 				<li><a href="#">Xerox,Printing</li></a>
					<li><a href="#">Recharge,System utility equipment sellings</li></a>
	 			</ul>
	 		</div><!--end catagories-->

	 		<div id="payment_area" style="display:none">
	 			
	 			<h2>Payments</h2>
	 				<a class="links" href="#"><img src="payoneer.jpg"></a>
	 				<a class="links" href="#"><img src="skrill.jpg"></a>
	 				<a class="links" href="#"><img src="mastercard.jpg"></a>
	 				<a class="links" href="#"><img src="americanexpress.jpg"></a>
	 		</div><!--end payments area-->
	 			
	 		<div id="Shipping" style="display:none">
	 			 <h2>Shipping</h2>
	 				<a class="links" href="#"><img src="ups.jpg"></a>
	 				<a class="links" href="#"><img src="fedex.jpg"></a>
	 				<a class="links" href="#"><img src="dhl.jpg"></a>
	 				<a class="links" href="#"><img src="americanexpress.jpg"></a>
	 		</div><!--end shipping area-->
	 		<div id="contact" style="display:none">
	 		<h2>Contact Us</h2>
	 			<p>Address:</br>
	 			39 United States.
	 			</br>
	 			Phone: +880-1682651827
	 			</p>
	 		</div><!--end contact area-->
	 	</div><!--end left_side area-->

	 	<div id="right_side">

	 	<div id="product_and_details">
	 		<div id="product">
	 			<img src="camera.png">
	 		</div>
	 			<div id="details">
	 			<h2>Digital Camera1</h2>
	 			<ul>
	 			<li>20 Mega pixel</li>
	 			 <li>Auto Flash</li>
	 			 <li>2 Years warranty</li>
	 			 <li>Face Ditection</li>
	 			 <li>1080px Video recording</li>
	 			 <li>Battery Life 36hr</li>
	 			 <li>Zoom 4X</li>
	 			 </ul>
	 			 <small>Price: $100</small>
	 			 </div>
	 			
	 	
	 	</div><!-- end of product and details area-->

	 		<!--start other product area-->


	 	<div id="our_product">
			<h2> Our Other Products</h2>

				 		<div id="product_container">
				 			<div id="images">
				 				<img src="products/nicon.png">
				 			</div>
				 			<h3>Digital Camera2</h3>
				 			<ul>
				 			<li>20 Mega pixel</li>
				 			 <li>Auto Flash</li>
				 			 <li>2 Years warranty</li>
				 			 <li>Face Ditection</li>
				 			 <li>1080px Video recording</li>
				 			 <li>Battery Life 36hr</li>
				 			 <li>Zoom 4X</li>
				 			 </ul>
				 			 <small>Price: $100</small>
				 			
				 		</div>


 		<div id="product_container">
 			<div id="images">
 				<img src="products/printer.png">
 			</div>
 			<h3>Digital Camera3</h3>
 			<ul>
 			 <li>20 Mega pixel</li>
 			 <li>Auto Flash</li>
 			 <li>2 Years warranty</li>
 			 <li>Face Ditection</li>
 			 <li>1080px Video recording</li>
 			 <li>Battery Life 36hr</li>
 			 <li>Zoom 4X</li>
 			 </ul>
 			 <small>Price: $100</small>
 		</div>
				 	  
				 		
				 		
				 	</div><!--end of our product area-->
				 	<div id="additional_area"> </div>
				 		
				 	</div><!--end of right area-->
 	


 	 <?php include("footer.php"); ?>