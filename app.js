let list_icon=document.querySelector('.list-icon')
let sidebar=document.querySelector('.sidebar')
let underlay=document.querySelector('.underlay')
let close_sidebar=document.querySelector('.close-sidebar')

  
list_icon.addEventListener('click',()=>{
     underlay.style.visibility = 'visible'
     sidebar.style.transform='translatex(0)'
})

underlay.addEventListener('click',()=>{
    underlay.style.visibility = 'hidden'
    sidebar.style.transform ='translatex(-100%)'
})

sidebar.addEventListener('click',(e)=>{
    e.stopPropagation()
})

close_sidebar.addEventListener('click',()=>{
    underlay.style.visibility ='hidden'
    sidebar.style.transform ='translatex(-100%)'
})