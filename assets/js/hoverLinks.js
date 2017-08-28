$('.link-block').on("mouseenter",function(){
    var pannel = $(this).children();
    var pan = $(pannel)[0];
    $(pan).removeClass('panel-default');
    $(pan).addClass('panel-primary');
});

$('.link-block').on("mouseleave",function(){
    var pannel = $(this).children();
    var pan = $(pannel)[0];
    $(pan).removeClass('panel-primary');
    $(pan).addClass('panel-default');
});