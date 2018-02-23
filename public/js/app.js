(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

var _home = require("./home");

var h = new _home.home();
$(document).ready(function () {
    h.init_carousal($(".products-carousal"));
    $(".ract a").mPageScroll2id();
    $(".products-carousal .slick-slide").on("click", function () {
        var i = $(this).attr("product");
        $("#myModal .modal-title").html("\n<i class=\"fa fa-circle-o-notch fa-spin\" style=\"font-size:24px\"></i>");
        $("#myModal .modal-body").html("<i class=\"fa fa-circle-o-notch fa-spin\" style=\"font-size:24px\"></i>");

        $.ajax({
            url: "/product/get",
            type: "get",
            data: { id: i },
            dataType: "json",
            success: function success(data) {

                $("#myModal .modal-title").html(data.product.name);
                $("#myModal .modal-body").html(data.product.details);
            },
            error: function error(_error) {
                console.log(_error);
            }

        });
    });
});

},{"./home":2}],2:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var home = exports.home = function () {
  function home() {
    _classCallCheck(this, home);
  }

  _createClass(home, [{
    key: "init_carousal",
    value: function init_carousal(item) {
      item.slick({ dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
            infinite: true,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000
          }
        }, {
          breakpoint: 900,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 2000
          }
        }, {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 2000
          }

          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        }]
      });
    }
  }]);

  return home;
}();

;

},{}]},{},[1]);

//# sourceMappingURL=app.js.map
