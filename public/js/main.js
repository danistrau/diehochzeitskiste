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

    tl.staggerFrom("section", 0.5, { x: -2000, opacity:1,}, 0.25);

    tl.staggerFrom(".main-budgetrechner .budgetrechner li", 0.5, { x: -1500, opacity:1,}, 0.1);
    tl.staggerFrom(".checklist_item", 0.5, { x: -1500, opacity:1,}, 0.1);
    tl.staggerFrom(".gallery-item", 0.5, { x: -2000, opacity:1,}, 0.25);
    
    
});
