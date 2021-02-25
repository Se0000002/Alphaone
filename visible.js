const toggleBtn = document.querySelector('.navbar_toggleBtn');
const menu = document.querySelector('.navbarmenu');
var a=1;

toggleBtn.addEventListener('click', ()=>{
    if(a==1){
        menu.style.display='flex';
        a=2;
    }
    else{
        menu.style.display='none';
        a=1;
    }
});
menu.addEventListener('click', ()=>{
    menu.style.display='none';
    a=1;
});