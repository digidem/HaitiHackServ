class SearchListener
  constructor: ($base) ->
    @$base = $base
    @setup()

  setup: =>
    @$address = @$base.find("[data-address-search='search']")
    @$sources = @$base.find("[data-address-search='source']")
    @$longitude = @$base.find("[data-address-search='longitude']")
    @$latitude = @$base.find("[data-address-search='latitude']")
    @$trigger = @$base.find("[data-address-search='trigger']")
    @addListeners()

    App.options = { chosenResultsFunction: @resultChosen }
    new App.SearchRouter()

  addListeners: =>
    @$trigger.on "click", @search

  search: =>
    address = @$address.val()

    return if address.length == 0

    out = [@$address.val()]
    @$sources.each (i, val) ->
      v = $(val).children("option").filter(":selected").text()
      unless v == "None"
        out.push(v)

    $('[name="builtAddress"]').val out.join(", ")
    App.search.$el.trigger 'change'

  resultChosen: (model) =>
    @$latitude.val(model.get("lat"))
    @$longitude.val(model.get("lon"))
    $('[name="addressFound"]').val(model.get("display_name"))

window.SearchListener = SearchListener
