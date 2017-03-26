<!DOCTYPE html>
<html>
  <head>
    <?php
    	require 'header.php'
    ?>
  </head>

	<body class="#00bfa5 teal accent-4">
	<br>
	<br>
	<br>
	<br>


		<div class="row">
		    <form action="process.php" method="post" class="col s12 m4 offset-m4 #ffffff white" style="border:solid green; border-radius: 15px; padding: 16px 30px ">
		    	
		    	<h4 style="text-align: center;"> Login </h4>
		    	<div class="row">
			        <div class="input-field col s12 m12">
			          <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="myname">
			          <label for="name">Name</label>
			        </div>
		        
			    	<div class="row">
				        <div class="input-field col s12 m12">
				          <input id="password" type="password" class="validate" name="mypassword">
				          <label for="password">Password</label>
				        </div>
			    	</div>
		    	</div>

		    	<button class="btn waves-effect waves-light col m12" type="submit" name="login" value="submit_login">Submit
    				<i class="material-icons right">send</i>
				</button>

		    </form>
		</div>

	    <!--Import jQuery before materialize.js-->
	    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	    <script type="text/javascript" src="js/materialize.min.js"></script>

	    <!-- initialization -->
	    <script type="text/javascript">
	    	$(document).ready(function(){
	        $('.slider').slider();
	         });
	    </script>

	</body>
</html>
