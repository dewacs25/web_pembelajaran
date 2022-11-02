<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Text Typing Animation</title>
    </head>
    <body>
        <h1>Typewriter</h1>
        
        <p id="typing"></p>
        <script>
            var i = 0;
            var txt = 'Hello world, Welcome to Bisabos.com';
            var speed = 50;
            
            function typeWriter() {
              if (i < txt.length) {
                document.getElementById("typing").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
              }
            }
            typeWriter()
        </script>
    </body>
</html>