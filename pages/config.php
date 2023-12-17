<?php

class Database
{
  var $host = "localhost";
  var $email = "root";
  var $password = "";
  var $database = "simkas_ikc";
  var $conn = "";

  public function __construct()
  {
    $this->conn = new mysqli($this->host, $this->email, $this->password, $this->database);

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  function validasi_login()
  {
      if (isset($_POST["login"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];

          $res = mysqli_query($this->conn, "SELECT * FROM login_mhs WHERE email='$email' AND password = '$password'");
          if (mysqli_num_rows($res) > 0) {
              $row = mysqli_fetch_assoc($res);
              $_SESSION['id_mahasiswa'] = $row['id_mahasiswa'];
              $_SESSION['role'] = $row['role'];
              if($row['role'] == 'mahasiswa') {
                header("Location: dashboard_users/dashboard.php");
                exit();
              } else {
                header("Location: dashboard_admin/dashboard.php");
                exit();
              }
          } else {
              echo "<script>alert('email / Password Salah!')</script>";
          }
      }
  }
}