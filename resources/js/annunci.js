
// FUNZIONE SCROLL -----------------------------

function scroll() {

  let navContainer = document.querySelector('#nav-container');

  let navbar = document.querySelector('.navbar');

  let confirm = true;

  document.addEventListener('scroll', () => {

    let scrolled = window.scrollY;

    if (scrolled > 60) {

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
  })
}

scroll()



fetch('./annunci.json')
  .then(response => response.json())
  .then(data => {

    // SET CATEGORY FILTER ----------------------

    function setCategoryFilter() {

      let categories = Array.from(new Set(data.map(el => el.category)));

      let categoriesWrapper = document.querySelector('#categoriesWrapper');

      categories.forEach(category => {

        let div = document.createElement('div');

        div.classList.add('form-check');

        div.innerHTML = `
                
            <input class="form-check-input" type="radio" name="Categories" id="${category}">
                                    
            <label class="form-check-label" for="${category}">
                ${category}
            </label>`

        categoriesWrapper.appendChild(div);

      });

    }

    setCategoryFilter();


    // SHOW CARDS -------------------------------

    function showCards(array) {

      let cardWrapper = document.querySelector('#cardWrapper');

      cardWrapper.innerHTML = '';

      array.forEach(annuncio => {

        let div = document.createElement('div');

        div.classList.add('card-annunci', 'my-3');

        const mediaQuery = window.matchMedia('(max-width: 1200px)');

        div.innerHTML = `
                    <div class="card d-flex justify-content-center text-center card-annunci" style="width: 18rem; height:345px;">

                        <img src="${annuncio.image}" class="card-img-top card-img" alt="${annuncio.name}">

                        <div class="card-body d-flex justify-content-between align-items-center flex-column">
                            <h5 class="card-title">${annuncio.name}</h5>
                            <p class="card-text">${annuncio.category}</p>

                            <a href= ${(mediaQuery.matches ? "./404-Phone.html" : "./404.html")} class="cardbutton btn btn-prezzo ff-orbitron d-flex align-items-center justify-content-center text-white linkCard" target="_blank">Prezzo: € ${annuncio.price}</a>
                        </div>
                    </div>`

                    
        window.addEventListener('resize', (event) => {
          const mediaQuery = window.matchMedia('(max-width: 1200px)');

          let links = document.querySelectorAll(".linkCard");

          if (mediaQuery.matches) {
            links.forEach(el => {
              el.setAttribute("href", "./404-Phone.html");
            })

          } else {

            links.forEach(el => {
              el.setAttribute("href", "./404.html");
            })
          }
        });



        cardWrapper.appendChild(div);
      })
    }

    showCards(data);


    // CATEGORIA --------------------------------

    function filteredByCategory() {

      let radioFilters = document.querySelectorAll('.form-check-input');

      radioFilters.forEach(button => {

        button.addEventListener('click', () => {

          if (button.id == 'All') {

            showCards(data);

          } else {

            let filtered = data.filter(el => el.category == button.id);

            showCards(filtered);
          }
        })
      })
    }

    filteredByCategory();


    // PREZZO -----------------------------------

    function priceRange() {

      let maxPrice = data.map(el => Number(el.price)).sort((a, b) => a - b).pop();

      let priceInput = document.querySelector('#priceInput');

      priceInput.max = Math.ceil(maxPrice);

      let priceValue = document.querySelector('#priceValue')

      priceInput.addEventListener('input', () => {

        priceValue.innerHTML = `€${priceInput.value}`
      })

    }

    priceRange();


    function filteredByPrice() {

      let priceInput = document.querySelector('#priceInput');

      priceInput.addEventListener('input', () => {

        let filtered = data.filter(el => Number(el.price) <= priceInput.value)

        showCards(filtered);
      })

    }

    filteredByPrice();


    // PAROLA CHIAVE ----------------------------

    function filteredByWord() {

      let wordInput = document.querySelector('#wordInput');

      wordInput.addEventListener('input', () => {

        console.log(wordInput.value);

        let filtered = data.filter(el => el.name.toLowerCase().includes(wordInput.value.toLowerCase()))

        showCards(filtered)
      })

    }

    filteredByWord();
  })


