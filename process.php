<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "student";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// $sql = "SELECT students_info.student_id, students_info.first_name, students_info.last_name, students_info.fother_name, students_info.mother_name, students_info.address, students_class.class_id, students_class.class, students_class.section
// FROM students_info
// LEFT JOIN students_class  ON students_info.class_id = students_class.class_id";

// $sql = "SELECT *
// FROM students_info
// LEFT JOIN students_class  ON students_info.class_id = students_class.class_id";

$sql = "SELECT *
FROM students_info
LEFT JOIN students_class  ON students_info.class_id = students_class.class_id
LEFT JOIN students_sibling  ON students_info.sibling_id = students_sibling.sibling_id
";

$results = mysqli_query($conn, $sql);
if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {

                echo "<tr>
                <td>" . $row['student_id'] . "</td>
                <td>" . $row['first_name'] . "</td>
                <td>" . $row['last_name'] . "</td>
                <td>" . $row['father_name'] . "</td>
                <td>" . $row['mother_name'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['class'] . "</td>
                <td>" . $row['section'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['relationship'] . "</td>
                <td>" . $row['phone'] . "</td>
            </tr>";
        }
} else {
        echo "<tr><td colspan='10'>No records found</td></tr>";
}

// <td>
// <button class='btn btn-success update_btn'>Edit</button>
// <button class='btn btn-danger delete_btn'>Delete</button>
// </td>