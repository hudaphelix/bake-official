<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $remark = $_POST['remark'];

  $entry = "$name | $email | $number | $remark\n";
  file_put_contents("contacts.txt", $entry, FILE_APPEND);

  echo "<h2 style='text-align:center; color:#a14e2c;'>Thank you for contacting us, $name! 🎉</h2>";
}
?>
