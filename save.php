<?php
// Retrieve the content from the POST request
$content = $_POST["content"];

// Set the filename for the saved text (you can customize this)
$filename = "saved_text.txt";

// Save the content to the file
file_put_contents($filename, $content);

// Send a response to indicate success
echo "Text saved successfully!";
?>
