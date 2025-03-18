const goToProfile = function(){
    const cart = document.getElementsByName('..profile/profile.html');
    const openProfile = cart.querySelector('.modal_exit');

 
    cartBtn.addEventListener('click', function(){
        cart.style.display = 'flex'
    })
    closeBtn.addEventListener('click', function(){
        cart.style.display = ''
    })
    regWord.addEventListener('click', function(){
        cart.style.display = ''
    })
}

goToProfile ()