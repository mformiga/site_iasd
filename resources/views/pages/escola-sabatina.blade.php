@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Escola Sabatina')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');

    .escola-sabatina-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .escola-intro {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .escola-intro h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .escola-intro p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        max-width: 900px;
        margin: 0 auto 20px auto;
    }

    .convite-section {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        padding: 70px 50px;
        border-radius: 20px;
        margin: 60px 0;
        text-align: center;
        color: #fff;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 51, 102, 0.3);
    }

    .convite-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: pulse 15s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-10px, -10px) scale(1.1); }
    }

    .convite-content {
        position: relative;
        z-index: 1;
    }

    .convite-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #fff;
        margin-bottom: 25px;
        font-weight: 500;
        text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }

    .convite-icon {
        font-size: 3.5em;
        margin-bottom: 20px;
        display: block;
    }

    .convite-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.9;
        color: #f8f9fa;
        margin-bottom: 25px;
        max-width: 850px;
        margin-left: auto;
        margin-right: auto;
        text-align: justify;
        text-indent: 1.5em;
    }

    .convite-highlight {
        background: rgba(255,255,255,0.15);
        border-left: 4px solid #f1c9a1;
        padding: 20px 25px;
        border-radius: 8px;
        margin-top: 30px;
        backdrop-filter: blur(10px);
    }

    .convite-highlight p {
        font-size: 1.2rem;
        font-weight: 500;
        text-align: center;
        text-indent: 0;
        margin: 0;
        color: #f1c9a1;
    }

    .porque-participar-section {
        margin: 60px 0;
    }

    .porque-participar-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .motivos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .motivo-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .motivo-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .motivo-card .emoji {
        font-size: 3em;
        margin-bottom: 15px;
        display: block;
    }

    .motivo-card h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #003366;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .motivo-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #666;
        line-height: 1.6;
        text-align: center;
        margin: 0;
    }

    .beneficios-section {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        margin: 50px 0;
        border-left: 5px solid #003366;
    }

    .beneficios-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #003366;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .beneficios-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        margin: 0;
    }

    .como-participar-section {
        margin: 60px 0;
    }

    .como-participar-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .passos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .passo-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 25px 20px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .passo-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.12);
    }

    .passo-card .numero {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        margin-bottom: 15px;
        display: block;
    }

    .passo-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #003366;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .passo-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #666;
        line-height: 1.6;
        text-align: center;
        margin: 0;
    }

    .licoes-section {
        margin: 60px 0;
    }

    .licoes-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .conteiner_licoes {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 30px;
        justify-content: center;
    }

    .licao_card {
        background: linear-gradient(135deg, #868a91ff 0%, #003366 100%);
        border-radius: 15px;
        min-height: 180px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .licao_card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.25);
    }

    .licao_card h3 {
        color: #f1c9a1ff;
        font-size: 1.2rem;
        font-family: 'Montserrat', Arial, sans-serif;
        font-weight: 700;
        margin: 0 0 24px 0;
        text-align: center;
        letter-spacing: 1px;
    }

    .licao_card .licao_btn {
        background: #f1c9a1ff;
        color: #222;
        border: none;
        border-radius: 8px;
        padding: 12px 28px;
        font-size: 1rem;
        font-weight: 700;
        font-family: 'Montserrat', Arial, sans-serif;
        margin-bottom: 8px;
        margin-top: 0;
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        transition: background 0.2s, color 0.2s, transform 0.2s;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .licao_card .licao_btn:hover {
        background: #e7ac6dff;
        color: #111;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .citacao-final {
        background: linear-gradient(135deg, #003366 0%, #1b4472 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .citacao-final blockquote {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3rem;
        font-style: italic;
        color: #f8f9fa;
        line-height: 1.8;
        margin: 0;
    }

    .citacao-final cite {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #f1c9a1ff;
        margin-top: 20px;
        display: block;
        font-style: normal;
    }

    @media (max-width: 768px) {
        .escola-sabatina-container {
            padding: 20px 15px;
        }

        .escola-intro {
            padding: 30px 20px;
        }

        .escola-intro h1 {
            font-size: 2.2em;
        }

        .convite-section {
            padding: 40px 25px;
        }

        .convite-section h2 {
            font-size: 2em;
        }

        .convite-icon {
            font-size: 2.5em;
        }

        .convite-section p {
            font-size: 1rem;
            text-indent: 0;
        }

        .convite-highlight {
            padding: 15px 20px;
        }

        .convite-highlight p {
            font-size: 1rem;
        }

        .motivos-grid,
        .passos-grid,
        .conteiner_licoes {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Escola Sabatina" style="width: 100%;">

<div class="escola-sabatina-container">

    <!-- Seção Introdutória -->
    <div class="escola-intro">
        <h1>Escola Sabatina</h1>
        <p>
            A Escola Sabatina é um presente de Deus para você! Não é apenas um momento de estudo, mas um encontro semanal que alimenta a alma, fortalece a fé e nos une como família em Cristo.
        </p>
        <p>
            Se você deseja mergulhar nas riquezas da Bíblia, compartilhar experiências com outras pessoas e descobrir como viver a missão de Deus, este é o seu lugar!
        </p>
    </div>

    <!-- Seção Convite -->
    <div class="convite-section">
        <div class="convite-content">
            <span class="convite-icon">✨</span>
            <h2>Um Convite para Todos!</h2>
            <p>
                Não importa sua idade, cultura ou conhecimento bíblico: a Escola Sabatina tem um espaço para você! Com materiais preparados com carinho, desde as crianças até os adultos são inspirados a refletir a luz de Jesus em cada área da vida.
            </p>
            <p>
                A Escola Sabatina é mais que uma aula—é um instrumento de Deus para preparar seu coração para o Seu reino. Aqui, você se torna parte de uma comunidade que ora, serve e espera unida a volta de Jesus.
            </p>
            <div class="convite-highlight">
                <p>🎯 No próximo sábado, venha fazer parte! Traga sua família, seus amigos e seu coração aberto.</p>
            </div>
        </div>
    </div>

    <!-- Seção Por Que Participar -->
    <div class="porque-participar-section">
        <h2>Por Que Participar?</h2>

        <div class="motivos-grid">
            <div class="motivo-card">
                <span class="emoji">📖</span>
                <h3>Conheça a Deus</h3>
                <p>Cada lição é uma jornada de descoberta das verdades eternas que transformam corações.</p>
            </div>

            <div class="motivo-card">
                <span class="emoji">🤝</span>
                <h3>Viva em Comunhão</h3>
                <p>Compartilhe alegrias, desafios e orações em um ambiente acolhedor e amoroso.</p>
            </div>

            <div class="motivo-card">
                <span class="emoji">🌍</span>
                <h3>Seja um Missionário</h3>
                <p>Aprenda a levar esperança ao mundo, começando pela sua família e comunidade.</p>
            </div>

            <div class="motivo-card">
                <span class="emoji">✨</span>
                <h3>Cresça com Cristo</h3>
                <p>Aplicar a Bíblia no dia a dia fortalece seu relacionamento com Ele e renova seu propósito.</p>
            </div>
        </div>
    </div>

    <!-- Seção Benefícios -->
    <div class="beneficios-section">
        <h3>Benefícios da Escola Sabatina</h3>
        <p>
            A Escola Sabatina oferece benefícios espirituais, emocionais e sociais. Ao participar regularmente, você desenvolve uma fé mais sólida, constrói relacionamentos significativos com outros cristãos e recebe recursos práticos para enfrentar os desafios do dia a dia com uma perspectiva bíblica.
        </p>
    </div>

    <!-- Seção Como Participar -->
    <div class="como-participar-section">
        <h2>Como Participar?</h2>

        <div class="passos-grid">
            <div class="passo-card">
                <span class="numero">1</span>
                <h4>Compareça aos Sábados</h4>
                <p>Junte-se à classe da sua faixa etária e mergulhe na lição.</p>
            </div>

            <div class="passo-card">
                <span class="numero">2</span>
                <h4>Estude em Casa</h4>
                <p>Reserve um momento diário para meditar no estudo da semana.</p>
            </div>

            <div class="passo-card">
                <span class="numero">3</span>
                <h4>Compartilhe</h4>
                <p>Use o que você descobre para encorajar alguém ao seu redor!</p>
            </div>
        </div>
    </div>

    <!-- Seção Lições -->
    <div class="licoes-section">
        <h2>Materiais de Estudo</h2>

        <div class="conteiner_licoes">
            <div class="licao_card">
                <h3>LIÇÃO DA SEMANA</h3>
                <a href="https://www.youtube.com/@adventistascentralbrasilia" target="_blank" class="licao_btn">ASSISTA</a>
            </div>
            <div class="licao_card">
                <h3>LIÇÃO DIGITAL</h3>
                <a href="https://mais.cpb.com.br/licao-adultos/" target="_blank" class="licao_btn">ACESSAR</a>
            </div>
            <div class="licao_card">
                <h3>LIÇÃO FÍSICA</h3>
                <a href="https://cpb.com.br/categoria/7/1444/escola-sabatina/todas-as-licoes" target="_blank" class="licao_btn">ACESSAR</a>
            </div>
            <div class="licao_card">
                <h3>COMENTÁRIOS</h3>
                <a href="https://www.novotempo.com/programa/licoesdabiblia/" target="_blank" class="licao_btn">ACESSAR</a>
            </div>
        </div>
    </div>

    <!-- Citação Final -->
    <div class="citacao-final">
        <blockquote>
            "A Tua palavra é lâmpada para os meus pés e luz para o meu caminho."
        </blockquote>
        <cite>— Salmos 119:105</cite>
    </div>

</div>
@endsection

@push('scripts')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endpush
