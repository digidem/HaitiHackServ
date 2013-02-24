<?php
	$this->layout = 'simple';
	//$appUrl = "http://localhost:8000";
	$appUrl = "http://digidem.github.com/HaitiHackMap";
	$assetsUrl = $this->module->assetsUrl;
?>
<script>
	var assetsUrl = "<?php echo $assetsUrl; ?>";
	var appUrl = "<?php echo $appUrl; ?>";
</script>

<link rel="stylesheet" href="<?php print $assetsUrl; ?>/css/index.css">

<script src="<?php print $appUrl ?>/scripts/haiti_hack_map.js"></script>
<script src="<?php print $assetsUrl ?>/javascripts/require_template.js"></script>
<script src="<?php print $assetsUrl ?>/javascripts/index.js"></script>
