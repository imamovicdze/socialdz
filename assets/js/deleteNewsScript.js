$(".close").on('click', function(e){
    var id = $(this).data('id');
    var instance = this;
    $.post('/services/deleteNewsService.php', {id: id}).done(function(response){
        if(response.includes("success")){
            console.log("success");
            var parentDiv = $(instance).closest(".col-sm-offset-3");
            $(parentDiv).fadeOut();
        }
        else{
            console.log("error");
        }
    });
});