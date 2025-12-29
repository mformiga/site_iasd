@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Evidências Bíblicas')

@push('styles')
<!-- Lucide Icons via CDN -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@400;600;700&family=Roboto:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
    html { scroll-behavior: smooth; }

    body {
        font-family: 'Roboto', sans-serif;
        background-color: #fcfaf7;
        color: #2d2a26;
    }

    h1, h2, h3 {
        font-family: 'Crimson Pro', serif;
    }

    .evidencias-container {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .intro-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .intro-section h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .intro-section .subtitle {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.5em;
        color: #003366;
        margin-bottom: 20px;
        display: block;
    }

    .intro-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        max-width: 900px;
        margin: 0 auto;
    }

    .section-block {
        margin-bottom: 50px;
    }

    .section-title {
        font-family: 'Crimson Pro', serif;
        font-size: 2.5em;
        color: #292524;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 3px solid #f59e0b;
        display: inline-block;
        font-weight: 700;
    }

    .section-intro {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #57534e;
        margin-bottom: 30px;
        line-height: 1.8;
        font-style: italic;
    }

    .cards-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .evidence-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        border-left: 4px solid #f59e0b;
    }

    .evidence-card:nth-child(n+3) {
        border-left-color: #a8a29e;
    }

    .evidence-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .evidence-card h3 {
        font-family: 'Crimson Pro', serif;
        font-size: 1.5em;
        color: #292524;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .evidence-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        line-height: 1.7;
        color: #44403c;
    }

    .jesus-section {
        background: #292524;
        color: #fff;
        border-radius: 15px;
        padding: 50px 40px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    }

    .jesus-section h2 {
        font-family: 'Crimson Pro', serif;
        font-size: 2.5em;
        color: #fbbf24;
        margin-bottom: 30px;
        font-weight: 700;
    }

    .jesus-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .jesus-item h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 0.9em;
        color: #fcd34d;
        margin-bottom: 8px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .jesus-item p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        line-height: 1.7;
        color: #d6d3d1;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .stat-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 25px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .stat-number {
        font-family: 'Crimson Pro', serif;
        font-size: 3em;
        color: #f59e0b;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .stat-label {
        font-family: 'Roboto', sans-serif;
        font-size: 0.8em;
        color: #292524;
        margin-bottom: 8px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .stat-desc {
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        color: #57534e;
    }

    .explore-section {
        margin-bottom: 50px;
    }

    .explore-section h2 {
        font-family: 'Crimson Pro', serif;
        font-size: 2.5em;
        color: #292524;
        margin-bottom: 30px;
        font-weight: 700;
    }

    .mab-banner {
        background: #292524;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        border: 2px solid rgba(245, 158, 11, 0.3);
        margin-bottom: 30px;
    }

    .mab-image {
        width: 100%;
        height: 400px;
        background: #44403c;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .mab-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .mab-content {
        background: #1c1917;
        color: #fff;
        padding: 50px 40px;
    }

    .mab-content .max-width {
        max-width: 800px;
        margin: 0 auto;
    }

    .mab-badge {
        background: #f59e0b;
        color: #fff;
        padding: 6px 12px;
        border-radius: 6px;
        font-family: 'Roboto', sans-serif;
        font-size: 0.75em;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: inline-block;
        margin-bottom: 20px;
    }

    .mab-content h3 {
        font-family: 'Crimson Pro', serif;
        font-size: 2em;
        color: #fbbf24;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .mab-content p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #d6d3d1;
        margin-bottom: 30px;
    }

    .btn-mab {
        display: inline-block;
        background: #f59e0b;
        color: #fff;
        padding: 14px 35px;
        border-radius: 10px;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        transition: background 0.3s, transform 0.3s;
    }

    .btn-mab:hover {
        background: #fbbf24;
        transform: scale(1.05);
    }

    .links-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .link-card {
        display: flex;
        align-items: center;
        gap: 20px;
        background: #fff;
        border: 2px solid #e7e5e4;
        border-radius: 15px;
        padding: 25px;
        text-decoration: none;
        transition: background 0.3s, border-color 0.3s;
    }

    .link-card:hover {
        background: #fffbeb;
        border-color: #f59e0b;
    }

    .link-emoji {
        font-size: 2.5em;
    }

    .link-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1em;
        color: #292524;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .link-card:hover h4 {
        color: #b45309;
    }

    .link-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.85rem;
        color: #78716c;
        font-style: italic;
    }

    .quote-section {
        text-align: center;
        padding: 50px 20px;
        border-top: 2px solid #e7e5e4;
    }

    .quote-text {
        font-family: 'Crimson Pro', serif;
        font-size: 1.5em;
        color: #44403c;
        line-height: 1.8;
        font-style: italic;
    }

    .quote-ref {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #92400e;
        font-weight: 700;
        display: block;
        margin-top: 15px;
    }

    @media (max-width: 768px) {
        .evidencias-container {
            padding: 20px 15px;
        }

        .intro-section {
            padding: 30px 20px;
        }

        .intro-section h1 {
            font-size: 2.2em;
        }

        .cards-grid,
        .jesus-grid,
        .links-grid {
            grid-template-columns: 1fr;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .jesus-section,
        .mab-content {
            padding: 30px 20px;
        }

        .mab-image {
            height: 250px;
        }

        .section-title {
            font-size: 2em;
        }

        .quote-text {
            font-size: 1.2em;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Evidências Bíblicas" style="width: 100%;">

<div class="evidencias-container">
    <!-- Seção Introdutória -->
    <div class="intro-section">
        <h1>Evidências Bíblicas</h1>
        <span class="subtitle">Arqueologia, História e Fé</span>
        <p>
            Uma jornada pelas descobertas que confirmam a veracidade das Escrituras Sagradas.
        </p>
    </div>

    <main>
        <!-- Secção 1: Arqueologia e a Bíblia -->
        <section class="section-block">
            <h2 class="section-title">Arqueologia e a Bíblia</h2>
            <p class="section-intro">
                A Bíblia não é apenas um livro de fé, mas também um registro histórico comprovado por descobertas arqueológicas.
            </p>

            <div class="cards-grid">
                <div class="evidence-card">
                    <h3>Manuscritos do Mar Morto (1947)</h3>
                    <p>Encontrados em cavernas próximas ao Mar Morto, incluem cópias de livros do Antigo Testamento datadas de 200 a.C.</p>
                </div>
                <div class="evidence-card">
                    <h3>Anel de Pôncio Pilatos (2018)</h3>
                    <p>Um anel de bronze identificado em Israel associado ao governador que ordenou a crucificação de Jesus.</p>
                </div>
                <div class="evidence-card">
                    <h3>Cidade de Zanoa (3.200 anos)</h3>
                    <p>Escavações revelaram muros e cerâmicas corroborando relatos de cidades israelitas em Josué e Neemias.</p>
                </div>
                <div class="evidence-card">
                    <h3>Fosso de Salomão em Jerusalém</h3>
                    <p>Um fosso monumental datado da Idade do Ferro, alinhando-se com as fortificações descritas em 1 Reis 11:27.</p>
                </div>
            </div>
        </section>

        <!-- Secção 2: Jesus Cristo -->
        <section class="jesus-section">
            <h2>Jesus Cristo: Evidências Históricas</h2>
            <div class="jesus-grid">
                <div class="jesus-item">
                    <h3>Confiabilidade dos Evangelhos</h3>
                    <p>Relatos escritos por testemunhas oculares que se harmonizam em pontos centrais.</p>
                </div>
                <div class="jesus-item">
                    <h3>Fontes Seculares</h3>
                    <p>Tácito e Flávio Josefo mencionam Jesus e o impacto do cristianismo primitivo.</p>
                </div>
                <div class="jesus-item">
                    <h3>Túmulo Vazio</h3>
                    <p>O papel das mulheres como testemunhas reforça a autenticidade do relato histórico.</p>
                </div>
                <div class="jesus-item">
                    <h3>Transformação dos Discípulos</h3>
                    <p>A coragem e martírio dos apóstolos sugerem uma convicção inabalável.</p>
                </div>
            </div>
        </section>

        <!-- Secção 3: Integridade Textual -->
        <section class="section-block">
            <h2 class="section-title">Integridade Textual</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">1.000+</div>
                    <p class="stat-label">Anos de Preservação</p>
                    <p class="stat-desc">O texto permaneceu praticamente inalterado.</p>
                </div>
                <div class="stat-card">
                    <div class="stat-number">40</div>
                    <p class="stat-label">Autores Diferentes</p>
                    <p class="stat-desc">Mensagem coerente em 3 continentes.</p>
                </div>
                <div class="stat-card">
                    <div class="stat-number">Gezer</div>
                    <p class="stat-label">Portão de Salomão</p>
                    <p class="stat-desc">Confirmação de projetos monumentais (1 Reis).</p>
                </div>
            </div>
        </section>

        <!-- Secção Explore Mais com o Destaque do MAB -->
        <section class="explore-section">
            <h2>Explore e Aprofunde-se:</h2>

            <div class="mab-banner">
                <!-- Imagem em destaque -->
                <div class="mab-image">
                    <img src="/images/museu_mab.jpg"
                         alt="Museu de Arqueologia Bíblica"
                         onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'p-16 text-center\'><div class=\'text-6xl mb-4\'>🏛️</div><p class=\'text-amber-200 font-serif italic text-xl\'>Acervo Histórico MAB</p></div>'">
                </div>

                <!-- Conteúdo do MAB -->
                <div class="mab-content">
                    <div class="max-width">
                        <span class="mab-badge">Destaque Especial</span>
                        <h3>Museu de Arqueologia Bíblica (MAB)</h3>
                        <p>
                            Localizado no campus do UNASP (Estado de São Paulo), o MAB é referência na América Latina. Explore artefatos da época de Jesus e réplicas de manuscritos que narram milênios de história bíblica.
                        </p>
                        <a href="http://mab.unasp.edu.br" target="_blank" class="btn-mab">
                            Conhecer o Museu
                        </a>
                    </div>
                </div>
            </div>

            <!-- Outros Links -->
            <div class="links-grid">
                <a href="https://www.novotempo.com/programa/evidencias/" target="_blank" class="link-card">
                    <span class="link-emoji">📺</span>
                    <div>
                        <h4>Série Evidências</h4>
                        <p>Assista na TV Novo Tempo.</p>
                    </div>
                </a>
                <div class="link-card">
                    <span class="link-emoji">🌍</span>
                    <div>
                        <h4>Museus Internacionais</h4>
                        <p>Louvre (França) e Museu de Israel.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Citação Final -->
        <section class="quote-section">
            <blockquote class="quote-text">
                "Estejam sempre preparados para responder a qualquer que lhes pedir a razão da esperança que há em vocês."
            </blockquote>
            <cite class="quote-ref">— 1 Pedro 3:15</cite>
        </section>
    </main>
</div>
@endsection
