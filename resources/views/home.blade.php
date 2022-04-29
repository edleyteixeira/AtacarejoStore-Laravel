@extends('layouts.base')


@section('title', 'Atacarejo Store')


@section('main')
<section>
    <div class="overflow-auto mt-3  d-flex div-overflow">
        <figure class="me-3">
            <a href="">
                <img src="/media/pet.jpg" width="100px" alt="Categoria Pet">
                <figcaption>Categoria Pet</figcaption>
            </a>
        </figure>
        <figure class="me-3">
            <a href="">
                <img src="/media/beleza.jpg" width="100px" alt="Categoria Pet">
                <figcaption>Categoria Pet</figcaption>
            </a>
        </figure>
        <figure class="me-3">
            <a href="">
                <img src="/media/acessorios.jpg" width="100px" alt="Categoria Pet">
                <figcaption>Categoria Pet</figcaption>
            </a>
        </figure>
        <figure class="me-3">
            <a href="">
                <img src="/media/pet.jpg" width="100px" alt="Categoria Pet">
                <figcaption>Categoria Pet</figcaption>
            </a>
        </figure>
        <figure class="me-3">
            <a href="">
                <img src="/media/beleza.jpg" width="100px" alt="Categoria Pet">
                <figcaption>Categoria Pet</figcaption>
            </a>
        </figure>
        <figure class="me-3">
            <a href="">
                <img src="/media/acessorios.jpg" width="100px" alt="Categoria Pet">
                <figcaption>Categoria Pet</figcaption>
            </a>
        </figure>
        <figure class="me-3">
            <a href="">
                <img src="/media/pet.jpg" width="100px" alt="Categoria Pet">
                <figcaption>Categoria Pet</figcaption>
            </a>
        </figure>
        <figure class="me-3">
            <a href="">
                <img src="/media/beleza.jpg" width="100px" alt="Categoria Pet">
                <figcaption>Categoria Pet</figcaption>
            </a>
        </figure>
        <figure class="me-3">
            <a href="">
                <img src="/media/acessorios.jpg" width="100px" alt="Categoria Pet">
                <figcaption>Categoria Pet</figcaption>
            </a>
        </figure>
        
    </div>
</section>


<section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"> 
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="/media/banner01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="/media/banner01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="/media/banner01.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>

<section id="destaques" class="d-flex bg-light div-overflow overflow-auto">
    <a class="bg-white w-50 m-3 shadow p-2">
        <img src="/media/noimg.jpg" width="200" height="200" alt="">
        <div class="d-flex flex-column">
            <span>FATIADOR EASY CUT</span>
            <span><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon> (153)</span>
            <span><b class="fs-4">R$149,90</b> <span class="p-1 text-danger text-decoration-line-through">R$199,90</span></span>
            <span>10x no cartão sem juros</span>
        </div>
    </a>
    <a class="bg-white w-50 m-3 shadow p-2 m-auto">
        <img src="/media/noimg.jpg" width="200" height="200" alt="">
        <div class="d-flex flex-column">
            <span>FATIADOR EASY CUT</span>
            <span><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon> (153)</span>
            <span><b class="fs-4">R$149,90</b> <span class="p-1 text-danger text-decoration-line-through">R$199,90</span></span>
            <span>10x no cartão sem juros</span>
        </div>
    </a>
    <a class="bg-white w-50 m-3 shadow p-2">
        <img src="/media/noimg.jpg" width="200" height="200" alt="">
        <div class="d-flex flex-column">
            <span>FATIADOR EASY CUT</span>
            <span><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon><ion-icon src="/icons/star.svg"></ion-icon> (153)</span>
            <span><b class="fs-4">R$149,90</b> <span class="p-1 text-danger text-decoration-line-through">R$199,90</span></span>
            <span>10x no cartão sem juros</span>
        </div>
    </a>
    
</section>


@endsection