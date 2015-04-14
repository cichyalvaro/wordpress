<?php
require(YOURBASEPATH . DS . "views/global.php");
function getColumns ($left, $right, $inset){
	if ($left && !$right && !$inset) {$style = "-left-only";}
	if ($right && !$left && !$inset) $style = "-right-only";
	if ($left && $right && !$inset) $style = "-left-right";
	if (!$left && !$right && !$inset) $style = "-wide";
	if ($right && !$left && $inset) $style = "-right-inset";
	if (!$right && $left && $inset) $style = "-left-inset";
	if ($right && $left && $inset) $style = "-left-right-inset";
	if (!$right && !$left && $inset) $style = "-inset-only";
	return $style;
	}
	$style = getColumns($this->countModules( 'left' ),$this->countModules( 'right' ),$this->countModules( 'inset' ));
?>