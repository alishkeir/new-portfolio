// Smooth scroll for the navigation menu and links with .scrollto classes
$(document).on("click", ".nav-menu a, .scrollto", function (e) {
  if (
    location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") &&
    location.hostname == this.hostname
  ) {
    e.preventDefault();
    var target = $(this.hash);
    if (target.length) {
      var scrollto = target.offset().top;

      $("html, body").animate(
        {
          scrollTop: scrollto,
        },
        200,
        "easeInOutExpo"
      );

      if ($(this).parents(".nav-menu, .mobile-nav").length) {
        $(".nav-menu .active, .mobile-nav .active").removeClass("active");
        $(this).closest("li").addClass("active");
      }

      if ($("body").hasClass("mobile-nav-active")) {
        $("body").removeClass("mobile-nav-active");
        $(".mobile-nav-toggle i").toggleClass(
          "icofont-navigation-menu icofont-close"
        );
      }
      return false;
    }
  }
});
