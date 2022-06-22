<?php 
//Inclui Header
include 'inc/header.php';

//Editar feedback
// $editar = false;
if(isset($_POST['atualizar'])){
  // $editar = true;
  $id = filter_input(INPUT_POST, 'item_id', FILTER_SANITIZE_NUMBER_INT);
  $value = filter_input(INPUT_POST, 'item_value', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $sql = "UPDATE feedback SET body = '$value' WHERE id=$id";
  mysqli_query($conn, $sql);
  // echo $_POST['item_value'];
  // echo $sql;
}

//Excluir feedback
if(isset($_POST['excluir'])){
  $id = filter_input(INPUT_POST, 'item_id', FILTER_SANITIZE_NUMBER_INT);
  $sql = "DELETE FROM feedback WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  // var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));
}

//Busca feedbacks
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

  <h2>Feedback List</h2>

  <!-- Ao interagir PHP com HTML ao usar o IF ou outra estrutura com {} usa-se : -->
  <?php if (empty($feedback)): ?>
    <p class="lead mt-3">There is no feedback</p>
  <?php endif; ?>
  <!-- E por fim o endif; -->

  <?php foreach ($feedback as $item): ?>
    <div class="card my-3 w-75 shadow-sm">
      <div class="card-body">

        <form 
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
        method="post">

          <textarea class="form-control shadow-sm" name="item_value">
            <?php echo htmlspecialchars($item['body']); ?>
          </textarea>

          <div class="text-secondary mt-2">
            <small>
              By <?php echo htmlspecialchars($item['name']); ?> 
              on <?php echo date_format(date_create($item['date']),'g:ia \o\n l jS F Y'); ?>
            </small>
          </div>
            
          <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
            
          <hr />
            
          <div class="d-flex justify-content-around">

            <button 
              class="btn btn-sm btn-success shadow-sm"
              name="atualizar"
              type="submit">
                Atualizar
            </button>
            
            <button 
              class="btn btn-sm btn-danger shadow-sm"
              name="excluir"
              type="submit"
              onclick="if (confirm('Excluir item?')) return true; return false">
                Excluir
            </button>

          </div>

        </form>
      </div>
   </div>
  <?php endforeach; ?>
<?php include 'inc/footer.php'; ?>