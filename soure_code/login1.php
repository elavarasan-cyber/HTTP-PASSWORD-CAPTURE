<?php
// POST request verify panrathu[cite: 38]
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html");
    exit;
}
// Do not echo or store submitted credentials in this demo[cite: 38]
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>
</head>
<body style="font-family: Arial; text-align: center; margin-top: 100px; background-color: #f0f8ff;">
    
    <div style="background-color: white; display: inline-block; padding: 40px; border-radius: 10px; box-shadow: 0px 0px 15px #ddd;">
        <h2 style="color: green;">Login Request Submitted</h2>
        <p>Your login request has been processed.</p>
        <p style="color: #555;"><i>This page does not display username or password.</i></p>
        <br>
        <a href="index1.html" style="text-decoration: none;">
            <button style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
                Back to Login
            </button>
        </a>
    </div>

</body>
</html>
