// ************ Accordions 
//$(document).ready(function() {
//    $(".faq > li:first-child").fadeIn();
//    $(".faq > li:first-child >").addClass("expanded");
//    $(".faq > li > a").on('click', function(e) {
//        e.preventDefault();
//        var $this = $(this);
//        if ($this.hasClass("expanded")) {
//            $this.removeClass("expanded");
//        } else {
//            $(".faq a.expanded").removeClass("expanded");
//            $this.addClass("expanded");
//            $(".sub-faq").filter(":visible").slideUp("normal");
//        }
//        $this.parent().children("ul").stop(true, true).slideToggle("normal");
//    });
//	});
/***/

$(document).ready(function() {
    $(".faq > li:first-child .sub-faq").fadeIn();
    $(".faq > li:first-child >").addClass("expanded");
    $(".faq > li > a").on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        if ($this.hasClass("expanded")) {
            $this.removeClass("expanded");
        } else {
            $(".faq a.expanded").removeClass("expanded");
            $this.addClass("expanded");
            $(".sub-faq").filter(":visible").slideUp("fade");
        }
        $this.parent().children("ul").stop(true, true).slideToggle("normal");
    });
	});