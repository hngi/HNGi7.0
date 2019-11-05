const menu = document.querySelector('.menu');
const headings = document.querySelectorAll('.item');
const chevron = document.querySelectorAll('.chevron')

const toggleMenu =(target)=>{
    target.parentElement.classList.toggle('active')
    for(heading of headings){
        if(!(heading.id === target.parentElement.id)){
                heading.classList.remove('active')
        }
    }
    if(!target.parentElement.classList.contains('active')){
        target.nextElementSibling.style.maxHeight = 0;
    }
}

menu.addEventListener('click',(e)=>{
    let target;
    if(e.target.classList.contains('btns')){
        target = e.target
    }else if(e.target.classList.contains('chevron')){
        target = e.target.parentElement;
    }
    toggleMenu(target)
})