@extends('layouts.app')

@section('content')
    <div class="about-container container-fluid ">
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <span class="about-full-name">Kārlis Barbars</span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <i class="fas fa-globe-europe about-icons"></i><span class="about-location">Latvia, Cēsis</span>
                </div>
                <div class="col">

                </div>
            </div>
            <div class="row about-info-section">
                <div class="col">
                    <span class="about-info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dicta incidunt vitae? Blanditiis deserunt, quia. At autem deserunt doloribus illum iusto provident rem sed? Aut commodi cum cumque ipsum obcaecati odio officiis possimus quas sed tempora tempore vitae, voluptas voluptatibus. Et, eum impedit in magnam nam necessitatibus odio quo rerum?</span>
                </div>
                <div class="col">
                    <lottie-player class="about-animation" src="https://assets10.lottiefiles.com/packages/lf20_xchcab8w.json" background="transparent" speed="1" style="width: 400px; height: 400px;" loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.body.style.backgroundColor = "#212121";
    </script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
