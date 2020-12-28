<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
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
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
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
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->
		<?php

		if((isset($_GET['city']) && !empty($_GET['city'])) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))){
			$city=$_GET['city'];
			$blood_group=$_GET['blood_group'];
			$sql= "SELECT * FROM donor WHERE city='$city' OR blood_group='$blood_group'";
			$result= mysqli_query($connection,$sql);
			if(mysqli_num_rows($result)>0){
				while($row= mysqli_fetch_assoc($result)){
					if($row['save_life_date']=='0'){
						echo'
						<div class = "col-md-3 col-sm-12 col-lg-3 donors_data">
							<span class="name">'.$row['name'].'</span>
							<span>'.$row['city'].'</span>
							<span>'.$row['gender'].'</span>
							<span>'.$row['blood_group'].'</span>
							<span>'.$row['email'].'</span>
							<span>'.$row['contact_no'].'</span>
						</div>
						';
					}
					else{
						echo '
						<div class=" col-md-3 col-sm-12 col-lg-3 donors_data">
						<span class="name">'.$row['name'].'</span>
						<span>'.$row['city'].'</span>
						<span>'.$row['blood_group'].'</span>
						<span>'.$row['gender'].'</span>
						<h4 class ="name test-center" >Donated</h4>
						</div>
						';
					}
				}
			}
			else{
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>data not found.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>';
			}

			// end of if
		}
		?>

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
<script type="text/javascript">
	
	$(function(){
		$("#search").on('click',function(){

        var city=$("#city").val();
        var blood_group=$("#blood_group").val();

        $.ajax('ajaxsearch.php',{
        	type:'GET',
        	data:{city:city,blood_group:blood_group},
        	success:function(data){
        		if(!data.error){
        			$("#data").html(data);
        		}
        	}

        });


		});
	});


</script>