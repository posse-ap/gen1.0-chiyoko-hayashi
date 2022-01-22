$(function() {
    $(".sortable").sortable();
    $("#submit").on('click', function() {
        var listIds = $(".sortable").sortable("toArray");
        $("#list-ids").val(listIds);
        $("form").submit();
    });
});

// $( function ()
// {
//     console.log('run jquery');
// } )