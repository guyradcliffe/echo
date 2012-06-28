<? include ("../common/header-echo.php"); ?>
	  <div id="top"></div> 
    <div class="grid_660">
        <div class="div_660"> 
          <h1 class="echo-feedback"></h1> 
            <?php                          
              //include the main validation script
              require_once "../scripts/formvalidator.php";             
              $show_form=true;
              //radio buttons - maintains selection if validation fails
              $certification_yes="unchecked";
              $certification_no="unchecked";           
              if(isset($_POST['feedback']))
              {// The form is submitted
                  //Setup Validations
                  $validator = new FormValidator();
                  $validator->addValidation("Name","req","Please provide your name.");
                  $validator->addValidation("Email","req","Please provide your e-mail address.");
                  $validator->addValidation("Email","email","Please provide a valid e-mail address.");
                  $validator->addValidation("Certified","selone","Please indicate whether you are certified by ECFMG.");
                  $validator->addValidation("Comments","req","Please provide your comments.");                  
                  /* maintain radio button click after validation */
                  $certification = $_POST['Certified'];	
              		if ($certification == 'yes') {
              			$certification_yes = 'checked';              
              		}
              		else if ($certification == 'no') {
              			$certification_no = 'checked';
              		} 
                  //Now, validate the form
                  if($validator->ValidateForm())
                  {
                      //Validation success. 
                      //Here we can proceed with processing the form 
                      //(like sending email, saving to Database etc)
                      // In this example, we just display a message
                      echo "<div class='echo-feedback'>\n";
                      echo "<h3 style='font-size:15px;'>Your comments have been submitted to ECHO. Thank you for taking the time to let us know what you think. Your feedback will help us to develop and improve ECHO resources for ECFMG-certified physicians.</h3>\n";
                      $show_form=false;
                      $to = "echo@ecfmg.org";
            					$subject = "ECHO Feedback";
            					$email = $_POST["email"];
                      $msg = "<div style='font-family:Helvetica, Arial, Verdana, sans-serif;'>"; 
            					$msg .= "<p><strong>Name:</strong>&nbsp;<font color='#006699'>".$_POST["Name"]."</font></p>"; 
            					$msg .= "<p><strong>Email:</strong>&nbsp;<font color='#006699'>".$_POST["Email"]."</font></p>";
                      $msg .= "<p><strong>Are you certified by ECFMG?:</strong>&nbsp;<font color='#006699'>".$_POST["Certified"]."</font></p>";
            					$msg .= "<p><strong>Comments:</strong>&nbsp;<font color='#006699'>".$_POST["Comments"]."</font>\n";
            					$msg .= "</div>";
            					$headers = "MIME-Version: 1.0\n"; 
            					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
            					$headers .= "From: echo@ecfmg.org";             					
            					mail($to, $subject, $msg, $headers);
                  }
                  else
                  {             
                      $error_hash = $validator->GetErrors();
                      foreach($error_hash as $inpname => $inp_err)
                      {
                          //echo "<div class='msg'>$inpname : $inp_err</div>\n";
                          /*echo "<div class='msg'>$inp_err</div>\n";
                          echo "<div class='spacer'></div>\n";*/
                      }      
                  }//else
              }//if(isset($_POST['Submit']))              
              if(true == $show_form)
              {
            ?>
              <h5 class="blue">Be Heard.</h5> 
              <p>Your ideas are important to us. Let us know what you think about ECHO &mdash; what you like, what you don&rsquo;t, what you want to see more of... what we can do to make ECHO a better resource for ECFMG-certified physicians.</p>
              <div class="echo-feedback">
            	<form name='feedback' method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>"  onsubmit="">           	
            		<div class="formrow">
                  <div class="label"><label for="name">Name:</label></div>
              		<div class="input"><input type='text' name='Name' maxlength='150' value="<?php echo htmlspecialchars($_POST['Name']); ?>" /></div>
              		<div class="error"><?php echo $error_hash['Name']; ?></div>
                </div>
            		<div class="formrow">
              		<div class="label"><label for="email">E-mail:</label></div>
              		<div class="input"><input type='text' name='Email' maxlength='150' value="<?php echo htmlspecialchars($_POST['Email']); ?>" /></div>
              		<div class="error"><?php echo $error_hash['Email']; ?></div>
                </div>
                
                <div class="formrow">
                  <div class="label"><label for="certified">Are you certified by ECFMG?</label></div>
              		<div class="certified">
                    <input type='radio' name='Certified' value="yes" <?php print $certification_yes; ?> />Yes
                    <input type='radio' name='Certified' value="no" <?php print $certification_no; ?> />No
                  </div>
                  <div class="error"><?php echo $error_hash['Certified']; ?></div>
                </div>

            		<div class="formrow" style="height:105px;">
              		<div class="label"><label for="comments">Comments:</label></div>
              		<div class="input"><textarea name='Comments'></textarea></div>
              		<div class="error"><?php echo $error_hash['Comments']; ?></div>
            		</div>
            		
            		<div class="formrow">
              		<div class="label">&nbsp;</div>
                  <div class="input"><input class='submit' type='submit' name='feedback' value='' /></div>
                  <div class="error">&nbsp;</div>
                </div>
            	</form>
            <?php }//true == $show_form ?>
            </div> <!-- end echo-feedback -->
        </div><!-- end div_660 -->
    </div><!-- end grid660 -->           
    <div class="grid_310">
      <?php include ("../common/echo-right-column-menu.php"); ?>
    </div>
    <div class="footer960">
      <div class="footerleft">
        Last updated June 4, 2012.<br /> 
        &reg; Registered in the US Patent and Trademark Office.<br />
        Copyright &copy; 1996-2012 by the Educational Commission for Foreign Medical Graduates. All rights reserved.
      </div>
      <div class="footerright">
        <div style="margin-top:35px;"><a href="../annc/terms.html">Terms</a>  |  <a href="../annc/privacy.html">Privacy</a>  |  <a href="../sitemap.html">Sitemap</a>  |  <a href="../about/careers.html">Careers</a>  |  <a href="../contact.html">Contact</a></div>
      </div>
    </div><!-- end footer960 -->
  </div><!-- end grid_980 -->
  </body>
</html>