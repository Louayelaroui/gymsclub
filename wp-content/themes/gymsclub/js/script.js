var menulist=document.getElementById('menulist');
menulist.style.maxHeight="0px";

function menutoggle() {
    if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "100vh";
    } else {
        menulist.style.maxHeight = "0px";
    }
}

jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots:false,
    navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
jQuery('.owl-carousel1').owlCarousel({
    loop: true,
    margin: 40,
    nav: true,
    dots: false,
    navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2,
            margin: 10,
        },
        1000: {
            items: 3
        }
    }
});
