<?php
	$this->layout = 'simple';
	require_once(dirname(__FILE__) . '/../../components/helpers.php');

	//$appUrl = "http://localhost:8000";
	$appUrl = "http://digidem.github.com/HaitiHackMap";
	$assetsUrl = $this->module->assetsUrl;

	$helper = new Helper($assetsUrl);
	$helper->exportVarsToJS(array("assetsUrl" => $assetsUrl, "appUrl" => $appUrl,));

	$helper->assets(array(
		"index.css",
		"vendor/coffee-script.js",
		"$appUrl/scripts/haiti_hack_map.js",
		"require_template.coffee",
		"index.coffee",
	));
