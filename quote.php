<?php include'inc/header.php'; ?>
      
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('img/quote-top.jpg'); background-size: cover; background-position: 50% -40px;" data-stellar-background-ratio="0.4">

            <div class="container clearfix">
                <h1>Request Quote</h1>
                <span>Get a Free Quote!</span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Request Quote</li>
                </ol>
            </div>

        </section>
		<section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                 

                    <div class="col_full nobottommargin" style="    background: #F1F1F1;
    padding: 20px;">


                        <h3>Get a Free Quote</h3>
						<?php 
						if(isset($_POST["submit"])){
						$fname = $_POST['fname'];
						$lname = $_POST['name'];
						$email =  $_POST['email'];
						$phone =  $_POST['phone'];
						$city =  $_POST['city'];
						$state =  $_POST['state'];
						$pcode =  $_POST['pcode'];
						$deal =  $_POST['deal'];
						$strategy =  $_POST['strategy'];
						$hear =  $_POST['hear'];
						$emailto = "info@mountainbackfunding.com";
						
						//-----------------------------sending email to user -----------------------------------------//
	
	$subject = 'New Request a Quote From 6 Day Loans';
	//$message = 'hello';
	$headers = "From: 6Dayloans.com\r\n";
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
	<td>Phone</td><td>'.$phone.'</td>
	</tr>
	<tr>
	<td>Email</td><td>'.$email.'</td>
	</tr>
	<tr>
	<td>City</td><td>'.$city.'</td>
	</tr>
	<tr>
	<td>State</td><td>'.$state.'</td>
	</tr>
	<tr>
	<td>Postal Code</td><td>'.$pcode.'</td>
	</tr>
	<tr>
	<td>About Deal</td><td>'.$deal.'</td>
	</tr>
		<tr>
	<td>About Strategy</td><td>'.$strategy.'</td>
	</tr>
	<tr>
	<td>Where did you hear? *</td><td>'.$hear.'</td>
	</tr>
	</table>';
	$message .= '</body></html>';
mail( $email, $subject, $message, $headers );
mail( $emailto, $subject, $message, $headers );
//--------------------------------------------------------------------------------------------//
						}
						?>

                        <p> Fill out our form below and receive a response from one of our Account Executives in 24 hours or less.</p>

                         <form class="nobottommargin" id="template-contactform" name="template-contactform" action="quote.php" method="post" novalidate="novalidate">

                            <div class="form-process"></div>

                            <div class="col_half">
                                <label for="template-contactform-name">First Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="fname" value="" class="sm-form-control required" aria-required="true">
                            </div>

                            <div class="col_half col_last">
                                <label for="template-contactform-email">Last Name <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="lname" value="" class="required email sm-form-control" aria-required="true">
                            </div>

                            <div class="col_half">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control">
                            </div>
							 <div class="col_half col_last">
                                <label for="template-contactform-phone">Email</label>
                                <input type="text" id="template-contactform-phone" name="email" value="" class="sm-form-control">
                            </div>
<div class="col_one_third">
                                <label for="template-contactform-phone">City</label>
                                <input type="text" id="template-contactform-phone" name="city" value="" class="sm-form-control">
                            </div>
							<div class="col_one_third">
                                <label for="template-contactform-phone">State</label>
                                <input type="text" id="template-contactform-phone" name="state" value="" class="sm-form-control">
                            </div>
							<div class="col_one_third col_last">
                                <label for="template-contactform-phone">Postal Code</label>
                                <input type="text" id="template-contactform-phone" name="pcode" value="" class="sm-form-control">
                            </div>
                            <div class="clear"></div>
<div class="col_half">
                                <label for="register-form-phone">Tell us about your deal *</label>
                                <textarea id="register-form-phone" name="deal" value="" class="required form-control input-block-level"></textarea>
                            </div>
							<div class="col_half col_last">
                                <label for="register-form-phone">Exit Strategy *</label>
                                <textarea id="register-form-phone" name="strategy" value="" class="required form-control input-block-level"></textarea>
                            </div>

                            <div class="clear"></div>

                           <div class="col_full col_last">
                                <label for="register-form-phone">Where did you hear about 6 day loans? *</label>
                                <select id="register-form-phone" name="hear" value="" class="required form-control input-block-level">
								<option value="">Please select one</option><option value="Email/Newsletter">Email/Newsletter</option><option value="Direct Mail/Postcard">Direct Mail/Postcard</option><option value="RE Social Club">RE Social Club</option><option value="Radio">Radio</option><option value="Video Ad">Video Ad</option><option value="Internet Search">Internet Search</option><option value="YouTube">YouTube</option><option value="Blog/Article">Blog/Article</option><option value="Event/Seminar">Event/Seminar</option><option value="Webinar">Webinar</option><option value="Facebook">Facebook</option><option value="Twitter">Twitter</option><option value="Instagram">Instagram</option><option value="LinkedIn">LinkedIn</option><option value="Family/Friend">Family/Friend</option>
								</select>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control">
                            </div>

                            <div class="col_full">
                                <input class="button button-3d nomargin" type="submit" name="submit" value="submit">
                            </div>

                        </form>


                    </div>

                </div>

            </div>

        </section><!-- #content end -->

<?php include'inc/footer.php'; ?>