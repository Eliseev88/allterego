// var oldScrollY = 0;
// var footer = document.getElementById("footer-div-fixed");
// var contentH = document.getElementById("main-content").offsetHeight;
//
// window.onscroll = function() {
//   var scrolled = window.pageYOffset || document.documentElement.scrollTop;
//   var dY = scrolled - oldScrollY;
//
//   var clientHeight = document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight;
//   var documentHeight = document.documentElement.scrollHeight ? document.documentElement.scrollHeight : document.body.scrollHeight;
//   var scrollTop = window.pageYOffset ? window.pageYOffset : (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);
//
//
//
//   if ( dY > 0 && window.screen.width <= 767.98) {
//     footer.className = "container-fluid text-center footer fixed-footer";
//   } else {
//     footer.className = "container-fluid text-center footer unfixed-footer";
//   }
//   if((documentHeight - clientHeight) <= scrollTop + 200) {
//     footer.className = "container-fluid text-center footer fixed-footer";
//   }
//   oldScrollY = scrolled;
// }

const animItems = document.querySelectorAll('._anim-items');

if (animItems.length > 0) {
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll() {
        for (let i = 0; i < animItems.length; i++) {
            const animItem = animItems[i];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 2;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;

            if(animItemHeight > window.innerHeight) {
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }

            if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight) && window.screen.width <= 768) {
                animItem.classList.add('_active');
            } else {
                if(!animItem.classList.contains('_anim-ho-hide')) {
                    animItem.classList.remove('_active');
                }
            }
        }
    }
    function offset(el) {
        const rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft }
    }
    setTimeout(() => {
        animOnScroll();
    }, 300);
}

// Скролл навбар
let navOpen = document.getElementById('scroll-div');
if (window.screen.width < 992)  {
    navOpen.classList.add('scroll_nav_open')
}
window.addEventListener('resize', () => {
  if (window.screen.width < 992)  {
    navOpen.classList.add('scroll_nav_open')
  }
  else {
    navOpen.classList.remove('scroll_nav_open');
  }
})

