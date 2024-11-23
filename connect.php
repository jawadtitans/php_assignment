<?php
require 'config/db.php'; // Include your database connection file

// Prepare data to insert
$name = "phisic";

$description = "This is a phisic class.";

try {
    // Create SQL query
    $sql = "INSERT INTO classe (class_ID,Trainer_ID,class_name,Schedual) VALUES (null,12,:name :description)";
    
    // Prepare the statement
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Data successfully inserted into the `classe` table.";
    } else {
        echo "Failed to insert data.";
    }
} catch (PDOException $e) {
    // Handle errors
    echo "Error: " . $e->getMessage();
}
?>
