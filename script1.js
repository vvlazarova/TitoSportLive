$(document).ready(function() {
   // Initialize tilt effect on the element with the ID "image"
   $("[data-tilt]").tilt({
      speed: 500,
      perspective: 1000,
      glare: true,
      maxGlare: 0.10,
      reset: false
   });
});