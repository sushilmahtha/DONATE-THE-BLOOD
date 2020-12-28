<?php 
	// include header file
	include ('include/header.php');
?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
								<option value="">-- Select --</option>
								    <optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
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
									
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						To be the best Online Blood Center in India.<BR> Dedicated to quality, integrity, service, and excellence in everything we do, This website  works to ensure reliable and streamlined access to a stable supply of safe blood and related products wherever they are needed. We aim to become the industry’s standard-bearer in providing the highest level of service to all the various stakeholders we serve—from financial contributors, blood donors, and blood drive sponsors to hospital partners, and biotechnology companies.
						</p>
						<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To be the best Online Blood Center in India.<BR> Dedicated to quality, integrity, service, and excellence in everything we do, This website  works to ensure reliable and streamlined access to a stable supply of safe blood and related products wherever they are needed.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To wipe off the scarcity of blood and ensure availability of safe and quality blood and other blood components, round the clock and throughout the year. This will lead to alleviation of human sufferings, even to the far-flung remote areas in the country.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
							
							Through effective outreach to donors, continual development of biomedical expertise, and brand-building partnerships with the community, blood drive sponsors, and health care facilities, Nebraska Community Blood Bank connects those who need blood with those generous volunteers who give.
								</p>
		
		</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>