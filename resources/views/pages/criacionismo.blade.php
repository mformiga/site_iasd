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

// Removido array $scbResources - usando conteúdo original do HTML
@endphp

@push('styles')
<!-- Tailwind CSS via CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Lucide Icons via CDN -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

<style>
    /* Ajuste suave para rolagem */
    html { scroll-behavior: smooth; }

    /* Fontes personalizadas */
    body {
        font-family: 'Inter', sans-serif;
    }
    h1, h2, h3 {
        font-family: 'Playfair Display', serif;
    }

    /* Card de citação */
    .quote-card {
        border-left: 4px solid #3b82f6;
        background-color: #eff6ff;
        padding: 24px;
        margin: 24px 0;
        font-style: italic;
        color: #1e3a8a;
    }

    /* Seção SCB dark */
    .scb-dark-section {
        background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        color: white;
    }

    .social-link {
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        text-decoration: none;
    }
    .social-link:hover {
        background-color: rgba(255, 255, 255, 0.25);
        transform: scale(1.1);
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Criacionismo e Ciência" style="width: 100%;">

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-800 to-blue-600 text-white py-8 px-4">
        <div class="container mx-auto max-w-4xl text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Criacionismo e Ciência</h1>
            <p class="text-lg md:text-xl text-blue-100 mb-2 leading-relaxed italic">
                A Harmonia entre Fé e Razão
            </p>
            <p class="text-lg md:text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                Aqui, exploramos como a ciência e a Bíblia se complementam, revelando a grandiosidade de um Criador amoroso. Inspirados pela Sociedade Criacionista Brasileira (SCB), destacamos a jornada de cientistas brilhantes que viram na natureza a assinatura divina.
            </p>
        </div>
        <!-- Decorative bottom fade -->
        <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-gray-50 to-transparent opacity-50"></div>
    </section>

    <!-- Scientists Section -->
    <section id="cientistas" class="py-12 container mx-auto px-4">
        @foreach($scientists as $category)
        <div class="mb-12">
            <div class="text-center mb-8">
                <div class="flex items-center justify-center space-x-2 text-blue-600 mb-4">
                    <i data-lucide="{{ $category['icon'] }}" class="w-6 h-6"></i>
                    <h2 class="text-3xl font-bold text-gray-800">{{ $category['title'] }}</h2>
                </div>
            </div>

            @if($category['title'] === 'Isaac Newton: O Cientista que Viu Deus na Matemática')
                <!-- Special layout for Newton -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition border border-gray-100 max-w-5xl mx-auto mb-8">
                    <p class="text-gray-600 mb-8 text-lg leading-relaxed">
                        Isaac Newton, pai da física moderna, é um exemplo inspirador de como fé e ciência coexistem. Ele via o universo como um "livro escrito pelo geômetra supremo":
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        @foreach($category['items'] as $item)
                        <div class="bg-blue-50 p-6 rounded-xl">
                            <h3 class="text-xl font-bold text-blue-800 mb-3">{{ $item['name'] }}</h3>
                            <p class="text-gray-700">{{ $item['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="quote-card">
                        "As Escrituras de Deus são a mais sublime filosofia. Encontro mais autenticidade na Bíblia que em qualquer história secular."
                        <span class="block mt-2 font-bold not-italic text-sm text-blue-700">— Isaac Newton</span>
                    </div>
                </div>
            @else
                <!-- Grid layout for other scientists -->
                <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                    @foreach($category['items'] as $item)
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition border border-gray-100">
                        <h3 class="text-xl font-bold text-blue-800 mb-1">{{ $item['name'] }}</h3>
                        <p class="text-sm text-blue-500 mb-3 font-semibold uppercase tracking-wider">{{ $item['subtitle'] }}</p>
                        <p class="text-gray-600">{{ $item['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
        @endforeach
    </section>

    <!-- SCB Section -->
    <section class="py-1 container mx-auto px-4">
        <div class="bg-blue-900 text-white p-8 md:p-12 rounded-3xl max-w-5xl mx-auto">
            <h2 class="text-3xl mb-6">Conheça a Sociedade Criacionista Brasileira (SCB)!</h2>
            <p class="mb-8 opacity-90 text-lg">A SCB promove o criacionismo com rigor científico e teológico através de diversos recursos:</p>

            <ul class="space-y-4 mb-8 text-gray-100">
                <li class="flex items-start gap-3">
                    <span class="bg-blue-700 p-1 rounded-full mt-1">✓</span>
                    <div><strong>Publicações:</strong> Revistas como a Folha Criacionista e livros como "Evolução: Um Livro Texto Crítico".</div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="bg-blue-700 p-1 rounded-full mt-1">✓</span>
                    <div><strong>Eventos:</strong> Seminários como "A Filosofia das Origens" que conectam fé e ciência.</div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="bg-blue-700 p-1 rounded-full mt-1">✓</span>
                    <div><strong>Recursos Online:</strong> Artigos, vídeos e cursos disponíveis no site oficial.</div>
                </li>
            </ul>

            <div class="flex flex-wrap items-center justify-center sm:justify-start gap-10 mt-10">
                <a href="https://scb.org.br/" target="_blank" class="inline-block bg-white text-blue-900 font-bold py-3 px-8 rounded-full hover:bg-blue-50 transition-colors">
                    Visitar Site da SCB
                </a>

                <div class="flex flex-col items-center gap-3">
                    <span class="text-xs font-medium text-blue-200 uppercase tracking-widest text-center">Siga a SCB nas redes sociais</span>
                    <div class="flex items-center justify-center gap-4">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/scbexperience/" target="_blank" class="social-link" title="Instagram">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://www.youtube.com/channel/UC5OGhGF5w1EkyUDy32RkZzw" target="_blank" class="social-link" title="YouTube">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <!-- Facebook -->
                        <a href="https://web.facebook.com/SociedadeCriacionistaBrasileira/?_rdc=1&_rdr#_" target="_blank" class="social-link" title="Facebook">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conclusão Section -->
    <section class="py-12 container mx-auto px-4">
        <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-blue-900 mb-6 italic">Conclusão</h2>
                <p class="text-gray-700 mb-8 text-lg leading-relaxed">
                    A ciência não é inimiga da fé, mas uma aliada para revelar a majestade de Deus. A complexidade do universo e a precisão das leis naturais nos aproximam ainda mais do Criador.
                </p>

                <div class="bg-blue-900 text-white p-8 rounded-2xl mb-8">
                    <div class="text-2xl font-bold italic mb-4">
                        "Os céus declaram a glória de Deus; o firmamento proclama a obra das suas mãos."
                    </div>
                    <div class="text-sm opacity-80">
                        — Salmo 19:1
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-6 text-sm font-medium">
                    <a href="https://scb.org.br/" target="_blank" rel="noopener noreferrer"
                       class="flex items-center space-x-1 text-blue-600 hover:text-blue-800 transition">
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                        <span>Sociedade Criacionista Brasileira</span>
                    </a>
                    <span class="text-gray-300">|</span>
                    <a href="https://criacionismo.com.br/" target="_blank" rel="noopener noreferrer"
                       class="flex items-center space-x-1 text-blue-600 hover:text-blue-800 transition">
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                        <span>Blog Criacionismo</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Credits -->
    <div class="text-center py-8 text-gray-400 text-xs">
        © Conteúdo extraído do documento Criacionismo.pdf
    </div>
@endsection

@push('scripts')
<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>
@endpush