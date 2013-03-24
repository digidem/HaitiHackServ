(function() {
  var SearchListener;
  var __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };
  SearchListener = (function() {
    function SearchListener($base) {
      this.resultChosen = __bind(this.resultChosen, this);
      this.search = __bind(this.search, this);
      this.addListeners = __bind(this.addListeners, this);
      this.setup = __bind(this.setup, this);      this.$base = $base;
      this.setup();
    }
    SearchListener.prototype.setup = function() {
      this.$address = this.$base.find("[data-address-search='search']");
      this.$sources = this.$base.find("[data-address-search='source']");
      this.$longitude = this.$base.find("[data-address-search='longitude']");
      this.$latitude = this.$base.find("[data-address-search='latitude']");
      this.$trigger = this.$base.find("[data-address-search='trigger']");
      this.addListeners();
      App.options = {
        chosenResultsFunction: this.resultChosen
      };
      return new App.SearchRouter();
    };
    SearchListener.prototype.addListeners = function() {
      return this.$trigger.on("click", this.search);
    };
    SearchListener.prototype.search = function() {
      var address, out;
      address = this.$address.val();
      if (address.length === 0) {
        return;
      }
      out = [this.$address.val()];
      this.$sources.each(function(i, val) {
        var v;
        v = $(val).children("option").filter(":selected").text();
        if (v !== "None") {
          return out.push(v);
        }
      });
      $('[name="builtAddress"]').val(out.join(", "));
      App.search.$el.trigger('change');
      return console.log("A");
    };
    SearchListener.prototype.resultChosen = function(model) {
      this.$latitude.val(model.get("lat"));
      this.$longitude.val(model.get("lon"));
      return $('[name="addressFound"]').val(model.get("display_name"));
    };
    return SearchListener;
  })();
  window.SearchListener = SearchListener;
}).call(this);
