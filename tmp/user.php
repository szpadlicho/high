<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
<?php
class User
{
    public function createNew($login, $password, $re_password, $email)
    {
        if (! is_dir('users')) {
            @mkdir('users');
            chmod('users', 0777);
        }
        //******************************//
        $file = 'users/'.$login.'.txt';
		if (! file_exists($file)) {	
            // Sprawdzam poprawność danych
            if ($password === $re_password) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // zaczynamy tworzenie
                    $fp = fopen($file, 'w');
                    $zawartosc = $password.':&|&:'.$email;
                    // save data
                    fputs($fp, $zawartosc);
                    // close file
                    fclose($fp);
                    // set premision
                    chmod($file, 0777);
                    //$_SESSION['user'] = $login;
                    //$_SESSION['password'] = true;
                    setcookie('auth',$login,time()+3600*12);
                    header('location: ');
                    //return 'Użytkownik '.$login.' dodany';
                } else {
                    return 'Błedna forma adresu email.';
                }
            } else {
                return 'Hasła nie są zgodne.';
            }
        } else {
            // użytkownik istnieje
            return $login.' login zajęty.';
        }
    }
    public function loginUser($login, $password)
    {
        $file = 'users/'.$login.'.txt';
		if (file_exists($file)) {
            //open file
			$fp = fopen($file, 'r');
            //check size
            $size = filesize($file);
            if ($size > 0 ) {
                //read file
                $dane = fread($fp, $size);
                //close file
                fclose($fp);
                $user = explode(':&|&:', $dane);
                if ($user[0]==$password) {
                    //$_SESSION['user'] = $login;
                    //$_SESSION['password'] = true;
                    setcookie('auth',$login,time()+3600*12);
                    header('location: ?file='.$_GET['file']);
                    //return $login.' zalogowany';
                    //return $user;
                } else {
                    return 'Błędne hasło';
                }
            } else {
                return 'Dane nie istnieją';
            }
        } else {
            return 'Błędny bądź nie istniejący login.';
        }
    }
    public function logoutUser()
    { 
        setcookie ('auth', '', time() - 3600);
        //$this->__setTXT($_GET['file'], $_POST['txt']);
        header('location:');
    }
}
$obj_user = new User;
if (isset($_POST['save']) && ! empty($_POST['login'])) {
   echo $obj_user->createNew($_POST['login'], $_POST['password'], $_POST['re_password'], $_POST['email']);
}
if (isset($_POST['enter'])) {
    echo $obj_user->loginUser($_POST['login'], $_POST['password']);
    //var_dump($obj_user->loginUser($_POST['login'], $_POST['password']));
}
if (isset($_POST['logout'])) {
    $obj_user->logoutUser();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Notatnik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style.php">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
        <script type="text/javascript">
        
        </script>
    </head>
    <body>       
        <form method="POST">
            <input type="text" name="login" value="admin" />
            <input type="text" name="password" value="user" />
            <input type="text" name="re_password" value="user" />
            <input type="text" name="email" value="szpad@op.pl" />
            <input type="submit" name="save" value="Zapisz" />
            <input type="submit" name="cancel" value="Anuluj" />
            <input type="submit" name="enter" value="Zaloguj" />
            <input type="submit" name="logout" value="Wyloguj" />
        </form>
        <?php var_dump($_COOKIE); ?>
    </body>
</html>