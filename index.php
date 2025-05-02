<?php
header("Content-Type: application/json");

// Example dummy AI response
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = json_decode(file_get_contents("php://input"), true);
    $userMessage = $input['message'] ?? '';

    // Here you'd plug in your AI logic
    $response = [
        "reply" => "You said: " . $userMessage . " (AI response here)"
    ];

    echo json_encode($response);
}
?>
