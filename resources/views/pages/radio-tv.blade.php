@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Rádio e TV Novo Tempo')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8fafc;
    }
    .hero-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/cpb/cpb_header.png') }}" alt="Rádio e TV Novo Tempo" style="width: 100%;" onerror="this.src='https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80';">

<!-- Hero Section -->
<header class="hero-gradient text-white py-16 px-4 shadow-lg">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Rádio e TV Novo Tempo</h1>
        <p class="text-xl md:text-2xl font-light opacity-90 italic">
            TV e Rádio Novo Tempo: Conectando Você à Esperança!
        </p>
    </div>
</header>

<main class="max-w-4xl mx-auto px-4 py-12">

    <!-- Introdução -->
    <section class="bg-white rounded-2xl p-8 shadow-sm mb-12 border border-gray-100">
        <p class="text-lg leading-relaxed mb-6">
            Bem-vindo(a) à janela digital da <strong>TV e Rádio Novo Tempo</strong>, um ministério da Igreja Adventista do Sétimo Dia dedicado a levar mensagens de fé, saúde, família e esperança diretamente para o seu coração!
        </p>
        <p class="text-lg leading-relaxed mb-8">
            Aqui, você encontrará programação de qualidade para inspirar seu dia a dia, fortalecer sua espiritualidade e oferecer conteúdo positivo para toda a família. Conheça nossos principais produtos:
        </p>

        <h2 class="text-3xl font-bold text-blue-900 mb-8 border-b-2 border-blue-100 pb-2">O Que Oferecemos?</h2>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- TV Section -->
            <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <span class="bg-blue-600 text-white p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <h3 class="text-2xl font-semibold text-gray-800">TV Novo Tempo</h3>
                </div>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li><strong>Programação 24h:</strong> Conteúdo educativo, devocionais, séries infantis, documentários e estudos bíblicos.</li>
                </ul>
                <p class="text-sm text-gray-500 bg-gray-50 p-4 rounded-md italic">
                    <strong>Como assistir em Brasília:</strong> Disponível em canal aberto na TV (Canal 48.1), streaming ou em nossa plataforma online.
                </p>
                <a href="https://www.novotempo.com/tv/ao-vivo/" target="_blank" class="inline-block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-xl transition duration-300 transform hover:scale-105 shadow-md">
                    Assistir TV Novo Tempo AO VIVO
                </a>
            </div>

            <!-- Radio Section -->
            <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <span class="bg-blue-600 text-white p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                        </svg>
                    </span>
                    <h3 class="text-2xl font-semibold text-gray-800">Rádio Novo Tempo</h3>
                </div>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li><strong>Música e Mensagens:</strong> Programas com mensagens edificantes, notícias inspiradoras e louvores que renovam o ânimo.</li>
                </ul>
                <p class="text-sm text-gray-500 bg-gray-50 p-4 rounded-md italic">
                    <strong>Como ouvir:</strong> Sintonize nossa frequência ou escute online de qualquer lugar!
                </p>
                <a href="https://www.novotempo.com/radio/#onde-ouvir" target="_blank" class="inline-block w-full text-center bg-blue-900 hover:bg-black text-white font-bold py-3 px-6 rounded-xl transition duration-300 transform hover:scale-105 shadow-md">
                    Ouvir Rádio Novo Tempo AO VIVO
                </a>
            </div>

        </div>
    </section>

    <!-- Compartilhe a Esperança -->
    <section class="text-center bg-blue-50 py-12 px-6 rounded-2xl border-2 border-dashed border-blue-200">
        <h2 class="text-3xl font-bold text-blue-900 mb-6 italic">Compartilhe a Esperança!</h2>
        <blockquote class="text-2xl font-light text-blue-800 mb-4 max-w-2xl mx-auto">
            "E este evangelho do reino será pregado em todo o mundo como testemunho a todas as nações."
        </blockquote>
        <cite class="text-blue-600 font-bold text-lg">(Mateus 24:14)</cite>
    </section>

</main>

<footer class="text-center py-8 text-gray-400 text-sm">
    <p>&copy; {{ date('Y') }} Rádio e TV Novo Tempo. Todos os direitos reservados.</p>
    <p>Um ministério da Igreja Adventista do Sétimo Dia.</p>
</footer>
@endsection
