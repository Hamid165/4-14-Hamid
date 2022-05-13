@extends('layouts.main')
@section('container')
@include('/partials.css')
<div class="text-center">
    <h3> Welcome to</h3>
    <h1> Hamid Portofolio</h1><br>
    <body class="background">
        <link rel="stylesheet" href="{{asset('admin/css/foto.css')}}">
        <img class="rounded-image" src="/images/2.jpg" alt="{{ $nama }}"><br><br>

    <p class="text1">{{ $des1 }}</p>
    <p class="text1">{{ $des2 }}</p>
    <p class="text1">{{ $des3 }}</p>
 
    
<small></small><br>
    <a class="social-media-icon" href="https://www.instagram.com/hamid_sabirin/"><span class="fab fa-instagram">_Instagram</span></a>,
    <a class="social-media-icon" href="https://www.facebook.com/profile.php?id=100033280553836"><span class="fab fa-facebook">_Facebook</span></a>,
    <a class="social-media-icon" href="https://www.youtube.com/channel/UC-RA1tCHGoyhPBW3cmR53GQ"><span class="fab fa-youtube">_Youtbe</span></a>,
    <a class="social-media-icon" href="https://github.com/Hamid165"><span class="fab fa-github">_Github</span></a>
    </body>
    
</div>
    
@endsection
