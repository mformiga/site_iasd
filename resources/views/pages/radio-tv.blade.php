@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Rádio e TV Novo Tempo')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Roboto:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8fafc;
    }

    .radio-tv-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        justify-content: center !important;
    }

    .hero-section h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin: 0 0 25px 0;
        font-weight: 500;
        text-align: center;
        width: 100% !important;
    }

    .hero-section .subtitle {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.5em;
        color: #003366;
        margin: 0 0 20px 0;
        text-align: center;
        width: 100% !important;
    }

    .hero-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        max-width: 900px;
        margin: 0;
        text-align: center;
        width: 100% !important;
    }

    /* Introduction Section */
    .intro-section {
        background: #fff;
        border-radius: 16px;
        padding: 40px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        margin-bottom: 50px;
        border: 1px solid #f3f4f6;
    }

    .intro-section p {
        font-size: 1.125em;
        line-height: 1.75;
        margin-bottom: 24px;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 32px;
    }

    /* TV and Radio Cards */
    .media-card {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .media-header {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .media-icon {
        background: #2563eb;
        color: #fff;
        padding: 8px;
        border-radius: 8px;
    }

    .media-icon svg {
        width: 24px;
        height: 24px;
    }

    .media-title {
        font-size: 1.5em;
        font-weight: 600;
        color: #1f2937;
    }

    .media-list {
        list-style: disc;
        list-style-position: inside;
        color: #4b5563;
    }

    .media-list li {
        margin-bottom: 8px;
    }

    .media-info {
        font-size: 0.875em;
        color: #6b7280;
        background: #f9fafb;
        padding: 16px;
        border-radius: 6px;
        font-style: italic;
    }

    .btn-tv {
        display: block;
        width: 100%;
        text-align: center;
        background: #2563eb;
        color: #fff;
        font-weight: 700;
        padding: 12px 24px;
        border-radius: 12px;
        text-decoration: none;
        transition: background 0.3s, transform 0.3s;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        box-sizing: border-box;
    }

    .btn-tv:hover {
        background: #1d4ed8;
        transform: scale(1.05);
    }

    .btn-radio {
        display: block;
        width: 100%;
        text-align: center;
        background: #1e3a8a;
        color: #fff;
        font-weight: 700;
        padding: 12px 24px;
        border-radius: 12px;
        text-decoration: none;
        transition: background 0.3s, transform 0.3s;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        box-sizing: border-box;
    }

    .btn-radio:hover {
        background: #000;
        transform: scale(1.05);
    }

    /* Share Section */
    .share-section {
        text-align: center;
        background: #eff6ff;
        padding: 48px 24px;
        border-radius: 16px;
        border: 2px dashed #bfdbfe;
        margin-bottom: 60px;
    }

    .share-section h2 {
        font-size: 1.875em;
        font-weight: 700;
        color: #1e3a8a;
        margin-bottom: 24px;
        font-style: italic;
    }

    .share-blockquote {
        font-size: 1.5em;
        font-weight: 300;
        color: #1e40af;
        margin-bottom: 16px;
        max-width: 42rem;
        margin-left: auto;
        margin-right: auto;
    }

    .share-cite {
        color: #2563eb;
        font-weight: 700;
        font-size: 1.125em;
    }

    /* Footer */
    .page-footer {
        text-align: center;
        padding: 32px 0;
        color: #9ca3af;
        font-size: 0.875em;
    }

    .page-footer p {
        margin-bottom: 8px;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .radio-tv-container {
            padding: 20px 15px;
        }

        .hero-section {
            padding: 30px 20px;
        }

        .hero-section h1 {
            font-size: 2.2em;
        }

        .intro-section {
            padding: 30px 20px;
        }

        .grid-container {
            grid-template-columns: 1fr;
        }
    }

    @media (min-width: 768px) {
        .hero-section h1 {
            font-size: 3em;
        }

        .grid-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 32px;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/cpb/cpb_header.png') }}" alt="Rádio e TV Novo Tempo" style="width: 100%;" onerror="this.src='https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80';">

<div class="radio-tv-container">
    <!-- Hero Section -->
    <header class="hero-section">
        <h1>Rádio e TV Novo Tempo</h1>
        <span class="subtitle">Conectando Você à Esperança!</span>
        <p>
            Bem-vindo(a) à janela digital da <strong>TV e Rádio Novo Tempo</strong>, um ministério da Igreja Adventista do Sétimo Dia dedicado a levar mensagens de fé, saúde, família e esperança diretamente para o seu coração! Aqui, você encontrará programação de qualidade para inspirar seu dia a dia, fortalecer sua espiritualidade e oferecer conteúdo positivo para toda a família.
        </p>
    </header>

    <!-- Introdução -->
    <section class="intro-section">
        <div class="grid-container">

            <!-- TV Section -->
            <div class="media-card">
                <div class="media-header">
                    <span class="media-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <h3 class="media-title">TV Novo Tempo</h3>
                </div>
                <ul class="media-list">
                    <li><strong>Programação 24h:</strong> Conteúdo educativo, devocionais, séries infantis, documentários e estudos bíblicos.</li>
                </ul>
                <p class="media-info">
                    <strong>Como assistir em Brasília:</strong> Disponível em canal aberto na TV (Canal 48.1), streaming ou em nossa plataforma online.
                </p>
                <a href="https://www.novotempo.com/tv/ao-vivo/" target="_blank" class="btn-tv">
                    Assistir TV Novo Tempo AO VIVO
                </a>
            </div>

            <!-- Radio Section -->
            <div class="media-card">
                <div class="media-header">
                    <span class="media-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                    </span>
                    <h3 class="media-title">Rádio Novo Tempo</h3>
                </div>
                <ul class="media-list">
                    <li><strong>Música e Mensagens:</strong> Programas com mensagens edificantes, notícias inspiradoras e louvores que renovam o ânimo.</li>
                </ul>
                <p class="media-info">
                    <strong>Como ouvir:</strong> Sintonize nossa frequência ou escute online de qualquer lugar!
                </p>
                <a href="https://www.novotempo.com/radio/#onde-ouvir" target="_blank" class="btn-radio">
                    Ouvir Rádio Novo Tempo AO VIVO
                </a>
            </div>

        </div>
    </section>

    <!-- Compartilhe a Esperança -->
    <section class="share-section">
        <h2>Compartilhe a Esperança!</h2>
        <blockquote class="share-blockquote">
            "E este evangelho do reino será pregado em todo o mundo como testemunho a todas as nações."
        </blockquote>
        <cite class="share-cite">(Mateus 24:14)</cite>
    </section>
</div>
@endsection
