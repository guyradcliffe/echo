<? 
include ("../common/header-echo.php"); 
$organization = $_GET['organization'];
?>

	<div class="grid_660">
    <h1 class="imageheader"><img src="../images/echo-organization-guide.gif" alt="Organization Guide" /></h1>
    <p style="margin-bottom: 25px; margin-left:10px;">
    Understanding the &ldquo;who&rsquo;s who&rdquo; of organizations involved in U.S. GME can be difficult, but knowing who to contact about what and how is an essential part of your successful integration into the U.S. health care system. To help you navigate this system, we have compiled a list of the organizations you will likely come in contact with during the residency application process and throughout your first year of residency. To view an organization&rsquo;s mission, website, and information about what you would contact them for and what resources they can offer to assist you, click on the appropriate tab below.
    </p>
		<div class="div_660">
		<div class="fadeholder">
		  <div class="menu">
		    <div class="left">
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=ecfmg"><?php if ($organization == "ecfmg") {echo '<div class="btn-ecfmg-active"></div>';} else {echo '<div class="btn-ecfmg"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=fsmb"><?php if ($organization == "fsmb") {echo '<div class="btn-fsmb-active"></div>';} else {echo '<div class="btn-fsmb"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=jcaho"><?php if ($organization == "jcaho") {echo '<div class="btn-jcaho-active"></div>';} else {echo '<div class="btn-jcaho"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=nbme"><?php if ($organization == "nbme") {echo '<div class="btn-nbme-active"></div>';} else {echo '<div class="btn-nbme"></div>';}?></a>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>?organization=nrmp"><?php if ($organization == "nrmp") {echo '<div class="btn-nrmp-active"></div>';} else {echo '<div class="btn-nrmp"></div>';}?></a>
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
		  <?php if ($organization=='') { ?>
		  <div class="organization" id="fade-me">
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
		  <div class="organization">
		    <h5 class="organization">Accreditation Council for Graduate Medical Education</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>ACGME</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "52px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To improve health care by assessing and advancing the quality of resident physicians&rsquo; education through accreditation.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "70px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Research accredited GME programs</li>
            <li>Report a concern or formal complaint about residency education and/or the learning environment in an ACGME accredited program/institution</li>            
            <li>Learn about ACGME Standards governing resident duty hours, procedures, logs, etc.</li>
            <li>Take the Resident/Fellow survey</li>
            <li>Register for the ACGME Leadership Skills Training Program for Chief Residents</li>            
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "158px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>List of ACGME Accredited Programs and Sponsoring Institutions</li>
            <li>ACGME Duty Hours Regulations</li>
            <li><i>ACGME Glossary of Terms</i></li>
            <li><i>Journal of Graduate Medical Education</i></li>  
            <li>Position Papers</li>
            <li>Resident/Fellow Survey</li> 
            <li><i>Resident Review</i> newsletter</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "158px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.acgme.org" target="_blank">http://www.acgme.org</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "54px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############### ABMS ################# -->
      <?	} else if($organization == "abms"){ ?>
		  <div class="organization">
		    <h5 class="organization">American Board of Medical Specialties</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>ABMS</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "52px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To maintain and improve the quality of medical care by assisting the Member Boards in their efforts to develop and utilize professional and educational standards for the certification of physician specialists in the United States and internationally.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "89px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Learn about specialty certification in the United States</li>
            <li>Request updates to your physician profile in the ABMS Directory of Board Certified Medical Specialists<sup>&#174;</sup></li>
            <li>Find contact information for an ABMS Member Board</li>
            <li>Verify a physician&#8217;s Board Certification</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "123px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>The Six Core Competencies for Quality Patient Care</li>
            <li>ABMS Patient Safety Courses</li>
            <li>Annual ABMS Certificate Statistics</li>
            <li>Annual ABME Guide to Medical Specialties</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "106px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.abms.org/" target="_blank">http://www.abms.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "55px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# AHA ################# -->
      <?	} else if($organization == "aha"){ ?>
		  <div class="organization">
		    <h5 class="organization">American Hospital Association</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AHA</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "52px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p> To advance the health of individuals and communities. The AHA leads, represents, and serves hospitals, health systems, and other related organizations that are accountable to the community and committed to health improvement.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "89px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Stay up-to-date on health care advocacy efforts, such as those involving Medicare, Medicaid, and health care reform </li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "71px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>AHA Policy Research Reports</li>
            <li>AHA Chartbook: Trends Affecting Hospitals and Health Systems</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "71px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.aha.org/" target="_blank">http://www.aha.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "53px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############## AMA ################ -->
      <?	} else if($organization == "ama"){ ?>
		  <div class="organization">
		    <h5 class="organization">American Medical Association</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AMA</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "52px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To promote the art and science of medicine and the betterment of public health.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "53px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Join the AMA</li>
            <li>Get involved with AMA Sections and Special Groups, including the Resident and Fellow Section, Young Physician Section, the International Medical Graduates Section, and the Women Physicians Congress</li>
            <li>Learn about Observerships and Observership programs</li>            
            <li>Earn Continuing Medical Education (CME) credits</li>
            <li>Search the JAMA Career Center</li>
            <li>Follow AMA&rsquo;s advocacy efforts</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "176px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>Fellowship and Residency Electronic Interactive Database (FREIDA) On-line</li>
            <li><i>State Medical Licensure Requirements and Statistics</i></li>
            <li><i>Graduate Medical Education Directory</i> (<i>GMED</i>)</li>
            <li>AMA Observership Guidelines</li>            
            <li>AMA Resident and Fellow Section Listserv</li>
            <li>GME e-Letter</li>
            <li><i>Journal of the American Medical Association</i> (<i>JAMA</i>)</li>
            <li><i>AMA Morning Rounds</i> e-newsletter</li>
            <li>Introduction to the Practice of Medicine educational series</li>
            <li>Succeeding from Medical School to Practice</li>
            <li>Drug Pronunciation Guide</li>
            <li>AMA Code of Medical Ethics</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "247px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.ama-assn.org/" target="_blank">http://www.ama-assn.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "55px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# AAMC ################# -->
      <?	} else if($organization == "aamc"){ ?>
		  <div class="organization">
		    <h5 class="organization">Association of American Medical Colleges</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AAMC</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "52px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To serve and lead the academic medicine community to improve the health of all.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "53px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li> Access the Electronic Residency Application Service (ERAS<sup>&#174;</sup>); complete and manage your ERAS application; and apply to residency programs</li>
            <li>Monitor the status of your ERAS application through the Applicant Document Tracking System (ADTS)</li>
            <li>Access FindAResident<sup>&#174;</sup> to find open residency and fellowship positions</li>
            <li>Access CareerConnect to search for jobs at medical schools and teaching hospitals</li>
            <li>Follow the activities of and get involved with an AAMC Professional Development Group</li>
            <li>Follow the activities of the Organization of Resident Representatives</li>
            <li>Stay up-to-date on and get involved with government affairs and health care advocacy efforts</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "246px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>Roadmap to Residency: From Application to the Match and Beyond</li>
            <li>A Guide to the Preparation of the Medical Student Performance Evaluation</li>
            <li>ERAS Integrity Promotion Education Program</li>
            <li>AAMC Data Book</li>
            <li>AAMC Survey of Resident/Fellow Stipends and Benefits</li>
            <li>Compact Between Resident Physicians and Their Teachers</li>
            <li>AAMC Policy Guidance on Graduate Medical Education</li>
            <li>MedEDPORTAL<sup>&#174;</sup></li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "176px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.aamc.org/" target="_blank">http://www.aamc.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "55px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# DOS ################# -->
      <?	} else if($organization == "dos"){ ?>
		  <div class="organization">
		    <h5 class="organization">U.S. Department of State</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>DOS</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "52px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To shape and sustain a peaceful, prosperous, just, and democratic world and foster conditions for stability and progress for the benefit of the American people and people everywhere.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "89px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Find a U.S. Embassy or Consulate</li>
            <li>Research available visas for temporary workers, including the J-1 and the H-1B</li>
            <li>Research available visas for spouses and dependents of temporary workers</li>
            <li>Learn about U.S. immigration regulations</li>
            <li>Obtain visa and immigration-related forms</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "124px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>Rights and Protections for Temporary Workers</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "54px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.state.gov/" target="_blank">http://www.state.gov/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "54px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# ECFMG ################# -->
      <?	} else if($organization == "ecfmg"){ ?>
		  <div class="organization">
		    <h5 class="organization">Educational Commission for Foreign Medical Graduates</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>ECFMG</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "52px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To promote quality health care for the public by certifying international medical graduates for entry into U.S. graduate medical education, and by participating in the evaluation and certification of other physicians and health care professionals nationally and internationally. In conjunction with its Foundation for Advancement of International Medical Education and Research (FAIMER), and other partners, it actively seeks opportunities to promote medical education through programmatic and research activities.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "159px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Apply for ECFMG Certification</li>
            <li>Apply for USMLE Step 1, 2 CK, and 2 CS; obtain USMLE results; and request USMLE Transcripts if you have not taken Step 3</li>
            <li>Obtain a token to participate in the Electronic Residency Application Service (ERAS) and manage the submission of your ERAS supporting documents</li>
            <li>Complete an application for J-1 visa sponsorship and mantain your visa status throughout your residency</li>
            <li>Have your medical credentials primary-source verified and proof of this verification sent to a medical regulatory authority</li>
            <li>Request verification of your ECFMG certification status be sent to a state medical board/medical licensing authority</li>           
            <li>Access the ECFMG Certificate Holders Office (ECHO)</li>
            <li>Stay up-to-date on news related to USMLE and ECFMG Certification</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "264px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li><i>The ECFMG Reporter</i></li>
            <li><i>ECFMG-ERAS News</i></li>
            <li><i>ECHO News</i></li>
            <li>ECFMG <i>Information Booklet</i></li>
            <li>ECFMG <i>Fact Card</i></li>
            <li>ECFMG <i>Certification Fact Sheet</i></li>
            <li>USMLE <i>Bulletin of Information</i></li>
            <li>Exchange Visitor Sponsorship Program <i>Reference Guide</i></li>
            <li>Reference Guide for Medical Education Credentials</li>
            <li>ECFMG Policies and Procedures Regarding Irregular Behavior</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "211px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.ecfmg.org/" target="_blank">http://www.ecfmg.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "55px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# FSMB ################# -->
      <?	} else if($organization == "fsmb"){ ?>
		  <div class="organization">
		    <h5 class="organization">Federation of State Medical Boards</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>FSMB</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "52px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To lead by promoting excellence in medical practice, licensure, and regulation as the national resource and voice on behalf of state medical boards in their protection of the public.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "89px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Apply for USMLE Step 3; obtain Step 3 scores; and request a USMLE Transcript once you have taken Step 3</li>
            <li>Apply for the Special Purpose Examination (SPEX); obtain SPEX scores; request SPEX transcripts</li>
            <li>Find an assessment program that can refer you to take the Post-Licensure Assessment System (PLAS)</li>
            <li>Access the Federation Credentials Verification Service (FCVS)</li>
            <li>Complete the Uniform Application for Physician State Licensure (UA)</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "176px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>USMLE <i>Bulletin of Information</i></li>
            <li>USMLE Step 3 Content Description and General Information</li>
            <li>State-specific Requirements for Initial Medical Licensure</li>
            <li>SPEX Information Bulletin</li>
            <li>Directory of Assessment &amp; Remediation Programs</li>
            <li>Licensing Boards Accepting FCVS Physician Information Profiles</li>
            <li>Directory of State Medical and Osteopathic Boards</li>
            <li>FSMB Newsline</li>
            <li>Journal of Medical Regulation</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "192px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://fsmb.org/" target="_blank">http://www.fsmb.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "55px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# JCAHO ################# -->
      <?	} else if($organization == "jcaho"){ ?>
		  <div class="organization">
		    <h5 class="organization">Joint Commission on Accreditation of Healthcare Organizations</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>The Joint Commission or JCAHO</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "53px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To continuously improve health care for the public, in collaboration with other stakeholders, by evaluating health care organizations and inspiring them to excel in providing safe and effective care of the highest quality and value.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "89px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Learn about the Joint Commission&#8217;s standards, which focus on important patient, individual or resident care, and organization functions that are essential to providing safe, high quality care and help health care organizations measure, assess, and improve performance</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "106px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>Joint Commission Online weekly e-newsletter</li>
            <li>Joint Commission Do Not Use List</li>            
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "71px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.jointcommission.org/" target="_blank">http://www.jointcommission.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "55px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# NBME ################# -->
      <?	} else if($organization == "nbme"){ ?>
		  <div class="organization">
		    <h5 class="organization">National Board of Medical Examiners</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>NBME</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "53px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To protect the health of the public through state of the art assessment of health professionals. While centered on assessment of physicians, this mission encompasses the spectrum of health professionals along the continuum of education, training, and practice and includes research in evaluation as well as development of assessment instruments.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "124px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Purchase and take a self-assessment to prepare for USMLE Steps 1, 2 CK, and 3</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "53px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>USMLE <i>Bulletin of Information</i></li>
            <li>Self-assessment Services Information Guide</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "71px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.nbme.org/" target="_blank">http://www.nbme.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "55px"}, 500);</script>
      </div><!-- end organization -->
      
      <!-- ############# NRMP ################# -->
      <?	} else if($organization == "nrmp"){ ?>
		  <div class="organization">
		    <h5 class="organization">National Resident Matching Program</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>NRMP or "The Match"</p>
        </div>
        <script type="text/javascript">$(".aka").animate({"height": "53px"}, 500);</script>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To provide a mechanism for matching residency applicants to programs according to the preferences expressed by both parties on their individualized rank order lists. The NRMP is NOT a centralized application service for individuals applying to graduate medical education programs and does not advise applicants in selecting specialties or programs.</p>
        </div>
        <script type="text/javascript">$(".mission-is").animate({"height": "106px"}, 500);</script>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Register for The Match</li>
            <li>Submit and certify your rank-order list</li>
            <li>Perform other Match-related functions, such as registering as a couple and withdrawing from The Match</li>
            <li>Obtain your Match results</li>
          </ul>
        </div>
        <script type="text/javascript">$(".contact-them").animate({"height": "124px"}, 1500);</script>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>Match Participation Agreement</li>
            <li>Applicant User Guide</li>
            <li>Applicant Supplemental Offer and Acceptance Program (SOAP) User Guide</li>
            <li>Results and Data: Main Residency Match</li>
            <li>Match Results by State, Specialty, and Applicant Type</li>
            <li>Results of the NRMP Applicant Survey</li>
            <li>Results of the NRMP Program Director Survey</li>
            <li>Charting Outcomes in the Match</li>
          </ul>
        </div>
        <script type="text/javascript">$(".might-find").animate({"height": "176px"}, 1500);</script>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.nrmp.org/" target="_blank">http://www.nrmp.org/</a>
        </div>
        <script type="text/javascript">$(".visit-them").animate({"height": "55px"}, 500);</script>
      </div><!-- end organization -->
      
      <? } else { } ?><!-- show nothing -->
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