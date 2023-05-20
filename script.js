$(document).ready(function() {
    $('.images:first').addClass('active');

    setInterval(function() {
        var active = $('.images.active');
        var next = active.next('.images');

        if (next.length === 0) {
            next = $('.images:first');
        }

        active.removeClass('active');
        next.addClass('active');
    }, 5000);
});



// $(window).on("load", function() {
//   $(window).scroll(function() {
//     var windowBottom = $(this).scrollTop() + $(this).innerHeight();
//     var aboutUsTop = $(".about-us").offset().top;
//     if (windowBottom > aboutUsTop) {
//       $(".about-us").addClass("fade-in");
//     }
//   }).scroll();
// });

// $(window).on("load", function() {
//   $(window).scroll(function() {
//     var windowBottom = $(this).scrollTop() + $(this).innerHeight();
//     var villasexploreTop = $(".villas-explore").offset().top;
//     if (windowBottom > villasexploreTop) {
//       $(".villas-explore").addClass("fade-in");
//     }
//   }).scroll();
// });

// $(window).on("load", function() {
//   $(window).scroll(function() {
//     var windowBottom = $(this).scrollTop() + $(this).innerHeight();
//     var videopart = $(".video-part").offset().top;
//     if (windowBottom > videopart) {
//       $(".video-part").addClass("fade-in");
//     }
//   }).scroll();
// });


// $(window).on("load", function() {
//   $(window).scroll(function() {
//     var windowBottom = $(this).scrollTop() + $(this).innerHeight();
//     var services = $(".services").offset().top;
//     if (windowBottom > services) {
//       $(".services").addClass("fade-in");
//     }
//   }).scroll();
// });

// $(window).on("load", function() {
//   $(window).scroll(function() {
//     var windowBottom = $(this).scrollTop() + $(this).innerHeight();
//     var reservations = $(".reservations").offset().top;
//     if (windowBottom > reservations) {
//       $(".reservations").addClass("fade-in");
//     }
//   }).scroll();
// });

