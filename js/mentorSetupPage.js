// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

  //For the accordion in the area of expertise section
  const wrap = document.querySelector('#wrap')
      
      wrap.addEventListener('click', (e)=>{
        
          if(e.target.classList.contains('accordion-label')){
              content = e.target.nextElementSibling;              
              if(!e.target.classList.contains('active')){
                  const findActiveButton = document.querySelector('.active')
                  if(findActiveButton){
                      findActiveButton.classList.remove('active')
                      findActiveButton.nextElementSibling.style.maxHeight = 0;
              }
                  e.target.classList.add('active')
                  content.style.maxHeight = content.scrollHeight + "px"
              }else{
                  e.target.classList.remove('active')
                  content.style.maxHeight = 0;
              }
          }
      })