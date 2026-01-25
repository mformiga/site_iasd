@extends('layouts.app')

@section('title', 'IASD Central de Brasília - CEMAB (Centro Musical Adventista de Brasília)')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');

    .cemab-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .cemab-intro {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .cemab-intro h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .cemab-intro p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        max-width: 900px;
        margin: 0 auto;
    }

    .oquee-section {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        padding: 60px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .oquee-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #fff;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .oquee-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #f8f9fa;
        margin-bottom: 30px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .cursos-section {
        margin: 60px 0;
    }

    .cursos-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .cursos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .curso-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .curso-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .curso-card .emoji {
        font-size: 3.5em;
        margin-bottom: 15px;
        display: block;
    }

    .curso-card h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #003366;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .cursos-info {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        margin: 50px 0;
        border-left: 5px solid #003366;
        text-align: center;
    }

    .cursos-info p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2rem;
        color: #333;
        font-weight: 500;
    }

    .porque-section {
        background: linear-gradient(135deg, #1b4472 0%, #003366 100%);
        padding: 60px 40px;
        border-radius: 15px;
        margin: 50px 0;
        color: #fff;
    }

    .porque-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #fff;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .motivos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .motivo-card {
        background: rgba(255,255,255,0.1);
        border: 2px solid rgba(255,255,255,0.2);
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        backdrop-filter: blur(10px);
    }

    .motivo-card .icon {
        font-size: 2.5em;
        margin-bottom: 15px;
        display: block;
    }

    .motivo-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.05rem;
        line-height: 1.6;
        color: #f8f9fa;
    }

    .eventos-section {
        margin: 60px 0;
    }

    .eventos-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .eventos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .evento-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 25px 20px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .evento-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.12);
    }

    .evento-card .emoji {
        font-size: 3em;
        margin-bottom: 15px;
        display: block;
    }

    .evento-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #003366;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .instagram-section {
        background: linear-gradient(135deg, #833ab4 0%, #fd1d1d 50%, #fcb045 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .instagram-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #fff;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .instagram-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #f8f9fa;
        margin-bottom: 25px;
    }

    .btn-instagram {
        display: inline-block;
        background-color: #fff;
        color: #833ab4;
        padding: 15px 40px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1em;
        transition: transform 0.3s, box-shadow 0.3s;
        font-family: 'Roboto', sans-serif;
    }

    .btn-instagram:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .contato-section {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
    }

    .contato-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #003366;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .contato-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        max-width: 900px;
        margin: 0 auto;
    }

    .contato-item {
        text-align: center;
    }

    .contato-item .icon {
        font-size: 2em;
        margin-bottom: 10px;
        display: block;
    }

    .contato-item h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1em;
        color: #003366;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .contato-item p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #333;
        margin-bottom: 5px;
    }

    .contato-item a {
        color: #003366;
        text-decoration: none;
        font-weight: 600;
    }

    .contato-item a:hover {
        text-decoration: underline;
    }

    .versiculo-section {
        background: linear-gradient(135deg, #003366 0%, #1b4472 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .versiculo-section blockquote {
        font-family: 'Roboto', sans-serif;
        font-size: 1.5rem;
        font-style: italic;
        color: #f8f9fa;
        margin-bottom: 20px;
        line-height: 1.8;
    }

    .versiculo-section cite {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2rem;
        color: #f1c9a1;
        font-weight: 600;
    }

    .site-section {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .site-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #fff;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .site-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #f8f9fa;
        margin-bottom: 25px;
    }

    .btn-site {
        display: inline-block;
        background-color: #fff;
        color: #003366;
        padding: 15px 40px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1em;
        transition: transform 0.3s, box-shadow 0.3s;
        font-family: 'Roboto', sans-serif;
    }

    .btn-site:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    @media (max-width: 768px) {
        .cemab-container {
            padding: 20px 15px;
        }

        .cemab-intro {
            padding: 30px 20px;
        }

        .cemab-intro h1 {
            font-size: 2.2em;
        }

        .oquee-section,
        .porque-section,
        .versiculo-section {
            padding: 40px 20px;
        }

        .oquee-section h2,
        .porque-section h2 {
            font-size: 2em;
        }

        .cursos-grid,
        .eventos-grid,
        .motivos-grid {
            grid-template-columns: 1fr;
        }

        .contato-info {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/cemab/cemab_header.webp') }}" alt="CEMAB (Centro Musical Adventista de Brasília)" style="width: 100%; height: 220px; object-fit: cover;">

<div class="cemab-container">

    <!-- Seção Introdutória -->
    <div class="cemab-intro">
        <h1>CEMAB (Centro Musical Adventista de Brasília)</h1>
        <p>
            O CEMAB é um espaço dedicado ao ensino musical de excelência, integrado aos valores cristãos da Igreja Adventista. Aqui, crianças, jovens e adultos aprendem a expressar sua fé e talentos através de instrumentos, canto e teoria musical, em um ambiente acolhedor e inspirador!
        </p>
        <p>
            Transformando vidas através da música e da fé! No CEMAB, acreditamos que a música é mais que uma arte: é um propósito para servir e adorar a Deus. Com professores qualificados e infraestrutura moderna, oferecemos cursos de canto, piano, violão, cordas e teoria musical para todas as idades e níveis.
        </p>
    </div>

    <!-- Seção Destaque -->
    <div class="oquee-section">
        <h2>🌟 Transformando Vidas Através da Música 🎶</h2>
        <p>
            Venha fazer parte do CEMAB e desenvolver seus talentos musicais em um ambiente cristão e acolhedor!
        </p>
    </div>

    <!-- Seção Cursos Oferecidos -->
    <div class="cursos-section">
        <h2>📚 Cursos Oferecidos</h2>

        <div class="cursos-grid">
            <div class="curso-card">
                <span class="emoji">🎤</span>
                <h3>Canto Popular e Erudito</h3>
            </div>

            <div class="curso-card">
                <span class="emoji">🎹</span>
                <h3>Piano e Teclado</h3>
            </div>

            <div class="curso-card">
                <span class="emoji">🎸</span>
                <h3>Violão/Guitarra</h3>
            </div>

            <div class="curso-card">
                <span class="emoji">🎻</span>
                <h3>Cordas (Violino, Violoncelo)</h3>
            </div>

            <div class="curso-card">
                <span class="emoji">🎵</span>
                <h3>Teoria Musical & Solfejo</h3>
            </div>
        </div>

        <div class="cursos-info">
            <p>Turmas personalizadas para todas as idades e níveis!</p>
        </div>
    </div>

    <!-- Seção Por Que Escolher o CEMAB -->
    <div class="porque-section">
        <h2>🙌 Por Que Escolher o CEMAB?</h2>

        <div class="motivos-grid">
            <div class="motivo-card">
                <span class="icon">✨</span>
                <p>Professores qualificados e comprometidos com o desenvolvimento integral dos alunos.</p>
            </div>

            <div class="motivo-card">
                <span class="icon">✨</span>
                <p>Infraestrutura moderna com instrumentos de alta qualidade.</p>
            </div>

            <div class="motivo-card">
                <span class="icon">✨</span>
                <p>Eventos musicais que conectam a comunidade e glorificam a Deus.</p>
            </div>

            <div class="motivo-card">
                <span class="icon">✨</span>
                <p>Preços acessíveis</p>
            </div>
        </div>
    </div>

    <!-- Seção Eventos e Apresentações -->
    <div class="eventos-section">
        <h2>🗓️ Eventos e Apresentações</h2>
        <p style="text-align: center; font-family: 'Roboto', sans-serif; font-size: 1.1rem; color: #666; margin-bottom: 30px; max-width: 800px; margin-left: auto; margin-right: auto;">
            No CEMAB, a música ganha vida em:
        </p>

        <div class="eventos-grid">
            <div class="evento-card">
                <span class="emoji">🎉</span>
                <h4>Recitais ao final de cada semestre</h4>
            </div>

            <div class="evento-card">
                <span class="emoji">📅</span>
                <h4>Workshops com artistas convidados</h4>
            </div>

            <div class="evento-card">
                <span class="emoji">🕊️</span>
                <h4>Participação em programas da igreja</h4>
            </div>
        </div>
    </div>

    <!-- Seção Instagram -->
    <div class="instagram-section">
        <h3>Siga nosso Instagram @cemab.escolademusica</h3>
        <p>Para ver as datas dos eventos e ficar por dentro das novidades!</p>
        <a href="https://instagram.com/cemab.escolademusica" target="_blank" class="btn-instagram">Seguir no Instagram</a>
    </div>

    <!-- Seção de Contato -->
    <div class="contato-section">
        <h3>📍 Venha nos Conhecer!</h3>

        <div class="contato-info">
            <div class="contato-item">
                <span class="icon">📍</span>
                <h4>Endereço</h4>
                <p>SGAS 611 - Asa Sul, Brasília - DF, 70200-710</p>
            </div>

            <div class="contato-item">
                <span class="icon">📞</span>
                <h4>Telefone</h4>
                <p><a href="tel:+5561996529846">(61) 99652-9846</a></p>
            </div>

            <div class="contato-item">
                <span class="icon">📧</span>
                <h4>E-mail</h4>
                <p><a href="mailto:contato@cemab.com.br">contato@cemab.com.br</a></p>
            </div>

            <div class="contato-item">
                <span class="icon">⏰</span>
                <h4>Horário de Atendimento</h4>
                <p>Segunda a Sexta</p>
                <p>8h às 12h e 14h às 17h</p>
            </div>
        </div>
    </div>

    <!-- Seção Versículo -->
    <div class="versiculo-section">
        <blockquote>"Louvem a Deus com harpa e som de cânticos!"</blockquote>
        <cite>🎵 Salmos 98:5 🎵</cite>
        <p style="margin-top: 30px; font-size: 1.1rem;">
            No CEMAB, a música é mais que uma arte: é um propósito para servir e adorar!
        </p>
    </div>

    <!-- Seção Site -->
    <div class="site-section">
        <h3>💻 Acompanhe nossas novidades</h3>
        <p>Acesse nossa página para saber mais sobre os cursos, eventos e inscrições!</p>
        <a href="https://cemab.vercel.app/" target="_blank" class="btn-site">Acessar Site do CEMAB</a>
    </div>

</div>
@endsection
