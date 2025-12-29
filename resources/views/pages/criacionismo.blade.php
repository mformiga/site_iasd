@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Criacionismo e Ciência')

@php
// Definição dos dados dos cientistas em Array PHP para fácil manutenção
$scientists = [
    [
        "title" => "Isaac Newton: O Cientista que Viu Deus na Matemática",
        "icon" => "calculator",
        "items" => [
            ["name" => "Deus como Criador Inteligente", "desc" => "Newton afirmava que as leis da gravidade e do movimento só faziam sentido com um 'agente inteligente' por trás delas. Para ele, a complexidade do cosmos era prova de um Designer Divino."],
            ["name" => "Estudos Bíblicos Profundos", "desc" => "Dedicou mais tempo à teologia do que à ciência! Analisou profecias de Daniel e Apocalipse, buscando decifrar códigos matemáticos nas Escrituras."]
        ]
    ],
    [
        "title" => "Outros Cientistas que acreditavam no Criador",
        "icon" => "users",
        "items" => [
            ["name" => "Galileu Galilei", "subtitle" => "Pai da Astronomia Moderna", "desc" => "Defendia que 'a Bíblia mostra o caminho para o céu, não como o céu funciona', harmonizando ciência e fé. Via a ordem cósmica como obra divina."],
            ["name" => "Johannes Kepler", "subtitle" => "Leis do Movimento Planetário", "desc" => "Acreditava que o universo era um 'reflexo da mente de Deus'. Suas descobertas matemáticas foram motivadas pela busca da harmonia cósmica."],
            ["name" => "Louis Pasteur", "subtitle" => "Pai da Microbiologia", "desc" => "Comprovou que a vida surge de vida preexistente. Declarou: 'Quanto mais estudo a natureza, mais me maravilho com a perfeição do Criador'."],
            ["name" => "Michael Faraday", "subtitle" => "Pioneiro do Eletromagnetismo", "desc" => "Cientista profundamente religioso, via suas descobertas como uma 'exploração das leis divinas'. Ensinava que a ciência e a Bíblia são partes da mesma verdade."]
        ]
    ]
];
@endphp

@push('styles')
<!-- Lucide Icons via CDN -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

