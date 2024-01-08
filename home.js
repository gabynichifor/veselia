$(document).ready(function() {
  // Initialize the carousel
  $("#historyCarousel").carousel();

  // Activate carousel indicators on slide change
  $("#historyCarousel").on("slide.bs.carousel", function(event) {
    var activeIndex = $(event.relatedTarget).index();
    $(".carousel-indicators li").removeClass("active");
    $(".carousel-indicators li:nth-child(" + (activeIndex + 1) + ")").addClass("active");
  });
});

document.addEventListener("DOMContentLoaded", function() {
  var videoPlayer = document.getElementById("video-player");
  var videoLinks = document.querySelectorAll(".video-list a");

  videoLinks.forEach(function(link) {
    link.addEventListener("click", function(e) {
      e.preventDefault();
      var videoSource = this.getAttribute("data-video");
      videoPlayer.src = "video/" + videoSource;

      videoLinks.forEach(function(link) {
        link.classList.remove("active");
      });

      this.classList.add("active");
    });
  });
});

//
// JavaScript for video slider functionality
// Get necessary elements
const videoPlayer = document.querySelector('.video-player');
const video = videoPlayer.querySelector('.video');
const playButton = videoPlayer.querySelector('.button.play');
const pauseButton = videoPlayer.querySelector('.button.pause');

// Play button click event listener
playButton.addEventListener('click', () => {
  video.play();
  videoPlayer.classList.add('playing');
});

// Pause button click event listener
pauseButton.addEventListener('click', () => {
  video.pause();
  videoPlayer.classList.remove('playing');
});



// Obțineți referințele către elementele formularului și containerul acestuia
const showFormButton = document.getElementById('show-registration-form');
const registrationFormContainer = document.querySelector('.registration-form-container');
const registrationForm = document.getElementById('registration-form');
const formMessage = document.getElementById('form-message');

// Ascultați evenimentul de clic pe butonul de înregistrare
showFormButton.addEventListener('click', function () {
  // Ascundeți butonul de înregistrare și afișați formularul
  showFormButton.style.display = 'none';
  registrationFormContainer.style.display = 'block';
});

// Ascultați evenimentul de trimitere a formularului
registrationForm.addEventListener('submit', function (event) {
  event.preventDefault(); // Opriți comportamentul implicit al trimiterii formularului

  // Validați formularul
  const nume = document.getElementById('nume').value;
  const prenume = document.getElementById('prenume').value;
  const email = document.getElementById('email').value;
  const mesaj = document.getElementById('mesaj').value;

  if (nume === '' || prenume === '' || email === '' || mesaj === '') {
    formMessage.textContent = 'Vă rugăm să completați toate câmpurile!';
    formMessage.style.color = 'red';
  } else {
    // Trimiteți datele la Google Sheets folosind o solicitare HTTP
    const url = 'https://docs.google.com/spreadsheets/d/1Fge2e8J7M7q_elyHd32KC614zBHuC5Qr6J-4BGnM0Mw/edit#gid=0';
    const formData = new FormData(registrationForm);

    fetch(url, {
      method: 'POST',
      body: formData
    })
      .then(function (response) {
        if (response.ok) {
          formMessage.textContent = 'Înregistrarea a fost trimisă cu succes!';
          formMessage.style.color = 'green';
          registrationForm.reset(); // Resetați formularul după trimitere
        } else {
          formMessage.textContent = 'A apărut o eroare. Vă rugăm să încercați din nou mai târziu!';
          formMessage.style.color = 'red';
        }
      })
      .catch(function (error) {
        formMessage.textContent = 'A apărut o eroare. Vă rugăm să încercați din nou mai târziu!';
        formMessage.style.color = 'red';
      });
  }
});

// Asigură-te că codul JavaScript este rulat după încărcarea completă a paginii
document.addEventListener("DOMContentLoaded", function() {
  // Obține toate link-urile cu clasa "smooth-scroll"
  var smoothScrollLinks = document.querySelectorAll('a.smooth-scroll');

  // Iterează prin fiecare link și adaugă un eveniment de clic
  for (var i = 0; i < smoothScrollLinks.length; i++) {
    smoothScrollLinks[i].addEventListener("click", function(event) {
      event.preventDefault(); // Previne comportamentul implicit al link-ului

      var targetSectionId = this.getAttribute("href"); // Obține id-ul secțiunii țintă din atributul href
      var targetSection = document.querySelector(targetSectionId); // Obține elementul secțiunii țintă

      // Verifică dacă secțiunea țintă există și face trecerea lină la aceasta
      if (targetSection) {
        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: "smooth"
        });
      }
    });
  }
});