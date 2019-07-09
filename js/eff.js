$(document).ready(function() 
{
    $('nav').on("affixed.bs.affix", function (e) {
        $("#navbar").addClass("navbar-fixed-top");
        $("#navbar").find(".navbar-form").removeClass("hide");
    });
    
    $('nav').on("affixed-top.bs.affix", function (e) {
        $("#navbar").removeClass("navbar-fixed-top");
        $("#navbar").find(".navbar-form").addClass("hide");
    });
    
    $("#popover-phone").popover();
    
});