<?php
$banner_count = ($this->countModules('banner')>0) + ($this->countModules('banner2')>0) + ($this->countModules('banner3')>0);
$banner_width = $banner_count > 0 ? ' banner' . floor(99 / $banner_count) : '';
$advert_count = ($this->countModules('advert1')>0) + ($this->countModules('advert2')>0) + ($this->countModules('advert3')>0) + ($this->countModules('advert4')>0) + ($this->countModules('advert5')>0);
$advert_width = $advert_count > 0 ? ' advert' . floor(99 / $advert_count) : '';
$advert2_count = ($this->countModules('advert6')>0) + ($this->countModules('advert7')>0) + ($this->countModules('advert8')>0) + ($this->countModules('advert9')>0) + ($this->countModules('advert10')>0);
$advert2_width = $advert2_count > 0 ? ' advert' . floor(99 / $advert2_count) : '';
$footer_count = ($this->countModules('footer1')>0) + ($this->countModules('footer2')>0) + ($this->countModules('footer3')>0) + ($this->countModules('footer4')>0) + ($this->countModules('footer5')>0);
$footer_width = $footer_count > 0 ? ' footer' . floor(99 / $footer_count) : '';
$user_count = ($this->countModules('user1')>0) + ($this->countModules('user2')>0) + ($this->countModules('user3')>0);
$user_width = $user_count > 0 ? ' user' . floor(99 / $user_count) : '';
$user2_count = ($this->countModules('user4')>0) + ($this->countModules('user5')>0) + ($this->countModules('user6')>0);
$user2_width = $user2_count > 0 ? ' user' . floor(99 / $user2_count) : '';
$user3_count = ($this->countModules('user7')>0) + ($this->countModules('user8')>0) + ($this->countModules('user9')>0);
$user3_width = $user3_count > 0 ? ' user' . floor(99 / $user3_count) : '';
$inside_count = ($this->countModules('inside1')>0) + ($this->countModules('inside2')>0) + ($this->countModules('inside3')>0);
$inside_width = $inside_count > 0 ? ' inside' . floor(99 / $inside_count) : '';
$inside2_count = ($this->countModules('inside4')>0) + ($this->countModules('inside5')>0) + ($this->countModules('inside6')>0);
$inside2_width = $inside2_count > 0 ? ' inside' . floor(99 / $inside2_count) : '';
$inside3_count = ($this->countModules('inside7')>0) + ($this->countModules('inside8')>0) + ($this->countModules('inside9')>0);
$inside3_width = $inside3_count > 0 ? ' inside' . floor(99 / $inside3_count) : '';
?>