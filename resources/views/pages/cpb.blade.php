@extends('layouts.app')

@section('title', 'IASD Central de Brasília - CPB Casa Publicadora Brasileira')

@php
// Definição dos dados dos produtos em Array PHP para fácil manutenção
$products = [
    [
        "title" => "Bíblias e Livros Devocionais",
        "icon" => "book-open",
        "items" => [
            ["name" => "Bíblias de Estudo", "desc" => "Como a Bíblia Andrews, perfeita para mergulhar em análises profundas das Escrituras."],
            ["name" => "Livros Inspiradores", "desc" => "Obras de Ellen G. White, como Caminho a Cristo e O Desejado de Todas as Nações."]
        ]
    ],
    [
        "title" => "Revistas e Materiais Educativos",
        "icon" => "book",
        "items" => [
            ["name" => "Revista Adventista e Nosso Amiguinho", "desc" => "Conteúdo para todas as idades, desde crianças até adultos."],
            ["name" => "Lições da Escola Sabatina", "desc" => "Estudos semanais que unem famílias e grupos em torno da Palavra."]
        ]
    ],
    [
        "title" => "Alimentos e Vida Saudável",
        "icon" => "coffee",
        "items" => [
            ["name" => "Livros de Culinária", "desc" => "Receitas nutritivas e vegetarianas para uma vida equilibrada."],
            ["name" => "Publicações sobre Saúde", "desc" => "Dicas práticas baseadas no conceito bíblico de cuidar do corpo."],
            ["name" => "Produtos Naturais", "desc" => "Alimentos integrais que refletem o estilo de vida adventista."]
        ]
    ],
    [
        "title" => "Produtos para a Família",
        "icon" => "users",
        "items" => [
            ["name" => "Guias Práticos", "desc" => "Para educação, saúde e relacionamentos, alinhados aos princípios cristãos."]
        ]
    ]
];

// Prepara o endereço para os links de GPS
$addressString = "Setor Comercial Norte Q 1 Bloco A Edifício Number One, Brasília";
$addressEncoded = urlencode($addressString);
@endphp

@push('styles')
<!-- Lucide Icons via CDN -->
<script src="https://unpkg.com/lucide@latest"></script>

