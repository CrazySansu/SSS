<?php $title = 'Log in'; include("basicCont.php"); ?>


<!-- MAIN CONTENT -->

<div id="main" class="container">

<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"  class="active" ><a href="#pizza" aria-controls="pizza" role="tab" data-toggle="tab">Pizza</a></li>
    <li role="presentation"><a href="#sides" aria-controls="sides" role="tab" data-toggle="tab">Sides</a></li>
    <!-- <li role="presentation"><a href="#myo" aria-controls="myo" role="tab" data-toggle="tab">Make your own</a></li> -->
    <button id="out-btn" style="float: right"> <a href="loginn.html"> Checkout</a></button>
  </ul>
<!--  -->

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="pizza">
    	<nav class="row">
    		<section class="col-lg-3">
    			<h3>Veg Extravaganza</h3>
    			<div class="category-tile">
    				<img src="Images/vegE.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
    		</section>

    		<section class="col-lg-3">
    			<h3>Peppy Paneer</h3>
    			<div class="category-tile">
    				<img src="Images/peppy.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
    		</section>
    		
    		<section class="col-lg-3">
    			<h3>Spicy Triple Tango</h3>
    			<div class="category-tile">
    				<img src="Images/spicy.jpg" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  			
    			</div>
    		</section>

    		<section class="col-lg-3">
    			<h3>Double Cheese Margherita</h3>
    			<div class="category-tile">
    				<img src="Images/dcm.png" alt="image">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>    
				</div>
    		</section>
    		<hr style="width: 90% ; border-top: 1px solid #fff;">
    		<section class="col-lg-3" style="clear: left;">
    			<h3>Chicken Mexicana</h3>
    			<div class="category-tile">
    				<img src="Images/chknmx.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
    		</section>

    		<section class="col-lg-3">
    			<h3>Chicken Golden Delight</h3>
    			<div class="category-tile">
	    			<img src="Images/cgd.png" alt="image">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>    
				</div>
    		</section>
    		
    		<section class="col-lg-3">
    			<h3>Chicken Lovers</h3>
    			<div class="category-tile">
    				<img src="Images/chknLvrs.jpg" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
    		</section>

    		<section class="col-lg-3">
    			<h3>Chicken Fiesta</h3>
    			<div class="category-tile">
    				<img src="Images/fiesta.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
    		</section>    		
    	</nav>
    </div>

    <div role="tabpanel" class="tab-pane fade" id="sides">
    	<nav id="pizza" class="row">
    		<section class="col-lg-3">
    			<h3>Cheese Jalapeno Dip</h3>
    			<div class="category-tile">
    				<img src="Images/cjd.png" alt="image">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>    
				</div>
    		</section>
    		
    		<section class="col-lg-3">
    			<h3>Cheesy Dip</h3>
    			<div class="category-tile">
    				<img src="Images/cd.png" alt="image">
			 		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   	
			 	</div>
    		</section>
    		
    		<section class="col-lg-3">
    			<h3>Coke</h3>
    			<div class="category-tile">
    				<img src="Images/Coke.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
    			
    		</section>

    		<section class="col-lg-3">
    			<h3>Stuffed Garlic Bread</h3>
    			<div class="category-tile">
    				<img src="Images/sgb.png" alt="image">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>    
				</div>
    		</section>
    	</nav>
    </div>

    <!-- <div role="tabpanel" class="tab-pane" id="myo">
    	
    </div> -->	
  </div>

</div>


<!-- END OF MAIN CONTENT -->


<?php include("basicCont2.php"); ?>