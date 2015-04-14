<?php
require(YOURBASEPATH . DS . "views/cols.php");
function modulesClasses($case, $loaded_only = false) {
  global $multicolBlocks;
  $document	= &JFactory::getDocument();
  $modules = $mainmodulesBlocks[$case];
  $loaded = 0;
  $loadedModule = array();
  $classes = array();
  foreach($multicolBlocks[$case] as $block) if ($document->countModules($block)>0) { $loaded++; array_push($loadedModule, $block); }
  if ($loaded_only) return $loaded;
  switch ($loaded) {
    case 1:
      $classes[$loadedModule[0]][0] = 'full';
      $classes[$loadedModule[0]][1] = $width[0];
      break;
    case 2: 
      for ($i = 0; $i < count($loadedModule); $i++){
        if (!$i) {
		$classes[$loadedModule[$i]][0] = 'first';
		$classes[$loadedModule[$i]][1] = $width[0];
	}
        else {
		$classes[$loadedModule[$i]][0] = 'second';
		$classes[$loadedModule[$i]][1] = $width[1];
	}
      }
      break;
    case 3:
      for ($i = 0; $i < count($loadedModule); $i++){
        if (!$i) {
		$classes[$loadedModule[$i]][0] = 'first';
		$classes[$loadedModule[$i]][1] = $width[0];
	}
        elseif ($i == 1) {
		$classes[$loadedModule[$i]][0] = 'second';
		$classes[$loadedModule[$i]][1] = $width[1];
	}
        else {
		$classes[$loadedModule[$i]][0] = 'third';
		$classes[$loadedModule[$i]][1] = $width[2];
	}
      }
      break;
    case 4:
      for ($i = 0; $i < count($loadedModule); $i++){
        if (!$i) {
		$classes[$loadedModule[$i]][0] = 'first';
		$classes[$loadedModule[$i]][1] = $width[0];
	}
        elseif ($i == 1) {
		$classes[$loadedModule[$i]][0] = 'second';
		$classes[$loadedModule[$i]][1] = $width[1];
	}
	 	elseif ($i == 2) {
		$classes[$loadedModule[$i]][0] = 'third';
		$classes[$loadedModule[$i]][1] = $width[2];
	}
		else {
		$classes[$loadedModule[$i]][0] = 'forth';
		$classes[$loadedModule[$i]][1] = $width[3];
	}
      }
      break;
    case 5:
      for ($i = 0; $i < count($loadedModule); $i++){
        if (!$i) {
		$classes[$loadedModule[$i]][0] = 'first';
		$classes[$loadedModule[$i]][1] = $width[0];
	}
        elseif ($i == 1) {
		$classes[$loadedModule[$i]][0] = 'second';
		$classes[$loadedModule[$i]][1] = $width[1];
	}
	 	elseif ($i == 2) {
		$classes[$loadedModule[$i]][0] = 'third';
		$classes[$loadedModule[$i]][1] = $width[2];
	}
		elseif ($i == 3) {
		$classes[$loadedModule[$i]][0] = 'forth';
		$classes[$loadedModule[$i]][1] = $width[3];
	}
        else {
		$classes[$loadedModule[$i]][0] = 'fifth';
		$classes[$loadedModule[$i]][1] = $width[4];
	}
      }
      break;
  }
  return $classes;
}
?>