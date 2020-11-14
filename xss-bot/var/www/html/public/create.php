<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */

if (isset($_POST['submit'])) {
  require "../data/config.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_entry = array(
            "name" => $_POST['name'],
            "guestEntry"  => $_POST['guestEntry'],
        );

        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "entry",
                implode(", ", array_keys($new_entry)),
                ":" . implode(", :", array_keys($new_entry))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_entry);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

<?php require "templates/header.php"; ?>

<h2>Add Your Entry</h2>

    <form method="post">
    	<label for="name">Your Name</label>
    	<input type="text" name="name" id="name">
    	<label for="guestEntry">Your Entry</label>
    	<input type="text" name="guestEntry" id="guestEntry" size="100">
    	<input type="submit" name="submit" value="Submit">
    </form>

    <a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>
