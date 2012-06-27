<? 
include ("../common/header-echo.php"); 
$organization = $_GET['organization'];
?>
<style type="text/css">
/*********************** ECHO Organization Guide ********************/
div.fadeholder {width:600px; /*position:relative;*/ min-height:700px;}/*   */
/*div.fadeholder div.bottom {z-index:1;}
div.fadeholder div.top {z-index:9999;}*/
div.fadeholder div.menu {float:left; width:70px; height:515px; background:#b2e1e7; margin:0 15px 0 0;}
div.fadeholder div.menu div.left {float:left; width:30px; height:600px; margin:5px 5px 0 5px;}
div.fadeholder div.menu div.right {float:left; width:30px; height:600px; margin:5px 0 0 0;}

a div.btn-acgme {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-acgme.png) no-repeat;}
a div.btn-acgme:hover {background:url(../images/echo-organization-guide-btn-acgme-hover.png) no-repeat;}
a div.btn-acgme-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-acgme-hover.png) no-repeat;}

a div.btn-abms {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-abms.png) no-repeat; margin:5px 0 0 0;}
a div.btn-abms:hover {background:url(../images/echo-organization-guide-btn-abms-hover.png) no-repeat;}
a div.btn-abms-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-abms-hover.png) no-repeat; margin:5px 0 0 0;}

a div.btn-aha {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-aha.png) no-repeat; margin:5px 0 0 0;}
a div.btn-aha:hover {background:url(../images/echo-organization-guide-btn-aha-hover.png) no-repeat;}
a div.btn-aha-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-aha-hover.png) no-repeat; margin:5px 0 0 0;}

a div.btn-ama {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-ama.png) no-repeat; margin:5px 0 0 0;}
a div.btn-ama:hover {background:url(../images/echo-organization-guide-btn-ama-hover.png) no-repeat;}
a div.btn-ama-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-ama-hover.png) no-repeat; margin:5px 0 0 0;}

a div.btn-aamc {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-aamc.png) no-repeat; margin:5px 0 0 0;}
a div.btn-aamc:hover {background:url(../images/echo-organization-guide-btn-aamc-hover.png) no-repeat;}
a div.btn-aamc-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-aamc-hover.png) no-repeat; margin:5px 0 0 0;}

a div.btn-dos {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-dos.png) no-repeat; margin:5px 0 0 0;}
a div.btn-dos:hover {background:url(../images/echo-organization-guide-btn-dos-hover.png) no-repeat;}
a div.btn-dos-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-dos-hover.png) no-repeat; margin:5px 0 0 0;}

a div.btn-ecfmg {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-ecfmg.png) no-repeat;}
a div.btn-ecfmg:hover {background:url(../images/echo-organization-guide-btn-ecfmg-hover.png) no-repeat;}
a div.btn-ecfmg-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-ecfmg-hover.png) no-repeat;}

a div.btn-fsmb {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-fsmb.png) no-repeat; margin:5px 0 0 0;}
a div.btn-fsmb:hover {background:url(../images/echo-organization-guide-btn-fsmb-hover.png) no-repeat;}
a div.btn-fsmb-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-fsmb-hover.png) no-repeat; margin:5px 0 0 0;}

a div.btn-jcaho {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-jcaho.png) no-repeat; margin:5px 0 0 0;}
a div.btn-jcaho:hover {background:url(../images/echo-organization-guide-btn-jcaho-hover.png) no-repeat;}
a div.btn-jcaho-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-jcaho-hover.png) no-repeat; margin:5px 0 0 0;}

a div.btn-nbme {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-nbme.png) no-repeat; margin:5px 0 0 0;}
a div.btn-nbme:hover {background:url(../images/echo-organization-guide-btn-nbme-hover.png) no-repeat;}
a div.btn-nbme-active {float:left; width:30px; height:80px; background:url(../images/echo-organization-guide-btn-nbme-hover.png) no-repeat; margin:5px 0 0 0;}

