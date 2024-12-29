<?php
// Start the session
session_start();

// Error message variable
$error_message = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize the input
    $decimalValue = strip_tags(trim($_POST['decimalValue']));

    // Define the regex pattern for decimal values
    $pattern = '/^\d+(\.\d+)?$/';

    // Validate the input against the regex pattern
    if (preg_match($pattern, $decimalValue)) {
        echo "Valid decimal value: " . htmlspecialchars($decimalValue);
        // You can proceed with further processing here
    } else {
        $error_message = "Please enter a valid decimal value.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal Value Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Enter a Decimal Value</h2>
    <form action="" method="post">
        <div>
            <label for="decimalValue">Decimal Value:</label>
            <input type="text" id="decimalValue" name="decimalValue" required>
        </div>
        <div class="error"><?php echo $error_message; ?></div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>
