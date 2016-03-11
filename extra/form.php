<?php 
if(isset($_POST["submit"]))
{
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$title = $_POST["title"];
$company = $_POST["company"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$website = $_POST["website"];
$noemp = $_POST["noemp"];
$grossrev = $_POST["grossrev"];
$desc = $_POST["desc"];
$reason = $_POST["reason"];
$businessdur = $_POST["businessdur"];
$need = $_POST["need"];
$monthlydep = $_POST["monthlydep"];
$monthlyrent = $_POST["monthlyrent"];
$outstdloan = $_POST["outstdloan"];
$emailto = "info@mountainbackfunding.com";

//-----------------------------sending email to user -----------------------------------------//
	
	$subject = 'New message from website';
	//$message = 'hello';
	$headers = "From: domain@domain.com\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = '<html background:#ccc;><body style="background:#ccc;">
	<table>
	<tr>
	<td>First Name</td><td>'.$fname.'</td>
	</tr>
	<tr>
	<td>Last Name</td><td>'.$lname.'</td>
	</tr>
	<tr>
	<td>Title</td><td>'.$title.'</td>
	</tr>
	<tr>
	<td>Company</td><td>'.$company.'</td>
	</tr>
	<tr>
	<td>Address Line 1</td><td>'.$address1.'</td>
	</tr>
	<tr>
	<td>Address Line 2</td><td>'.$address2.'</td>
	</tr>
	<tr>
	<td>City</td><td>'.$city.'</td>
	</tr>
	<tr>
	<td>State</td><td>'.$state.'</td>
	</tr>
		<tr>
	<td>Zip</td><td>'.$zip.'</td>
	</tr>
	<tr>
	<td>Email</td><td>'.$email.'</td>
	</tr>
		<tr>
	<td>Phone</td><td>'.$phone.'</td>
	</tr>
	<tr>
	<td>Website</td><td>'.$website.'</td>
	</tr>
		<tr>
	<td># of Employee</td><td>'.$noemp.'</td>
	</tr>
	<tr>
	<td>Monthly Gross Revenue</td><td>'.$grossrev.'</td>
	</tr>
		<tr>
	<td>Company Description</td><td>'.$desc.'</td>
	</tr>
	<tr>
	<td>Reason For Seeking Capital?</td><td>'.$reason.'</td>
	</tr>
		<tr>
	<td>Business Started</td><td>'.$businessdur.'</td>
	</tr>
	<tr>
	<td>How much do you need</td><td>'.$need.'</td>
	</tr>
		<tr>
	<td>Average monthly deposit</td><td>'.$monthlydep.'</td>
	</tr>
	<tr>
	<td>Monthly Rent or Mortgage Payments/td><td>'.$monthlyrent.'</td>
	</tr>
	<tr>
	<td>Any other outstanding loan balance ?</td><td>'.$outstdloan.'</td>
	</tr>
	</table>';
	$message .= '</body></html>';

mail($emailto, $subject, $message, $headers);
//--------------------------------------------------------------------------------------------//
}
?>
<html>
<head>
<style>
.custom-form{
    width: 700px;
    margin: 0 auto;
    background: #F5F5F5;
    padding: 30px;
}
.custom-form label{
    display: block;
    padding: 10px 0;
    color: #1D1D1D;
}

.custom-form input[type="text"],.custom-form select,.custom-form input[type="email"]{
    width: 100%;
    height: 35px;
    border: 1px solid #ccc;
    border-radius: 5px;
padding: 0px 20px;
}
#left{
	width:50%;
}
.submit-button{
    background: #699EEF;
    padding: 10px 20px;
    border: 0px;
    text-transform: uppercase;
    font-size: 18px;
    color: #fff;
    margin: 20px;
}

.submit-button:hover{
 background: #094FB9;
}
</style>

</head>

<body>
<form action="" method="post">
<table class="custom-form">
<tr>
<td id="left">
<label for="fname">First Name</label>
<input type="text" name="fname" required="">
</td>
<td>
<label for="lname" required="">Last Name</label>
<input type="text" name="lname">
</td>
</tr>
<tr>
<td>
<label for="title">Title</label>
<input type="text" name="title">
</td>
<td>
<label for="company" required="">Company Name</label>
<input type="text" name="company">
</td>
</tr>
<tr>
<td>
<label for="address1" required="">Address Line 1</label>
<input type="text" name="address1">
</td>
<td>
<label for="address2" required="">Address Line 2</label>
<input type="text" name="address2">
</td>
</tr>
<tr>
<td>
<label for="city" required="">City</label>
<input type="text" name="city">
</td>
<td>
<table style="width:100%;">
<tr><td style="width:70%;"><label for="state">State</label>
<select name="state">
<option>--- state list ---</option>
<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select></td>
<td>
<label for="zip">Zip</label>
<input type="text" name="zip" style="width:100%;"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<label for="email" required="">Email</label>
<input type="email" name="email">
</td>
<td>
<label for="phone">Phone</label>
<input type="text" name="phone">
</td>
<tr>
<td colspan="2">
<label for="website">Company Website</label>
<input type="text" name="website">
</td>
</tr>
<tr>

<td>
<label for="noemp" required=""># of Employees</label>
<input type="text" name="noemp">
</td>
<td>
<label for="grossrev" required="">Monthly Gross Revenue</label>
<input type="text" name="grossrev">
</td>
</tr>
<tr>
<td colspan="2">
<label for="desc">Company Description (briefly tell us what your business does)</label>
<input type="text" name="desc">
</td>
</tr>
<tr>
<td colspan="2">
<label for="reason">Reason For Seeking Capital?</label>
<input type="text" name="reason">
</td>
</tr>
<tr>
<td colspan="2">
<label for="businessdur">Business Started</label>
<select name="businessdur">
<option value="less than 6 months">Less than 6 months ago</option>
<option value="between 6-24">Between 6 - 24 months</option>
<option value="over 24">Over 24 months</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">
<label for="need">How much do you need</label>
<input type="text" name="need">
</td>
</tr>
<tr>
<td colspan="2">
<label for="monthlydep">Average monthly deposit</label>
<input type="text" name="monthlydep">
</td>
</tr>

<tr>
<td colspan="2">
<label for="monthlyrent">Monthly Rent or Mortgage Payments</label>
<input type="text" name="monthlyrent">
</td>
</tr>

<tr>
<td colspan="2">
<label for="outstdloan">Any other outstanding loan balance ?</label>
<input type="text" name="outstdloan">
</td>
</tr>

<tr>
<td colspan="2" style="text-align:center"><input type="submit" name="submit" class="submit-button"></td>
</tr>

</table>
</form>
</body>
</html>