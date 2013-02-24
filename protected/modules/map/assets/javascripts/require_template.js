var requireTemplate = function (templateName) {
	var template = $('#template_' + templateName);
	if (template.length === 0) {
		var tmplDir = './templates';
		var tmplUrl = assetsUrl + '/' + tmplDir + '/' + templateName + '.tmpl';
		var tmplString = '';

		$.ajax({
			url: tmplUrl,
			method: 'GET',
			async: false,
			contentType: 'text',
			success: function (data) {
				tmplString = data;
			}
		});

		$('head').append('<script id="template_' +
				templateName + '" type="text/template">' + tmplString + '<\/script>');
	}
};
