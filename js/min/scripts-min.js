!function($,t,i){$(function(){"use strict";var t=$("#testimonials .wrapper");t.owlCarousel({items:1,margin:10,autoplay:!0,autoplayTimeout:7e3,autoplayHoverPause:!0}),$(".play").on("click",function(){t.trigger("autoplay.play.owl",[1e3])}),$(".stop").on("click",function(){t.trigger("autoplay.stop.owl")}),$.fn.equalHeight=function(){var t=$("#associations, #welcome"),i=0;t.each(function(){$(this).height()>i&&(i=$(this).height())}),t.height(i)},$.fn.equalHeightContent=function(){var t=$(".sidebar, .main_content"),i=0;t.each(function(){$(this).height()>i&&(i=$(this).height())}),t.height(i)},$(".mobile_nav").on("click",function(){$(".header .nav").toggleClass("open")});var i=$("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']"),e=$(".wrapper p");i.each(function(){$(this).data("aspectRatio",this.height/this.width).removeAttr("height").removeAttr("width")}),$(window).resize(function(){var t=e.width();i.each(function(){$(this).width(t).height(t*$(this).data("aspectRatio"))})}).resize(),$(document).ready(function(){setTimeout(function(){$.fn.equalHeight(),$.fn.equalHeightContent()},500)})})}(jQuery,this);