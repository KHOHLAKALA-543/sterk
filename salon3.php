<?php

include "db.php";

$result = $conn->query("SELECT * FROM appointments ORDER BY appointment_date, appointment_time");

?>

<!DOCTYPE html>
<html>
<head>
<title>Appointments</title>

<style>

table{
width:100%;
border-collapse:collapse;
font-family:Arial;
}

th,td{
padding:12px;
border:1px solid #ccc;
}

th{
background:#ff4fa3;
color:white;
}

</style>

</head>

<body>

<h2>Salon Appointments</h2>

<table>

<tr>
<th>Name</th>
<th>Email</th>
<th>Service</th>
<th>Date</th>
<th>Time</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>

<td><?= htmlspecialchars($row["fullname"]) ?></td>
<td><?= htmlspecialchars($row["email"]) ?></td>
<td><?= htmlspecialchars($row["service"]) ?></td>
<td><?= htmlspecialchars($row["appointment_date"]) ?></td>
<td><?= htmlspecialchars($row["appointment_time"]) ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>