<style>
    html { scroll-behavior: smooth; }

    body {
        font-family: 'Inter', sans-serif;
    }

    .criacionismo-container {
        width: 100%;
        max-width: 1200px;
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
        font-family: 'Playfair Display', serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .intro-section .subtitle {
        font-family: 'Playfair Display', serif;
        font-size: 1.5em;
        color: #003366;
        margin-bottom: 20px;
        display: block;
        font-style: italic;
    }

    .intro-section p {
        font-family: 'Inter', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
        max-width: 900px;
        margin: 0 auto;
    }

    .scientist-category {
        margin-bottom: 50px;
    }

    .category-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .category-header .icon-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        margin-bottom: 15px;
    }

    .category-header .icon-wrapper i {
        width: 28px;
        height: 28px;
        color: #003366;
    }

    .category-header h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2em;
        color: #003366;
        font-weight: 700;
    }

    .newton-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 40px;
        max-width: 900px;
        margin: 0 auto;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .newton-intro {
        font-family: 'Inter', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #666;
        margin-bottom: 30px;
    }

    .newton-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        margin-bottom: 30px;
    }

    .newton-item {
        background: #e3f2fd;
        border-radius: 12px;
        padding: 25px;
    }

    .newton-item h3 {
        font-family: 'Inter', sans-serif;
        font-size: 1.2em;
        color: #003366;
        margin-bottom: 12px;
        font-weight: 700;
    }

    .newton-item p {
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: #333;
    }

    .quote-card {
        border-left: 4px solid #003366;
        background: #f8f9fa;
        padding: 25px;
        border-radius: 8px;
        font-style: italic;
        color: #003366;
        font-family: 'Inter', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .quote-card .author {
        display: block;
        margin-top: 15px;
        font-weight: 700;
        font-style: normal;
        font-size: 0.9em;
        color: #003366;
    }

    .scientists-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        max-width: 900px;
        margin: 0 auto;
    }

    .scientist-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .scientist-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .scientist-card h3 {
        font-family: 'Inter', sans-serif;
        font-size: 1.3em;
        color: #003366;
        margin-bottom: 8px;
        font-weight: 700;
    }

    .scientist-card .subtitle {
        font-family: 'Inter', sans-serif;
        font-size: 0.85em;
        color: #003366;
        margin-bottom: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .scientist-card p {
        font-family: 'Inter', sans-serif;
        font-size: 0.95rem;
        line-height: 1.6;
        color: #666;
    }

    .scb-section {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        color: #fff;
        border-radius: 20px;
        padding: 50px 40px;
        max-width: 900px;
        margin: 60px auto;
    }

    .scb-section h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2em;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .scb-section p {
        font-family: 'Inter', sans-serif;
        font-size: 1.1rem;
        opacity: 0.9;
        margin-bottom: 30px;
        line-height: 1.8;
    }

    .scb-list {
        list-style: none;
        padding: 0;
        margin: 0 0 40px 0;
    }

    .scb-list li {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        align-items: flex-start;
    }

    .scb-list li:last-child {
        margin-bottom: 0;
    }

    .scb-list .checkmark {
        width: 24px;
        height: 24px;
        background: #004d99;
        border-radius: 50%;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9em;
        font-weight: bold;
    }

    .scb-list li div {
        flex: 1;
    }

    .scb-list strong {
        color: #fff;
    }

    .scb-actions {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 30px;
    }

    .btn-scb {
        display: inline-block;
        background: #fff;
        color: #003366;
        padding: 14px 35px;
        border-radius: 50px;
        text-decoration: none;
        font-family: 'Inter', sans-serif;
        font-weight: 700;
        transition: background 0.3s;
    }

    .btn-scb:hover {
        background: #f0f0f0;
    }

    .social-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .social-label {
        font-family: 'Inter', sans-serif;
        font-size: 0.8em;
        color: #8bb8e8;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
    }

    .social-links {
        display: flex;
        gap: 15px;
    }

    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        text-decoration: none;
        transition: background 0.3s, transform 0.3s;
    }

    .social-link:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: scale(1.1);
    }

    .social-link svg {
        width: 24px;
        height: 24px;
        fill: currentColor;
    }

    .conclusao-section {
        text-align: center;
        padding: 40px 20px;
    }

    .conclusao-section h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2.5em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 700;
        font-style: italic;
    }

    .conclusao-section > p {
        font-family: 'Inter', sans-serif;
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 40px;
        line-height: 1.8;
    }

    .verse-box {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        color: #fff;
        padding: 40px;
        border-radius: 15px;
        margin-bottom: 40px;
    }

    .verse-text {
        font-family: 'Playfair Display', serif;
        font-size: 1.8em;
        font-weight: 700;
        font-style: italic;
        margin-bottom: 15px;
        line-height: 1.5;
    }

    .verse-ref {
        font-family: 'Inter', sans-serif;
        font-size: 0.9em;
        opacity: 0.8;
    }

    .links-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .link-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #003366;
        text-decoration: none;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 0.95rem;
        transition: color 0.3s;
    }

    .link-item:hover {
        color: #004d99;
    }

    .link-item i {
        width: 16px;
        height: 16px;
    }

    .separator {
        color: #ccc;
    }

    @media (max-width: 768px) {
        .criacionismo-container {
            padding: 20px 15px;
        }

        .intro-section {
            padding: 30px 20px;
        }

        .intro-section h1 {
            font-size: 2.2em;
        }

        .intro-section .subtitle {
            font-size: 1.2em;
        }

        .newton-grid,
        .scientists-grid {
            grid-template-columns: 1fr;
        }

        .scb-section {
            padding: 30px 20px;
        }

        .scb-actions {
            flex-direction: column;
        }

        .conclusao-section h2 {
            font-size: 2em;
        }

        .verse-text {
            font-size: 1.4em;
        }

        .links-section {
            flex-direction: column;
            gap: 15px;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Criacionismo e Ciência" style="width: 100%;">

<div class="criacionismo-container">
    <!-- Seção Introdutória -->
    <div class="intro-section">
        <h1>Criacionismo e Ciência</h1>
        <span class="subtitle">A Harmonia entre Fé e Razão</span>
        <p>
            Aqui, exploramos como a ciência e a Bíblia se complementam, revelando a grandiosidade de um Criador amoroso. Inspirados pela Sociedade Criacionista Brasileira (SCB), destacamos a jornada de cientistas brilhantes que viram na natureza a assinatura divina.
        </p>
    </div>

    <!-- Seção de Cientistas -->
    @foreach($scientists as $category)
    <div class="scientist-category">
        <div class="category-header">
            <div class="icon-wrapper">
                <i data-lucide="{{ $category['icon'] }}"></i>
                <h2>{{ $category['title'] }}</h2>
            </div>
        </div>

        @if($category['title'] === 'Isaac Newton: O Cientista que Viu Deus na Matemática')
            <!-- Layout especial para Newton -->
            <div class="newton-card">
                <p class="newton-intro">
                    Isaac Newton, pai da física moderna, é um exemplo inspirador de como fé e ciência coexistem. Ele via o universo como um "livro escrito pelo geômetra supremo":
                </p>

                <div class="newton-grid">
                    @foreach($category['items'] as $item)
                    <div class="newton-item">
                        <h3>{{ $item['name'] }}</h3>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                    @endforeach
                </div>

                <div class="quote-card">
                    "As Escrituras de Deus são a mais sublime filosofia. Encontro mais autenticidade na Bíblia que em qualquer história secular."
                    <span class="author">— Isaac Newton</span>
                </div>
            </div>
        @else
            <!-- Grid para outros cientistas -->
            <div class="scientists-grid">
                @foreach($category['items'] as $item)
                <div class="scientist-card">
                    <h3>{{ $item['name'] }}</h3>
                    <p class="subtitle">{{ $item['subtitle'] }}</p>
                    <p>{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        @endif
    </div>
    @endforeach

    <!-- Seção SCB -->
    <div class="scb-section">
        <h2>Conheça a Sociedade Criacionista Brasileira (SCB)!</h2>
        <p>A SCB promove o criacionismo com rigor científico e teológico através de diversos recursos:</p>

        <ul class="scb-list">
            <li>
                <span class="checkmark">✓</span>
                <div><strong>Publicações:</strong> Revistas como a Folha Criacionista e livros como "Evolução: Um Livro Texto Crítico".</div>
            </li>
            <li>
                <span class="checkmark">✓</span>
                <div><strong>Eventos:</strong> Seminários como "A Filosofia das Origens" que conectam fé e ciência.</div>
            </li>
            <li>
                <span class="checkmark">✓</span>
                <div><strong>Recursos Online:</strong> Artigos, vídeos e cursos disponíveis no site oficial.</div>
            </li>
        </ul>

        <div class="scb-actions">
            <a href="https://scb.org.br/" target="_blank" class="btn-scb">
                Visitar Site da SCB
            </a>

            <div class="social-section">
                <span class="social-label">Siga a SCB nas redes sociais</span>
                <div class="social-links">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/scbexperience/" target="_blank" class="social-link" title="Instagram">
                        <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <!-- YouTube -->
                    <a href="https://www.youtube.com/channel/UC5OGhGF5w1EkyUDy32RkZzw" target="_blank" class="social-link" title="YouTube">
                        <svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://web.facebook.com/SociedadeCriacionistaBrasileira/?_rdc=1&_rdr#_" target="_blank" class="social-link" title="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de Conclusão -->
    <div class="conclusao-section">
        <h2>Conclusão</h2>
        <p>
            A ciência não é inimiga da fé, mas uma aliada para revelar a majestade de Deus. A complexidade do universo e a precisão das leis naturais nos aproximam ainda mais do Criador.
        </p>

        <div class="verse-box">
            <div class="verse-text">
                "Os céus declaram a glória de Deus; o firmamento proclama a obra das suas mãos."
            </div>
            <div class="verse-ref">— Salmo 19:1</div>
        </div>

        <div class="links-section">
            <a href="https://scb.org.br/" target="_blank" rel="noopener noreferrer" class="link-item">
                <i data-lucide="external-link"></i>
                <span>Sociedade Criacionista Brasileira</span>
            </a>
            <span class="separator">|</span>
            <a href="https://criacionismo.com.br/" target="_blank" rel="noopener noreferrer" class="link-item">
                <i data-lucide="external-link"></i>
                <span>Blog Criacionismo</span>
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    lucide.createIcons();
</script>
@endpush
