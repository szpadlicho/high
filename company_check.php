<?php
    if(isset($_POST['send_c'])){
        if(!empty($_POST['mail']) && !empty($_POST['company'])){
            if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                $_POST['question'] = 'Prośba o cennik dla klientów hurtowych<br />(Treść generowana automatycznie)';
                include('email_send.php');
                ?>
                <script type="text/javascript">
                    //alert ('Wiadomości wysłana !'); //jest w email_send.php
                </script>
                <?php
            }
            else{
                //echo 'Błędny adres e-mail';
                //return false;
                ?>
                <script type="text/javascript">
                    alert ('Błędny adres e-mail');
                </script>
                <?php
            }
        }
        else{
            //echo "Wymagany adres e-mail <br /> do korespondencji <br /> oraz treść wiadomości !";
            //return false;
            ?>
            <script type="text/javascript">
                alert ('Wymagany adres e-mail do korespondencji oraz nazwa firmy !');
            </script>
            <?php
        }
    }
?>