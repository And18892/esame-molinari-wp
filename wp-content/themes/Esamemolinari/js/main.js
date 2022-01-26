var typed = new Typed('.animate', {
    strings: ["Andrea", "a Coder", "an UI designer"],
    typeSpeed: 50,
    backSpeed:70,
    loop:true
  });

	var wow = new WOW({

    	offset:100,        // distance to the element when triggering the animation (default is 0)

    	mobile:false       // trigger animations on mobile devices (default is true)

  	});

	wow.init();

/*
  var target = document.querySelector(".info-work");
  var secondTarget = document.querySelector(".work-text");
  target.addEventListener("mouseover", mOver, false);
  target.addEventListener("mouseout", mOut, false);
  
  function mOver() {
     target.classList.add('animate__animated', 'animate__bounceOutLeft')
  }
  
  function mOut() {  
     target.classList.remove("animated")
  }
  
*/
