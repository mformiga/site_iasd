@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Filmes e Séries')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');

    .filmes-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .header-section {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        padding: 60px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
        color: #fff;
    }

    .header-section h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #fff;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .header-section .subtitle {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.3em;
        color: #8bb8e8;
        margin-bottom: 20px;
        display: block;
    }

    .header-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #f8f9fa;
        max-width: 900px;
        margin: 0 auto;
    }

    .section-title {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .section-benefits {
        margin: 60px 0;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .benefit-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 35px 25px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .benefit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .benefit-icon {
        width: 70px;
        height: 70px;
        background: #f8f9fa;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2em;
        transition: transform 0.3s, background 0.3s;
    }

    .benefit-card:hover .benefit-icon {
        transform: scale(1.1);
        background: #e3f2fd;
    }

    .benefit-card h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #003366;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .benefit-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #666;
        line-height: 1.7;
    }

    .destaque-section-wrapper {
        margin: 60px 0;
    }

    .destaque-card {
        background: #1e293b;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        border: 1px solid #334155;
    }

    .destaque-img-container {
        width: 100%;
        height: 400px;
        position: relative;
        overflow: hidden;
    }

    .destaque-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .destaque-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100px;
        background: linear-gradient(to top, #1e293b, transparent);
    }

    .destaque-content {
        padding: 50px 40px;
        text-align: center;
        color: #fff;
    }

    .badge {
        display: inline-block;
        padding: 6px 18px;
        border-radius: 50px;
        background: rgba(37, 99, 235, 0.2);
        color: #60a5fa;
        font-family: 'Roboto', sans-serif;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: 1px solid rgba(37, 99, 235, 0.3);
        margin-bottom: 20px;
    }

    .destaque-content h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #fff;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .destaque-content p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #cbd5e1;
        max-width: 700px;
        margin: 0 auto 30px;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        background: #2563eb;
        color: #fff;
        padding: 16px 45px;
        border-radius: 12px;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        font-size: 1.1em;
        transition: transform 0.3s, background 0.3s, box-shadow 0.3s;
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);
    }

    .btn-primary:hover {
        background: #3b82f6;
        transform: translateY(-2px);
        box-shadow: 0 15px 35px rgba(37, 99, 235, 0.5);
    }

    .destaque-meta {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 25px;
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        color: #94a3b8;
    }

    .destaque-meta span {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .destaque-meta .separator {
        width: 4px;
        height: 4px;
        background: #475569;
        border-radius: 50%;
    }

    .destaques-section {
        margin: 60px 0;
    }

    .destaques-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 25px;
    }

    .destaque-item {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .destaque-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .destaque-item .icon-box {
        width: 55px;
        height: 55px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        font-size: 1.8em;
        transition: transform 0.3s;
    }

    .destaque-item:hover .icon-box {
        transform: scale(1.1);
    }

    .destaque-item .icon-box.amber {
        background: #fef3c7;
    }

    .destaque-item .icon-box.indigo {
        background: #e0e7ff;
    }

    .destaque-item .icon-box.pink {
        background: #fce7f3;
    }

    .destaque-item .icon-box.cyan {
        background: #cffafe;
    }

    .destaque-item h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #003366;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .destaque-item p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #666;
        line-height: 1.7;
    }

    .footer-section {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        border-left: 5px solid #003366;
    }

    .footer-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #003366;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .footer-section h4 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.8em;
        color: #003366;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .footer-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
        margin-bottom: 10px;
    }

    .btn-youtube {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: #dc2626;
        color: #fff;
        padding: 14px 35px;
        border-radius: 10px;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        transition: transform 0.3s, background 0.3s, box-shadow 0.3s;
        box-shadow: 0 10px 25px rgba(220, 38, 38, 0.4);
    }

    .btn-youtube:hover {
        background: #b91c1c;
        transform: translateY(-2px);
        box-shadow: 0 15px 35px rgba(220, 38, 38, 0.5);
    }

    .footer-divider {
        width: 100%;
        height: 1px;
        background: #e0e0e0;
        margin: 40px 0;
    }

    .verse-box {
        background: #fff;
        padding: 35px;
        border-radius: 15px;
        border: 2px solid #e0e0e0;
        max-width: 700px;
        margin: 30px auto 0;
    }

    .verse-box p {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.8em;
        color: #003366;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .verse-box .reference {
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        color: #003366;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    @media (max-width: 768px) {
        .filmes-container {
            padding: 20px 15px;
        }

        .header-section {
            padding: 40px 20px;
        }

        .header-section h1 {
            font-size: 1.6em;
        }

        .header-section .subtitle {
            font-size: 1.1em;
        }

        .section-title {
            font-size: 2em;
        }

        .benefits-grid,
        .destaques-grid {
            grid-template-columns: 1fr;
        }

        .destaque-img-container {
            height: 300px;
        }

        .destaque-content {
            padding: 30px 20px;
        }

        .destaque-content h2 {
            font-size: 2.5em;
        }

        .btn-primary,
        .btn-youtube {
            width: 100%;
        }

        .verse-box p {
            font-size: 1.4em;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/asa/asa_header.png') }}" alt="Filmes e Séries" style="width: 100%;">

<div class="filmes-container">
    <!-- SEÇÃO DE CABEÇALHO -->
    <div class="header-section">
        <h1>
            Filmes e Séries
            <span class="subtitle">Descubra Inspiração Divina na Tela!</span>
        </h1>
        <p>
            Bem-vindo(a) à sua janela espiritual para filmes e séries que celebram histórias bíblicas, valores cristãos e lições de fé!
            Aqui, você encontra produções cuidadosamente selecionadas para edificar sua família, fortalecer sua comunhão com Deus e mergulhar em narrativas que refletem a verdade eterna.
        </p>
    </div>

    <!-- SEÇÃO 1: POR QUE ASSISTIR? -->
    <div class="section-benefits">
        <h2 class="section-title">Por Que Assistir Filmes e Séries Bíblicas?</h2>

        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">❤️</div>
                <h3>Crescimento Espiritual</h3>
                <p>Conecte-se com histórias que inspiram reflexão e renovam sua fé.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">🛡️</div>
                <h3>Para Toda a Família</h3>
                <p>Conteúdo seguro e educativo para crianças, jovens e adultos.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">📖</div>
                <h3>Aprendizado Histórico</h3>
                <p>Explore cenários, costumes e personagens das Escrituras de forma dinâmica.</p>
            </div>
        </div>
    </div>

    <!-- SEÇÃO DE DESTAQUE VERTICAL - O GAROTO DO LENÇO -->
    <div class="destaque-section-wrapper">
        <div class="destaque-card">
            <!-- Imagem no Topo -->
            <div class="destaque-img-container">
                <img id="filme-destaque-img"
                     src="{{ asset('img/garoto_lenco.jpg') }}"
                     alt="Pôster do filme O Garoto do Lenço"
                     onerror="this.src='https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=1200&auto=format&fit=crop'" />
                <div class="destaque-overlay"></div>
            </div>

            <!-- Conteúdo Abaixo -->
            <div class="destaque-content">
                <span class="badge">Filme em Destaque</span>
                <h2>O GAROTO DO LENÇO</h2>
                <p>
                    Uma história poderosa sobre superação, o valor da amizade e o impacto transformador da fé em momentos de desafio. Uma produção emocionante que fala diretamente ao coração.
                </p>

                <a href="https://www.youtube.com/watch?v=BAJGGhU3dzo" target="_blank" rel="noopener noreferrer" class="btn-primary">
                    ▶ Assistir no YouTube
                </a>

                <div class="destaque-meta">
                    <span>📺 Livre para todos os públicos</span>
                    <span class="separator"></span>
                    <span>🎭 Drama / Inspiração</span>
                </div>
            </div>
        </div>
    </div>

    <!-- SEÇÃO 2: DESTAQUES IMPERDÍVEIS -->
    <div class="destaques-section">
        <h2 class="section-title">Destaques Imperdíveis</h2>

        <div class="destaques-grid">
            <div class="destaque-item">
                <div class="icon-box amber">⭐</div>
                <h4>Dramas Épicos</h4>
                <p>Reviva o Êxodo, a jornada de Davi ou a coragem de Ester com produções de alta qualidade!</p>
            </div>

            <div class="destaque-item">
                <div class="icon-box indigo">🎬</div>
                <h4>Documentários</h4>
                <p>Entenda o contexto arqueológico e cultural por trás das passagens bíblicas.</p>
            </div>

            <div class="destaque-item">
                <div class="icon-box pink">👨‍👩‍👧‍👦</div>
                <h4>Animação Infantil</h4>
                <p>Ensine os pequenos sobre amor, obediência e milagres com séries coloridas e divertidas!</p>
            </div>

            <div class="destaque-item">
                <div class="icon-box cyan">📚</div>
                <h4>Estudos Bíblicos</h4>
                <p>Aprofunde-se em temas como profecia, santidade e o plano da salvação.</p>
            </div>
        </div>
    </div>

    <!-- RODAPÉ E MENSAGEM FINAL -->
    <div class="footer-section">
        <h3>Não Perca Nenhum Lançamento!</h3>
        <p>Siga nossas redes sociais e ative as notificações para ser avisado(a) sobre novas produções!</p>
        <a href="https://www.youtube.com/@feliz7play" target="_blank" rel="noopener noreferrer" class="btn-youtube">
            ▶ Inscrever-se no YouTube
        </a>

        <div class="footer-divider"></div>

        <h4>Uma Mensagem Final</h4>
        <p style="font-style: italic; max-width: 650px; margin: 0 auto;">
            Que cada filme ou série assistido aqui seja uma semente plantada em seu coração, frutificando em amor, esperança e comunhão com Deus.
        </p>

        <div class="verse-box">
            <p>"Tudo o que é verdadeiro, tudo o que é respeitável [...] é isso que devem pensar!"</p>
            <p class="reference">— Filipenses 4:8 (NVT)</p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Script para gerenciar a imagem do filme (fallback se a imagem não existir)
    const img = document.getElementById('filme-destaque-img');
    if (img) {
        img.onerror = function() {
            this.src = 'https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=1200&auto=format&fit=crop';
        };
    }
});
</script>
@endpush
