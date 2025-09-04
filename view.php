<?php
$conn = new mysqli("localhost", "root", "", "student_db1");

// Run query
$result = $conn->query("SELECT * FROM students1");

echo "<h2>Registered Students</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Gender</th><th>Date of Birth</th><th>Phone</th><th>Address</th><th>Registered At</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['course']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['birthdate']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['address']."</td>
            <td>".$row['reg_date']."</td>
          </tr>";
}

echo "</table>";

$conn->close();
?>
