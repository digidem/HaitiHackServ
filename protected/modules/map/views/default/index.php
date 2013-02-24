<?php
    //$BASE_URL="http://localhost:8000/";
    $BASE_URL="http://digidem.github.com/HaitiHackMap/";
    $this->layout = 'simple';
?>

<div id="app"></div>
<link rel="stylesheet" href="<?php print $BASE_URL; ?>styles/main.css">
<link rel="stylesheet" href="<?php print $BASE_URL; ?>styles/leaflet.css">

<link rel="stylesheet" href="<?php print $this->module->assetsUrl; ?>/css/map.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php print $BASE_URL ?>scripts/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php print $BASE_URL ?>scripts/plugins.js"></script>

<script type="text/template" id="popupTemplate">
	<h6>
		<%= organisation_acronym %> <%= organisation_name %>&mdash; <%= branch_name %>
	</h6>
	<note>
		<%= street_address %><br/>
		<%= quartier_name %>

		<table>
			<tr>
				<th>Phone:</th>
				<td><%= site_phone %></td>
			</tr>
			<tr>
				<th>Hours:</th>
				<td><%= hours_of_operation %></td>
			</tr>
			<tr>
				<th>Services:</th>
				<td><%= service_names %></td>
			</tr>
			<tr>
				<th>Categories:</th>
				<td><%= category_names %></td>
			</tr>
		</table>
	</note>
</script>

<script>
	options = {
		leafletImagesPath: "<?php print $BASE_URL ?>images",

		categoriesUrl: "index.php?r=category",
		resultsUrl: "index.php?r=branchsite",

		extractLocation: function(model) { return [model.get('latitude'), model.get('longitude')]; },

		popupContentsTemplate: $('script#popupTemplate').text()
	};

	new HaitiHackMap(options);
</script>
