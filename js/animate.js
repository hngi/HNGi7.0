const why = "Why not working?"

const icons = {
  header: 'fas fa-caret-right',
  activeHeader: 'fas fa-caret-down'
}

$(window).on('load', () => {
  $('#accordion-content').accordion({
    icons: icons,
    animate: 100,
    collapsible: true,
    active: true
  });
  
})

 // Voila
ScrollReveal({  reset: false })
ScrollReveal().reveal('.main-third-row')
ScrollReveal().reveal('.main-fourth-row', { delay: 300  })
ScrollReveal().reveal('.section2', { delay: 300  })
ScrollReveal().reveal('.main-fifth-row', { delay: 500  })
ScrollReveal().reveal('.mt-2', { delay: 500  })
ScrollReveal().reveal('.reveal', { delay: 200  })
ScrollReveal().reveal('.mb-4', { delay: 500  })
ScrollReveal().reveal('.support', { delay: 500  })
ScrollReveal().reveal('.sponsors ', { delay: 500  })


// Reveal For New Index

ScrollReveal({  reset: false })
ScrollReveal().reveal('.unleash')
ScrollReveal().reveal('.how-it-works', { delay: 300  })
ScrollReveal().reveal('.content', { delay: 300  })
ScrollReveal().reveal('.build', { delay: 500  })
ScrollReveal().reveal('.curriculum', { delay: 500  })
ScrollReveal().reveal('.mentors', { delay: 200  })
ScrollReveal().reveal('.hng', { delay: 500  })
ScrollReveal().reveal('.support', { delay: 500  })
ScrollReveal().reveal('.sponsors ', { delay: 500  })

console.log(why)