div.fadeholder div.organization {float:left; background:#fff; /*position:absolute;*/ top:0; left;0; width:510px;}
div.fadeholder div.organization div.aka {height:30px; border:1px solid #006699; margin:0 0 10px 0;}
div.fadeholder div.organization div.mission-is {height:30px; border:1px solid #006699; margin:0 0 10px 0;}
div.fadeholder div.organization div.contact-them {height:30px; border:1px solid #006699; margin:0 0 10px 0;}
div.fadeholder div.organization div.might-find {height:30px; border:1px solid #006699; margin:0 0 10px 0;}
div.fadeholder div.organization div.visit-them {height:30px; border:1px solid #006699;}
div.fadeholder div.organization div.visit-them a {margin:0 0 15px 15px;}
div.fadeholder div.organization h5.organization {margin:0 0 10px 0; color:#006699;}
div.fadeholder div.organization h5.category {margin:5px 0 0 5px; color:#006699;}
div.fadeholder div.organization ul,p {margin:0 0 15px 15px;}
</style>

	<div class="grid_660">
    <h1 class="imageheader"><img src="../images/echo-one-dozen-things.gif" alt="One Dozen Things" /></h1>
		<div class="div_660">
		<div class="fadeholder">
		<?php if ($organization == "ecfmg"||"fsmb") { ?>
		  <div class="menu">
		    <div class="left">
		      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=acgme"><?php if ($organization == "acgme") {echo '<div class="btn-acgme-active"></div>';} else {echo '<div class="btn-acgme"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=abms"><?php if ($organization == "abms") {echo '<div class="btn-abms-active"></div>';} else {echo '<div class="btn-abms"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=aha"><?php if ($organization == "aha") {echo '<div class="btn-aha-active"></div>';} else {echo '<div class="btn-aha"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=ama"><?php if ($organization == "ama") {echo '<div class="btn-ama-active"></div>';} else {echo '<div class="btn-ama"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=aamc"><?php if ($organization == "aamc") {echo '<div class="btn-aamc-active"></div>';} else {echo '<div class="btn-aamc"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=dos"><?php if ($organization == "dos") {echo '<div class="btn-dos-active"></div>';} else {echo '<div class="btn-dos"></div>';}?></a>
        </div>
		    <div class="right">
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=ecfmg"><?php if ($organization == "ecfmg") {echo '<div class="btn-ecfmg-active"></div>';} else {echo '<div class="btn-ecfmg"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=fsmb"><?php if ($organization == "fsmb") {echo '<div class="btn-fsmb-active"></div>';} else {echo '<div class="btn-fsmb"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=jcaho"><?php if ($organization == "jcaho") {echo '<div class="btn-jcaho-active"></div>';} else {echo '<div class="btn-jcaho"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=nbme"><?php if ($organization == "nbme") {echo '<div class="btn-nbme-active"></div>';} else {echo '<div class="btn-nbme"></div>';}?></a>
        </div>
		  </div>
		  <?php } else { ?>
		  <div class="menu">
		    <div class="left">
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=ecfmg"><?php if ($organization == "ecfmg") {echo '<div class="btn-ecfmg-active"></div>';} else {echo '<div class="btn-ecfmg"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=fsmb"><?php if ($organization == "fsmb") {echo '<div class="btn-fsmb-active"></div>';} else {echo '<div class="btn-fsmb"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=jcaho"><?php if ($organization == "jcaho") {echo '<div class="btn-jcaho-active"></div>';} else {echo '<div class="btn-jcaho"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=nbme"><?php if ($organization == "nbme") {echo '<div class="btn-nbme-active"></div>';} else {echo '<div class="btn-nbme"></div>';}?></a>
        </div>
		    <div class="right">
		      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=acgme"><?php if ($organization == "acgme") {echo '<div class="btn-acgme-active"></div>';} else {echo '<div class="btn-acgme"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=abms"><?php if ($organization == "abms") {echo '<div class="btn-abms-active"></div>';} else {echo '<div class="btn-abms"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=aha"><?php if ($organization == "aha") {echo '<div class="btn-aha-active"></div>';} else {echo '<div class="btn-aha"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=ama"><?php if ($organization == "ama") {echo '<div class="btn-ama-active"></div>';} else {echo '<div class="btn-ama"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=aamc"><?php if ($organization == "aamc") {echo '<div class="btn-aamc-active"></div>';} else {echo '<div class="btn-aamc"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=dos"><?php if ($organization == "dos") {echo '<div class="btn-dos-active"></div>';} else {echo '<div class="btn-dos"></div>';}?></a>
        </div>
		  </div>
		  <?php } ?>
		  <?php if ($organization=='') { ?>
		  <div class="organization top" id="fade-me">
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
        </div>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
        </div>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
        </div>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
        </div>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
        </div>
		  </div><!-- end fade-me -->
		  <?php } else {} ?>
		  
		  <!-- ############## ACGME ################# -->
		  <?	if($organization == "acgme"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">Accreditation Council for Graduate Medical Education</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>ACGME</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To improve health care by assessing and advancing the quality of resident physicians' education through exemplary accreditation.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "70px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Register for the ACGME Leadership Skills Training Program for Chief Residents</li>
            <li>Report a concern or formal complaint about residency education and/or the learning environment in an ACGME accredited program/institution</li>
            <li>Take the Resident/Fellow survey</li>
            <li>Research accredited GME programs</li>
            <li>Learn about ACGME Standards governing resident duty hours</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "150px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>ACGME Duty Hours Regulations</li>
            <li>ACGME Glossary of Terms</li>
            <li>List of ACGME Accredited Programs and Sponsoring Institutions</li>
            <li>Journal on Graduate Medical Education</li>
            <li>Position Papers</li>
            <li>Resident/Fellow Survey</li>
            <li>Resident Review Newsletter</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "170px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.acgme.org" target="_blank">http://www.acgme.org</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############### ABMS ################# -->
      <?	} else if($organization == "abms"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">American Board of Medical Specialties</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>ABMS</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To maintain and improve the quality of medical care by assisting the Member Boards in their efforts to develop and utilize professional and educational standards for the certification of physician specialists in the United States and internationally.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "90px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Learn about specialty certification in the U.S.
            <li>Request updates to your physician profile in the ABMS Directory of Board Certified Medical Specialists&reg;</li>
            <li>Find contact information for an ABMS Member Board</li>
            <li>Verify a doctor&rsquo;s Board Certification</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "130px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>The Six Core Competencies for Quality Patient Care
            <li>ABMS Patient Safety Courses</li>
            <li>Annual ABMS Certificate Statistics</li>
            <li>Annual ABME Guide to Medical Specialties</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "115px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.abms.org/" target="_blank">http://www.abms.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# AHA ################# -->
      <?	} else if($organization == "aha"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">American Hospital Association</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AHA</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To advance the health of individuals and communities. The AHA leads, represents and serves hospitals, health systems and other related organizations that are accountable to the community and committed to health improvement.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "100px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Stay up-to-date on health care advocacy efforts, such as those involving Medicare, Medicaid, and health care reform</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "80px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>AHA Policy Research Reports</li>
            <li>AHA Chartbook: Trends Affecting Hospitals and Health Systems</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "80px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.aha.org/" target="_blank">http://www.aha.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############## AHA ################ -->
      <?	} else if($organization == "aha"){ ?>
		  <div class="organization bottom">
		    <h5 class="category">American Hospital Association</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AHA</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To advance the health of individuals and communities. The AHA leads, represents and serves hospitals, health systems and other related organizations that are accountable to the community and committed to health improvement.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "50px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Stay up-to-date on health care advocacy efforts, such as those involving Medicare, Medicaid, and health care reform</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "100px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>AHA Policy Research Reports</li>
            <li>AHA Chartbook: Trends Affecting Hospitals and Health Systems</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "100px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.aha.org/" target="_blank">http://www.aha.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############## AMA ################ -->
      <?	} else if($organization == "ama"){ ?>
		  <div class="organization bottom">
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AMA</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To promote the art and science of medicine and the betterment of public health.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "50px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Join the AMA</li.
            <li>Get involved with AMA Sections and Special Groups, including the Resident and Fellow Section, Young Physician Section, the International Medical Graduates Section, and the Women Physicians Congress</li>
            <li>Earn Continuing Medical Education (CME) credits</li>
            <li>Search the JAMA Career Center</li>
            <li>Learn about Observerships and Observership programs</li>
            <li>Follow AMA&lsquo;s advocacy efforts</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "155px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>FREIDA Online</li>
            <li>State Medical Licensure Requirements and Statistics</li>
            <li>Graduate Medical Education Directory (GMED)</li>
            <li>AMA Resident and Fellow Section Listserv</li>
            <li>GME e-Letter</li>
            <li>Journal of the American Medical Association (JAMA)</li>
            <li>AMA Morning Rounds e-newsletter</li>
            <li>Introduction to the Practice of Medicine educational series</li>
            <li>Succeeding from Medical School to Practice</li>
            <li>Drug Pronunciation Guide</li>
            <li>AMA Code of Medical Ethics</li>
            <li>AMA Observership Guidelines</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "245px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.ama-assn.org/" target="_blank">http://www.ama-assn.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "50px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# AAMC ################# -->
      <?	} else if($organization == "aamc"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">Association of American Medical Colleges</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AAMC</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>The AAMC serves and leads the academic medicine community to improve the health of all.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "70px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Access the Electronic Residency Application Service (ERAS); complete and manage your ERAS application; and apply to residency programs</li>
            <li>Monitor the status of your ERAS application through the Applicant Document Tracking System (ADTS)</li>
            <li>Access FindAResident to find open residency and fellowship positions</li>
            <li>Access CareerConnect to serach for jobs at medical schools and teaching hospitals</li>
            <li>Follow the activities of and get involved with an AAMC Professional Development Group</li>
            <li>Follow the activities of the Organization of Resident Representatives</li>
            <li>Stay up-to-date on and get involved with Government Affairs and health care advocacy efforts</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "250px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>Roadmap to Residency: From Application to the Match and Beyond</li>
            <li>A Guide to the Preparation of the Medical Student Performance Evaluation.</li>
            <li>ERAS Integrity Promotion Education Program</li>
            <li>AAMC Data Book</li>
            <li>AAMC Survey of Resident/Fellow Stipends and Benefits</li>
            <li>Compact Between Resident Physicians and Their Teachers</li>
            <li>AAMC Policy Guidance on Graduate Medical Education</li>
            <li>MedEDPORTAL</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "180px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.aamc.org/" target="_blank">http://www.aamc.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# DOS ################# -->
      <?	} else if($organization == "dos"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">Department of State</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>DOS</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>Shape and sustain a peaceful, prosperous, just, and democratic world and foster conditions for stability and progress for the benefit of the American people and people everywhere.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "90px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Find a U.S. Embassy or Consulate</li>
            <li>Research available visas for temporary workers, including the J-1 and the H-1B</li>
            <li>Research available visas for spouses and dependents of termporary workers</li>
            <li>Learn about U.S. immigration regulations</li>
            <li>Obtain visa and immigration-related forms</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "125px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>Rights and Protections for Temporary Workers</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "60px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.state.gov/" target="_blank">http://www.state.gov/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# ECFMG ################# -->
      <?	} else if($organization == "ecfmg"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">Educational Commission for Foreign Medical Graduates</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AAMC</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>The ECFMG promotes quality health care for the public by certifying international medical graduates for entry into U.S. graduate medical education, and by participating in the evaluation and certification of other physicians and health care professionals nationally and internationally. In conjunction with its Foundation for Advancement of International Medical Education and Research (FAIMER), and other partners, it actively seeks opportunities to promote medical education through programmatic and research activities.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "170px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Apply for ECFMG Certification</li>
            <li>Apply for USMLE Step 1, 2 CK, and 2 CS; obtain USMLE results; and request USMLE Transcripts if you have not take Step 3</li>
            <li>Request verification of your ECFMG Certification status be sent to a state medical board/medical licensing authority</li>
            <li>Obtain a token to participate in the Electronic Residency Application Service (ERAS) and manage the submission of your ERAS supporting documents</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "170px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>ECFMG Information Booklet</li>
            <li>USMLE Bulletin of Information</li>
            <li>ECFMG Certification Fact Sheet</li>
            <li>Reference Guide for Medical Education Credentials</li>
            <li>ECFMG Fact Card</li>
            <li>The ECFMG Reporter</li>
            <li>ECFMG-ERAS News</li>
            <li>Exchange Visitor Sponsorship Program Reference Guide</li>
            <li>ECHO News</li>
            <li>ECFMG Policies and Procedures Regarding Irregular Behavior</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "220px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.ecfmg.org/" target="_blank">http://www.ecfmg.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# FSMB ################# -->
      <?	} else if($organization == "fsmb"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">Federation of State Medical Boards</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AAMC</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>FSMB leads by promoting excellence in medical practice, licensure, and regulation as the national resource and voice on behalf of state medical boards in their protection of the public.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "90px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Apply for USMLE Step 3; obtain Step 3 scores; and request a USMLE Transcript once you have taken Step 3</li>
            <li>Apply for the Special Purpose Examination (SPEX); obtain SPEX scores; request SPEX transcripts</li>
            <li>Find an assessment program that can refer you to take the Post-Licensure Assessment System (PLAS)</li>
            <li>Access the Federation Credentials</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "160px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>USMLE Bulletin of Information</li>
            <li>USMLE Step 3 Content Description and General Information</li>
            <li>State-specific Requirements for Initial Medical Licensure
            <li>SPEX Information Bulletin</li>
            <li>Directory of Assessment &amp; Remediation Programs</li>
            <li>Licensing Boards Accepting FCVS Physician Information Profiles</li>
            <li>Directory of State Medical and Osteopathic Boards
            <li>FSMB Newsline</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "180px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.fsmb.org/" target="_blank">http://www.fsmb.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# JCAHO ################# -->
      <?	} else if($organization == "jcaho"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">Joint Commission on Accreditation of Hospital Organizations</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>Joint Commission or JCAHO</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To continuously improve health care for the public, in collaboration with other stakeholders, by evaluating health care organizations and inspiring them to excel in providing safe and effective care of the highest quality and value.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "90px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Learn about Joint Commission Standards, which focus on important patient, individual or resident care, and organization functions that are essential to providing safe, high quality care and help health care organizations measure, assess and improve performance</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "110px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>Joint Commission Online weekly e-newsletter</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "60px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.jointcommission.org/" target="_blank">http://www.jointcommission.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# NBME ################# -->
      <?	} else if($organization == "nbme"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">National Board of Medical Examiners</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>Joint Commission or JCAHO</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "50px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To protect the health of the public through state of the art assessment of health professionals. While centered on assessment of physicians, this mission encompasses the spectrum of health professionals along the continuum of education, training and practice and includes research in evaluation as well as development of assessment instruments.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "120px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Purchase and take a self-assessment to prepare for USMLE Steps 1, 2 CK, and 3</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "70px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>USMLE Bulletin of Information</li>
            <li>Self-assessment Services Information Guide</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "75px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.nbme.org/" target="_blank">http://www.nbme.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "60px"}, 500);</script>
      </div><!-- end organization -->
      
      <? } else { } ?><!-- show nothing -->
      <?php if ($organization=='') { ?>
      <script type="text/javascript">     
        //$('#fade-me').fadeTo('slow',.4); 
      </script>
      <?php } else { ?>
      <script type="text/javascript">     
        //$('#fade-me').fadeOut(3000); 
      </script>
      <?php } ?>
      </div><!-- end div fadeholder -->
		</div><!-- end div_660 -->
  </div><!-- end grid660 -->           
  <div class="grid_310">
    <?php include ("../common/echo-right-column-menu.php"); ?>
      <? include ("../common/echo-resource-dropdown-menu.php"); ?>             
  </div>
  <div class="footer960">
    <div class="footerleft">
      Last updated July 5, 2012.<br /> 
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