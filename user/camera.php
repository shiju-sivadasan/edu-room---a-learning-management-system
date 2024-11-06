<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Readify</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            margin: 0;
            background-color: #212121;
        }
        
        #camera,
        #camera--view,
        #camera--sensor,
        #camera--output {
            position: fixed;
            height: 100vh;
            width: 100vw;
            object-fit: contain;
        }
        
        #camera--view,
        #camera--sensor,
        #camera--output {
            transform: scaleX(-1);
            filter: FlipH;
        }
        
        #camera--trigger {
            color: #fff;
            background-color: #212121;
            border: 1px solid #ccc;
            display: inline-block;
            font-weight: 600;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            padding: .5rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            text-align: center;
            position: fixed;
            bottom: 2em;
            left: calc(50% - 100px);
        }
        
        .taken {
            position: fixed;
            height: 100vh;
            width: 100vw;
            object-fit: contain;
            transition: all 0.5s ease-in;
            z-index: 2;
        }
        
        body.capture {
            animation: blink 1s linear;
        }
        
        @keyframes blink {
            0% {
                opacity: 0;
            }
            50% {
                opacity: .5;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <main id="camera">
        <canvas id="camera--sensor"></canvas>
        <video id="camera--view" autoplay playsinline></video>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="" id="camera--output" onClick="location.reload()">
        <button id="camera--trigger">CAPTURE</button>
    </main>
    <script>
        var constraints = {
            video: {
                facingMode: "environment"
            },
            audio: false
        };
        var track = null;
        const cameraView = document.querySelector("#camera--view"),
            cameraOutput = document.querySelector("#camera--output"),
            cameraSensor = document.querySelector("#camera--sensor"),
            cameraTrigger = document.querySelector("#camera--trigger");

        function cameraStart() {
            navigator.mediaDevices
                .getUserMedia(constraints)
                .then(function(stream) {
                    track = stream.getTracks()[0];
                    cameraView.srcObject = stream;
                })
                .catch(function(error) {
                    console.error("Oops. Something is broken.", error);
                });
        }
        cameraTrigger.onclick = function() {
            document.body.classList.add("capture");
            var myAudio = new Audio('sound.mp3');
            myAudio.play();
            cameraSensor.width = cameraView.videoWidth;
            cameraSensor.height = cameraView.videoHeight;
            cameraSensor.getContext("2d").drawImage(cameraView, 0, 0);
            cameraOutput.src = cameraSensor.toDataURL("image/webp");
            cameraOutput.classList.add("taken");
        };
        window.addEventListener("load", cameraStart, false);
    </script>
</body>

</html>