<?php 
  //include header file
  include ('include/header.php');
  if(isset($_POST['submit'])){
	if(isset($_POST['term'])==true){
		//   name validation program
		  if(isset($_POST['name']) && !empty($_POST['name'])){
			//check name with the pattern of name
			if( preg_match('/^[A-Za-z\s]+$/', $_POST['name']) ){
				$name=$_POST['name'];
			}
			else{
				$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong> Only lower and upper case and space are allowed in name.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		  }
		  else{
			$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill the name field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		  }

		//   gender validation program
		if(isset($_POST['gender']) && !empty($_POST['gender'])){
			$gender= $_POST['gender'];
		  }
		  else{
			$genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select gender.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		  }

		//   day validation program
		if(isset($_POST['day']) && !empty($_POST['day'])){
			$day= $_POST['day'];
		  }
		  else{
			$dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select the day field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		  }

		//   month validation program
		if(isset($_POST['month']) && !empty($_POST['month'])){
			$month= $_POST['month'];
		  }
		  else{
			$monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select the month field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		  }

		// year validation program
		if(isset($_POST['year']) && !empty($_POST['year'])){
			$year= $_POST['year'];
		  }
		  else{
			$yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select the year field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		  }

		//   validation program for blood group
		if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
			$blood_group= $_POST['blood_group'];
		  }
		  else{
			$blood_groupError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select the blood group field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		  }

		//   city validation program
		if(isset($_POST['city']) && !empty($_POST['city'])){
			//check city with the pattern of city
			if( preg_match('/^[A-Za-z\s]+$/', $_POST['city']) ){
				$city=$_POST['city'];
			}
			else{
				$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong> Only lower and upper case and space are allowed in city.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		 }
		 else{
			$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill the city field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		 </div>';
		 }

		//  validation program for contact number
		if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
			//check city with the pattern of contact_no
			if( preg_match('/\d{10}/', $_POST['contact_no']) ){
				$contact=$_POST['contact_no'];
			}
			else{
				$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong> Contact Pattern did not match .</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		 }
		 else{
			$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill the contact number field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		 </div>';
		 }

		//  validation program for password
		if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])){
			if(strlen($_POST['password'])>=6){
				if($_POST['password']==$_POST['c_password']){
					$password=$_POST['password'];
				}
				else{
					$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong> Passwords are not same.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				 </div>';
				}
			}
			else{
				$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong> Password length should be greater than 6.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			 </div>';
			}
		}
		else{
			$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill the password field and confirm password field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		 </div>';
		}
			//validation program for email
			if(isset($_POST['email']) && !empty($_POST['email'])){
				//check city with the pattern of email
				$pattern= "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
				if( preg_match($pattern, $_POST['email']) ){
					$check_email=$_POST['email'];
					$sql= "SELECT email from donor WHERE email=$check_email";
					$result=mysqli_query($connection,$sql);
					if(mysqli_num_rows($result)>0){
						$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong> Sory this email already exists.</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					}
					else{
						$email=  $_POST['email'];
					}
				}
				else{
					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong> Please enter valid email adress.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>';
				}
			}
			else{
				$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please fill the email field.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			}

			// insertion query to database 
			if(isset($name) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($city) && isset($contact) && isset($password) && isset($email) && isset($blood_group)){
				$donorDOB = $day."-".$month."-".$year;
				$password=md5($password);
				$sql= "INSERT INTO donor (`name`, `gender`, `dob`, `city`, `contact_no`, `save_life_date`, `password`, `email`,`blood_group`) VALUES ('$name', '$gender', '$donorDOB', '$city', '$contact', '0', '$password', '$email','$blood_group')";

				if(mysqli_query($connection,$sql)){
					header('Location: signin.php');
				}
				else{
					$sumbitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Data is not inserted,Try again.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';

				}
			}
		
// End of if condition in term validation
}

	  else{
		  $termError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Please agree with our terms and conditions.</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>';
	  }

  }
