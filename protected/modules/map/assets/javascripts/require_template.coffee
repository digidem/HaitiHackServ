window.requireTemplate = (templateName) ->
  template = $ "#template_#{templateName}"

  if template.length == 0
    tmplDir = './templates'
    tmplUrl = "#{assetsUrl}/#{tmplDir}/#{templateName}.tmpl"
    tmplString = ''

    $.ajax
      url: tmplUrl,
      method: 'GET',
      async: false,
      contentType: 'text',
      success: (data) ->
        tmplString = data

    if tmplString.length > 0
      $('head').append \
        "<script id='template_#{templateName}' type='text/template'>#{tmplString}</script>"
