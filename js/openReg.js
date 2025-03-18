const openReg = function(){

    const cart = document.getElementById('modal_reg');
    const closeBtn = cart.querySelector('.modal_close');

 
    closeBtn.addEventListener('click', function(){
        cart.style.display = 'none';
    })
}

openReg()