$(document).ready(function() {    
    $(".order").submit(function() {
        ajax(this);
	});
});

jQuery.fn.notExists = function () {
    return $(this).length == 0;
}

function ajax(ob) 
{    
    var obParrent = $(ob).parent();
    var msg;
    var processor;
    var result;
    
    //obParrent.append('<center id="icoDownl"><img src="./images/ajax-loader.gif" alt="Загрузка" /></center>');
    obParrent.append('<div class="icoDownl text-center" style="display: none; opacity: 0;"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
    
    var icoDownl = $(obParrent).find(".icoDownl");
    var result = $(obParrent).find(".result");
    
    processor = "./send.php";
    
    $(icoDownl).animate({
        opacity: 1,
        height: 'toggle'
    }, 1000, function () {});
    
    $(ob).animate({
        opacity: 0,
        height: 'toggle'
    }, 1000, function () {});

    $.ajax({
        type: "POST",
        url: processor,
        data: $(ob).serialize(),
        success: function (data) {
            $(icoDownl).fadeOut("slow");
            setTimeout(function () {
                $(result).html(data);
                $(result).animate({
                    opacity: 1,
                    height: 'toggle'
                }, 1000, function () {});
            }, 700);
            setTimeout(function () {
                $(icoDownl).remove();
            }, 2600);
        },
        error: function (xhr, str) {
            alert("Возникла ошибка!"+ xhr +" || " + str);
            $(icoDownl).fadeOut("slow");
            setTimeout(function () {
                $(result).html(xhr, str);
                $(result).animate({
                    opacity: 1,
                    height: 'toggle'
                }, 1000, function () {});
            }, 700);
            setTimeout(function () {
                $(icoDownl).remove();
            }, 2600);
            $(ob).animate({
                opacity: 1,
                height: 'toggle'
            }, 1000, function () {});
            /*
            setTimeout(function() {
                $(".modal").modal('hide')
            }, 1000);
            */
        }
    }).done(function() {
        $(ob).find("[type='text']").val("");
        //alert("Спасибо за заявку! Скоро мы с Вами свяжемся.");
        
        $(ob).trigger("reset");
        $(ob).animate({
            opacity: 1,
            height: 'toggle'
        }, 1000, function () {});
        setTimeout(function () {
            $(result).animate({
                opacity: 0,
                height: 'toggle'
            }, 1000, function () {
                    $(result).html("");
                });
        }, 5000);
        /*
        setTimeout(function() {
            $.fancybox.close();
        }, 1000);
        */
    });
    return false;   
}