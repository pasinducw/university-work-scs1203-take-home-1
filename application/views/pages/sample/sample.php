<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

struct person{
  char name[10];
  int spea(){
    printf("Hello\n");
  }
}

person p1;
p1.name;
p1.speak();


<body>
  <h1>This is my webpage </h1>
  <p>My name is <?php 

    $variable1 = 10;
    $a ="something";
  
    echo($a);
  ?> </p>
</body>