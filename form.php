<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML form example</title>
</head>
<body>
    <h2>Sample HTML Form</h2>
    <form action="form process" method="post">
        <!--Text field-->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <!--password Field-->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <!--email Field-->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <!--number Field-->
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="120"><br><br>

        <!--Date Field-->
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob"><br><br>

        <!--Dropdown Field-->
        <label for="country">Country:</label>
        <select name="country" id="country">
            <option value=" ">Select</option>
            <option value="usa">USA</option>
            <option value="uk"> UK</option>
            <option value="india">India</option>
            <option value="africa">Africa</option>
        </select><br><br>
        

        <!--Radio buttons -->
        <label for="gender">Gender</label>
        <input type="radio


    </form>
    
</body>
</html>