
$(document).ready(function(){

    Slide();
    Noti();
    focus();
    Reco();
    movement();

});

function  Slide() {
    $("#search-phone").click(function(){
        $("#search-bar-phone").slideDown();
    });

}

function Noti() {
    var $noti = $("hr");
    $noti.waypoint(function () {
        $(".noti-text").animate({marginLeft:"100px"},2000);

    });


}

function  focus() {

    $(".recommend form input").click(function () {
        $(".gallary .row div div").addClass("inner-shadow");
    });




}



function Reco() {
    var $reco = $(".gallary");
    $reco.waypoint(function () {
        $(".recommend h1").animate({marginLeft:"100px"},2000);

    });

}

function movement() {
    $(".line-top div").click(function () {
        $this = $(this).index();
        move($this,"-10","16");
    });

    $(".line-bottom div").click(function () {
        $this = $(this).index()+2;
        move($this,"-22","12");
    });

    function move(obj,x,y) {
        $(".span"+obj).animate(
            {
                top : x+"px",
                left :y+"px",
            },500);
    }
}


