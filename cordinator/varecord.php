<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vacss.css">
    <title>Readify</title>
</head>
  
<body>
    <h1> Video & Audio Recorder </h1>
    <label for="media">
        Select what you want to record:
    </label>
  
    <select id="media">
        <option value="choose-an-option"> 
            Choose an option
        </option>
        <option value="vid">Video</option>
        <option value="aud">Audio</option>
    </select>
  
    <div class="display-none" id="vid-recorder">
        <h3>Record Video </h3>
        <video autoplay id="web-cam-container" 
            style="background-color: black;">
            Your browser doesn't support 
            the video tag
        </video>
  
        <div class="recording" id="vid-record-status">
            Click the "Start video Recording" 
            button to start recording
        </div>
  
        <!-- This button will start the video recording -->
        <button type="button" id="start-vid-recording" 
            onclick="startRecording(this, 
            document.getElementById('stop-vid-recording'))">
            Start video recording
        </button>
  
        <!-- This button will stop the video recording -->
        <button type="button" id="stop-vid-recording" 
            disabled onclick="stopRecording(this, 
            document.getElementById('start-vid-recording'))">
            Stop video recording
        </button>
  
        <!--The video element will be created using 
            JavaScript and contains recorded video-->
        <!-- <video id="recorded-video"  controls>
            Your browser doesn't support the video tag
        </video> -->
  
        <!-- The below link will let the
             users download the recorded video -->
        <!-- <a href="" > Download it! </a> -->
    </div>
  
    <div class="display-none" id="aud-recorder">
        <h3> Record Audio</h3>
  
        <div class="recording" id="aud-record-status">
            Click the "Start Recording" 
            button to start recording
        </div>
  
        <button type="button" id="start-aud-recording" 
            onclick="startRecording(this, 
            document.getElementById('stop-aud-recording'))">
            Start recording 
        </button>
  
        <button type="button" id="stop-aud-recording" 
            disabled onclick="stopRecording(this, 
            document.getElementById('start-aud-recording'))">
            Stop recording
        </button>
  
        <!-- The audio element will contain the 
            recorded audio and will be created 
            using Javascript -->
        <!-- <audio id="recorded-audio" 
            controls></audio> -->
  
        <!-- The below link will let the users 
             download the recorded audio -->
        <!-- <a href="" > Download it! </a> -->
    </div>
  
    <script src="vajs.js"></script>
</body>
  
</html>