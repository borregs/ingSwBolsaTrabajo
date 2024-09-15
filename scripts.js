$(document).ready(function(){
    $(".nav-itm").click(function(){
        $(".nav-itm").removeClass('selected');
        $(this).addClass('selected');
    });

    $("#tel").on('keyup',function(e){
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    $("#rfc").on('keyup',function(e){
        this.value = (this.value).toUpperCase();
    });
    


});



