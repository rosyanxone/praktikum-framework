window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.querySelector('#navbar').classList.add('bg-white');
    document.querySelector('.nav-items').classList.remove('text-white');
} else {
    document.querySelector('#navbar').classList.remove('bg-white');
    document.querySelector('.nav-items').classList.add('text-white');
  }
}

