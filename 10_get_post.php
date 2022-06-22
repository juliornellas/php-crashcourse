<?php
// echo $_GET['name'];
// echo $_GET['age'];

// echo $_POST['name'];
// echo $_POST['age'];

if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

/**
 * GET tudo que tiver um 'name' aparecerá na URL
 */
?>

<a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Neymar&age=28">Clique</a>

<!-- <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET"> -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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