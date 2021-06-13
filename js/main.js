
//Nav
// toggle = document.querySelectorAll(".toggle")[0];
// nav = document.querySelectorAll("nav")[0];
// toggle_open_text = 'Room';
// toggle_close_text = 'Close';

// toggle.addEventListener('click', function() {
//   nav.classList.toggle('open');
  
//   if (nav.classList.contains('open')) {
//     toggle.innerHTML = toggle_close_text;
//   } else {
//     toggle.innerHTML = toggle_open_text;
//   }
// }, false);

// setTimeout(function(){
//   nav.classList.toggle('open'); 
// }, 800);

//Open nav
toggle = document.querySelectorAll(".toggle")[0];
nav = document.querySelectorAll("nav")[0];

toggle.addEventListener('click', function () {
  nav.classList.toggle('open');
});

setTimeout(function () {
  nav.classList.toggle('open');
}, 200);


//Hide menu when link is clicked
const navLink = document.querySelectorAll('.scroll');

function linkAction() {
    
    nav.classList.remove('open');
}

navLink.forEach(n => n.addEventListener('click', linkAction));

//Smooth scroll

const scroll = new SmoothScroll('.scroll a[href*="#"]', {
    speed: 800
});

//Swiper

var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
      invert: false,
    },
    // autoHeight: true,
    pagination: {
      el: '.blog-slider__pagination',
      clickable: true,
    }
});
  


//Cursor 

const cursor = document.querySelector('div.cursors');
const balls = cursor.querySelectorAll("div");
const ballText = cursor.querySelector("div span");
const images = document.querySelectorAll("img[data-hover]");


let aimX = 0;
let aimY = 0;

balls.forEach((ball,index) => {
    let currentX = 0;
    let currentY = 0;
    let speed = 0.3 - index * 0.015;

    const animate = function () {
        currentX += (aimX - currentX) * speed;
        currentY += (aimY - currentY) * speed;
    
        ball.style.left = currentX + "px";
        ball.style.top = currentY + "px";
    
        requestAnimationFrame(animate);
    }
    
    animate();
});


document.addEventListener("mousemove", function (event) {
    aimX = event.pageX;
    aimY = event.pageY;
    
});



    images.forEach(image => {
        image.addEventListener("mouseover", function () {
            ballText.classList.add("visible");
            ballText.innerHTML = image.getAttribute("data-hover");
        });

        image.addEventListener("mouseout", function () {
            ballText.classList.remove("visible");
        });
    });


//Contact section slider
    const slideElements = ['.back__slide', '.card__slide', '.content__slide'];
    let inProgress = false;
    
    const goToSlide = (slideElements, index) => {
      if (!inProgress) {
        inProgress = true;
    
        $('.active').addClass('exit');
        $('.active').removeClass('active');
        slideElements.forEach(elem => {
          $(`${elem}:nth-child(${index})`).addClass('active');
        });
    
        const evenSlide = index % 2 === 0;
        if (evenSlide)
        $('.content__ping').addClass('content__ping--right');else
    
        $('.content__ping').removeClass('content__ping--right');
        $('.content__ping--noanimation').removeClass('content__ping--noanimation');
    
        setTimeout(() => $('.exit').removeClass('exit'), 1000);
        setTimeout(() => inProgress = false, 2000);
      }
    };
    
    $('.content__slide:nth-child(1) .button').on('click', () => goToSlide(slideElements, 2));
    $('.content__slide:nth-child(2) .button').on('click', () => goToSlide(slideElements, 1));
    
    setTimeout(() => goToSlide(slideElements, 2), 2000);
    setTimeout(() => goToSlide(slideElements, 1), 6000);
    
   //Audio background

   $(document).ready(function () {
    $(".btn-m .play").on("click",function () {
        $(this).addClass("none");
      $(".pause").addClass("block");
      $(".bg-music h1").addClass("none");
        $("#musicTheme")[0].play();
    });
       
    $(".btn-m .pause").on("click",function () {
        $(this).removeClass("block");
      $(".play").removeClass("none");
      $(".bg-music h1").removeClass("none")
        $("#musicTheme")[0].pause();
    });
});
       
   
  //Intersection Observer  

const spots  = document.querySelectorAll('.anim');

observer = new IntersectionObserver((entries) => {
  console.log(entries);

  entries.forEach(entry => {
      if (entry.intersectionRatio > 0) {
        entry.target.style.animation = `animSpots 2s ${entry.target.dataset.delay} forwards ease-out`;
      }
      else {
        entry.target.style.animation = 'none';
      }
  })

  
});

spots.forEach(spot => {
  observer.observe(spot);
})











