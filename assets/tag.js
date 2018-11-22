(function(w, d, s) {
  try {
    d = w.top.document || d; w = w.top.document ? w.top : w;
  } catch (e) {}
  var ttag = function() {
    var _tt_articles = window.top.document.querySelectorAll('.article-trigger');
var _tt_slots = _tt_articles[_tt_articles.length - 1].querySelectorAll('p');
    w.teads.page(57414).placement(62461, {slider: {allow_corner_position: false, allow_top_position: false}, "css":"margin: 20px auto; max-width: 550px;","format":"inread","slot":{"avoid":{"selector":".figure-container","distance":21},"filter":function filter(slot) {var _tt_href = window.top.location.href;
if (_tt_href.includes('coding-for-kids')) {
	return false;
}},"selector":_tt_slots,"minimum":3}}).serve();
  };
  if (w.teads && w.teads.page) { ttag(); }
  else if (!w.teadsscript) {
    s.src = '//a.teads.tv/media/format/v3/teads-format.min.js';
    s.async = true; s.onload = ttag; w.teadsscript = d.getElementsByTagName('head')[0].appendChild(s);
  }
})(window, document, document.createElement('script'));