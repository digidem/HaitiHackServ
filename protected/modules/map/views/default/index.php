<?php
	$this->layout = 'simple';
	require_once(dirname(__FILE__) . '/../../components/helpers.php');

	//$appUrl = "http://localhost:8000";
	$appUrl = "http://digidem.github.com/HaitiHackMap";
	$assetsUrl = $this->module->assetsUrl;

	$helper = new Helper($assetsUrl);
	$helper->stylesheets(array("index.css"));
	$helper->javascripts(array("require_template.js", "index.js"));
?>
<script>
	var assetsUrl = "<?php echo $assetsUrl; ?>";
	var appUrl = "<?php echo $appUrl; ?>";
</script>

<script src="<?php print $appUrl ?>/scripts/haiti_hack_map.js"></script>
