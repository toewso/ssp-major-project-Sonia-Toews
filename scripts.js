




/***********************************
 *
 * SHADOWBOX SLIDE SHOW ARRAY
 
 *************************************/


var imageArray = ["edit_article"];

imageArray.push("image3"); // add 1 new element to end of array

imageArray[0] = "newImage1"; // select an item in the array bay index and set to new value


for (var i = 0; i < imageArray.lengthl; i++) {

}

var largeImageUrls = [];

//get all the images in my gallery and store the data-enlarge in the largeImageUrls array


$(".gallery-item").each(function(index){
    largeImageUrls.push( $(this).attr("data-enlarge") );

});



//on click of small image
// get current image index

// on click of next button
//set the image src = current image index + 1



// on. ("event type"), "selector", method (function);
$("body").on('click', '.shadow-box .next', function(e){  
   // current index is less than the length of images
   if(currentImageIndex < largeImageUrls.length - 1) {
       currentImageIndex++;
   } else {
       currentImageIndex = 0;
   }
  

   $(".shadow-box-container img").attr("src", "/Images/" + largeImageUrls[currentImageIndex]);

});

$("body").on('click', '.shadow-box .prev', function(e){  

    // current index is less than the length of images
    if(currentImageIndex > 0) {
       currentImageIndex--;
   } else {
       currentImageIndex = largeImageUrls.length - 1;
   }
  

   $(".shadow-box-container img").attr("src", "/Images/" + largeImageUrls[currentImageIndex]);
});




/*
// click background to hide
$("body").on("click", ".shadow-box-container", function(e)) {
   $("body").find(".shadow-box").remove();

});

*/
