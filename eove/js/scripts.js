document.addEventListener('DOMContentLoaded', function () {
   // When the user scrolls down 50px from the top of the document, resize the header's font size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector(".wp-site-blocks > header > div").style.paddingTop = "0";
    } else {
        document.querySelector(".wp-site-blocks > header > div").style.paddingTop = "2.5em";
    }
    } 
})  