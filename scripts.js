
$(function(){
    $(".icon_1").click(function(){
      $(".input").toggleClass("active");
      $(".whatever").toggleClass("active");
    })
});





/* ----- JavaScript ----- */
window.onload = function () {
  /* Cache the popup. */
  var popup = document.getElementById("popup");
  
  /* Show the popup. */
  popup.classList.remove("hidden");
  
  /* Fade the popup in */
  setTimeout(()=>popup.classList.add("fade-in"));

  // Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
  
  /* Close the popup when a city is selected. */
  function closeWin() {
    myWindow.close();
  };

  // When the user clicks on <span> (x), close the modal
span.onclick = function() {
    popup.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == popup) {
      popup.style.display = "none";
    }
  }
};



