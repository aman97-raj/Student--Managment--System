<?php
function showDetails($standard, $rollNo) {
    // Include database connection file
    include('dbcon.php');

    // Prepare SQL query with parameterized values to prevent SQL injection
    $qry = "SELECT * FROM student WHERE rollno = ? AND standard = ?";
    $stmt = mysqli_prepare($con, $qry);
    mysqli_stmt_bind_param($stmt, "ss", $rollNo, $standard);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if student record exists
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        ?>
        <style>
            .student-details-container {
    width: 80%;
    margin: 40px auto;
    background-color: #f9f9f9;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.student-details-table {
    width: 100%;
    border-collapse: collapse;
}

.student-details-table th, .student-details-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.student-details-table th {
    background-color: #f0f0f0;
}

.student-details-table td img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
}

.student-details-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.student-details-table tbody tr:hover {
    background-color: #f5f5f5;
}
        </style>
        <div class="student-details-container">
            <table class="student-details-table">
                <thead>
                    <tr>
                        <th colspan="3">Student Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><img src="data:image/jpeg;base64,<?php echo base64_encode($data['image']); ?>"></td>
                    </tr>
                    <tr>
                        <th>Roll No</th>
                        <td><?php echo $data['rollno']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $data['name']; ?></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><?php echo $data['city']; ?></td>
                    </tr>
                    <tr>
                        <th>Parents Contact No.</th>
                        <td><?php echo $data['pcont']; ?></td>
                    </tr>
                    <tr>
                        <th>Course Standard:</th>
                        <td><?php echo $data['standard']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
    } else {
        echo "<script>alert('No Student found!');</script>";
    }
}
?>