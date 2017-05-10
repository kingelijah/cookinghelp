<?php
require("indexpage.php");
?>
<?php
$nameerr = ""; $phonenumbererr = ""; $addresserr = ""; $servicedescriptionerr = ""; $emailerr = "";
$name = $phonenumber = $address = $servicedescription = $email = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
	$nameerr = "name is required";
	}
	else
	{
	$name = testinput($_POST["name"]);
	}
	
	if(empty($_POST["phonenumber"]))
	{
	$phonenumbererr = "phonenumber is required";
	}
	else
	{
	$phonenumber = testinput($_POST["phonenumber"]);
	}
	
	if(empty($_POST["address"]))
	{
	$addresserr = "address is required";
	}
	else
	{
	$address = testinput($_POST["address"]);
	}
	
	if(empty($_POST["servicedescription"]))
	{
	$servicedescriptionerr = "please describe your service";
	}
	else
	{
	$servicedescription = testinput($_POST["servicedescription"]);
	}
	
	if(empty($_POST["email"]))
	{
	$emailerr = "email is required";
	}
	else
	{
	$email = testinput($_POST["email"]);
	}
	function testinput($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	$to = 'ealeakhue@gmail.com';
	$subject = 'cooking help';
	$body = $servicedescription;
	$header = "from: $email";
	 mail($to, $subject, $body, $header);
}


     ?>
<section class="form-section" style="font-family:'Pirata One',serif; font-size:'40';">
<hr class="hr"></hr>
<div class="container">

<div class="form-holder col-md-10 col-md-push-1 text-center">

<div class="ribbon">
<i class="fa fa-star"></i>
</div>
<h2 style="font-family:'Pirata One',serif; font-size:'40';">Book A service</h2>
<h3 style="font-family:'Bilbo',serif;">make a reservation today</h3>
<div class="row">
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal id="booking-form">
<div class="form-group">
<label for="name" class="control-label col-sm-2" >NAME:</label>
<div class="col-sm-6">
<input class="form-control" placeholder="enter name" type="text" name="name" />
<span class="error" style="color:red">*<?php echo $nameerr;?></span>
</br>
</div>
</div>
<div class="form-group">
<label for="inputnumber" class="control-label col-sm-2">phone Number:</label>
<div class="col-sm-6">
<input class="form-control" placeholder="enter phone number" type="text" name="phonenumber"/>
<span class="error" style="color:red">*<?php echo $phonenumbererr;?></span>
</br>
</div>
</div>
<div class="form-group">
<label for="inputaddress" class="control-label col-sm-2">Address:</label>
<div class="col-sm-6">
<input class="form-control" placeholder="enter address" type="text" name="address"/>
<span class="error" style="color:red">*<?php echo $addresserr;?></span>
</br>
</div>
</div>
<div class="form-group">
<label for="inputemail" class="control-label col-sm-2">Email:</label>
<div class="col-md-6">
<input class="form-control" placeholder="enter email" type="text" name="email"/>
<span class="error" style="color:red">*<?php echo $emailerr;?></div>
</br>
</div>
</div>
<div class="form-group">
<label for="inputservice" class="control-label col-sm-2">service description:</label>
<div class="col-sm-6">
<textarea class="form-control" rows="4" name="servicedescription"></textarea>
<span class="error" style="color:red">*<?php echo $servicedescriptionerr;?></span>
</br>
</div>
</div>
<div class="form-group">
<div class="col-sm-6 col-sm-offset-2">
<button class=" btn btn-success" name="submit">submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</section>
