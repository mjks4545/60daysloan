<?php include'inc/header.php'; ?>
<?php 
            if(isset($_POST["submit"])){
	            $fname = $_POST['template_contactform_name'];
	            $email =  $_POST['template_contactform_email'];
	            $phone =  $_POST['template_contactform_phone'];
	            $emailto = "info@mountainbackfunding.com";
	            $subject = $_POST['template_contactform_subject'];
	            $service = $_POST['template_contactform_service'];
	            $message12 = $_POST['template_contactform_message'];
	            $botcheck = $_POST['template_contactform_botcheck'];
	            
	            //-----------------------------sending email to user -----------------------------------------//
	  
	  $headers = "From: 6Dayloans.com\r\n";
	  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	  $message = '<html background:#ccc;><body style="background:#ccc;">
	  <table>
	  <tr>
	  <td>First Name </td><td>'.$fname.'</td>
	  </tr>
	  <tr>
	  <td>Email </td><td>'.$email.'</td>
	  </tr>
	  <tr>
	  <td>Phone </td><td>'.$phone.'</td>
	  </tr>
	  <tr>
	  <td>Service </td><td>'.$service.'</td>
	  </tr>
	  <tr>
	  <td>Bot Check </td><td>'.$botcheck.'</td>
	  </tr>
	  <tr>
	  <td>Customer Message </td><td>'.$message12.'</td>
	  </tr>
	  </table>';
	  $message .= '</body></html>';
	mail( $email, $subject, $message, $headers );
	mail( $emailto, $subject, $message, $headers );
}
?>      
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('img/quote-top.jpg'); background-size: cover; background-position: 50% -40px;" data-stellar-background-ratio="0.4">

            <div class="container clearfix">
                <h1>Contact</h1>
                <span>Feel free to contact us any time</span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">contact</li>
                </ol>
            </div>

        </section>
    <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Postcontent
                    ============================================= -->
                    <div class="postcontent nobottommargin">

                        <h3>Send us an Email</h3>

                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="contact.php" method="post" novalidate="novalidate">

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="template_contactform_name" value="" class="sm-form-control required" aria-required="true">
                            </div>

                            <div class="col_one_third">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="template_contactform_email" value="" class="required email sm-form-control" aria-required="true">
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="template-contactform-phone" name="template_contactform_phone" value="" class="sm-form-control">
                            </div>

                            <div class="clear"></div>

                            <div class="col_two_third">
                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                <input type="text" id="template-contactform-subject" name="template_contactform_subject" value="" class="required sm-form-control" aria-required="true">
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-service">Services</label>
                                <select id="template-contactform-service" name="template_contactform_service" class="sm-form-control">
                                    <option value="">-- Select One --</option>
                                    <option value="Wordpress">Wordpress</option>
                                    <option value="PHP / MySQL">PHP / MySQL</option>
                                    <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                </select>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="template_contactform_message" rows="6" cols="30" aria-required="true"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template_contactform_botcheck" value="" class="sm-form-control">
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="submit" value="submit">Send Message</button>
                            </div>

                        </form>

                        <script type="text/javascript">

                            $("#template-contactform").validate({
                                submitHandler: function(form) {
                                    $('.form-process').fadeIn();
                                    $(form).ajaxSubmit({
                                        target: '#contact-form-result',
                                        success: function() {
                                            $('.form-process').fadeOut();
                                            $('#template-contactform').find('.sm-form-control').val('');
                                            $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#contact-form-result'));
                                        }
                                    });
                                }
                            });

                        </script>

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar col_last nobottommargin">

                        <address>
                            <strong>Headquarters:</strong><br>
                            35 N. Raymond Ave. #208 <br>
Pasadena, Ca 91103<br>
                        </address>
                   
                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@6dayloans.com

                    </div><!-- .sidebar end -->

                </div>

            </div>

        </section>

<?php include'inc/footer.php'; ?>