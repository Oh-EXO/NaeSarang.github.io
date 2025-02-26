
document.getElementById("defaultOpen").click();


$(document).ready(function() {
    lightboxOnResize();
    $(window).resize(function() {
        lightboxOnResize();
    });
});

function openPopup(popupId) {
    document.getElementById(popupId).style.display = "block";
  }
  function closePopup(popupId) {
    document.getElementById(popupId).style.display = "none";
  }

  document.addEventListener("click", function(event) {
    var popups = document.querySelectorAll(".popupaa");
    for (var i = 0; i < popups.length; i++) {
      var popup = popups[i];
      if (event.target !== popup && !popup.contains(event.target)) {
        popup.style.display = "none";
      }
    }
  });

  document.querySelectorAll(".popup-contentab").forEach(function(content) {
    content.addEventListener("click", function(event) {
      event.stopPropagation();
    });
  });

