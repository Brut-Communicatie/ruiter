
$(function() {
    $("input:file").change(function () {
        $(this).css({"opacity" : "1", "position": "relative"});
        $('#cvuploaden').hide();
    });
});

console.log('Contact form GA listener loaded - Brut Communicatie');
//Add event listener to a  succesful form submission
document.addEventListener( 'wpcf7mailsent', function( event ) {
    //Send the information to Google Analytics
    // ga( 'send', 'event', 'Contact Form', 'submit' ); 
    gtag('event', 'submit_form');
    location = 'https://www.werkenbijruiterdakkapellen.nl/bedankt';
  }, false );
