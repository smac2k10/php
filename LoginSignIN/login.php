<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
    <div class="md-6">
        <h1>User Registration Portal</h1>
        <form action="registration.php" method="post">
            <input type="text" placeholder="Enter Username" name="username" required>
            <input type="password" placeholder="Enter password" name="password" required>
            <button type="submit" name="submit">Sign In</button>
        </form>
    </div>
    <br><br><br><br>
    <div class="md-6">

        <h1>User Login Portal</h1>
        <form action="validation.php" method="post">
            <input type="text" placeholder="Enter Username" name="username" required>
            <input type="password" placeholder="Enter password" name="password" required>
            <button type="submit" name="submit">Log In</button>
        </form>
    </div>
    </div>
</body>

</html>