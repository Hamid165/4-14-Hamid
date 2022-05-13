@extends('layouts.main')
@section('container')
@include('partials.foto')
@include('partials.css')
<h1 class="text-center">My Experience</h1>
<body class="background1">
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row tm-mb-90 tm-gallery" >
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="images/toko.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Toko Laptop</h2>
                        
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">

                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="images/porto.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Portofolio</h2>
                        
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">

                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="images/kalkulator.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Calculator</h2>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">

                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="images/desain.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Desain</h2>
                        
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">

                </div>
            </div>
            
        </div> <!-- row -->
        <p class="text1">-- Gambar - gambar di atas merupakan --<br>--pengalaman saya pada dunia web developer dan desain --</p><br>
    </div> <!-- container-fluid, tm-container-content -->
</body>
    <div class="tm-bg-gray pt-5 pb-3 tm-text-gray">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4">About My Portofolio</h3>
                    <p>Saya Membuat Portofolio Menggunakan Laravel 8</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4">Our Links</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="/">Home</a></li>
                        <li><a href="/1">About</a></li>
                        <li><a href="/2">Experience</a></li>
                        <li><a href="{{ route('contacts.create') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://www.facebook.com/profile.php?id=100033280553836"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://www.youtube.com/channel/UC-RA1tCHGoyhPBW3cmR53GQ"><i class="fab fa-youtube"></i></a></li>
                        <li class="mb-2"><a href="https://www.instagram.com/hamid_sabirin/"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://github.com/Hamid165"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2022 @Hamid Sabirin
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });

        $(function(){
            /************** Video background *********/

            function setVideoSize() {
                const vidWidth = 1280;
                const vidHeight = 720;
                const maxVidHeight = 400;
                let windowWidth = window.innerWidth;
                let newVidWidth = windowWidth;
                let newVidHeight = windowWidth * vidHeight / vidWidth;
                let marginLeft = 0;
                let marginTop = 0;
            
                if (newVidHeight < maxVidHeight) {
                    newVidHeight = maxVidHeight;
                    newVidWidth = newVidHeight * vidWidth / vidHeight;
                }
            
                if(newVidWidth > windowWidth) {
                    marginLeft = -((newVidWidth - windowWidth) / 2);
                }
            
                if(newVidHeight > maxVidHeight) {
                    marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
                }
            
                const tmVideo = $('#tm-video');
            
                tmVideo.css('width', newVidWidth);
                tmVideo.css('height', newVidHeight);
                tmVideo.css('margin-left', marginLeft);
                tmVideo.css('margin-top', marginTop);
            }

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background      
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        });
    </script>

@endsection