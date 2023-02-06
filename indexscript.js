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

if ( document.getElementById("navbar").classList.contains('navbar-light') )
{
    document.getElementById("navbar").classList.remove('navbar-light');
    document.getElementById("navbar").classList.remove('bg-primary');
    document.getElementById("navbar").classList.add('navbar-dark');
    document.getElementById("navbar").classList.add('bg-dark');
}
else if( document.getElementById("navbar").classList.contains('navbar-dark') )
{
    document.getElementById("navbar").classList.add('navbar-light');
    document.getElementById("navbar").classList.add('bg-primary');
    document.getElementById("navbar").classList.remove('navbar-dark');
    document.getElementById("navbar").classList.remove('bg-dark');
}



});