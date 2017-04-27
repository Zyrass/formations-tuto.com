<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Plugin jRumble en Jquery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style-jrumble.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="content">
            <div id="rumble">
                Secoue moi
            </div>
        </div>
        
        <script type="text/javascript" src="../../../vendor/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.jrumble.1.3.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#rumble").jrumble({
                    x: 2,           // Set the horizontal rumble range (pixels)                                                     - option : x            - par défaut : 2
                    y: 2,           // Set the vertical rumble range (pixels)                                                       - option : y            - par defaut : 2
                    rotation: 1,    // Set the rotation range (degrees)                                                             - option : rotation     - par défaut : 1
                    speed: 15,      // Set the speed/frequency in milliseconds between rumble movements (lower number = faster)     - option : speed        - par défaut : 15
                    opacity: false, // Activate opacity flickering while rumbling                                                   - option : true / false - par défaut : false
                    opacityMin: 5,   // When the opacity option is set to true, this controls the minimum opacity while flickering   - option : 5            - par défaut : 5
                });

                $("#rumble").hover(function(){
                    $('#rumble').trigger('startRumble');
                }, function(){
                    $('#rumble').trigger('stopRumble'); 
                });


                

            });
        </script>
    </body>
</html>
