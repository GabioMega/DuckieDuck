<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/modern-warfare" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/queue.css")}}">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <input type="checkbox" id="check">
            <ul>
                <li><img src="assets/Untitled-2.png"></li>
                <!-- <li><a href="home.html">Home</a></li> -->
            </ul>
        </nav>
        <div class="profile">
            <img id="profileImage" src="assets/Untitled-3.png">
            <div class="dropdown-content" id="dropdownMenu">
                <a href="{{route('logout')}}">Log Out</a>
            </div>
        </div>
        <section></section>
    </header>

    <div id="place">
        <section class="con">
            <div class="sub">
                <h1><br>Thank You!</h1>
            </div>
            <div class="box">
                <h2>Congratulations, you’re in queue for purchasing "the duck".
                    Please wait patiently!</h2>
                <h3>Thank You!</h3>
                <div class="q">
                    <a class="ret" href="{{url('')}}"><button>Return</button></a>
                </div>
            </div>

        </section>
    </div>

    <footer class="footer">
        <div class="connect">
            <h5>CONNECT WITH US:</h5>
            <img src="{{asset("assets/ic_baseline-facebook.png")}}" alt="facebook">
            <img src="{{asset("assets/ri_youtube-fill.png")}}" alt="youtube">
            <img src="{{asset("assets/mdi_instagram.png")}}" alt="instagram">
            <br>
        </div>
    </footer>

    <script>
        const dropdownMenu = document.getElementById("dropdownMenu");
        const profileImage = document.getElementById("profileImage");
        profileImage.onclick = function(event) {
            event.stopPropagation();
            dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
        }
        window.onclick = function(event) {
            if (!event.target.matches('#profileImage')) {
                dropdownMenu.style.display = "none";
            }
        }
    </script>
</body>
</html>
