$(document).ready(function(){

    $(".reponse").hide();

    // Variables Questions
    var questionOne      = $("#questionOne");
    var questionTwo      = $("#questionTwo");
    var questionThree    = $("#questionThree");

    // Variables Réponses
    var repOne      = $("#repOne");
    var repTwo      = $("#repTwo");
    var repThree    = $("#repThree");

    var position    = 0;

    // Question 1
    questionOne.click(function(){
        if (position == 0) 
        {
            repOne.show("fadeIn");
            $("#questionOne i.fa-caret-down")
                .css({
                    'transition': "transform 0.3s ease-in",
                    'transform': "rotate(-180deg)",
                });
            position++;
        }
        else
        {
            repOne.hide("FadeOut");
            $("#questionOne i")
                .css({
                    'transition': "transform 0.3s ease-in",
                    'transform': "rotate(0deg)",
                });
            position--;
        }        
    });

    // Question 2
    questionTwo.click(function(){
        if (position == 0)
        {
            repTwo.show("fadeIn");
            $("#questionTwo i")
                .css({
                    'transition': "transform 0.3s ease-in",
                    'transform': "rotate(-180deg)",
                });
            position++;
        }
        else
        {
            repTwo.hide("FadeOut");
            $("#questionTwo i")
                .css({
                    'transition': "transform 0.3s ease-in",
                    'transform': "rotate(0deg)",
                });
            position--;
        }        
    });

    // Question 3
    questionThree.click(function(){
        if (position == 0)
        {
            repThree.show("fadeIn");
            $("#questionThree i")
                .css({
                    'transition': "transform 0.3s ease-in",
                    'transform': "rotate(-180deg)",
                });
            position++;
        }
        else
        {
            repThree.hide("FadeOut");
            $("#questionThree i")
                .css({
                    'transition': "transform 0.3s ease-in",
                    'transform': "rotate(0deg)",
                });
            position--;
        }        
    });
});