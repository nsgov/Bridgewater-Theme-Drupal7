
  <div id="skip-link">
    <a href="#main" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <?php if ($main_menu): ?>
      <a href="#topNavBar" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
  </div>


	<div id="container">
	<header id="header">
		<!-- Banner -->
		 <div id="mainBanner">
              <a href="http://novascotia.ca"><img id="banner-wordmark" src="<?php print $base_path . path_to_theme() ?>/images/wordmark-en.png" alt="Government of Nova Scotia, Canada" /></a>
              <!--div id="selectLinks"><a class="selectLink" href="/contact">Contact us</a></div-->
		 </div>
		 
<!-- Nav Tabs -->
		 <nav id="topNavBar" role="navigation">
		<h1 class="visuallyhidden">Site Sections</h1>
		  <ul id="topNavLinks">
		   <li><a href="http://www.gov.ns.ca/snsmr/access/individuals.asp">Residents</a></li>
		   <li><a href="http://novascotia.com">Visitors</a></li>
		   <li><a href="http://www.gov.ns.ca/snsmr/access/business.asp">Businesses</a></li>
		   <li><a href="http://gov.ns.ca/government/">Government</a></li>
		   <li><a href="http://gov.ns.ca/news/">News</a></li>
		   <li id="searchInNav"
		    ><form id="question" method="get" action="http://www.gov.ns.ca/snsmr/gsa2.asp">
		    	<p><label for="gsa">Search</label> <input type="text" id="gsa" name="q" size="12" /> <input type="image" id="searchButton" alt="Search" name="btnG" src="http://www.gov.ns.ca/clf/argyle/search-button.png" />
   				<input type="hidden" value="GOVNS" name="client" />
				<input type="hidden" value="GOVNS" name="proxystylesheet" />
				<input type="hidden" name="site" value="GOVNS" />
				<input type="hidden" name="c" id="c" value="contact/" />
				<input type="hidden" name="h" id="h" value="" />
				<input type="hidden" name="i" id="i" value="img/banner1.jpg" />
				<input type="hidden" name="j" id="j" value="" />
				<input type="hidden" name="n" id="n" value="Contact Webmaster" />
				<input type="hidden" value="1" id="proxyreload" name="proxyreload" />
				<input type="hidden" value="xml_no_dtd" name="output" /></p>
		    </form></li>
		  </ul>
		 
		</nav><!-- /topNavBar -->

	</header> <!-- /header -->


	<div id="columnContainer">
		<div id="lowerBanner">
			<nav id="breadcrumbs">
				<span class="visuallyhidden">You are here:</span>
				<!-- Breadcrumbs --><div class="breadcrumbs"><div class="breadcrumbhere"><?php if ($breadcrumb): print $breadcrumb; endif;?></div></div><!-- /Breadcrumbs -->
			</nav><!-- /breadcrumbs -->
            

			<div id="deptId">
				<h2><a href="/"><?php print $site_name; ?></a></h2>
			</div>
		</div><!-- /lowerBanner -->
		<nav id="sideNav" role="navigation">
			
			<?php if ($page['left']): ?><?php print render($page['left']); ?><?php endif; ?>
			
		</nav><!-- /SideNav -->
        							
		<div id="contentContainer"<?php if ($page['right']) { ?> class="withSide"<?php } else { ?><?php } ?>>
			<div id="main" role="main">
				<!-- Headline --><?php if ($title): ?><h1 class="contentHeadline"><?php print $title; ?></h1><?php endif; ?><!-- /Headline -->
                
				<?php print render($title_suffix); ?>
                <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['contenttop']); ?>
				<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
			
                <!-- Content -->
                
                <?php print render($page['content']); ?>
                
                <!-- /Content -->
            
			</div><!-- /main -->
			<?php if ($page['right']): ?>
				<div id="rightcol" role="complementary">
					<?php print render($page['right']); ?>
				</div><!-- /rightcol -->
			<?php endif; ?>
			</div><!-- /contentContainer -->
            
		</div><!-- /columnContainer -->

<!-- START FOOTER -->

<footer id="BAF" class="clearfix" role="complementary">
		<!-- Province of Nova Scotia Common Look and Feel codename: chocolatebunny 1.0 April 2011 -->
<!-- BAF -->
		  
		  <?php if ($page['footermenus']): ?><?php print render($page['footermenus']) ?><?php endif; ?>
		  
		  <div class="footerNotices" role="contentinfo"><p><a href="http://gov.ns.ca/govt/privacy/">Privacy</a> <a href="http://gov.ns.ca/terms/">Terms</a> <a href="http://gov.ns.ca/govt/cookies/info.asp">Cookies</a> 
		  	Crown copyright &copy; <?php echo date('Y');?>, Province of Nova Scotia. </p></div>


</footer>

<!-- END FOOTER -->

	</div> <!-- /container -->


<!--[if lt IE 7 ]>
	<script src="<?php print $base_path . path_to_theme() ?>/js/dd_belatedpng.js"></script>
	<script>DD_belatedPNG.fix('img, #lowerBanner, #breadcrumbs, #deptId, #rightcol'); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
<![endif]-->
            
            
            