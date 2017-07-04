<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css01/Design.css">
	<title>Home</title>
</head>
<body id="body">

<!-- End of the Container-->
<div class="container-fluid">
	
<!-- Start of the Page Header-->
	<div class="row" id="col_1">
		<div class="col-md-3" >
			<img src="images/Logo.png" id="logo">
		</div>

		<div class="col-md-5" >
			
		</div>

		<div class="col-md-4" >
			<div class="row">
				<div class="col-md-6" ><a href="###"><span id="login"><b>Login</b></span></a></div>
				<div class="col-md-6"><a href="###"><span id="registar"><b>Registar</b></span></a></div>
			</div>

			<div class="row">
				<div class="col-md-12" id="button">
					<button class="btn" id="add_button" >ADD ADVERTIESMENT</button>
				</div>
			</div>
		</div>
<!-- End of the Page Header-->
	</div>


<!-- Start of the Navgation bar-->
	<div class="row">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Home.html">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Advertiesment
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Car Details.php">Brandnew Car</a></li>
          <li><a href="#">Reuse Car</a></li>
        </ul>
      </li>
      <li><a href="Register.html">Registration</a></li>
      <li><a href="#">Login</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
      
    </ul>
    <form class="navbar-form navbar-right">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
  </div>
</nav>
<!-- End of the Navgation bar-->
	</div>

<!-- Star of the  form-->
<div class="row">
	<div class="row">
		<div class="col-md-12">
    		<div class="well well-lg"><center><h1> You Can Add Your Advertiesment </h1></center></div>
   		</div>
	</div></div>

	<div class="row">
	<!-- Start Car details-->
		<div class="col-md-12">
    		<div class="well well-lg"><center><h2> Brandnew Cars</h2></center>
    		<form action="form.php">
    			<fieldset>
    				<legend>Car Details</legend>
    				<label>Title of the car</label><br/>
    				<input type="text" name="C_title"  placeholder="Title" size="100"><br/><br/>

    				<label>Made in</label><br/>
    				<input type="text" name="country"  placeholder="Made in" size="100"><br/><br/>

    				<label>Price of the car</label><br/>
    				<input type="text" name="price"  placeholder="Price" size="100"><br/><br/>

    				<label>Year of the car made</label><br/>
    				<input type="text" name="year"  placeholder="Year" size="100"><br/><br/>

            <label>Short Discribtion of the car</label> <br/>
          <textarea name="discription" rows="5" cols="101" placeholder="Discription"></textarea><br/><br/>

    				<label>Availability</label><br/>
    			   <input type="radio" name="available" value="A"/> <lable>Available</lable>
              <input type="radio" name="available" value="S"/> <lable>Sold</lable><br/><br/>
    						<div class="col-md-6" id="btn1">
    				<input type="button" value="Reset" id="bt"/>
    				<input type="submit" value="Submit" id="btn"/>

    				</div>
            <!-- End Car details-->
    			    				

    			</fieldset>
    		</form>
    		</div>
    		</div>

    <!--End registration form-->
	</div>

<!-- Star of the Register form-->
</div>





  <div class="row">
  <!-- Brand of the car-->
    <div class="col-md-12">
        <div class="well well-lg"><center><h2> Brand</h2></center>
        <form action="Brand_Action.php">
          <fieldset>
            <legend>Brand</legend>
            <label>Brand Name</label><br/>
            <input type="text" name="C_title"  placeholder="Brand Name" size="100"><br/><br/>

            <label>Email</label><br/>
            <input type="email" name="B_email"  placeholder="Email" size="100"><br/><br/>

            
                <div class="col-md-6" id="btn1">
            <input type="button" value="Reset" id="bt"/>
            <input type="submit" value="Submit" id="btn"/>

            </div>    

          </fieldset>
        </form>
        </div>
        <!-- End Car Brand of the car-->
        </div>


  <div class="row">
  <!-- Model of the car-->
    <div class="col-md-12">
        <div class="well well-lg"><center><h2> Model</h2></center>
        <form action="Model_Action.php">
          <fieldset>
            <legend>Model</legend>
            <label>Model Name</label><br/>
            <input type="text" name="C_Model"  placeholder="Model Name" size="100"><br/><br/>

            

            
                <div class="col-md-6" id="btn1">
            <input type="button" value="Reset" id="bt"/>
            <input type="submit" value="Submit" id="btn"/>

            </div>    

          </fieldset>
        </form>
        </div>
        <!-- End Model of the car-->
        </div>




<!-- Start of the Footer -->
	<div class="row">

		<div class="col-md-12" id="footer" >
		<div class="row">
			<div class="col-md-6">
                 <div class="col-md-12"><center>
                 	<span id="footerMenu"><br/><a href="###"> Home</a>  | 
                 							   <a href="###"> News </a> | 
                 							   <a href="Registraion.html"> Registraion </a> | 
                 							   <a href="###"> Login </a> | 
                 							   <a href="###"> Contact Us </a> | 
                 							   <a href="###"> About Us </a> </span>
                 							</center>
                 </div>
			</div>

			<div class="col-md-12">
			<center> </center>
			</div>

			
		</div>

		<div class="row">
			<div class="col-md-12">
				<center><span id="car"> ABC-Car</span><span id="sale">Sale</span></center>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12" ><center>
				<span id="end">@2017 Hearst Communications,Inc.All Rights Reserved.... Privacy Policy | Your Calfomila Privacy Rights | Internet-Based Ads | Terms of Use</span></center>
			</div>
		</div>
			
		</div>
<!-- End of the Footer -->		
	</div>



<!-- End of the Container-->
</div>
</body>
</html>