<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
define( 'YOURBASEPATH', dirname(__FILE__) );
require(YOURBASEPATH . DS . "helper.php");
JHTML::_( 'behavior.mootools' );
?>

<body id="<?php echo $this->params->get('presetstyle'); ?>" class="<?php echo $this->params->get('fontfamily'); ?>">
<div id="wdb_wrapper">
<div id="wdb_header-line" class="clr">
<div id="wdb_header-structure">
<div id="wdb_logo">
&nbsp;
</div>
<table border="0" cellpadding="0" cellspacing="0" style="float:right; margin-top:10px">
<tr><td height="54px"><div id="wdb_search"><jdoc:include type="modules" name="search" style="none" /></div></td></tr>
<tr><td height="36px"><?php if($this->countModules('menu')) : ?><div id="wdb_menu"><jdoc:include type="modules" name="menu" style="none" /></div><?php endif; ?></td></tr>
</table>
</div>
</div>
<?php $mClasses = modulesClasses('block1'); if ($this->countModules('banner') or $this->countModules('banner2') or $this->countModules('banner3')) : ?>
<div id="wdb_banner-line" class="clr">
<div id="wdb_banner-bg" style="background-color:<?php echo $this->params->get('bannercolor'); ?>">
<div id="wdb_banner-structure">
<div class="<?php echo $banner_width; ?>">
<?php if($this->countModules('banner')) : ?>
<div class="wdb_banner <?php echo $mClasses['banner'][0]; ?>">
<jdoc:include type="modules" name="banner" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('banner2')) : ?>
<div class="wdb_banner <?php echo $mClasses['banner2'][0]; ?>">
<jdoc:include type="modules" name="banner2" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('banner3')) : ?>
<div class="wdb_banner <?php echo $mClasses['banner3'][0]; ?>">
<jdoc:include type="modules" name="banner3" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('toolbar') or $this->countModules('extra')) : ?>
<div id="wdb_toolbar-line" class="clr">
<div id="wdb_toolbar-structure">
<div id="wdb_toolbar">
<jdoc:include type="modules" name="toolbar" style="none" />
</div>
<?php if($this->countModules('extra')) : ?>
<div id="wdb_extra">
<jdoc:include type="modules" name="extra" style="none" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<div id="wdb_spacer" class="clr">
&nbsp;
</div>
<?php $mClasses = modulesClasses('block2'); if ($this->countModules('advert1') or $this->countModules('advert2') or $this->countModules('advert3') or $this->countModules('advert4') or $this->countModules('advert5')) : ?>
<div id="wdb_advert-line" class="clr">
<div id="wdb_advert-bg">
<div id="wdb_advert-structure">
<div class="<?php echo $advert_width; ?>">
<?php if($this->countModules('advert1')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert1'][0]; ?>">
<jdoc:include type="modules" name="advert1" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert2')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert2'][0]; ?>">
<jdoc:include type="modules" name="advert2" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert3')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert3'][0]; ?>">
<jdoc:include type="modules" name="advert3" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert4')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert4'][0]; ?>">
<jdoc:include type="modules" name="advert4" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert5')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert5'][0]; ?>">
<jdoc:include type="modules" name="advert5" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
<?php endif; ?>
<div id="wdb_body-line" class="clr">
<div id="wdb_body-bg">
<div id="wdb_body-structure" class="<?php echo $this->params->get('insetposition'); ?>">
<?php if($this->countModules('left')) : ?>
<div id="wdb_left<?php echo $style; ?>">
<jdoc:include type="modules" name="left" style="xhtml" />
</div>
<?php endif; ?>
<div id="wdb_center<?php echo $style; ?>" class="<?php echo $this->params->get('readmore'); ?>">
<?php $mClasses = modulesClasses('block5'); if ($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) : ?>
<div id="wdb_user<?php echo $style; ?>" class="clr">
<div id="wdb_user-bg<?php echo $style; ?>">
<div class="<?php echo $user_width; ?>">
<?php if($this->countModules('user1')) : ?>
<div class="wdb_user <?php echo $mClasses['user1'][0]; ?>">
<jdoc:include type="modules" name="user1" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user2')) : ?>
<div class="wdb_user <?php echo $mClasses['user2'][0]; ?>">
<jdoc:include type="modules" name="user2" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user3')) : ?>
<div class="wdb_user <?php echo $mClasses['user3'][0]; ?>">
<jdoc:include type="modules" name="user3" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block6'); if ($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
<div id="wdb_user<?php echo $style; ?>" class="clr">
<div id="wdb_user-bg<?php echo $style; ?>">
<div class="<?php echo $user2_width; ?>">
<?php if($this->countModules('user4')) : ?>
<div class="wdb_user <?php echo $mClasses['user4'][0]; ?>">
<jdoc:include type="modules" name="user4" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user5')) : ?>
<div class="wdb_user <?php echo $mClasses['user5'][0]; ?>">
<jdoc:include type="modules" name="user5" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user6')) : ?>
<div class="wdb_user <?php echo $mClasses['user6'][0]; ?>">
<jdoc:include type="modules" name="user6" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>
<div id="wdb_content<?php echo $style; ?>" class="clr">
<?php if($this->countModules('inset')) : ?>
<div id="wdb_inset<?php echo $style; ?>">
<jdoc:include type="modules" name="inset" style="xhtml" />
</div>
<?php endif; ?>
<div id="wdb_message<?php echo $style; ?>">
<?php $mClasses = modulesClasses('block8'); if ($this->countModules('inside1') or $this->countModules('inside2') or $this->countModules('inside3')) : ?>
<div id="wdb_inside<?php echo $style; ?>" class="clr">
<div class="<?php echo $inside_width; ?>">
<?php if($this->countModules('inside1')) : ?>
<div class="wdb_inside <?php echo $mClasses['inside1'][0]; ?>">
<jdoc:include type="modules" name="inside1" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('inside2')) : ?>
<div class="wdb_inside <?php echo $mClasses['inside2'][0]; ?>">
<jdoc:include type="modules" name="inside2" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('inside3')) : ?>
<div class="wdb_inside <?php echo $mClasses['inside3'][0]; ?>">
<jdoc:include type="modules" name="inside3" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<div id="wdb_support" class="clr">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<?php $mClasses = modulesClasses('block9'); if ($this->countModules('inside4') or $this->countModules('inside5') or $this->countModules('inside6')) : ?>
<div id="wdb_inside<?php echo $style; ?>" class="clr">
<div class="<?php echo $inside2_width; ?>">
<?php if($this->countModules('inside4')) : ?>
<div class="wdb_inside <?php echo $mClasses['inside4'][0]; ?>">
<jdoc:include type="modules" name="inside4" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('inside5')) : ?>
<div class="wdb_inside <?php echo $mClasses['inside5'][0]; ?>">
<jdoc:include type="modules" name="inside5" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('inside6')) : ?>
<div class="wdb_inside <?php echo $mClasses['inside6'][0]; ?>">
<jdoc:include type="modules" name="inside6" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block10'); if ($this->countModules('inside7') or $this->countModules('inside8') or $this->countModules('inside9')) : ?>
<div id="wdb_inside<?php echo $style; ?>" class="clr">
<div class="<?php echo $inside3_width; ?>">
<?php if($this->countModules('inside7')) : ?>
<div class="wdb_inside <?php echo $mClasses['inside7'][0]; ?>">
<jdoc:include type="modules" name="inside7" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('inside8')) : ?>
<div class="wdb_inside <?php echo $mClasses['inside8'][0]; ?>">
<jdoc:include type="modules" name="inside8" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('inside9')) : ?>
<div class="wdb_inside <?php echo $mClasses['inside9'][0]; ?>">
<jdoc:include type="modules" name="inside9" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
</div>
</div>
<?php $mClasses = modulesClasses('block7'); if ($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
<div id="wdb_user<?php echo $style; ?>" class="clr">
<div class="<?php echo $user3_width; ?>">
<?php if($this->countModules('user7')) : ?>
<div class="wdb_user <?php echo $mClasses['user7'][0]; ?>">
<jdoc:include type="modules" name="user7" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user8')) : ?>
<div class="wdb_user <?php echo $mClasses['user8'][0]; ?>">
<jdoc:include type="modules" name="user8" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user9')) : ?>
<div class="wdb_user <?php echo $mClasses['user9'][0]; ?>">
<jdoc:include type="modules" name="user9" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
</div>
<?php if($this->countModules('right')) : ?>
<div id="wdb_right<?php echo $style; ?>">
<jdoc:include type="modules" name="right" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php $mClasses = modulesClasses('block3'); if ($this->countModules('advert6') or $this->countModules('advert7') or $this->countModules('advert8') or $this->countModules('advert9') or $this->countModules('advert10')) : ?>
<div id="wdb_advert-line" class="clr">
<div id="wdb_advert-bg2">
<div id="wdb_advert-structure">
<div class="<?php echo $advert2_width; ?>">
<?php if($this->countModules('advert6')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert6'][0]; ?>">
<jdoc:include type="modules" name="advert6" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert7')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert7'][0]; ?>">
<jdoc:include type="modules" name="advert7" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert8')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert8'][0]; ?>">
<jdoc:include type="modules" name="advert8" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert9')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert9'][0]; ?>">
<jdoc:include type="modules" name="advert9" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert10')) : ?>
<div class="wdb_advert <?php echo $mClasses['advert10'][0]; ?>">
<jdoc:include type="modules" name="advert10" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
<?php endif; ?>
<div id="wdb_spacer-bottom" class="clr">
&nbsp;
</div>
<?php $mClasses = modulesClasses('block4'); if ($this->countModules('footer1') or $this->countModules('footer2') or $this->countModules('footer3') or $this->countModules('footer4') or $this->countModules('footer5')) : ?>
<div id="wdb_footer-line" class="clr">
<div id="wdb_footer-bg">
<div id="wdb_footer-structure">
<div class="<?php echo $footer_width; ?>">
<?php if($this->countModules('footer1')) : ?>
<div class="wdb_footer <?php echo $mClasses['footer1'][0]; ?>">
<jdoc:include type="modules" name="footer1" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer2')) : ?>
<div class="wdb_footer <?php echo $mClasses['footer2'][0]; ?>">
<jdoc:include type="modules" name="footer2" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer3')) : ?>
<div class="wdb_footer <?php echo $mClasses['footer3'][0]; ?>">
<jdoc:include type="modules" name="footer3" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer4')) : ?>
<div class="wdb_footer <?php echo $mClasses['footer4'][0]; ?>">
<jdoc:include type="modules" name="footer4" style="xhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer5')) : ?>
<div class="wdb_footer <?php echo $mClasses['footer5'][0]; ?>">
<jdoc:include type="modules" name="footer5" style="xhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
<?php endif; ?>
<div id="wdb_copy-line" class="clr">
<div id="wdb_copy-structure" class="wdb_<?php echo $this->params->get('designby'); ?>">
<div id="wdb_copy">
Copyright &copy; <?php echo $this->params->get('copy'); ?>! All right Reserve!
</div>
<div id="wdb_design">
Design by : <a href="<?php echo $this->params->get('designbylink'); ?>" target="_<?php echo $this->params->get('designbytarget'); ?>"><?php echo $this->params->get('designbylabel'); ?>!</a>
</div>
</div>
</div>
<div id="wdb_<?php echo $this->params->get('sponsorlinks'); ?>" class="clr">
Template By
<a title="web design" href="http://www.webdesignbuilders.net" target="_blank">Web Design Builders</a> | 
<a title="web design" href="http://www.web-design.ph" target="_blank">Web Design Philippines</a><br />
Distribute By
<a title="joomla templates" href="http://www.joomlaperfect.com" target="_blank">Joomla Perfect</a> &nbsp; 
Sponsored By
<a title="pop group" href="http://www.popgroupglobal.com" target="_blank">Pop Group Global</a> | 
<a title="real estate" href="http://www.propertylist.ph" target="_blank">Property List</a> | 
<a title="Housekeeping" href="http://www.timetokleen.com.ph" target="_blank">Time 2 Kleen</a>
</div>
</div>
</body>
</html>