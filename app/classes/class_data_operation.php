<?php include 'class_database.php';

class DataOperation extends Database
{
  public function create_person ($table, $fields)
  {
    $sql = "";
    $sql .= "INSERT INTO " . $table;
    $sql .= "(" . implode(",", array_keys($fields)) . ") VALUES";
    $sql .= "('" . implode("','", array_values($fields)) . "')";

    $query = mysqli_query($this->db_connection, $sql);
    if ($query) {
      return true;
    }
  }
}

$dataOperation = new DataOperation;

if (isset($_POST['submit'])) {
  $data = array(
    'name' => $_POST['name'],
    'age' => $_POST['age']
  );

  if ($dataOperation->create_person('people', $data)) {
    header('location: ../../public/index.php');
  }
}
