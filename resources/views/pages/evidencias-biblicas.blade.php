@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Evidências Bíblicas')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@400;600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #fcfaf7;
        color: #2d2a26;
    }
    h1, h2, h3 {
        font-family: 'Crimson Pro', serif;
    }
    .card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    .mab-banner {
        background: #2d2a26;
        position: relative;
        overflow: hidden;
    }
    .img-container {
        background-color: #3d3a35;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 350px;
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Evidências Bíblicas" style="width: 100%;">

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-800 to-blue-600 text-white py-8 px-4">
        <div class="container mx-auto max-w-4xl text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Evidências Bíblicas</h1>
            <p class="text-lg md:text-xl text-blue-100 mb-2 leading-relaxed italic">
                Arqueologia, História e Fé
            </p>
            <p class="text-lg md:text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                Uma jornada pelas descobertas que confirmam a veracidade das Escrituras Sagradas.
            </p>
        </div>
        <!-- Decorative bottom fade -->
        <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-gray-50 to-transparent opacity-50"></div>
    </section>

    <main class="max-w-4xl mx-auto px-6 py-4">

        <!-- Secção 1: Arqueologia e a Bíblia -->
        <section class="mb-8">
            <h2 class="text-4xl font-bold mb-4 text-stone-800 border-b-2 border-amber-500 pb-2 inline-block">Arqueologia e a Bíblia</h2>
            <p class="text-lg text-stone-600 mb-6 italic leading-relaxed">
                A Bíblia não é apenas um livro de fé, mas também um registro histórico comprovado por descobertas arqueológicas.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="card p-6 border-l-4 border-amber-600">
                    <h3 class="text-2xl font-semibold mb-3">Manuscritos do Mar Morto (1947)</h3>
                    <p class="text-stone-700 leading-relaxed">Encontrados em cavernas próximas ao Mar Morto, incluem cópias de livros do Antigo Testamento datadas de 200 a.C.</p>
                </div>
                <div class="card p-6 border-l-4 border-stone-400">
                    <h3 class="text-2xl font-semibold mb-3">Anel de Pôncio Pilatos (2018)</h3>
                    <p class="text-stone-700 leading-relaxed">Um anel de bronze identificado em Israel associado ao governador que ordenou a crucificação de Jesus.</p>
                </div>
                <div class="card p-6 border-l-4 border-stone-400">
                    <h3 class="text-2xl font-semibold mb-3">Cidade de Zanoa (3.200 anos)</h3>
                    <p class="text-stone-700 leading-relaxed">Escavações revelaram muros e cerâmicas corroborando relatos de cidades israelitas em Josué e Neemias.</p>
                </div>
                <div class="card p-6 border-l-4 border-stone-400">
                    <h3 class="text-2xl font-semibold mb-3">Fosso de Salomão em Jerusalém</h3>
                    <p class="text-stone-700 leading-relaxed">Um fosso monumental datado da Idade do Ferro, alinhando-se com as fortificações descritas em 1 Reis 11:27.</p>
                </div>
            </div>
        </section>

        <!-- Secção 2: Jesus Cristo -->
        <section class="mb-20 bg-stone-800 text-white p-10 rounded-xl shadow-2xl">
            <h2 class="text-4xl font-bold mb-8 text-amber-400">Jesus Cristo: Evidências Históricas</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 text-sm">
                <div>
                    <h3 class="font-semibold text-amber-200 mb-1 uppercase tracking-wider">Confiabilidade dos Evangelhos</h3>
                    <p class="text-stone-300">Relatos escritos por testemunhas oculares que se harmonizam em pontos centrais.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-amber-200 mb-1 uppercase tracking-wider">Fontes Seculares</h3>
                    <p class="text-stone-300">Tácito e Flávio Josefo mencionam Jesus e o impacto do cristianismo primitivo.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-amber-200 mb-1 uppercase tracking-wider">Túmulo Vazio</h3>
                    <p class="text-stone-300">O papel das mulheres como testemunhas reforça a autenticidade do relato histórico.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-amber-200 mb-1 uppercase tracking-wider">Transformação dos Discípulos</h3>
                    <p class="text-stone-300">A coragem e martírio dos apóstolos sugerem uma convicção inabalável.</p>
                </div>
            </div>
        </section>

        <!-- Secção 3: Integridade Textual -->
        <section class="mb-20">
            <h2 class="text-4xl font-bold mb-6 text-stone-800 border-b-2 border-amber-500 pb-2 inline-block">Integridade Textual</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-white rounded-xl shadow-sm border border-stone-100">
                    <div class="text-amber-600 text-4xl font-bold mb-2">1.000+</div>
                    <p class="text-xs font-semibold uppercase mb-2">Anos de Preservação</p>
                    <p class="text-stone-600 text-xs">O texto permaneceu praticamente inalterado.</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-sm border border-stone-100">
                    <div class="text-amber-600 text-4xl font-bold mb-2">40</div>
                    <p class="text-xs font-semibold uppercase mb-2">Autores Diferentes</p>
                    <p class="text-stone-600 text-xs">Mensagem coerente em 3 continentes.</p>
                </div>
                <div class="text-center p-6 bg-white rounded-xl shadow-sm border border-stone-100">
                    <div class="text-amber-600 text-4xl font-bold mb-2">Gezer</div>
                    <p class="text-xs font-semibold uppercase mb-2">Portão de Salomão</p>
                    <p class="text-stone-600 text-xs">Confirmação de projetos monumentais (1 Reis).</p>
                </div>
            </div>
        </section>

        <!-- Secção Explore Mais com o Destaque do MAB -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold mb-8 text-stone-800">Explore e Aprofunde-se:</h2>

            <div class="grid grid-cols-1 gap-8">
                <!-- DESTAQUE ESPECIAL: Museu de Arqueologia Bíblica -->
                <div class="mab-banner rounded-2xl overflow-hidden shadow-2xl border-2 border-amber-600/30">
                    <!-- Imagem em destaque -->
                    <div class="img-container relative">
                        <img src="/images/museu_mab.jpg"
                             alt="Museu de Arqueologia Bíblica"
                             class="w-full h-full object-cover"
                             style="max-height: 400px; width: 100%;"
                             onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'p-16 text-center\'><div class=\'text-6xl mb-4\'>🏛️</div><p class=\'text-amber-200 font-serif italic text-xl\'>Acervo Histórico MAB</p></div>'">
                    </div>

                    <!-- Conteúdo do MAB conectado visualmente à imagem -->
                    <div class="bg-stone-900 text-white p-8 md:p-12">
                        <div class="max-w-4xl mx-auto">
                            <span class="bg-amber-600 text-white text-[10px] uppercase font-bold px-2 py-1 rounded mb-4 inline-block">Destaque Especial</span>
                            <h3 class="text-3xl font-bold mb-4 text-amber-400">Museu de Arqueologia Bíblica (MAB)</h3>
                            <p class="text-stone-300 mb-6 leading-relaxed">
                                Localizado no campus do UNASP (Estado de São Paulo), o MAB é referência na América Latina. Explore artefatos da época de Jesus e réplicas de manuscritos que narram milênios de história bíblica.
                            </p>
                            <a href="http://mab.unasp.edu.br" target="_blank" class="inline-block bg-amber-600 hover:bg-amber-500 text-white font-bold py-3 px-8 rounded-lg transition-all transform hover:scale-105">
                                Conhecer o Museu
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Outros Links -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <a href="https://www.novotempo.com/programa/evidencias/" target="_blank" class="flex items-center p-6 bg-white hover:bg-amber-50 rounded-xl transition border border-stone-200 group">
                        <span class="text-4xl mr-4">📺</span>
                        <div>
                            <h4 class="font-bold group-hover:text-amber-700 transition">Série Evidências</h4>
                            <p class="text-stone-500 text-xs italic">Assista na TV Novo Tempo.</p>
                        </div>
                    </a>
                    <div class="flex items-center p-6 bg-white border border-stone-200 rounded-xl">
                        <span class="text-4xl mr-4">🌍</span>
                        <div>
                            <h4 class="font-bold">Museus Internacionais</h4>
                            <p class="text-stone-500 text-xs italic">Louvre (França) e Museu de Israel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Citação Final -->
        <section class="text-center py-10 border-t border-stone-200">
            <blockquote class="text-xl font-serif italic text-stone-700">
                "Estejam sempre preparados para responder a qualquer que lhes pedir a razão da esperança que há em vocês."
            </blockquote>
            <cite class="text-amber-800 font-bold block mt-2">— 1 Pedro 3:15</cite>
        </section>
    </main>
@endsection