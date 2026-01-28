<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Onboarding Profile</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f2f4f8;

      /* Center the card */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: #ffffff;
      width: 340px;
      padding: 24px;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
      text-align: center;
    }

    h1 {
      margin-bottom: 10px;
      color: #222;
    }

    .bio {
      font-size: 14px;
      color: #555;
      margin-bottom: 18px;
    }

    h2 {
      font-size: 16px;
      margin-bottom: 10px;
      color: #333;
    }

    ul {
      list-style: none;
      padding: 0;
      margin-bottom: 20px;
    }

    li {
      font-size: 14px;
      padding: 6px 0;
      color: #444;
    }

    button {
      padding: 10px 16px;
      border: none;
      border-radius: 6px;
      background-color: #007bff;
      color: white;
      cursor: pointer;
      font-size: 14px;
    }

    button:hover {
      background-color: #0056b3;
    }

    .system-info {
      margin-top: 20px;
      padding-top: 12px;
      border-top: 1px solid #ddd;
      font-size: 13px;
      color: #333;
      text-align: left;
    }
  </style>
</head>

<body>

  <div class="card">
    <h1>James</h1>

    <p class="bio">
      Junior software developer with a strong interest in web technologies,
      system troubleshooting, and performance-focused applications.
    </p>

    <h2>Technical Skills</h2>
    <ul>
      <li>HTML & CSS</li>
      <li>JavaScript (Fundamentals)</li>
      <li>PHP Basics</li>
      <li>Android & PC Troubleshooting</li>
    </ul>

    <!-- Step 3: JavaScript Interaction -->
    <button id="initBtn">Initialize System</button>

    <!-- Step 4: PHP Server Integration -->
    <div class="system-info">
      <h3>Server Status: Online</h3>
      <p><strong>Date & Time:</strong> <?php echo date('F j, Y, g:i a'); ?></p>
      <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>
  </div>

  <script>
    document.getElementById("initBtn").addEventListener("click", function () {
      alert("Welcome to the team! Your system is initialized.");
    });
  </script>

</body>
</html>
