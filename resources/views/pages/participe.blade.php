@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Participe')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<style>
    .participe-header {
        width: 100%;
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        padding: 60px 20px;
        text-align: center;
    }

    .participe-header h1 {
        font-family: 'Bebas neue';
        font-size: 3em;
        color: #fff;
        margin-bottom: 20px;
    }

    .participe-header p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #f9f8f0;
        max-width: 800px;
        margin: 0 auto;
    }

    .ministries-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        padding: 50px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ministry-card {
        width: 280px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .ministry-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .ministry-card-header {
        background: #003366;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .ministry-card-header h3 {
        font-family: 'Bebas neue';
        font-size: 1.5em;
        margin: 0;
    }

    .ministry-card-body {
        padding: 20px;
    }

    .ministry-card-body p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95em;
        color: #333;
        text-align: justify;
    }

    .ministry-card-body a {
        display: inline-block;
        margin-top: 15px;
        padding: 8px 20px;
        background: #003366;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .ministry-card-body a:hover {
        background: #1b4472;
    }
</style>
@endpush

@section('content')
<div class="participe-header">
    <h1>Participe dos Nossos Ministérios</h1>
    <p>Na Igreja Adventista Central de Brasília, temos diversos ministérios para você participar. Encontre o seu lugar e faça parte da nossa família!</p>
</div>

<div class="ministries-grid">
    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>CEMAB</h3>
        </div>
        <div class="ministry-card-body">
            <p>Centro Educacional Missionário Adventista de Brasília - Educação de qualidade com princípios cristãos.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>Classe Novo Tempo</h3>
        </div>
        <div class="ministry-card-body">
            <p>Uma classe especial para estudar a Bíblia e crescer na fé junto com a TV Novo Tempo.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>Classe de Saúde</h3>
        </div>
        <div class="ministry-card-body">
            <p>Aprenda sobre saúde integral: física, mental e espiritual. Cuidando do corpo como templo de Deus.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>Clube do Livro</h3>
        </div>
        <div class="ministry-card-body">
            <p>Leitura, reflexão e discussão de livros que edificam a fé e o conhecimento.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>Comunidades</h3>
        </div>
        <div class="ministry-card-body">
            <p>Pequenos grupos que se reúnem para estudo, oração e comunhão em diferentes regiões.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>Corais</h3>
        </div>
        <div class="ministry-card-body">
            <p>Louve a Deus através da música! Participe de um dos nossos corais e use seu talento.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>Cursos</h3>
        </div>
        <div class="ministry-card-body">
            <p>Diversos cursos para capacitação espiritual, profissional e desenvolvimento pessoal.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>Doutores da Esperança</h3>
        </div>
        <div class="ministry-card-body">
            <p>Ministério de visitação e apoio em hospitais, levando esperança e conforto aos enfermos.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>MAP</h3>
        </div>
        <div class="ministry-card-body">
            <p>Ministério de Apoio Pastoral - Apoio espiritual e emocional para membros e visitantes.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>Ministério de Oração</h3>
        </div>
        <div class="ministry-card-body">
            <p>Intercessão e oração pelos pedidos da comunidade. Cremos no poder da oração!</p>
            <a href="{{ route('oracao-visita') }}">Saiba mais</a>
        </div>
    </div>

    <div class="ministry-card">
        <div class="ministry-card-header">
            <h3>Mulher Plena</h3>
        </div>
        <div class="ministry-card-body">
            <p>Ministério dedicado às mulheres, promovendo crescimento espiritual e comunhão.</p>
            <a href="#">Saiba mais</a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/canais.js') }}"></script>
@endpush

