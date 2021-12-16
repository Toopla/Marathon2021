
$(document).ready(function() {
    $('input[type=button][name=genre]').click(function() {
        $(".uneserie").hide();
        $("."+ this.value).show();
    });

    $('input[type=button][name=tout]').click(function() {
        $(".uneserie").show();
    });
})