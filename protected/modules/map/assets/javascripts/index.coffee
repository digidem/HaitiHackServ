requireTemplate "popup"

options =
  appUrl: appUrl
  imagesPath: "#{appUrl}/images"

  categoriesUrl: "index.php?r=category"
  resultsUrl: "index.php?r=branchsite"

  extractLocation: (model) ->
    location =  [model.get('latitude'), model.get('longitude')]

  popupContentsTemplate: $('script#template_popup').text()

new HaitiHackMap(options)
