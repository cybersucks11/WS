<html>
<body>

<table border="1" width="100%">
<tr>

<!-- LEFT COLUMN -->
<td width="25%" valign="top">
    <h3>Menu</h3>

    <a href="?page=home">Home</a><br>
    <a href="?page=about">About Us</a><br>
    <a href="?page=contact">Contact HR</a><br>
    <a href="?page=form">Add Employee</a><br>
</td>

<!-- RIGHT COLUMN -->
<td width="75%" valign="top">

<?php

$page = $_GET['page'] ?? 'home';

/* ================= HOME ================= */
if($page == "home")
{
    echo "<h2>Employee Profile</h2>";

    echo "<table border='1'>
    <tr><td>Employee ID</td><td>E101</td></tr>
    <tr><td>Name</td><td>Vaishnavi</td></tr>
    <tr><td>Designation</td><td>Developer</td></tr>
    <tr><td>Department</td><td>IT</td></tr>
    <tr><td>Email</td><td>vaishu@email.com</td></tr>
    <tr><td>Photo</td><td><img src='emp.jpg' width='100'></td></tr>
    </table>";
}

/* ================= ABOUT ================= */
else if($page == "about")
{
    echo "<h2>About Us</h2>";
    echo "This is Employee Management System.";
}

/* ================= CONTACT HR ================= */
else if($page == "contact")
{
    echo "<h2>HR Department</h2>";
    echo "Email: hr@company.com <br>";
    echo "Phone: 9876543210 <br>";
}

/* ================= ADD EMPLOYEE FORM ================= */
else if($page == "form")
{
?>

<h2>Add Employee</h2>

<form method="post" action="?page=save">
    ID: <input type="text" name="id"><br>
    Name: <input type="text" name="name"><br>
    Designation: <input type="text" name="desig"><br>
    Department: <input type="text" name="dept"><br>
    Email: <input type="text" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    <input type="submit" value="Save">
</form>

<?php
}

/* ================= SAVE EMPLOYEE ================= */
else if($page == "save")
{
    echo "<h2>Employee Saved</h2>";

    echo "ID: ".$_POST['id']."<br>";
    echo "Name: ".$_POST['name']."<br>";
    echo "Designation: ".$_POST['desig']."<br>";
    echo "Department: ".$_POST['dept']."<br>";
    echo "Email: ".$_POST['email']."<br>";
    echo "Phone: ".$_POST['phone']."<br>";
}

?>

</td>
</tr>
</table>

</body>
</html>
