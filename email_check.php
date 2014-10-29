<form method="POST">
	<div class="question_div_input">Formularz kontaktowy</div>
	<div class="question_div_input"><input class="question_form_input" type="text" name="name_surname" placeholder="Imię i nazwisko" /></div>
	<!-- <div class="question_div_input"><input class="question_form_input" type="text" name="surname" placeholder="Nazwisko(opcjonalnie)" /></div> -->
	<div class="question_div_input"><input class="question_form_input" type="text" name="mail" placeholder="e-mail*" /></div>
	<div class="question_div_input"><input class="question_form_input" type="text" name="nr" placeholder="Telefon" /></div>
	<div class="question_div_input"><textarea class="question_form_input question_form_textarea" name="question" placeholder="Treść*" ></textarea></div>
	<div class="question_div_input"><input class="question_form_input" type="submit" name="send_l" value="Wyślij"/></div>
    <div class="star">* - pola wymagane</div>
</form>
<div class="question_div_input">
	<?php							
		if(isset($_POST['send_l'])){
			if(!empty($_POST['mail']) && !empty($_POST['question'])){
				if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
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
                    alert ('Wymagany adres e-mail do korespondencji oraz treść wiadomości !');
                </script>
                <?php
			}
		}
	?>
</div>