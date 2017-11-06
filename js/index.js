
function drope() {
 document.getElementById('campusmenu-entrepreneurs').style.height = "300px;"

}


function validateForm() {
if (!validateEmail(document.getElementById('data_1').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}

w3IncludeHTML();

document.getElementById('scrld1').src=document.getElementById('scrld1').src;
$(document).on('ready', function () {
    $(".myscslider").slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,

    });
});

$(document).on('ready', function () {
    $(".myscslidermobile").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,

    });
});
$(document).on('ready', function () {
    $(".myscsliderartwork").slick({
        slidesToShow: 1,
        slidesToScroll: 1,

    });
});
$(document).on('ready', function () {
    $(".myscsliderphotos").slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'

    });
});

$(document).on('ready', function () {
 $('.myfeatworkslider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.myfeatworkslider-nav'
 });
});

$(document).on('ready', function () {
    $('.myfeatworkslider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.myfeatworkslider',
      dots: true,
      centerMode: true,
      focusOnSelect: true
    });
});


function fnsignup() {
  alert('wroking');
  document.getElementById('myLoginBox').style.display = "inline-block"
}
function showsignin() {
  document.getElementById('myBox-activelogin').style.display = "inline-block";
  document.getElementById('myBox-activeregister').style.display = "none";
}
function showregister() {
  document.getElementById('myBox-activelogin').style.display = "none";
  document.getElementById('myBox-activeregister').style.display = "inline-block";
}
document.onload = checkuser();
function checkuser() {
}

//code before the pause
setTimeout(function(){

    document.getElementById('scrld1').src = document.getElementById('scrld1').src;
    document.getElementById('scrld2').src = document.getElementById('scrld2').src;
    document.getElementById('scrld3').src = document.getElementById('scrld3').src;
    document.getElementById('scrld4').src = document.getElementById('scrld4').src;
    document.getElementById('scrld5').src = document.getElementById('scrld5').src;

}, 2000);

//Forum Pages: Create a new forum dropdown
function createforumdropdown() {
  document.getElementById('frumdd').style.height = "200px";
  document.getElementById('af-dd').style.display = "none";
  document.getElementById('af-du').style.display = "block";
}
function createforumdropup() {
  document.getElementById('frumdd').style.height = "0px";
  document.getElementById('af-dd').style.display = "block";
  document.getElementById('af-du').style.display = "none";
}

//Home Page: Leave a messge dropdown
function b3_join_msg_dropdown() {
  document.getElementById('b3msgdd').style.height = "400px";
  document.getElementById('b3-m-dd').style.display = "none";
  document.getElementById('b3-m-du').style.display = "block";
}
function b3_join_msg_dropup() {
  document.getElementById('b3msgdd').style.height = "0px";
  document.getElementById('b3-m-dd').style.display = "block";
  document.getElementById('b3-m-du').style.display = "none";
}

//Home Page: Register DropDown
function b3_join_j_dropdown() {
  document.getElementById('b3regdd').style.height = "500px";
  document.getElementById('b3-r-dd').style.display = "none";
  document.getElementById('b3-r-du').style.display = "block";
}
function b3_join_j_dropup() {
  document.getElementById('b3regdd').style.height = "0px";
  document.getElementById('b3-r-dd').style.display = "block";
  document.getElementById('b3-r-du').style.display = "none";
}

//campus page entrepreneur and artist drop downs -
function campus_artist_details_dd() {
  document.getElementById('headrow-artist-detailsid').style.height= "200px";
  document.getElementById('headrow-artist-detailsid').style.width= "400%";
  document.getElementById('headrow-entrepreneur-detailsid').style.height= "0px";
  document.getElementById('artdtls-dd').style.display = "none";
  document.getElementById('artdtls-du').style.display = "block";
}
function campus_artist_details_du() {
  document.getElementById('headrow-artist-detailsid').style.height= "0px";
  document.getElementById('artdtls-dd').style.display = "block";
  document.getElementById('artdtls-du').style.display = "none";
}
function campus_entrepreneur_details_dd() {
  document.getElementById('headrow-entrepreneur-detailsid').style.height= "200px";
  document.getElementById('headrow-entrepreneur-detailsid').style.width= "400%";
  document.getElementById('headrow-artist-detailsid').style.height= "0px";
  document.getElementById('entrdtls-dd').style.display = "none";
  document.getElementById('entrdtls-du').style.display = "block";
}
function campus_entrepreneur_details_du() {
  document.getElementById('headrow-entrepreneur-detailsid').style.height= "0px";
  document.getElementById('entrdtls-dd').style.display = "block";
  document.getElementById('entrdtls-du').style.display = "none";
}


function moveDetails() {
    var $anchor = $("#articledetails-anchor");
    var $scroller = $('#articledetails-stick');

    var move = function() {
        var st = $(window).scrollTop();
        var ot = $anchor.offset().top;
        if(st > ot) {
            $scroller.css({
                position: "fixed",
                top: "150px",
                left: "30px"
            });
        } else {
            if(st <= ot) {
                $scroller.css({
                    position: "relative",
                    top: "",
                    left: ""
                   
                });
            }
        }
    };
    $(window).scroll(move);
    move();
}