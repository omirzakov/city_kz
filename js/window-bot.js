let chatMenu = document.querySelector('.chat-bot');
let chatOpenMenu = document.querySelector('.chat-menu');

chatMenu.addEventListener('mouseover', function() {
    chatOpenMenu.style.visibility = 'visible';
});

chatMenu.addEventListener('mouseleave', function() {
    chatOpenMenu.style.visibility = 'hidden';
});
