<?php
class apps{
		
		public $hostname = "localhost";
		public $username = "root";
		public $password = "";
		public $database = "spac_form";
		public $links;
		
		public function __construct(){
			$this->links = mysqli_connect($this->hostname,$this->username,$this->password,$this->database);
			if($this->links->connect_error){
				echo "no connected";
			}else{
				echo "connected";
			}
		}
		
		public function insert($insert){
			$insert = $this->links->query($insert);
			if($insert){
				throw new exception;
			}
		}
	}
if(isset($_POST['submit'])){
		
		
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$membership = $_POST['membership'];
		$service = $_POST['service'];
		$branch_name = $_POST['branch_name'];
		$position = $_POST['position'];
		$message1 = $_POST['message1'];
		$message2 = $_POST['message2'];
		$message3 = $_POST['message3'];
		$message4 = $_POST['message4'];
		$attend = $_POST['attend'];
		$message5 = $_POST['message5'];
		
		$error = 0;
		$msg = "";
		
		
		
		if($error == 0){
		
			$insert = "INSERT INTO user VALUES('','$name', '$email', '$phone','$membership', '$service','$branch_name','$position','$message1','$message2','$message3','$message4','$attend','$message5')";
			if($insert){
				try{
					$object = new apps;
					$object->insert($insert);
					echo "Not inserted";
				}catch(exception $e){
					echo "inserted";
					
				}
			}
		
		
		}else{
			echo $msg;
		}

		if (isset($_POST['submit']))
    {   
    ?>
<script type="text/javascript">
window.location = "thanks.html";
</script>      
    <?php
    }
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SPAC-19</title>
	<link rel="icon" type="text/css" href="images/spac_logo.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	
	@import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);

/* Global */


.line-1{
    position: relative;
    top: 50%;  
    width: 24em;
    margin: 0 auto;
    border-right: 2px solid rgba(255,255,255,.75);
    font-size: 180%;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    transform: translateY(-50%);    
}

/* Animation */
.anim-typewriter{
  animation: typewriter 4s steps(44) 1s 1 normal both,
             blinkTextCursor 500ms steps(44) infinite normal;
}
@keyframes typewriter{
  from{width: 0;}
  to{width: 24em;}
}
@keyframes blinkTextCursor{
  from{border-right-color: rgba(255,255,255,.75);}
  to{border-right-color: transparent;}
}
</style>

</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="post">
				<span class="contact100-form-title">
					SPAC-19
				</span>

				<p class="line-1 anim-typewriter">Call for Ambassador <img src="images/Flag-globe-2.gif" style="height: 30px;"></p>


				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (example@abc.com)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="email" name="email" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="must given a valid BD number(+880)">
					<span class="label-input100">Phone *</span>
					<input class="input100" type="number" name="phone" placeholder="Enter Number Phone">
				</div>

				<div class="wrap-input100 bg1">
					<span class="label-input100">IEEE Membership No (optional)</span>
					<input class="input100" type="number" name="membership" placeholder="Enter Membership Number">
				</div>


				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Membership Year Count</span>
					<div>
						<select class="js-select2" name="service">
							<option>Please choose</option>
							<option>less than one year</option>
							<option>one year</option>
							<option>two years</option>
							<option>three years</option>
							<option>more than three years</option>
							
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>


                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Student Branch Name">
					<span class="label-input100">Institute/Student Branch Name *</span>
					<input class="input100" type="text" name="branch_name" placeholder="must have to write Institution's full name">
				</div>


				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Branch Ex-Com Position(optional)</span>
					<div>
						<select class="js-select2" name="position">
							<option>Please choose</option>
							<option>Chair</option>
							<option>Vice-Chair</option>
							<option>Secretary</option>
							<option>Treasurer</option>
							
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>


				<!-- <div class="wrap-input100 bg1">
					<span class="label-input100">Branch Ex-Com Position(optional)</span>
					<input class="input100" type="text" name="position" placeholder="only fill up this if you are an excom of your sb list:Chair,Vice-Chair,Secretary,Treasurer">
				</div> -->



				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please fill up this field">
					<span class="label-input100">Share your IEEE Experiences</span>
					<textarea class="input100" name="message1" placeholder="maximum of 250 words..."></textarea>
				</div>


				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please fill up this field">
					<span class="label-input100">Why Do You want to be an Ambassador of SPAC 2019?</span>
					<textarea class="input100" name="message2" placeholder="maximum of 250 words..."></textarea>
				</div>


				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please fill up this field">
					<span class="label-input100">How do you promote SPAC 2019 to your Institute?</span>
					<textarea class="input100" name="message3" placeholder="maximum of 250 words..."></textarea>
				</div>

                

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please fill up this field">
					<span class="label-input100">Why Should we Select you as an Ambassador of SPAC 2019?</span>
					<textarea class="input100" name="message4" placeholder="maximum of 250 words..."></textarea>
				</div>


				<div class="wrap-input100 validate-input input100-select bg1">
					<span class="label-input100">Did You attend SPAC 2018? </span>
					<div>
						<select class="js-select2" name="attend">
							<option>Please choose</option>
							<option>YES</option>
							<option>NO</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>


				<div class="wrap-input100 bg0 rs1-alert-validate">
					<span class="label-input100">Any Comment or Suggestion?</span>
					<textarea class="input100" name="message5" placeholder="Write your suggestion here..."></textarea>
				</div>


				<div class="container-contact100-form-btn">
					<input class="contact100-form-btn" type="submit" name="submit" value="Submit">
				</div>


				
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
