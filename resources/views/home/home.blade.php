<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/modern-warfare" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/home.css")}}">
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
        @if (Auth::check())
        <!-- User is logged in -->
        <div class="profile">
            <img id="profileImage" src="assets/Untitled-3.png">
            <div class="dropdown-content" id="dropdownMenu">
                <a href="{{route('logout')}}">Log Out</a>
            </div>
        </div>
      @else
        <!-- User is not logged in -->
        <a class="login" href="{{route('register.Lpage')}}">
            <button>LOG IN</button>
        </a>
      @endif
          <section></section>
    </header>

    @if (Auth::check())
    <div id="place">
        <section class="con">
            <div class="pic2">
                <div class="mySlides fade">
                    <img src="{{asset("assets/3e86a132-ebd9-4417-a352-09e33a303d56.jpeg")}}" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="{{asset("assets/9dd98f41-561a-4af0-a76c-48e19829a4a3.jpeg")}}" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="{{asset("assets/cffc8ad5-9267-497d-aaca-d82f873732fc.jpeg")}}" style="width:100%">
                </div>
                <br>
                <div style="text-align:center">
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                </div>
            </div>

            <div class="sub">
                <h1><br>Description</h1>
            </div>

            <div class="box">
                <div class="left">
                    <p>Duckie Duck</p>
                </div>
                <div class="right">
                    <p>Duckie Duck is a playful and curious little yellow duck known for its adventurous spirit and vibrant personality. With soft, fluffy feathers and an iconic orange beak, Duckie loves to waddle around ponds, lakes, and grassy fields, exploring the world around them. Always eager to make new friends, Duckie has a cheerful quack that brightens up everyone's day. </p>
                </div>
                <div class="q">
                    <a class="q" href="{{url('queue')}}"><button>Queue</button></a>
                </div>
            </div>
        </section>
    </div>
    @else
    <div id="place">
        <section class="con">
            <div class="pic2">
                <div class="mySlides fade">
                    <img src="{{asset("assets/3e86a132-ebd9-4417-a352-09e33a303d56.jpeg")}}" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="{{asset("assets/9dd98f41-561a-4af0-a76c-48e19829a4a3.jpeg")}}" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="{{asset("assets/cffc8ad5-9267-497d-aaca-d82f873732fc.jpeg")}}" style="width:100%">
                </div>
                <br>
                <div style="text-align:center">
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                </div>
            </div>

            <div class="sub">
                <h1><br>Description</h1>
            </div>

            <div class="box">
                <div class="left">
                    <p>Duckie Duck</p>
                </div>
                <div class="right">
                    <p>Duckie Duck is a playful and curious little yellow duck known for its adventurous spirit and vibrant personality. With soft, fluffy feathers and an iconic orange beak, Duckie loves to waddle around ponds, lakes, and grassy fields, exploring the world around them. Always eager to make new friends, Duckie has a cheerful quack that brightens up everyone's day. </p>
                </div>
                <div class="q">
                    <a class="q" href="{{url('login')}}"><button>Queue</button></a>
                </div>
            </div>
        </section>
    </div>
    @endif

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
        let slideIndex = 0;
        showSlides();
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000);
        }
    </script>
    <script>
        window.addEventListener('scroll', function() {
        const button = document.querySelector('.q button');
        const footer = document.querySelector('.footer');
        const footerRect = footer.getBoundingClientRect();

        if (footerRect.top < window.innerHeight ) {
            button.style.bottom = (footerRect.height + 20) + 'px';
        } else {
            button.style.bottom = '20px';
        }
    });
    </script>
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

