$(function(){
    $('.edit-content').on('keydown keyup keypress change', function(){
        var str = $(this).val();
        
        str =  str.replace(/(\n|\r)/g, "");
        str = str.replace(/( |　)/g, "");
        var strCount = str.length;
        
        $('#js_count').text(strCount);
    });
});