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

if ( document.getElementById("navbar").classList.contains('bg-light') )
{
    document.getElementById("navbar").classList.remove('bg-light');
    document.getElementById("navbar").classList.add('bg-dark');


    document.getElementById("tableheaders").classList.add('text-light');
    document.getElementById("tableheaders").classList.remove('text-dark');

    document.getElementById("tasklisttable").classList.add('bg-dark');
    document.getElementById("tasklisttable").classList.remove('bg-light');

    
    document.getElementById("taskslists").classList.add('text-light');
    document.getElementById("taskslists").classList.remove('text-dark');

}
else if( document.getElementById("navbar").classList.contains('bg-dark') )
{
    document.getElementById("navbar").classList.add('bg-light');
    document.getElementById("navbar").classList.remove('bg-dark');
    document.getElementById("tableheaders").classList.remove('text-dark');
    document.getElementById("tableheaders").classList.add('text-light');

    document.getElementById("tasklisttable").classList.remove('bg-dark');
    document.getElementById("tasklisttable").classList.add('bg-light');

    
    document.getElementById("taskslists").classList.add('text-dark');
    document.getElementById("taskslists").classList.remove('text-light');

}



});