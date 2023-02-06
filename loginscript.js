const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = 'white';
        body.style.color = '#333';
        body.style.transition = '2s';
    }else{
        body.style.background = '#333';
        body.style.color = 'white';
        body.style.transition = '2s';
    }



if ( document.getElementById("logincontainer").classList.contains('bg-light') )
{
    document.getElementById("logincontainer").classList.remove('bg-light');
    document.getElementById("logincontainer").classList.add('bg-dark');
}

else if ( document.getElementById("logincontainer").classList.contains('bg-dark') )
{
    document.getElementById("logincontainer").classList.remove('bg-dark');
    document.getElementById("logincontainer").classList.add('bg-light');
}
else{
    
}



});