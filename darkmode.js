let ele = document.body;
function changeMode(params) {
    ele.classList.toggle('dark-mode');                    
};

//////////progress bar counter in top///////////
const topButtonTag = document.querySelector('.topButton');
window.onscroll = function() {
    scrollFunction();
    myFunction();
}

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        topButtonTag.style.display = 'block';
    } else {
        topButtonTag.style.display = 'none';
    }
}

function topFunction () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
//////////progress bar counter in top///////////

function myFunction() {
    const mybar = document.querySelector('#myBar');
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    mybar.style.width = scrolled + '%';
}