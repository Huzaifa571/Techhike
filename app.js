let list_icon=document.querySelector('.list-icon')
let sidebar=document.querySelector('.sidebar')
let underlay=document.querySelector('.underlay')
let close_sidebar=document.querySelector('.close-sidebar')
let pro_desc = document.querySelectorAll('.pro-desc')
let left = document.querySelector('.left')
let right = document.querySelector('.right')
let products = document.querySelector('.products')


right.addEventListener('click',()=>{
         products.scrollBy(200,0)
})

left.addEventListener('click',()=>{
     products.scrollBy(-200,0)
})


pro_desc.forEach((items,index)=>{
    items.innerHTML = items.innerHTML.slice(0,100) + '...'
})

  
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