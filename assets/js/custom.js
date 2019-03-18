var countryCode;
$.getJSON("http://ipinfo.io", function (response) {
  $("#ip").html("IP: " + response.ip);
  countryCode = response.country;
  $("#address").html(response.country);
  
$.getJSON('http://phpavenue.com/sfu/selfgrowth/js/capital.json', countries => {
  let myCountry = countries[countryCode];
  alert(myCountry)
  $(".adress2").html(myCountry);
});
  document.getElementById("country").src = "https://www.countryflags.io/" + response.country + "/flat/64.png";
  $("#details").html(JSON.stringify(response, null, 4));
}, "jsonp");

$('.responsive').slick({
  dots: true,
  autoplay: false,
  autoplaySpeed: 2000,
  margin: 10,
  speed: 600,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [{
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {

      breakpoint: 579,
      settings: {
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: false,
  focusOnSelect: true
});
$('.says-slider').slick({
  dots: true,
  autoplay: true,
  autoplaySpeed: 2000,
  margin: 10,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});