@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Mídias')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<style>
    .midias-header {
        width: 100%;
        background: linear-gradient(135deg, #1b4472 0%, #003366 100%);
        padding: 60px 20px;
        text-align: center;
    }

    .midias-header h1 {
        font-family: 'Bebas neue';
        font-size: 3em;
        color: #fff;
        margin-bottom: 20px;
    }

    .midias-header p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #f9f8f0;
        max-width: 800px;
        margin: 0 auto;
    }

    .media-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        padding: 50px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .media-card {
        width: 300px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .media-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .media-card-header {
        background: linear-gradient(135deg, #003366 0%, #1b4472 100%);
        color: #fff;
        padding: 30px 20px;
        text-align: center;
    }

    .media-card-header i {
        font-size: 3em;
        margin-bottom: 15px;
    }

    .media-card-header h3 {
        font-family: 'Bebas neue';
        font-size: 1.5em;
        margin: 0;
    }

    .media-card-body {
        padding: 20px;
    }

    .media-card-body p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95em;
        color: #333;
        text-align: justify;
        margin-bottom: 15px;
    }

    .media-card-body a {
        display: inline-block;
        padding: 10px 25px;
        background: #003366;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .media-card-body a:hover {
        background: #1b4472;
    }

    .live-section {
        background: #f5f5f5;
        padding: 50px 20px;
    }

    .live-section h2 {
        font-family: 'Bebas neue';
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 30px;
    }

    .live-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .live-container iframe {
        width: 100%;
        aspect-ratio: 16/9;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }
</style>
@endpush

@section('content')
<div class="midias-header">
    <h1>Mídias Adventistas</h1>
    <p>Acesse conteúdos edificantes, estudos bíblicos, músicas e muito mais através das nossas mídias e parceiros.</p>
</div>

<div class="media-grid">
    <div class="media-card">
        <div class="media-card-header">
            <i class='bx bx-book-open'></i>
            <h3>CPB - Casa Publicadora Brasileira</h3>
        </div>
        <div class="media-card-body">
            <p>Livros, revistas e materiais de estudo para sua edificação espiritual. Publicações de qualidade para toda a família.</p>
            <a href="https://cpb.com.br" target="_blank">Acessar</a>
        </div>
    </div>

    <div class="media-card">
        <div class="media-card-header">
            <i class='bx bx-planet'></i>
            <h3>Criacionismo</h3>
        </div>
        <div class="media-card-body">
            <p>Evidências científicas que apontam para um Criador inteligente. Estudos sobre as origens da vida.</p>
            <a href="https://criacionismo.com.br" target="_blank">Acessar</a>
        </div>
    </div>

    <div class="media-card">
        <div class="media-card-header">
            <i class='bx bx-search-alt'></i>
            <h3>Evidências Bíblicas</h3>
        </div>
        <div class="media-card-body">
            <p>Descubra as evidências históricas e arqueológicas que confirmam a veracidade das Escrituras Sagradas.</p>
            <a href="{{ route('midias.evidencias-biblicas') }}">Acessar</a>
        </div>
    </div>

    <div class="media-card">
        <div class="media-card-header">
            <i class='bx bx-film'></i>
            <h3>Filmes e Séries</h3>
        </div>
        <div class="media-card-body">
            <p>Entretenimento cristão de qualidade. Filmes e séries que edificam e inspiram toda a família.</p>
            <a href="#">Acessar</a>
        </div>
    </div>

    <div class="media-card">
        <div class="media-card-header">
            <i class='bx bx-time-five'></i>
            <h3>Profecias</h3>
        </div>
        <div class="media-card-body">
            <p>Estude as profecias bíblicas e entenda os sinais dos tempos. Conteúdo para aprofundar seu conhecimento profético.</p>
            <a href="#">Acessar</a>
        </div>
    </div>

    <div class="media-card">
        <div class="media-card-header">
            <i class='bx bx-tv'></i>
            <h3>Rádio e TV Novo Tempo</h3>
        </div>
        <div class="media-card-body">
            <p>Programação 24 horas com conteúdo cristão de qualidade. Músicas, sermões, estudos e muito mais.</p>
            <a href="https://novotempo.com" target="_blank">Acessar</a>
        </div>
    </div>
</div>

<div class="live-section">
    <h2>Assista ao Vivo</h2>
    <div class="live-container">
        <iframe src="https://www.youtube.com/embed/629KDII-r94?si=I4oLWFGER1l1G_Wn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/canais.js') }}"></script>
@endpush

