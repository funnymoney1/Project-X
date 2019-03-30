  <?php
function sanitize($data)
{
  $mysql = mysqli_connect('localhost', 'root');
  return mysqli_real_escape_string($mysql,$data);
}

function output_errors($errors)
{
  return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
 ?>
