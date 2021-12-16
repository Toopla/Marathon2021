
$(document).ready(function() {
    $('input[type=button][name=genre]').click(function() {
        $(".uneserie").hide();
        
        $("."+ this.value).show();
    });
})