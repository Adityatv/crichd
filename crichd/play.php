
<!DOCTYPE html>
<html>
<head>
    <title> | CricHD</title>
    <style>
        /* CSS for the fullscreen button */
        #fullscreen-button {
            background-color: #007bff; /* Blue background color */
            color: #fff; /* White text color */
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Smooth transition for background color */
        }

        #fullscreen-button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body style="margin: 0; overflow: hidden;">

<p>No channelid specified.</p>
<script>
// JavaScript to toggle fullscreen mode
document.addEventListener("DOMContentLoaded", function () {
    var iframe = document.querySelector("iframe");
    var fullscreenButton = document.getElementById("fullscreen-button");
    var isFullscreen = false;

    fullscreenButton.addEventListener("click", function () {
        if (!isFullscreen) {
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) {
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) {
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) {
                iframe.msRequestFullscreen();
            }
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            }
        }
        isFullscreen = !isFullscreen;
    });
});
</script>

</body>
</html>
