<head>
  <title>ReadMe</title>
</head>
<?php
  require "/var/www/html/data/config.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT * FROM entry;";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
?>
<?php require "../templates/header.php"; ?>

<?php
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Guest Entry</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["guestEntry"]; ?><td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php  } ?>

<a href="../index.php">Back to home</a>
<?php require "../templates/footer.php"; ?>
