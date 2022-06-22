<?php
    if(isset($_POST['submit'])){

        $allowed_ext = array('png','jpg','jpeg','gif');

        if(!empty($_FILES['upload']['name'])){
            echo '<pre>';
            print_r($_FILES);
            echo '</pre>';
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "uploads/${file_name}";

            //Get file ext
            $file_ext = explode('/', $_FILES['upload']['type']);
            $file_ext = strtolower(end($file_ext));
            // echo $file_ext;

            //Validate extension
            if(in_array($file_ext, $allowed_ext)){
                if($file_size <= 1000000){
                    move_uploaded_file($file_tmp, $target_dir);
                    $message = '<p style="color:blue">Upload do arquivo com sucesso!</p>';
                }else{
                    $message = '<p style="color:red">Arquivo muito grande!</p>';
                }
            }else{
                $message = '<p style="color:red">Arquivo inválido!</p>';
            }

        }else{
            $message = '<p style="color:red">Por favor, selecione uma imagem</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form 
        action="<?php echo $_SERVER['PHP_SELF'] ?>"
        method="POST"
        enctype="multipart/form-data"
    >
        <p>Selecione imagem para <em>upload</em></p>
        <input type="file" name="upload">
        <br />
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>