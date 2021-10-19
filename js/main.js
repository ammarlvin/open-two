var menu = document.querySelector(".menu")
var ham = document.querySelector(".hamburger")

ham.addEventListener("click", ()=>{
    menu.classList.toggle("active")
})

$(function(){
    $('.slider').slick({
        infinite:true,
        dots:false,
        slidesToScroll:1,
        slidesToShow:3,
        arrows: true,
        nextArrow:'.bb',
        prevArrow:'.vv',
        autoplay:true,
        centerMode:true,
        autoplaySpeed:2000,
        responsive: [
            {
                breakpoint:768,
                settings:{
                    slidesToShow:1,
                    slidesToScroll:1,
                }
            },
            {
                breakpoint:800,
                settings:{
                    slidesToShow:1,
                    slidesToScroll:1,
                }
            }
        ]
    });
});

$(function(){
    $('.slide').slick({
        infinite:true,
        dots:false,
        slidesToScroll:1,
        slidesToShow:3,
        arrows: true,
        autoplay:true,
        centerMode:true,
        autoplaySpeed:2000,
        responsive: [
            {
                breakpoint:768,
                settings:{
                    slidesToShow:1,
                    slidesToScroll:1,
                }
            },
            {
                breakpoint:800,
                settings:{
                    slidesToShow:1,
                    slidesToScroll:2,
                }
            }
        ]
    });
});