?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 20px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 35%;
	}
	.bhum{
		padding: .375rem .25rem;
		margin: 0.2em;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					<hr class="red-bar">
						
          <!-- Error Messages -->
		  <?php	
		  if(isset($termError)) echo $termError; 
		  if(isset($submitSuccess)) echo $submitSuccess;
		  if(isset($sumbitError)) echo $sumbitError;
		  ?>

				<form class="form-group" action="" method="post">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php	if(isset($name)) echo $name; ?>">
					<!--Error message-->
				<?php	if(isset($nameError)) echo $nameError; ?>
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
               <?php	if(isset($blood_group)) echo '<option selected="" value="' .$blood_group. '">'.$blood_group.'</option>';  ?>
			    <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
			  <!--error message-->
			  <?php	if(isset($blood_groupError)) echo $blood_groupError; ?>
            </div><!--End form-group-->
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;" <?php if(isset($gender)){if($gender =="Female"){ echo "checked";}} ?>>
				   		<!--Error message-->
					<?php	if(isset($genderError)) echo $genderError; ?>
				    </div><!--gender-->
				    <div class="form-inline">
              <label for="name">Date of Birth &nbsp</label><br>
              <select class="form-control demo-default bhum" id="date" name="day" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
				<?php	if(isset($day)) echo '<option selected="" value="' .$day. '">'.$day.'</option>';  ?>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default bhum" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
				<?php	if(isset($month)) echo '<option selected="" value="' .$month. '">'.$month.'</option>';  ?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default bhum" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
				<?php	if(isset($year)) echo '<option selected="" value="' .$year. '">'.$year.'</option>';  ?>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>
			</div><!--End form-group-->
			    		<!--Error message-->
				<?php	if(isset($dayError)) echo $dayError; ?>
				<?php	if(isset($monthError)) echo $monthError; ?>
				<?php	if(isset($yearError)) echo $yearError; ?>
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" title="Please write correct email" class="form-control"  value="<?php	if(isset($email)) echo $email; ?>">
						<!--error message-->
					<?php	if(isset($emailError)) echo $emailError; ?>
					</div>
				
				
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no"  placeholder="870*******" class="form-control" required pattern="^\d{10}$" title="11 numeric characters only" maxlength="11"  value="<?php	if(isset($contact)) echo $contact; ?>">
            <!--error message-->
			<?php	if(isset($contactError)) echo $contactError; ?>
			</div>
			<!--End form-group-->
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
				<option value="">-- Select --</option><?php	if(isset($city)) echo '<option selected="" value="' .$city. '">'.$city.'</option>';  ?> <optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
							<option value="East champaran" >East champaran</option>
							<option value="Motihari" >Motihari</option>
							<option value="Mehsi" >Mehsi</option>
							<option value="NH28" >NH28</option>
							<option value="Chakia" >Chakia</option>
							<option value="Pipra" >Pipra</option>
							<option value="Jivdhara" >Jivdhara</option>
							<option value="Harpur" >Harpur</option>
							<option value="Mangrahi" >Mangrahi</option>
							<option value="Bakhari Nazir" >Bakhari Nazir</option>
							<option value="Kothia" >Kothia</option>
							<option value="Madhuban" >Madhuban</option>
							<optgroup title="Assam" label="&raquo; Assam"></optgroup>
							<option value="Baksa" >Baksa</option>
							<option value="Guwahati" >Guwahati</option>
							<option value="Nalbari" >Nalbari</option>
							<option value="Barpeta Road" >Barpeta Road</option>
							<option value="Kokrajhar" >Kokrajhar</option>
							<option value="Bijni" >Bijni</option>
							<option value="Jorhat" >Jorhat</option>
							<option value="Tezpur" >Tezpur</option>
							<option value="Dibrugarh" >Dibrugarh</option>
							<option value="Bongaigaon" >Bongaigaon</option>
							<option value="Dhemaji" >Dhemaji</option>
							<option value="Rangia" >Rangia</option>


							<optgroup title="Jharkhand" label="&raquo; Jharkhand"></optgroup>
							<option value="Daltonganj" >Daltonganj</option>
							<option value="Garhwa" >Garhwa</option>
							<option value="Latehar" >Latehar</option>
							<option value="Dhanbad Road" >Dhanbad Road</option>
							<option value="Ranchi" >Ranchi</option>
							<option value="Chatra" >Chatra</option>
							<option value="Bokaro" >Bokaro</option>
							<option value="chandwa" >Chandwa</option>
							<option value="Gumla" >Gumla</option>
							<option value="Khunti" >Khunti</option>
							<option value="Jamshedpur" >Jamshedpur</option>
							<option value="Khalari" >Khalari</option>

							<optgroup title="West Bengal" label="&raquo; West Bengal"></optgroup>
							<option value="Kolkata" >Kolkata</option>
							<option value="Jadavpur" >Jadavpur</option>
							<option value="Baruipur" >Baruipur</option>
							<option value="NH14" >NH14</option>
							<option value="Howrah" >Howrah</option>
							<option value="Narendrapur" >Narendrapur</option>
							<option value="Canning" >Canning</option>
							<option value="Haridevpur" >Haridevpur</option>
							<option value="Salkia" >Salkia</option>
							<option value="Baranagar" >Baranagar</option>
							<option value="Kudghat" >Kudghat</option>
							<option value="Madhyamgram" >Madhyamgram</option>
							</select>
    	        		<!--error message-->
		<?php	if(isset($cityError)) echo $cityError; ?>
			</div><!--city end-->
	
	
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
            	<!--error message-->
			<?php	if(isset($passwordError)) echo $passwordError; ?>
			</div><!--End form-group-->
            <div class="form-inline">
              <input type="checkbox" checked="" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>