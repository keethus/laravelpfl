@extends('layouts.app')

@section('content')
    <div class="container-fluid landing-container bg-light" >
        <div class="container">
            <div class="row landing-box">
                <div class="col typewriter-container my-auto">
                    <div class="landing-typewriter w-100 " >
                        <span class="before-txt">I'm </span><span class="txt-type " data-wait="3000" data-words='["Kārlis Barbars.", "a developer.", "a designer."]'></span>
                        <span class="typewriter-blinker">_</span>
                        <div class="w-100"></div>
                        <div class="typewriter-slogan col pl-0" >
                            <p>Connect with me or check out my work.</p>
                        </div>
                        <div class="w-100"></div>
                        <div class="landing-links row" >
                            <div class="col-sm flex-fill " style="--animate-delay: 0.1s;">
                                <a href="https://www.instagram.com/kabarbars/" target="_blank"><i class="fab fa-instagram animate__animated animate__bounceIn animate__delay-1s"></i></a>
                                <a href="https://www.facebook.com/zeatzijs" target="_blank"><i class="fab fa-facebook-square animate__animated animate__bounceIn animate__delay-2s"></i></a>
                                <a href="https://twitter.com/keeethus" target="_blank"><i class="fab fa-twitter animate__animated animate__bounceIn animate__delay-3s"></i></a>
                                <a href="https://discord.com/channels/@me/keethus#6634" target="_blank"><i class="fab fa-discord animate__animated animate__bounceIn animate__delay-4s"></i></a>
                                <a  href="https://github.com/keethus" target="_blank"><i class="fab fa-github animate__animated animate__bounceIn animate__delay-5s"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col animate__animated animate__pulse animate__infinite">
                    <img class="landing-me " src="{{asset('images/landing-me.jpg')}}" alt="" width="400" height="400" >
                </div>
            </div>
        </div>
    </div>

@endsection