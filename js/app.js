/*cookies*/
function accept() {
    document.cookie = "cookies_accepted=true";
    
    document.getElementById("cookie-popup").style.display = "none";
  }

  function check() {
    return document.cookie.indexOf("cookies_accepted=true") !== -1;
  }

  if (!check()) {
    document.getElementById("cookie-popup").style.display = "block";
  }
/*cookies*/