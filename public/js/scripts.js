window.onload = (event) => {

//----------SCROLL EFFECTS ----------//


// Sticky navbar

window.onscroll = function() {stickyNav()};

const navbar = document.querySelector('nav');
const sticky = navbar.offsetTop;

function stickyNav() {
    if (window.pageYOffset > sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  };

window.addEventListener('scroll', stickyNav);

// Smoothscroll
const scrollLink = $('.scroll');

scrollLink.click(smoothScroll);

function smoothScroll(e){
  e.preventDefault();
  $('body,html').animate({
    scrollTop: $(this.hash).offset().top
  }, 1200)
} 


//Scroll Appear

function scrollAppear() {
  let info = document.querySelector('.info');
  let introPosition = info.getBoundingClientRect().top;
  let screenPosition = window.innerHeight / 1.3;

  if(introPosition < screenPosition) {
      info.classList.add('info-appear')
  }
}

window.addEventListener('scroll', scrollAppear)

// Responsive Hamburger Menu

const burger = document.querySelector('.burger');
const navList = document.querySelector('.navlist')
const navLinks = document.querySelectorAll('.navlist li')
const navContainer = document.querySelector('.nav-container');
const mainLogo = document.querySelector('.mainlogo')
const mq = window.matchMedia( "(min-width: 480px)" );

if (!mq.matches) {
    navContainer.classList.remove('container');
    navContainer.classList.add('flex-container');
  };

const navSlide = () => {
  burger.addEventListener('click', function(){
    //toggle menu
    navList.classList.toggle('nav-active');
    mainLogo.classList.toggle('display-logo');
    //link animation
    navLinks.forEach((link, index) => {
      if(link.style.animation){
        link.style.animation = '';
        navList.addEventListener('transitionend', ()=> {
        navContainer.classList.remove('active');
        });
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.4}s`;
        navContainer.classList.add('active');
      };
    });
    //burger cross animation
    burger.classList.toggle('toggle');
  }
)};

navLinks.forEach(function (navLink) {
  //select a link
  navLink.addEventListener('click', function (e) {
    mainLogo.classList.toggle('display-logo');
    //toggle menu
    navList.classList.toggle('nav-active');
    //link animation
    navLinks.forEach((link, index) => {
      if(link.style.animation){
        link.style.animation = '';
        navList.addEventListener('transitionend', ()=> {
          navContainer.classList.remove('active');
        });
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.4}s`;
        navContainer.classList.add('active');
      };
    });
    //burger cross animation
    burger.classList.toggle('toggle');
  });
});

navSlide();
//----------CAROUSEL----------//

const track = document.querySelector('.carousel__track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel__button--right');
const prevButton = document.querySelector('.carousel__button--left');
const dotsNav = document.querySelector('.carousel__nav');
const dots = Array.from(dotsNav.children);
const carouselQuotes = document.querySelector('.carousel__quotes');
const quotes = Array.from(carouselQuotes.children);


const slideWidth = slides[0].getBoundingClientRect().width;


//Arrange slides next to eachother
const setSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + 'px';
};

slides.forEach(setSlidePosition);

const moveToSlide = (track, currentSlide, targetSlide) => {
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current-slide');
    targetSlide.classList.add('current-slide');
};

const updateDots = (currentDot, targetDot) => {
    currentDot.classList.remove('current-slide');
    targetDot.classList.add('current-slide');
}

const hideShowArrows = (slides, prevButton, nextButton, targetIndex) => {
    if(targetIndex === 0){
        prevButton.classList.add('is-hidden');
        nextButton.classList.remove('is-hidden');
    } else if (targetIndex === slides.length - 1) {
        prevButton.classList.remove('is-hidden');
        nextButton.classList.add('is-hidden');
    } else {
        prevButton.classList.remove('is-hidden');
        nextButton.classList.remove('is-hidden');
    }
}

const updateQuotes = (currentQuote, targetQuote) => {
    currentQuote.classList.remove('current-quote');
    targetQuote.classList.add('current-quote');
}

//click left arrow 
prevButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.current-slide');
    const prevSlide = currentSlide.previousElementSibling;
    moveToSlide(track, currentSlide, prevSlide)
    const currentDot = dotsNav.querySelector('.current-slide');
    const prevDot = currentDot.previousElementSibling;
    const prevIndex = slides.findIndex(slide => slide === prevSlide);
    updateDots(currentDot, prevDot);
    //shows correct quote
    const currentQuote = carouselQuotes.querySelector('.current-quote');
    const prevQuote = currentQuote.previousElementSibling;
    updateQuotes(currentQuote, prevQuote);

    hideShowArrows(slides, prevButton, nextButton, prevIndex);
})

// click right arrow
nextButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.current-slide');
    const nextSlide = currentSlide.nextElementSibling;
    moveToSlide(track, currentSlide, nextSlide);
    const currentDot = dotsNav.querySelector('.current-slide');
    const nextDot = currentDot.nextElementSibling;
    const nextIndex = slides.findIndex(slide => slide === nextSlide);
    updateDots(currentDot, nextDot);
    const currentQuote = carouselQuotes.querySelector('.current-quote');
    const nextQuote = currentQuote.nextElementSibling;
    updateQuotes(currentQuote, nextQuote);

    hideShowArrows(slides, prevButton, nextButton, nextIndex);
});

// indicators

dotsNav.addEventListener('click', e => {
    //what indicator is clicked on
    const targetDot = e.target.closest('button');
    if(!targetDot) return;
    const currentSlide = track.querySelector('.current-slide');
    const currentDot = dotsNav.querySelector('.current-slide');
    const targetIndex = dots.findIndex(dot => dot === targetDot);
    const targetSlide = slides[targetIndex];
    const currentQuote = carouselQuotes.querySelector('.current-quote');
    const targetQuote = quotes[targetIndex];
    moveToSlide(track, currentSlide, targetSlide);
    updateDots(currentDot, targetDot);
    updateQuotes(currentQuote, targetQuote);

    hideShowArrows(slides, prevButton, nextButton, targetIndex);
});


// Cut off Excessive review Text sentences

quotes.forEach(quote => {
  const fullText = quote.textContent;
  let length = 300;
  let trimmedText = fullText.substring(0, length) + "<b> Read More</b>";
  quote.innerHTML = trimmedText
  const readBtns = document.querySelectorAll('b');
  let quoteOpen = false
  readBtns.forEach(readBtn => {
    readBtn.addEventListener('click', () =>{
     if(quoteOpen == false){
       quote.innerHTML = fullText;
     }
    });
  });
 });

 
 

 


 


//-------Contact Modal-------//

  let modalBtn = document.querySelector('.modal-btn');
  let modalBg = document.querySelector('.modal-bg');
  let closeModal = document.querySelector('.close-modal')

  modalBtn.addEventListener('click', (e) => {
    e.preventDefault();
    navbar.style.opacity = "0";
    navbar.style.visibility = "hidden";
    modalBg.classList.add('bg-active');
  })

  closeModal.addEventListener('click', () => {
    navbar.style.opacity = "1";
    navbar.style.visibility = "visible";
    modalBg.classList.remove('bg-active');
  })

  //end window
};