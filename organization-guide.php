<? 
include ("../common/header-echo.php"); 
$organization = $_GET['organization'];
?>
<style type="text/css">
/*********************** ECHO Organization Guide ********************/
div.fadeholder {width:600px; /*position:relative;*/ min-height:700px;}/*   */
div.fadeholder div.bottom {z-index:1;}
div.fadeholder div.top {z-index:9999;}
div.fadeholder div.organization {background:#fff; /*position:absolute;*/ top:0; left;0; width:600px;}
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
		  <?php if ($organization=='') { ?>
		  <div id="fade-me" class="organization top">
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
        <script type="text/javascript">$(".visit-them").animate({"height": "50px"}, 500);</script>
      </div><!-- end organization -->
      <?	} else if($organization == "abms"){ ?>
		  <div class="organization bottom">
		    <h5 class="organization">American Board of Medical Specialties</h5>
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>ABMS</p>
        </div>
        <div class="mission-is">
          <h5 class="category">Their Mission is...</h5>
          <p>To maintain and improve the quality of medical care by assisting the Member Boards in their efforts to develop and utilize professional and educational standards for the certification of physician specialists in the United States and internationally.</p>
        </div>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Learn about specialty certification in the U.S.
            <li>Request updates to your physician profile in the ABMS Directory of Board Certified Medical Specialists&reg;</li>
            <li>Find contact information for an ABMS Member Board</li>
            <li>Verify a doctor&rsquo;s Board Certification</li>
          </ul>
        </div>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>The Six Core Competencies for Quality Patient Care
            <li>ABMS Patient Safety Courses</li>
            <li>Annual ABMS Certificate Statistics</li>
            <li>Annual ABME Guide to Medical Specialties</li>
          </ul>
        </div>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.abms.org/" target="_blank">http://www.abms.org/</a>
        </div>
      </div><!-- end organization -->
      <?	} else if($organization == "aha"){ ?>
		  <div class="organization bottom">
		    <div class="aka">
          <h5 class="category">Also known as...</h5>
          <p>AHA</p>
        </div>
        <div class="mission-is">
          <h5>Their Mission is...</h5>
          <p>To advance the health of individuals and communities. The AHA leads, represents and serves hospitals, health systems and other related organizations that are accountable to the community and committed to health improvement.</p>
        </div>
        <div class="contact-them">
          <h5 class="category">You might contact them to...</h5>
          <ul>
            <li>Stay up-to-date on health care advocacy efforts, such as those involving Medicare, Medicaid, and health care reform</li>
          </ul>
        </div>
        <div class="might-find">
          <h5 class="category">Some resources you might find helpful...</h5>
          <ul>
            <li>AHA Policy Research Reports</li>
            <li>AHA Chartbook: Trends Affecting Hospitals and Health Systems</li>
          </ul>
        </div>
        <div class="visit-them">
          <h5 class="category">You can visit them at...</h5>
          <a href="http://www.aha.org/" target="_blank">http://www.aha.org/</a>
        </div>
      </div><!-- end organization -->
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