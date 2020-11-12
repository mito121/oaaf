// Redirect to https
if (location.protocol !== "https:") {
    location.replace(
            `https:${location.href.substring(location.protocol.length)}`
            );
}

// Toggle navigation
$(".nav-toggle").on("click", function () {
    $("#nav-overlay").toggleClass("d-none");
});
$("#nav-overlay").on("click", function () {
    $("#nav-overlay").toggleClass("d-none");
});
$("#main-nav").on("click", function (e) {
    e.stopPropagation();
});

// Go back from sub page
$(".back").on("click", function () {
    window.location.href = "index.php";
});
