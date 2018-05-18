// via https://stackoverflow.com/questions/5968196/check-cookie-if-cookie-exists
function getCookie(name) {
  var dc = document.cookie;
  var prefix = name + "=";
  var begin = dc.indexOf("; " + prefix);
  if (begin === -1) {
    begin = dc.indexOf(prefix);
    if (begin !== 0) return null;
  } else {
    begin += 2;
    var end = document.cookie.indexOf(";", begin);
    if (end === -1) {
      end = dc.length;
    }
  }

  return decodeURI(dc.substring(begin + prefix.length, end));
}

function createTimeline() {
  twttr.widgets.createTimeline(
    "347387182199226369",
    document.getElementById("twitter-container"),
    {
      height: 400
    }
  );
}