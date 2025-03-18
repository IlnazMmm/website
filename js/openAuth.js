const openAuth = function(){

    const cart = document.getElementById('modal');
    const closeBtn = cart.querySelector('.modal_close');

 
    closeBtn.addEventListener('click', function(){
        cart.style.display = 'none';
    })
}

openAuth()