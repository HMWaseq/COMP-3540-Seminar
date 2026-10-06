<?php
session_start();

if (!isset($_SESSION['mouse_moves'])) {
    $_SESSION['mouse_moves'] = 0;
    $_SESSION['mouse_clicks'] = 0;
    $_SESSION['key_presses'] = 0;
    $_SESSION['scrolls'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents("php://input"), true);

    $_SESSION['mouse_moves'] += $data['mouse_moves'] ?? 0;
    $_SESSION['mouse_clicks'] += $data['mouse_clicks'] ?? 0;
    $_SESSION['key_presses'] += $data['key_presses'] ?? 0;
    $_SESSION['scrolls'] += $data['scrolls'] ?? 0;

    echo json_encode([
        'status' => 'success',
        'mouse_moves' => $_SESSION['mouse_moves'],
        'mouse_clicks' => $_SESSION['mouse_clicks'],
        'key_presses' => $_SESSION['key_presses'],
        'scrolls' => $_SESSION['scrolls']
    ]);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Activity Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .stats {
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>User Activity Tracker</h1>

<div class="stats">
    <p>Mouse Moves: <span id="mouse_moves">0</span></p>
    <p>Mouse Clicks: <span id="mouse_clicks">0</span></p>
    <p>Key Presses: <span id="key_presses">0</span></p>
    <p>Scrolls: <span id="scrolls">0</span></p>
</div>

<script>
let mouseMoves = 0;
let mouseClicks = 0;
let keyPresses = 0;
let scrolls = 0;

document.addEventListener('mousemove', () => {
    mouseMoves++;
    document.getElementById('mouse_moves').textContent = mouseMoves;
});

document.addEventListener('click', () => {
    mouseClicks++;
    document.getElementById('mouse_clicks').textContent = mouseClicks;
});

document.addEventListener('keydown', () => {
    keyPresses++;
    document.getElementById('key_presses').textContent = keyPresses;
});

document.addEventListener('scroll', () => {
    scrolls++;
    document.getElementById('scrolls').textContent = scrolls;
});

setInterval(() => {
    fetch('tracker.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            mouse_moves: mouseMoves,
            mouse_clicks: mouseClicks,
            key_presses: keyPresses,
            scrolls: scrolls
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
    });

    mouseMoves = 0;
    mouseClicks = 0;
    keyPresses = 0;
    scrolls = 0;

}, 5000);
</script>

</body>
</html>