<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CodeIgniter Project1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <?php
    if (!empty($this->session->flashdata('massage'))) {
      echo "<div class='alert alert-success'>" . $this->session->flashdata('massage') . "</div>";
    }

    // print_r($users);
    ?>

    <table class='table table-striped'>
      <thead>
        <tr>
          <th>ID: </th>
          <th>Name: </th>
          <th>Email: </th>
          <th>Created Date: </th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($users)) { 
          foreach ($users as $row) {
          ?>
          <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['created_at']?></td>
          </tr>
        <?php } 
      
      } else {?>
          <tr>
            <td>Record not found</td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>