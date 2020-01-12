window.addEventListener("load", function() {
    /* 
Back to Top
*/

    let backtotop;

    document
        .querySelector(".to-top")
        .addEventListener("click", function(_event) {
            let duration = 1;
            let pos = document.querySelector("html").scrollTop;

            let step_width = pos / (60 * duration);

            backtotop = setInterval(function() {
                pos = pos - step_width;

                if (pos < 1) {
                    pos = 0;
                    clearInterval(backtotop);
                    backtotop = null;
                }
                document.querySelector("html").scrollTop = pos;
            }, 500 / 60);
        });

    /* 
Sticky NAV
 */

    const nav = document.querySelector("nav");
    const navTop = nav.offsetTop;

    function stickyNavigation() {
        "navTop =" + navTop;
        "srollY =" + window.srollY;
    }
    window.addEventListener("scroll", stickyNavigation);

    function stickyNavigation() {
        if (window.scrollY >= navTop) {
            document.body.classList.add("nav-sticky");
        } else {
            document.body.classList.remove("nav-sticky");
        }
    }

    /* 
    BURGER
 */

    var burger = document.querySelector(".burger");

    burger.addEventListener("click", function() {
        burger.classList.toggle("open");
        document.querySelector(".mobile-container").classList.toggle("display");
    });

    /* 
    Greensock
 */

    var tl = new TimelineLite();

    tl.from(".main-content", 2, { x: -1500 });
    tl.from(".main-text", 2, { x: -1500 });
    
});