<style>
    html { scroll-behavior: smooth; }

    .cpb-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .cpb-intro {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .cpb-intro h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .cpb-intro p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        max-width: 900px;
        margin: 0 auto;
    }

    .products-section {
        margin: 50px 0;
    }

    .products-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .product-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .product-header {
        display: flex;
        align-items: center;
        gap: 12px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
        margin-bottom: 20px;
    }

    .product-icon {
        width: 50px;
        height: 50px;
        background: #e3f2fd;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #003366;
        flex-shrink: 0;
    }

    .product-title {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #003366;
        font-weight: 600;
    }

    .product-items {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .product-item {
        margin-bottom: 15px;
    }

    .product-item:last-child {
        margin-bottom: 0;
    }

    .product-name {
        font-family: 'Roboto', sans-serif;
        font-size: 1em;
        color: #003366;
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
    }

    .product-desc {
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        color: #666;
        line-height: 1.6;
    }

    .loja-section {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        margin: 50px 0;
    }

    .loja-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #003366;
        margin-bottom: 30px;
        font-weight: 500;
        text-align: center;
    }

    .loja-grid {
        display: flex;
        flex-direction: column;
        gap: 30px;
        align-items: center;
    }

    .loja-img-container {
        width: 100%;
        max-width: 700px;
        height: 350px;
        background: #f0f0f0;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .loja-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .loja-info {
        width: 100%;
        max-width: 700px;
        text-align: center;
    }

    .loja-info h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.5em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 600;
    }

    .info-item {
        margin-bottom: 20px;
    }

    .info-label {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95em;
        color: #003366;
        font-weight: 700;
        display: block;
        margin-bottom: 5px;
    }

    .info-text {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #333;
        line-height: 1.6;
    }

    .gps-buttons {
        display: flex;
        gap: 10px;
        margin-top: 10px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .btn-gps {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #e3f2fd;
        color: #003366;
        padding: 10px 18px;
        border-radius: 8px;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        transition: background 0.3s;
    }

    .btn-gps:hover {
        background: #bbdefb;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 25px 0;
    }

    .contact-item {
        text-align: center;
    }

    .contact-label {
        font-family: 'Roboto', sans-serif;
        font-size: 0.9em;
        color: #003366;
        font-weight: 700;
        display: block;
        margin-bottom: 5px;
    }

    .contact-value {
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        color: #333;
        display: block;
    }

    .contact-value a {
        color: #16a34a;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .contact-value a svg {
        width: 14px;
        height: 14px;
    }

    .btn-shop {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: #16a34a;
        color: #fff;
        padding: 14px 40px;
        border-radius: 10px;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        font-size: 1.1em;
        transition: transform 0.3s, background 0.3s;
    }

    .btn-shop:hover {
        background: #15803d;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .cpb-container {
            padding: 20px 15px;
        }

        .cpb-intro {
            padding: 30px 20px;
        }

        .cpb-intro h1 {
            font-size: 2.2em;
        }

        .products-grid {
            grid-template-columns: 1fr;
        }

        .loja-grid {
            gap: 25px;
        }

        .loja-img-container {
            height: 250px;
        }

        .contact-grid {
            grid-template-columns: 1fr;
        }

        .gps-buttons {
            flex-direction: column;
        }

        .btn-gps {
            width: 100%;
            justify-content: center;
        }

        .btn-shop {
            width: 100%;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/cpb/cpb_header.png') }}" alt="Casa Publicadora Brasileira" style="width: 100%;" onerror="this.src='https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80';">

<div class="cpb-container">
    <!-- Seção Introdutória -->
    <div class="cpb-intro">
        <h1>Casa Publicadora Brasileira</h1>
        <p>
            Bem-vindo(a) à seção da Casa Publicadora Brasileira, um espaço de inspiração e conhecimento para todos que desejam fortalecer a fé, a espiritualidade e os valores cristãos. A CPB é sinônimo de qualidade e compromisso com a mensagem bíblica.
        </p>
    </div>

    <!-- Seção de Produtos -->
    <div class="products-section">
        <h2>Principais Produtos da CPB</h2>

        <div class="products-grid">
            @foreach($products as $category)
            <div class="product-card">
                <div class="product-header">
                    <div class="product-icon">
                        <i data-lucide="{{ $category['icon'] }}"></i>
                    </div>
                    <h3 class="product-title">{{ $category['title'] }}</h3>
                </div>
                <ul class="product-items">
                    @foreach($category['items'] as $item)
                    <li class="product-item">
                        <span class="product-name">{{ $item['name'] }}</span>
                        <span class="product-desc">{{ $item['desc'] }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Seção Loja Física -->
    <div class="loja-section">
        <h2>Visite Nossa Loja em Brasília</h2>

        <div class="loja-grid">
            <!-- Imagem -->
            <div class="loja-img-container">
                <img
                    src="{{ asset('images/loja-cpb.jpg') }}"
                    alt="Loja Física CPB Brasília"
                    onerror="this.src='https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80';"
                >
            </div>

            <!-- Informações -->
            <div class="loja-info">
                <h3>Loja CPB Brasília - DF</h3>

                <div class="info-item">
                    <strong class="info-label">📍 Endereço:</strong>
                    <span class="info-text">
                        Setor Comercial Norte Q 1 Bloco A Edifício Number One 17 e 23<br>
                        Asa Norte, Brasília - DF, 70711-900
                    </span>

                    <div class="gps-buttons">
                        <a href="https://www.waze.com/ul?q=Livraria+CPB+Brasilia"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn-gps">
                            <i data-lucide="navigation"></i>
                            <span>Waze</span>
                        </a>
                        <a href="https://www.google.com/maps/dir/?api=1&destination={{ $addressEncoded }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn-gps">
                            <i data-lucide="map-pin"></i>
                            <span>Google Maps</span>
                        </a>
                    </div>
                </div>

                <div class="contact-grid">
                    <div class="contact-item">
                        <strong class="contact-label">📞 Telefone</strong>
                        <span class="contact-value">(61) 3321-2021</span>
                    </div>

                    <div class="contact-item">
                        <div style="display: flex; align-items: center; justify-content: center; gap: 6px; margin-bottom: 5px;">
                            <svg style="width: 16px; height: 16px; color: #16a34a;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.548 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            <strong class="contact-label" style="margin-bottom: 0;">WhatsApp</strong>
                        </div>
                        <a href="https://wa.me/5561982350008" target="_blank" rel="noopener noreferrer">
                            <span>(61) 98235-0008</span>
                        </a>
                    </div>

                    <div class="contact-item">
                        <strong class="contact-label">🕐 Horário</strong>
                        <span class="contact-value">
                            Seg-Qui: 8h30 às 18h<br>Sex: 8h30 às 16h
                        </span>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 25px;">
                    <a href="https://livrarias.cpb.com.br/brasilia"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="btn-shop">
                        <i data-lucide="shopping-cart"></i>
                        <span>Comprar Online</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    lucide.createIcons();
</script>
@endpush
