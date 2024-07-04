/*AVEIRO MAIS THEME JS*/

(function ($) {
	$(document).ready(function () {
	  //"use strict";


	  
  
  
	  // MASONRY
	  $('.events-grid').isotope({
		itemSelector: '.events-grid .grid-item',
		percentPosition: true,
		masonry: {
		  columnWidth: '.grid-item'
		}
	  });
    
	  /* HAMBURGER MENU */
	  $('.hamburger-menu').on('click', function () {
		$(".menu .line").toggleClass('opened');
		$(".mobile-menu").toggleClass("active")
	  })
  
	  /* SIDE WIDGET */
	  $('.more-button').on('click', function () {
		$(".side-widget").toggleClass("active")
	  })
  
  
  
  
	}); 
	// END JQUERY	
  

  
	// DATA BACKGROUND IMAGE
	var pageSection = $("*");
	pageSection.each(function (indx) {
	  if ($(this).attr("data-background")) {
		$(this).css("background", "url(" + $(this).data("background") + ")");
	  }
	});
  
	// DATA BACKGROUND COLOR
	var pageSection = $("*");
	pageSection.each(function (indx) {
	  if ($(this).attr("data-background")) {
		$(this).css("background", $(this).data("background"));
	  }
	});
  
  
	// LOCOMOTIVE
	let options = {
	  el: document.querySelector('.smooth-scroll'),
	  smooth: true,
	  class: 'is-inview',
	  getSpeed: true,
	  getDirection: true,
	  reloadOnContextChange: true
	}
  
  
	const header = document.getElementById('wrapper-navbar');
	let hidden = false,
	  static = true;
  
	const scroll = new LocomotiveScroll(options);
  
	gsap.registerPlugin(ScrollTrigger);
	ScrollTrigger.addEventListener("refresh", () => scroll.update());
	ScrollTrigger.refresh();
  
  
	scroll.on('scroll', (instance) => {
	  let headerHeight = header.getBoundingClientRect().height;
	  if (instance.direction === 'down' && static) {
		if (instance.scroll.y > headerHeight) {
		  header.classList.add('pinned');
		  if (header.classList.contains('navbar')) {
			header.classList.remove('light');
			header.classList.add('dark');
		  }
		  static = false;
		}
	  }
	  if (instance.direction === 'up' && !static) {
		if (instance.scroll.y <= headerHeight) {
		  header.classList.remove('pinned');
		  if (header.classList.contains('navbar')) {
			header.classList.remove('dark');
			header.classList.add('light');
		  }
		  static = true;
		}
	  }
	  if (instance.direction === 'down' && !hidden) {
		if (instance.scroll.y > (headerHeight / 2)) {
		  //console.log('hidden');
		  header.classList.remove('pinned');
		  header.classList.add('unpinned');
		  hidden = true;
		}
	  }
	  if (instance.direction === 'up' && hidden) {
		//console.log('show');
		header.classList.remove('unpinned');
		header.classList.add('pinned');
		hidden = false;
	  }
  
  
	});
  

	// COUNTDOWN
	if ($("#js-countdown").hasClass("countdown")) {
  
  	// DATA BACKGROUND IMAGE
	  let dateEvent = document.querySelector("#js-countdown");
	
	  const countdown = new Date(dateEvent.dataset.event);
  
	  function getRemainingTime(endtime) {
		const milliseconds = Date.parse(endtime) - Date.parse(new Date());
		const seconds = Math.floor((milliseconds / 1000) % 60);
		const minutes = Math.floor((milliseconds / 1000 / 60) % 60);
		const hours = Math.floor((milliseconds / (1000 * 60 * 60)) % 24);
		const days = Math.floor(milliseconds / (1000 * 60 * 60 * 24));
  
		return {
		  'total': milliseconds,
		  'seconds': seconds,
		  'minutes': minutes,
		  'hours': hours,
		  'days': days,
		};
	  }
  
	  function initClock(id, endtime) {
		const counter = document.getElementById(id);
		const daysItem = counter.querySelector('.js-countdown-days');
		const hoursItem = counter.querySelector('.js-countdown-hours');
		const minutesItem = counter.querySelector('.js-countdown-minutes');
		const secondsItem = counter.querySelector('.js-countdown-seconds');
  
		function updateClock() {
		  const time = getRemainingTime(endtime);
  
		  daysItem.innerHTML = time.days;
		  hoursItem.innerHTML = ('0' + time.hours).slice(-2);
		  minutesItem.innerHTML = ('0' + time.minutes).slice(-2);
		  secondsItem.innerHTML = ('0' + time.seconds).slice(-2);
  
		  if (time.total <= 0) {
			clearInterval(timeinterval);
		  }
		}
  
		updateClock(); 
		const timeinterval = setInterval(updateClock, 1000);
	  }
  
	  initClock('js-countdown', countdown);
	}
  
  
  })(jQuery);
  