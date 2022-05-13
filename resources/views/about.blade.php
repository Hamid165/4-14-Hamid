@extends('layouts.main')
@section('container')
@include('/partials.css')
<div class="text-center">
    <h1> About Me</h1><br>
    <body class="background1">
        <link rel="stylesheet" href="{{asset('admin/css/foto.css')}}">
        <img class="rounded-image" src="/images/2.jpg" alt="{{ $nama }}"><br><br>
        
        <div class="mt-1">
            {{ $des }}<br>
            {{ $des2 }}<br>
            {{ $des3 }}<br>
            {{ $des4 }}
        </div>


<small></small><br>
    <a class="social-media-icon" href="https://www.instagram.com/hamid_sabirin/"><span class="fab fa-instagram">_Instagram</span></a>,
    <a class="social-media-icon" href="https://www.facebook.com/profile.php?id=100033280553836"><span class="fab fa-facebook">_Facebook</span></a>,
    <a class="social-media-icon" href="https://www.youtube.com/channel/UC-RA1tCHGoyhPBW3cmR53GQ"><span class="fab fa-youtube">_Youtbe</span></a>
    </body>
    
</div>
    
@endsection