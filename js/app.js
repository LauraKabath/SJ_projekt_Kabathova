/*validacia formulara*/
function submitForm(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const gdpr = document.getElementById('check').checked;

    window.location.href = 'thank_you.php';
}
/*validacia formulara*/

/*lighbox gallery*/
document.addEventListener('DOMContentLoaded', function () {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightboxImage = document.getElementById('lightboxImage');
    galleryItems.forEach(function (item) {
        item.addEventListener('click', function () {
            const imageSrc = item.querySelector('img').src;
            lightboxImage.src = imageSrc;
        });
    });
});
/*lighbox gallery*/

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