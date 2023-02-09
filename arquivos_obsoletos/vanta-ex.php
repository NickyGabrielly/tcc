<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Perfil</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Quicksand&family=Rye&display=swap" rel="stylesheet">



<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
<script>
var setVanta = ()=>{
if (window.VANTA) window.VANTA.NET({
  el: "#body",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  points: 14.00
})
}

    window.addEventListener('load', () => {
  setVanta()
})
</script>
<style>

                body {
                display:inline-block;
                overflow-x: hidden;
                overflow-y: hidden;

                

                position: relative;
                width: 100%;
                min-height: 100vh;

                
            }

            #vanta{
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;

                width: 100%;
                height: 100%;

                z-index: -10;
            }
    </style>
    </head>

    <body id="body">
        <div id="vanta"></div>
    </body>
</html>
