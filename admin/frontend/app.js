// const navbar = document.querySelector('nav');
//         const logo = document.querySelector('#img-logo');

//         const intro = document.querySelector('.intro');
//         const sectionOne = document.querySelector('.banner-1');
//         const darkenOptions = {
//             rootMargin:"-500px 0px 0px 0px"
//         };

//         const sectionOneOptions = {
//             rootMargin: "-100px 0px 0px 0px"
//         };
//         const logoOptions = {
//             rootMargin: "0.1px 0px 0px 0px"
//         };

//         const darkenObserver = new IntersectionObserver(function (
//             entries,
//             darkenObserver
//         ) {
//             entries.forEach( entry => {
//                 if(!entry.isIntersecting) {
//                     navbar.classList.add('darken');

//                 } else {
//                     navbar.classList.remove('darken');

//                 }
//             });
//         },
//         darkenOptions);

//         const sectionOneObserver = new IntersectionObserver(function (
//             entries,
//             sectionOneObserver
//         ) {
//             entries.forEach( entry => {
//                 if(!entry.isIntersecting) {
//                     navbar.classList.add('inverted');
//                     document.getElementById("img-logo").src="admin/frontend/images/white_NRF.png";
//                     document.getElementById("cart").src="admin/frontend/images/shopping_cart_white.png"

//                 } else {
//                     navbar.classList.remove('inverted');
//                     document.getElementById("img-logo").src="admin/frontend/images/black_NRF.png";
//                     document.getElementById("cart").src="admin/frontend/images/shopping-cart.png"
//                 }
//             });
//         },
//         sectionOneOptions);

//         const logoObserver = new IntersectionObserver(function (
//             entries,
//             logoObserver
//         ) {
//             entries.forEach( entry => {
//                 if(!entry.isIntersecting) {
//                     logo.classList.add('shrink');
//                 } else {
//                     logo.classList.remove('shrink');
//                 }
//             });
//         },
//         logoOptions);

//         sectionOneObserver.observe(sectionOne);
//         darkenObserver.observe(sectionOne);
//         logoObserver.observe(intro);

gsap.registerPlugin(ScrollTrigger);

// gsap.to("#img-logo", {
//     y:-300,
//     x:65,
//     duration: 8,
//     scrollTrigger: {
//         trigger: ".banner-1",
//         start: "top",
//         end: "top -50%",
//         scrub: true,
//         scale: 4,
//         markers: {
//             startColor: "purple",
//             endColor: "fuchsia",
//             fontSize: "3rem",
//         },
//     }
// })

ScrollTrigger.create({
    animation:gsap.to("#img-logo", {
        y:-237,
        width:92,
        height:34,
        x:65,
        toggleActions: "reverse"
    }),
    scrub:true,
    duration: 0.1,
    trigger: ".banner-1",
    start: "top",
    end: "30%",
    // markers: true,
    pinSpacing: false
})

gsap.to("#mission-picture", {
    x:100,
    duration:8,
    scrollTrigger: {
        trigger: ".mission",
        start: "top 50%",
        end: "bottom",
        scrub: true,
        toggleActions: "play none none none",
    }
})

ScrollTrigger.create({
    trigger: ".mission",
    start: "top",
    end: "bottom",
    // toggleActions: "play none none none",
    // toggleClass: {targets: ".navbar", className: "inverted"},
    onEnter: () => {
        document.querySelector("nav").classList.add('inverted');
        document.getElementById("cart").src="admin/frontend/images/shopping_cart_white.png"
        document.getElementById("img-logo").src="admin/frontend/images/white_NRF.png"
    },
    onLeaveBack: () => {
        document.querySelector("nav").classList.remove('inverted');
        document.getElementById("cart").src="admin/frontend/images/shopping-cart.png"
        document.getElementById("img-logo").src="admin/frontend/images/black_NRF.png"
    },
    // markers:true
});

ScrollTrigger.create({
    trigger: ".banner-1",
    start: "center",
    end: "bottom",
    toggleActions: "play reverse none reverse",
    toggleClass: {targets: ".navbar", className: "darken"},
})
