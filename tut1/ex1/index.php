
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Form</title>

</head>
<body>
  <h1>Registration Form</h1>

  <form method="POST" action="process.php">
    <div>
      <label for="firstName">First Name:</label><br>
      <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
    </div>

    <br>

    <div>
      <label for="lastName">Last Name:</label><br>
      <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>
    </div>

    <br>

    <div>
      <label for="email">Email Address:</label><br>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>

    <br>

    <div>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" placeholder="Enter a password" required>
    </div>

    <br>

    <div>
      <label for="program">Program:</label><br>
      <select id="program" name="program" required>
        <option value="">-- Select a program --</option>
        <option value="web">Web Development</option>
        <option value="cis">Computer Information Systems</option>
        <option value="cs">Computer Science</option>
      </select>
    </div>

    <br>

    <div>
      <p>Study Mode:</p>
      <label>
        <input type="radio" name="studyMode" value="full-time" required>
        Full-time
      </label>
      <br>
      <label>
        <input type="radio" name="studyMode" value="part-time" required>
        Part-time
      </label>
    </div>

    <br>

    <button type="submit">Register</button>
  </form>
</body>
</html>
