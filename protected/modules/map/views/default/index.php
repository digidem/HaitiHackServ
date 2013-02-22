<?php
    //$BASE_URL="http://localhost:8000/";
    $BASE_URL="http://digidem.github.com/HaitiHackMap/";
    $this->layout = 'simple';
?>

<div id="app"></div>
<link rel="stylesheet" href="<?php print $BASE_URL ?>styles/main.css">
<link rel="stylesheet" href="<?php print $BASE_URL ?>styles/leaflet.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php print $BASE_URL ?>scripts/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php print $BASE_URL ?>scripts/plugins.js"></script>

<script>
    options = {
        leafletImagesPath: "<?php print $BASE_URL ?>images",

        categoriesUrl: "index.php?r=category",
        resultsUrl: "index.php?r=branchsite",

        extractLocation: function(model) { return [model.get('latitude'), model.get('longitude')]; },

        titleTemplate: '<h6><%= organisation_name %> / <%= quartier_name %> / <%= branch_name %></h6>',
        detailsTemplate: '<note><%= street_address %></note>'
    };

    new HaitiHackMap(options);
</script>
