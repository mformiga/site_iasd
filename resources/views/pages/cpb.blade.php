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
<!-- Tailwind CSS via CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Lucide Icons via CDN -->
<script src="https://unpkg.com/lucide@latest"></script>

<style>
    /* Ajuste suave para rolagem */
    html { scroll-behavior: smooth; }
</style>
@endpush

@section('content')

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-800 to-blue-600 text-white py-8 px-4">
        <div class="container mx-auto max-w-4xl text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Casa Publicadora Brasileira</h1>
            <p class="text-lg md:text-xl text-blue-100 mb-2 leading-relaxed">
                Bem-vindo(a) à seção da Casa Publicadora Brasileira, um espaço de inspiração e conhecimento para todos que desejam fortalecer a fé, a espiritualidade e os valores cristãos.
            </p>
        </div>
        <!-- Decorative bottom fade -->
        <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-gray-50 to-transparent opacity-50"></div>
    </section>

    <!-- Products Section -->
    <section id="produtos" class="py-8 container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Principais Produtos da CPB</h2>
            <p class="text-gray-600 max-w-2xl mx-auto whitespace-nowrap">
                A CPB é sinônimo de qualidade e compromisso com a mensagem bíblica. Conheça alguns destaques:
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @foreach($products as $category)
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="flex items-center mb-4 space-x-3 border-b border-gray-100 pb-3">
                    <div class="bg-blue-50 p-2 rounded-lg text-blue-600">
                        <!-- Ícone Dinâmico -->
                        <i data-lucide="{{ $category['icon'] }}" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">{{ $category['title'] }}</h3>
                </div>
                <ul class="space-y-4">
                    @foreach($category['items'] as $item)
                    <li class="flex flex-col">
                        <span class="font-semibold text-blue-700">{{ $item['name'] }}</span>
                        <span class="text-gray-600 text-sm">{{ $item['desc'] }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Physical Store Section -->
    <section id="loja-brasilia" class="bg-white py-8">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <div class="flex items-center justify-center space-x-2 text-blue-600 mb-4">
                    <i data-lucide="map-pin" class="w-6 h-6"></i>
                    <span class="font-bold uppercase tracking-wide">Visite Nossa Loja Física</span>
                </div>

                <h2 class="text-3xl font-bold text-gray-800 mb-4">Brasília - DF</h2>

                <p class="text-gray-600 mb-6 italic max-w-2xl mx-auto">
                    "Que tal levar para casa um pedacinho dessa inspiração? A Loja da CPB em Brasília está de portas abertas para você!"
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- Image Center -->
                <div class="relative h-auto min-h-[400px] bg-gray-200 rounded-xl overflow-hidden shadow-lg mb-8 border-4 border-white">
                    <div class="absolute inset-0 border-2 border-blue-200 rounded-xl pointer-events-none"></div>
                    <img
                        src="{{ asset('images/loja-cpb.jpg') }}"
                        alt="Loja Física CPB Brasília"
                        class="w-full h-full object-cover"
                        style="object-fit: cover; min-height: 400px;"
                    >
                </div>

                <!-- Centralized Information -->
                <div class="bg-blue-50 p-8 rounded-3xl shadow-lg border border-blue-100">
                    <div class="space-y-6 text-gray-700">
                        <div class="bg-gray-50 p-4 rounded-xl border border-gray-100 max-w-2xl mx-auto">
                            <strong class="block text-gray-900 mb-1 text-center">Endereço:</strong>
                            <span class="block mb-3 text-center">
                                Setor Comercial Norte Q 1 Bloco A Edifício Number One 17 e 23<br>
                                Asa Norte, Brasília - DF, 70711-900
                            </span>

                            <!-- Botões de GPS -->
                            <div class="flex flex-wrap gap-2 mt-2 justify-center">
                                <a href="https://www.waze.com/ul?q=Livraria+CPB+Brasilia"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="flex items-center space-x-1 bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-semibold py-2 px-3 rounded-lg transition">
                                    <i data-lucide="navigation" class="w-4 h-4"></i>
                                    <span>Waze</span>
                                </a>
                                <a href="https://www.google.com/maps/dir/?api=1&destination={{ $addressEncoded }}"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="flex items-center space-x-1 bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-semibold py-2 px-3 rounded-lg transition">
                                    <i data-lucide="map-pin" class="w-4 h-4"></i>
                                    <span>Google Maps</span>
                                </a>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="max-w-2xl mx-auto">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Telefone Fixo -->
                                <div class="text-center">
                                    <strong class="block text-gray-900">Telefone:</strong>
                                    <span class="block text-blue-600 font-semibold">(61) 3321-2021</span>
                                </div>

                                <!-- WhatsApp -->
                                <div class="text-center">
                                    <strong class="block text-gray-900">WhatsApp:</strong>
                                    <a href="https://wa.me/5561982350008"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="inline-flex items-center space-x-2 text-green-600 font-semibold hover:text-green-700 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.548 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                        <span>(61) 98235-0008</span>
                                    </a>
                                </div>

                                <!-- Horário de Funcionamento -->
                                <div class="text-center">
                                    <strong class="block text-gray-900">Horário:</strong>
                                    <span class="block text-gray-700 text-sm">
                                        Segunda a Quinta: 08:30h às 18h<br>
                                        Sexta: 08:30h às 16h
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Centralized Button -->
                    <div class="mt-8 text-center">
                        <a href="https://livrarias.cpb.com.br/brasilia"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex items-center space-x-2 bg-green-600 hover:bg-green-700 text-white py-3 px-8 rounded-lg font-bold transition">
                            <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                            <span>Comprar Online</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>
@endpush