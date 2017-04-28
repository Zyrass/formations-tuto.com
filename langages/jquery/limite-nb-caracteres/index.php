<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Limiter le nombre de caractère</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style-limite-caractere.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="container">
            <fieldset>
                <legend>Limiter le nombre de caractères à 250 avec un pré-requis de 20 caractères minimum pour pouvoir envoyer</legend>
                <form action="index.php" method="post">
                    <table>
                        <tr>
                            <td colspan="2" align="center" id="title">Votre message</td>
                        </tr>
                        <tr>
                            <td align="left"><textarea rows="6" cols="75" name="message" id="message" placeholder="Votre message limité à 250 caractères ici..."></textarea></td>
                            <td align="right"><span id="limit"></span></td>
                        </tr>
                        <tr align="center">
                            <td colspan="2" align="center">
                                <input type="submit" id="submit" value="Il faut minimum 20 caractères pour pouvoir envoyer votre message" disabled="disabled" />
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
        <script src="../../../vendor/js/jquery-3.2.1.min.js"></script>
        <script>
            $(document).ready(function(){
                var limit       = $("#limit");      // Le span
                var message     = $("#message");    // Le textarea
                var submit      = $("#submit");     // bouton envoyer

                $(limit).text(250);
                $(message).keyup(function(){
                    /**
                     * (this)   = le message
                     * .val()   = le contenu du message
                     * .length  = la longeur du message
                     **/
                    var rest = 250 - $(this).val().length;
                    $(limit).text(rest);

                    if (rest <= 250 && rest >= 231){
                        $(limit).css('color', '#F55');
                        $(submit)
                            .attr('value', "Il faut minimum 20 caractères pour pouvoir envoyer votre message")
                            .attr('disabled', 'disabled');
                    }
                    else if (rest < 0)
                    {
                        $(limit).css('color','#F55');
                        $(submit)
                            .attr('value', "Vous avez saisi plus de 250 caractères, envoie donc impossible...")
                            .attr('disabled', 'disabled');
                    }
                    else
                    {
                        $(limit).css('color', '#16a085');
                        $(submit)
                            .attr('value', "Envoie possible caractères suffisant")
                            .removeAttr("disabled");
                    }
                });
            });
        </script>
    </body>
</html>