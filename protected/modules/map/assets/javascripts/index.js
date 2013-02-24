$(function() {
	requireTemplate("popup");

	options = {
		appUrl: appUrl,
		imagesPath: appUrl + "/images",

		categoriesUrl: "index.php?r=category",
		resultsUrl: "index.php?r=branchsite",

		extractLocation: function(model) {
			var location =  [model.get('latitude'), model.get('longitude')];
			return location;
		},

		popupContentsTemplate: $('script#template_popup').text()
	};

	new HaitiHackMap(options);
});

