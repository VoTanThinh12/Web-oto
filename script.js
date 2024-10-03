document.addEventListener("DOMContentLoaded", function () {
  const logoImage = document.getElementById("img-logo");

  logoImage.addEventListener("dragstart", function (event) {
    event.preventDefault();
  });
});
