$(document).ready(function () {
    $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("show");
        if (_opened === true && !clickover.hasClass("navbar-toggler")) {
            $(".navbar-toggler").click();
        }
    });
});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

$(document).ready(function(){
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });
});

$(document).ready(function () {
    $('.second-button').on('click', function () {
        $('.animated-icon2').toggleClass('open');
    });
});

$(document).ready(function(){
    $('[data-toggle="tooltip1"]').tooltip();
    $('[data-toggle="tooltip2"]').tooltip();
    $('[data-toggle="tooltip3"]').tooltip();
    $('[data-toggle="tooltip4"]').tooltip();
    $('[data-toggle="tooltip5"]').tooltip();
    $('[data-toggle="tooltip6"]').tooltip();
    $('[data-toggle="tooltip7"]').tooltip();
    $('[data-toggle="tooltip8"]').tooltip();
});

$(document).ready(function(){
    $(window).scroll(function(){
        $(".arrow").css("opacity", 1 - $(window).scrollTop() / 250);
    });
});


$(document).ready(function () {
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
            $("nav .logo").addClass('shrink-image logo-mobile');
        } else {
            $('nav').removeClass('shrink');
            $("nav .logo").removeClass('shrink-image logo-mobile');
        }
    });
});

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('.top-scroll').fadeIn();
        } else {
            $('.top-scroll').fadeOut();
        }
    });
});

$(function () {
    $('[data-toggle="transport-info"]').tooltip();
    $('[data-toggle="diesel-info"]').tooltip();
});

$(function () {
    const element =  document.querySelector('#toTop')
  /*  element.classList.add('animated', 'bounceIn');*/
});

/* Sending message function */
$(function () {
    $("#emailForm").submit(function (e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "sendEmail.php",
            dataType: "json",
            data: form_data}).done(function (data) {
            swal({
                title: "Nachricht gesendet!",
                icon: "success",
                button: "Schließen",
            });
        }).fail(function (data) {
            swal({
                title: "Nachricht nicht gesendet!",
                icon: "error",
                button: "Schließen",
            });
        });
    });
});


/*
optionally for cards


$(document).ready(function() {
    var cards = document.querySelectorAll(".card.effect__click");
    for (var i = 0, len = cards.length; i < len; i++) {
        var card = cards[i];
        clickListener(card);
    }

    function clickListener(card) {
        card.addEventListener("click", function () {
            var c = this.classList;
            c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
        });
    }
});*/

$(document).ready(function() {
    var btn = document.getElementById("toTop");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (navigator.userAgent.match(/i(Phone|Pad)/i) || navigator.userAgent.match(/Android/i)) {
            btn.style.display = "none";
        } else {
            if (document.body.scrollTop > 220 || document.documentElement.scrollTop > 220) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        }
    }
});


const position = [48.216274, 16.3915678];
const centerPosition = [48.2169578, 16.4230718];

function mapsInit() {

    const latLng = new google.maps.LatLng(position[0], position[1]);
    const centerLatLng = new google.maps.LatLng(centerPosition[0], centerPosition[1]);


    const mapOptions = {
        zoom: 14,
        streetViewControl: false,
        scaleControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: centerLatLng
    };

    map = new google.maps.Map(document.getElementById('googlemap'), mapOptions);
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: 'Hedwiggasse 4/26, 1020 Wien',
        draggable: false,
        animation: google.maps.Animation.DROP
    });
}
