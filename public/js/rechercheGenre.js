
$(document).ready(function() {

    $('a[name =genre]').click(function() {
        $(".uneserie").hide();
        $("."+ this.value ).show();
    });
})