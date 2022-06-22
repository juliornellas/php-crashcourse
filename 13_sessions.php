<?php
echo '<h1>Sessions</h1>';

/**
 * Sessions armazenam os dados no servidor e não localmente e podem
* ser utilizados por varias paginas
*/

//Iniciar a criação ou acesso as sessão
session_start();
// $name = $_SESSION['username'] ?? '';
// if($name){
//     header('Location: /php-crashcourse/extras/dashboard.php');
// }
if(isset($_SESSION['username'])){
    header('Location: /php-crashcourse/extras/dashboard.php');
}

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'tiradentes' && $password == 'senha123'){
        $_SESSION['username'] = $username;
        header('Location: /php-crashcourse/extras/dashboard.php');
    }else{
        echo '<p style="color:red">Incorrect login</p>';
    }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
