<?php
require __DIR__ . './../helpers/helpers.php';
require __DIR__ . '/../config/database.php';
require __DIR__ . '/../models/person.php';

class PersonController extends Database
{
  public function create_person ($table, $fields)
  {
    $sql = "INSERT INTO $table ("
    . implode(",", array_keys($fields)) .
    ") VALUES ('" . implode("','", array_values($fields)) . "')";

    if ($result = $this->db->query($sql)) {
      return true;
    } else {
      die($this->db->error);
    }
  }

  public function read_people ($table)
  {
    $sql = "SELECT * FROM $table";

    if ($result = $this->db->query($sql)) {
      return $result;
    } else {
      die($this->db->error);
    }
  }

  public function update_person ($name, $id)
  {
    $sql = "";

    if ($result = $this->db->query($sql)) {
      return $result;
    } else {
      die($this->db->error);
    }
  }

  public function delete_person ()
  {
    $sql = "";

    if ($result = $this->db->query($sql)) {
      return $result;
    } else {
      die($this->db->error);
    }
  }
}

$personController = new PersonController;

if (isset($_POST['submit'])) {
  $person = new Person(
    $_POST['name'],
    $_POST['age']
  );

  $data = array(
    'name' => $person->name,
    'age' => $person->age
  );

  if ($personController->create_person('people', $data)) {
    header('location: ../../public/index.php');
  }
}

$getPeople = $personController->read_people('people');
