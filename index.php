<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlappyMorgen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <canvas id="canvas" width="300" height="550"></canvas>

    <script>
        const canvas = document.getElementById('canvas');
        const context = canvas.getContext("2d");
    </script>

    <script src="js/random.js"></script>
    <script src="js/ui.js"></script>
    <script src="js/sprites.js"></script>
    <script src="js/bases.js"></script>
    <script src="js/pipes.js"></script>
    <script src="js/game_state.js"></script>
    <script src="js/morgen.js"></script>
    <script src="js/ui_controller.js"></script>
    <script src="js/collisions_controller.js"></script>
    <script src="js/game.js"></script>
</body>
</html>
