<?php

// Não seguro
// if(isset($_POST['submit'])){
//     echo $_POST['name'];
//     echo $_POST['age'];
// }

// Seguro, garente tudo como texto
if(isset($_POST['submit'])){
    // echo htmlspecialchars($_POST['name']);
    // echo htmlspecialchars($_POST['age']);

    // Outro modo é usando o FILTER_INPUT
    // echo filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // echo filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // FILTER_VAR tb msm efeito do que o filter_input
    // Porem nao limita-se apenas a inputs
    echo filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    echo filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);
}
?>
<!-- <script>let name, age;name = 'Hacker Doidão';age = 69;alert(` Olá eu sou o ${name} e tenho ${age}!!!`);</script> -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="name">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
