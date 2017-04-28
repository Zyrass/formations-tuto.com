$(document).ready(function(){

    $('.reponse').hide();
    
    $('.question').click(function(){
        $(this).next('.reponse').slideToggle();
    })
});