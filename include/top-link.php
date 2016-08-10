<div class="menu">
		<ul id="menu">
        <li><a href="index.php">HOME</a></li>
		 <li><a href="about.php">ABOUT US</a>
         
         <ul>
					<li><a href="gu.php">Gauhati University  </a> </li>
                    <li><a href="aisst.php">IASST</a> </li>
					<li><a href="office-bearer.php">Office Bearers</a> </li>
                    <li><a href="welcome.php">Welcome Letter</a> </li>
					<li><a href="advisory-committee.php">National Advisory Committee</a> </li>
					<li><a href="org-committee.php">Local Organizing Committee</a> </li>
                   
                    
				  </ul>
         
         </li>
         <li><a href="conference.php">CONFERENCE</a></li>
         <li class=""><a href="sub-theme.php">SUB THEMES</a></li>
         <li class=""><a href="scientific.php">SCIENTIFIC INFO</a>
         <ul>
					<li><a href="call.php">Call for Abstracts</a> </li>
                    <li><a href="abstract.php">Abstract Submission</a> </li>
                    <li><a href="poster.php">Instruction for Poster Presentation</a> </li>
                    
                   
					</ul>
         
         
         </li>
		 
          <li><a href="registration-form.php">REGISTRATION</a>
		  	<ul>
					
                    <li><a href="poster.php">Instruction for Poster Presentation</a> </li>
                    <li><a href="registration-fees.php">Registration Fees</a> </li>
                    <li><a href="spot.php">On the Spot Registration</a> </li>
                   
					</ul>
		  </li>
		  <li class=""><a href="accommodation.php">ACCOMMODATION</a></li>
          <li class=""><a href="sponsor.php">OUR SPONSORS</a></li>
		  <li class=""><a href="gallery.php">GALLERY</a></li>
		  <li class="last"><a href="contact.php">CONTACT US</a></li>
	</ul>
</nav>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$('#menu-wrap').prepend('<div id="menu-trigger">Menu</div>');		
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>			
</div>