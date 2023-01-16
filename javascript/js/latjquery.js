$( document ).ready(function() {
    console.log( "siap!" );
});

$(function (params) {

    $("#isi").html("<h1>Belajar JQuery</h1>");

    $("#klik").click(function (e) { 
        e.preventDefault();
        alert("belajat Javascript");
    });

    $("#isi").mouseleave(function () { 
        alert("mouse leave");
        console.log("mouse");
    });


    
});