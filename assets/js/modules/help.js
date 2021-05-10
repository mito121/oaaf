

//navigate to how-page!
function how_navigate(){
  window.location.href = "index.php?page=how";
  console.log("hej man");
}


// Submit help overlay
let overlayOpen = false;
document.getElementById("helpForm").addEventListener("submit", function (e) {
   e.preventDefault();
   if (overlayOpen == true) {
      document.getElementById("helpOverlay").style.display = "none";
      let overlayOpen = false;
   } else {
      document.getElementById("helpOverlay").style.display = "block";
      let overlayOpen = true;
   }
});
// Close overlay btn
function closeHelpOverlay() {
   document.getElementById("helpOverlay").style.display = "none";
   let overlayOpen = false;
}

//close on overlay
$(".overlay_rapporter_box, .circle").on("click", function (e) {
   e.stopPropagation();
});


//open delete profile overlay
document.getElementById('delete-toggle').addEventListener("click", function () {
   document.getElementById('slet_profil_overlay').style.display = "block";
});

document.getElementById('no-delete').addEventListener("click", function () {
   document.getElementById('slet_profil_overlay').style.display = "none";
});



/* ## Toggle collapsibles */
var box = document.getElementsByClassName("toggle-collapse");
var collapsible = document.getElementsByClassName("collapsible");

var i;

for (i = 0; i < box.length; i++) {
   box[i].addEventListener("click", function () {
      this.classList.toggle("open");

      if (this.classList.contains("open")) {
         var maxHeight = 65 + this.lastElementChild.offsetHeight + "px";
         this.style.maxHeight = maxHeight;
      } else {
         this.style.maxHeight = "50px";
      }
   });
}

for (i = 0; i < collapsible.length; i++) {
   collapsible[i].addEventListener("click", function (e) {
      e.stopPropagation();
   });
}

$('.has-annuller').on("click", function () {
   var that = this;

   $('.annuller-btn', this).on("click", () => {
      that.style.maxHeight = "50px";
      that.classList.remove("open");
   });
});

// Go back from sub page
$(".back").on("click", function () {
   window.location.href = "index.php";
});




//submit form
let form = document.getElementById('helpForm');
document.getElementById("refresh").addEventListener("click", function () {
   helpForm.submit();
});

$('#delete_profile').on("click", function () {
   window.location.replace("handlers/deleteProfile.php");
});
