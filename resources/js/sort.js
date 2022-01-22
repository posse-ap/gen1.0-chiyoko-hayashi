$(function() {
    $(".sortable").sortable();
    $("#submit").on('click', function() {
        var listIds = $(".sortable").sortable("toArray");
        $("#listids").val(listIds);
        // $("form").submit();
    });
});

// $( function ()
// {
//     console.log('run jquery');
// } )