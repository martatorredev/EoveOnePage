document.addEventListener('DOMContentLoaded', function () {
   // When the user scrolls down 50px from the top of the document, resize the header's font size
    /*window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector(".wp-site-blocks > header > div").style.paddingTop = "1em";
    } else {
        document.querySelector(".wp-site-blocks > header > div").style.paddingTop = "1.5em";
    }
    }*/

    var campos = document.querySelectorAll('form input, form textarea');
    var box = document.querySelector('.consent-description');
    campos.forEach(campo => {
    campo.addEventListener('focus', function() {
    box.style.display = 'block';
    });
    campo.addEventListener('focusout', function() {
    box.style.display = 'none';
    });
    });

})


if(document.querySelector('.entry-content')){

    document.querySelector('.entry-content').innerHTML += '<p>Enlace: <a target="_blank" href="'+ eove_Public.project +'">'+eove_Public.project+'</a></p>';
}