var variantMenu = document.querySelectorAll('.menu');

    variantMenu.forEach((menu, index) => {
        menu.dataset.aos = 'fade-down';
        menu.dataset.aosDuration = 1500;
        menu.dataset.aosDelay = index * 100;
    })
    AOS.init({
        once: true
      });


      var slides = document.querySelectorAll('.slide');
      var buttons = document.querySelectorAll('.slider-btn');
      console.log(buttons)
      let currentSlide = 1;
      let slidec =1
      
      //manual images slider
      var manualNav = function(manual){
          slides.forEach(function(slide){
              slide.classList.remove('active');
      
              buttons.forEach((btn) => {
                  btn.classList.remove('active');
              });
          });
      
          slides[manual].classList.add('active');
          buttons[manual].classList.add('active');
      }
      
      buttons.forEach(function(btn, i){
          btn.addEventListener('click', function(){
              manualNav(i);
              currentSlide = i;
          })
      })
      
      var next = function(a){
          
          slides.forEach(function(slide){
              slide.classList.remove('active');
      
              buttons.forEach((btn) => {
                  btn.classList.remove('active');
              });
          });
          slidec = currentSlide++
          if(slidec >= 5){
              slidec = 0
          }
          slides[slidec].classList.add('active');
          buttons[slidec].classList.add('active');
      }
      
      slides.forEach(function(sld, i){
          sld.addEventListener('click', function(){
              next(i);
              slidec = i;
          })
      })
      
      var repeat = function(activeClass){
          let active = document.getElementsByClassName('active');
      
          let i = 1;
          var repeater = function(){
              setTimeout(function(){
                  [...active].forEach(function(activeSlide){
                      activeSlide.classList.remove('active');
                  });
      
                  slides[i].classList.add('active');
                  buttons[i].classList.add('active');
                  i++
      
                  if(slides.length == i){
                      i =0;
                  }
                  if(i >= slides.length){
                      return;
                  }
                  repeater();
              }, 5000);
              }
              repeater();
          }
          repeat(); 

          var popup = document.querySelectorAll("#popup")
          function tutupPopup(){
            popup.forEach(function(popup){
            popup.style.display = 'none';
            })
        }