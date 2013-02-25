class TemplateUtil
  constructor: (templateName) ->
    @templateName = templateName
    @requireTemplate()

  requireTemplate: =>
    if $("##{@id()}").length == 0
      @grabTemplate()

  grabTemplate: =>
    $.ajax
      url: "#{assetsUrl}/templates/#{@templateName}.tmpl"
      method: 'GET'
      async: false
      contentType: 'text'
      success: (template) =>
        @includeTemplate template

  includeTemplate: (template) ->
    if template.length > 0
      type = "text/template"
      scriptTag = "<script id='#{@id()}' type='#{type}'>#{template}</script>"

      $('head').append scriptTag

  id: =>
    "template_#{@templateName}"

  @requireTemplate: (templateName) ->
    new TemplateUtil(templateName)

window.requireTemplate = TemplateUtil.requireTemplate
