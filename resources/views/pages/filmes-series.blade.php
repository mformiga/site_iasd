@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Filmes e Séries')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@400;600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>

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
    .filme-banner {
        background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #1e293b 100%);
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
<!-- Banner Principal - Mesmo banner da página de dízimos e ofertas -->
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Filmes e Séries" style="width: 100%;"
     onerror="this.src='https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&w=1920&auto=format&fit=crop';"

<!-- SEÇÃO DE CABEÇALHO -->
<header class="filme-banner text-white py-8 px-6 text-center shadow-xl">
    <div class="max-w-4xl mx-auto space-y-4">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight leading-tight">
            Filmes e Séries
            <span class="block text-blue-300 mt-2 text-2xl md:text-4xl font-light">Descubra Inspiração Divina na Tela!</span>
        </h1>
        <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto leading-relaxed">
            Bem-vindo(a) à sua janela espiritual para filmes e séries que celebram histórias bíblicas, valores cristãos e lições de fé!
            Aqui, você encontra produções cuidadosamente selecionadas para edificar sua família, fortalecer sua comunhão com Deus e mergulhar em narrativas que refletem a verdade eterna.
        </p>
    </div>
</header>

<!-- SEÇÃO 1: POR QUE ASSISTIR? -->
<section class="py-12 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center space-x-3 mb-8">
            <div class="h-1 w-10 bg-blue-600 rounded-full"></div>
            <h2 class="text-3xl font-bold text-slate-900">Por Que Assistir Filmes e Séries Bíblicas?</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card p-8 flex flex-col items-center text-center group">
                <div class="p-4 bg-slate-50 rounded-2xl mb-4 group-hover:bg-blue-50 group-hover:scale-110 transition-all">
                    <i data-lucide="heart" class="w-8 h-8 text-rose-500"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Crescimento Espiritual</h3>
                <p class="text-slate-600 leading-relaxed">Conecte-se com histórias que inspiram reflexão e renovam sua fé.</p>
            </div>

            <div class="card p-8 flex flex-col items-center text-center group">
                <div class="p-4 bg-slate-50 rounded-2xl mb-4 group-hover:bg-blue-50 group-hover:scale-110 transition-all">
                    <i data-lucide="shield" class="w-8 h-8 text-blue-500"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Para Toda a Família</h3>
                <p class="text-slate-600 leading-relaxed">Conteúdo seguro e educativo para crianças, jovens e adultos.</p>
            </div>

            <div class="card p-8 flex flex-col items-center text-center group">
                <div class="p-4 bg-slate-50 rounded-2xl mb-4 group-hover:bg-blue-50 group-hover:scale-110 transition-all">
                    <i data-lucide="book-open" class="w-8 h-8 text-emerald-500"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Aprendizado Histórico</h3>
                <p class="text-slate-600 leading-relaxed">Explore cenários, costumes e personagens das Escrituras de forma dinâmica.</p>
            </div>
        </div>
    </div>
</section>

<!-- SEÇÃO DE DESTAQUE VERTICAL - O GAROTO DO LENÇO -->
<section class="py-8 px-6 bg-slate-900 text-white overflow-hidden">
    <div class="max-w-4xl mx-auto">
        <div class="bg-slate-800 rounded-3xl overflow-hidden shadow-2xl border border-slate-700 flex flex-col">

            <!-- Imagem no Topo -->
            <div class="w-full h-[300px] md:h-[500px] relative">
                <img id="filme-destaque-img"
                     src="{{ asset('img/garoto_lenco.jpg') }}"
                     alt="Pôster do filme O Garoto do Lenço"
                     class="w-full h-full object-cover object-center"
                     onerror="this.src='https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=1200&auto=format&fit=crop'">
                <!-- Overlay suave na parte inferior da imagem -->
                <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-slate-800 to-transparent"></div>
            </div>

            <!-- Conteúdo Abaixo -->
            <div class="p-8 md:p-12 space-y-6 text-center">
                <div class="inline-block py-1 px-4 rounded-full bg-blue-600/20 text-blue-400 text-xs font-bold tracking-widest uppercase border border-blue-600/30">
                    Filme em Destaque
                </div>
                <h2 class="text-4xl md:text-5xl font-black tracking-tighter leading-tight">
                    O GAROTO DO LENÇO
                </h2>
                <p class="text-slate-300 text-lg leading-relaxed font-light max-w-2xl mx-auto">
                    Uma história poderosa sobre superação, o valor da amizade e o impacto transformador da fé em momentos de desafio. Uma produção emocionante que fala diretamente ao coração.
                </p>

                <div class="pt-4 flex justify-center">
                    <a href="https://www.youtube.com/watch?v=BAJGGhU3dzo" target="_blank" rel="noopener noreferrer"
                       class="bg-blue-600 hover:bg-blue-500 text-white px-12 py-4 rounded-xl font-bold transition flex items-center gap-3 group shadow-xl shadow-blue-900/40 w-full md:w-auto justify-center">
                        <i data-lucide="play" class="w-5 h-5 fill-current"></i>
                        Assistir no YouTube
                    </a>
                </div>

                <div class="pt-4 flex justify-center items-center gap-4 text-slate-400 text-sm">
                    <span>Livre para todos os públicos</span>
                    <span class="w-1 h-1 bg-slate-600 rounded-full"></span>
                    <span>Drama / Inspiração</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SEÇÃO 2: DESTAQUES IMPERDÍVEIS -->
<section class="py-12 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center space-x-3 mb-8 justify-center md:justify-start">
            <h2 class="text-3xl font-bold text-slate-900">Destaques Imperdíveis</h2>
            <div class="h-1 w-10 bg-amber-500 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="card p-6 group">
                <div class="w-12 h-12 bg-amber-100 text-amber-800 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i data-lucide="star" class="w-6 h-6"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-800 mb-2">Dramas Épicos</h4>
                <p class="text-sm text-slate-600 leading-relaxed">Reviva o Êxodo, a jornada de Davi ou a coragem de Ester com produções de alta qualidade!</p>
            </div>

            <div class="card p-6 group">
                <div class="w-12 h-12 bg-indigo-100 text-indigo-800 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i data-lucide="video" class="w-6 h-6"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-800 mb-2">Documentários</h4>
                <p class="text-sm text-slate-600 leading-relaxed">Entenda o contexto arqueológico e cultural por trás das passagens bíblicas.</p>
            </div>

            <div class="card p-6 group">
                <div class="w-12 h-12 bg-pink-100 text-pink-800 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i data-lucide="users" class="w-6 h-6"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-800 mb-2">Animação Infantil</h4>
                <p class="text-sm text-slate-600 leading-relaxed">Ensine os pequenos sobre amor, obediência e milagres com séries coloridas e divertidas!</p>
            </div>

            <div class="card p-6 group">
                <div class="w-12 h-12 bg-cyan-100 text-cyan-800 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i data-lucide="book-open" class="w-6 h-6"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-800 mb-2">Estudos Bíblicos</h4>
                <p class="text-sm text-slate-600 leading-relaxed">Aprofunde-se em temas como profecia, santidade e o plano da salvação.</p>
            </div>
        </div>
    </div>
</section>

<!-- RODAPÉ E MENSAGEM FINAL -->
<footer class="bg-slate-900 text-slate-300 py-12 px-6 border-t border-slate-800">
    <div class="max-w-4xl mx-auto text-center space-y-10">

        <div class="space-y-4">
            <h3 class="text-2xl font-semibold text-white">Não Perca Nenhum Lançamento!</h3>
            <p class="text-slate-400">Siga nossas redes sociais e ative as notificações para ser avisado(a) sobre novas produções!</p>
            <a href="https://www.youtube.com/@feliz7play" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-bold transition shadow-lg shadow-red-900/40">
                <i data-lucide="youtube" class="w-5 h-5"></i>
                Inscrever-se no YouTube
            </a>
        </div>

        <div class="w-full h-px bg-slate-800"></div>

        <div class="space-y-6">
            <h4 class="text-xl font-medium text-white">Uma Mensagem Final</h4>
            <p class="italic text-lg text-slate-400 max-w-2xl mx-auto">
                Que cada filme ou série assistido aqui seja uma semente plantada em seu coração, frutificando em amor, esperança e comunhão com Deus.
            </p>

            <div class="mt-8 bg-slate-800/40 p-8 rounded-2xl border border-slate-700 inline-block backdrop-blur-sm">
                <p class="font-serif text-xl md:text-3xl text-blue-200">
                    "Tudo o que é verdadeiro, tudo o que é respeitável [...] é isso que devem pensar!"
                </p>
                <p class="mt-4 text-sm font-bold text-blue-400 tracking-widest uppercase">
                    — Filipenses 4:8 (NVT)
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection

@push('scripts')
<script>
    // Inicializa os ícones Lucide
    lucide.createIcons();

    // Script para gerenciar a imagem do filme (fallback se a imagem não existir)
    document.addEventListener('DOMContentLoaded', function() {
        const img = document.getElementById('filme-destaque-img');
        if (img) {
            img.onerror = function() {
                this.src = 'https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=1200&auto=format&fit=crop';
            };
        }
    });
</script>
@endpush