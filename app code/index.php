<html>
<head>
  <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <style>
    body {
      background: #0098ff;
      display: flex;
      height: 100vh;
      margin: 0;
      align-items: center;
      justify-content: center;
      padding: 0 50px;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }
    video {
      max-width: calc(50% - 100px);
      margin: 0 50px;
      box-sizing: border-box;
      border-radius: 2px;
      padding: 0;
      background: white;
    }
    .copy {
      position: fixed;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 16px;
      color: white;
    }
  </style>
</head>
<body>
  <div class="copy">Send your URL to a friend to start a video call</div>
  <div><h1> TeleTreat </h1></div>
  <video id="localVideo" autoplay muted></video>
  <video id="remoteVideo" autoplay></video>
  
  <script src="script.js"></script>
  <footer>
  <p>Author: Riyadh Ahmed</p>
  <p><a href="http://sajuahmed.epizy.com/">sajuahmed.com</a></p>
</footer>
</body>
</html>
