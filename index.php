<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My PHP Page</title>
        

        <style>
            body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f2f4f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: #ffffff;
      width: 400px;
      padding: 24px;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
    
    }

    h1 {
      margin-bottom: 10px;
      color: #222;
      text-align: center;
    }

    h4 {
      margin-bottom: 10px;
      color: #222;
        text-align: center;
    }

    .bio {
      font-size: 14px;
      color: #555;
      margin-bottom: 18px;
      text-align: center;
    }

    h2 {
      font-size: 16px;
      margin-bottom: 10px;
      color: #333;
    }

    ul {
       list-style-type: circle;
      padding: 0;
      margin-bottom: 20px;
      margin-left: 20px;
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
      display: block;
      margin: 0 auto;
    }

    button:hover {
      background-color: #0056b3;
    }

    .system-info {
      background-color: #E8EAf6;
      margin-top: 20px;
      padding-bottom: 12px;
      padding-top: 12px;
      border-left: 5px solid #2E7D32;
      font-size: 13px;
      color: #333;
      text-align: center;
    }
        </style>
    </head>
    <body>

  <div class="card">
    <h1>Junior Software Engineer</h1>

    <h4>Name: Renan James Z. Miranda</h4>

    <p class="bio">
    "Ready Get Set Code! Aspiring Junior Software Engineer with a passion for web development and problem-solving.
    </p>

    <h2>Technical Skills</h2>
    <ul>
      <li>HTML & CSS</li>
      <li>JavaScript (Fundamentals)</li>
      <li>PHP Basics</li>
      <li>SQL Basics</li>
      <li>PC Troubleshooting</li>
      
    </ul>

    
    <button id="initBtn">Initialize System</button>

 
    <div class="system-info">
      <h3>Server Information</h3>
      <p><strong>Server Date:</strong> <?php echo date('F j, Y'); ?></p>
      <p><strong>Server Time:</strong> <?php echo date('g:i A'); ?></p>
      <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>
  </div>

 <script>  document.getElementById("initBtn").addEventListener("click", function () {
  alert("Welcome to the team! Your system is initialized.");
}); 
 </script>

</body>
</html>