$(".deletecomment").on('click', function(e){
    var id = $(this).data('id');
    var instance = this;
    $.post('/services/deleteCommentService.php', {id: id}).done(function(response){
        if(response.includes("success")){
            var parentDiv = $(instance).closest(".comment");
            $(parentDiv).fadeOut();
        }
        else{
            console.log("error");
        }
    });
});