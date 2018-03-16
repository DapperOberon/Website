var english = document.getElementById('english');
var german = document.getElementById('deutsch');
// Window.location.search added to ensure forms and databases still work when changing languages
var pageUrl = location.pathname + window.location.search;

if(window.location.href.indexOf("en") > -1)
{
  locale.value = english.value;
}
else if(window.location.href.indexOf('de') > -1){
  // set selected to german
  locale.value = german.value;
}

function changeLocale() {
  if(english.selected == true) {
    window.location.href = pageUrl.replace("de", "en");
  }
  else if(german.selected == true) {
    window.location.href = pageUrl.replace("en", "de");
  }
}
