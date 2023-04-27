// FUNZIONE SCROLL -----------------------------

function scroll(){

    let navContainer = document.querySelector('#nav-container');
  
    let navbar = document.querySelector('.navbar');
  
    let confirm = true;
  
    document.addEventListener('scroll', () => {
  
      let scrolled = window.scrollY;
  
      if (scrolled > 60){
  
        navContainer.classList.remove('container', 'rounded-pill');
        navContainer.classList.add('container-fluid', 'nav-container-anim');
        navbar.classList.remove('nav', 'mx-3');
        navbar.style.marginTop = '-10px'
  
      } else {
  
        navContainer.classList.add('container', 'rounded-pill');
        navContainer.classList.remove('container-fluid', 'nav-container-anim');
        navbar.classList.add('nav', 'mx-3');
        navbar.style.marginTop = '0px'
      }
  
  
      // COUNTER ----------------------------------
  
      if (scrolled > 1610 && confirm){
       counterGames();
       confirm = false;
      }
  
      // console.log(window.scrollY);
    })
  }
  
  scroll()
  
  
  // COUNTER VIDEOGAMES ---------------------------
  
  function counterGames() {
  
    let gamesNumber = document.querySelector('#games-number');
  
    let counter = 0;  
  
    let interval = setInterval(() => {
  
      counter++
  
      gamesNumber.innerHTML = counter
  
      if (counter > 749){
        clearInterval(interval);
      }
  
    }, 1)
  }
  
  counterGames()
  
  // GAME LIST ------------------------------------
  
  let gameList = new Swiper (".myGameList", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: "auto",
  
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
  
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
      },
  
      // pagination: {
      //   el: ".swiper-pagination",
      // },
    });