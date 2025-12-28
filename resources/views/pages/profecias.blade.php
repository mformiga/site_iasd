@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Profecias Bíblicas')

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

    /* Botões */
    .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        border: 1px solid transparent;
        font-size: 1rem;
        font-weight: 500;
        border-radius: 0.375rem;
        color: white;
        background-color: #4f46e5;
        transition-duration: 150ms;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    .btn-primary:hover {
        background-color: #4338ca;
    }

    .btn-secondary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        border: 1px solid transparent;
        font-size: 1rem;
        font-weight: 500;
        border-radius: 0.375rem;
        color: #4338ca;
        background-color: #e0e7ff;
        transition-duration: 150ms;
    }
    .btn-secondary:hover {
        background-color: #c7d2fe;
    }

    .btn-purple {
        background-color: #9333ea;
    }
    .btn-purple:hover {
        background-color: #7e22ce;
    }

    .btn-purple-secondary {
        color: #6b21a8;
        background-color: #f3e8ff;
    }
    .btn-purple-secondary:hover {
        background-color: #e9d5ff;
    }

    /* Seção dark */
    .dark-section {
        background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        color: white;
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Profecias Bíblicas" style="width: 100%;">

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-800 to-blue-600 text-white py-8 px-4">
        <div class="container mx-auto max-w-4xl text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Desvende o Futuro: Uma Mensagem de Esperança</h1>
            <p class="text-lg md:text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                Descubra a clareza e a paz que as profecias bíblicas oferecem em meio à incerteza dos nossos tempos.
            </p>
        </div>
        <!-- Decorative bottom fade -->
        <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-gray-50 to-transparent opacity-50"></div>
    </section>

    <!-- Introdução -->
    <section class="py-6 md:py-8 px-4 container mx-auto max-w-4xl">
        <div class="prose prose-lg mx-auto text-gray-600">
            <p class="lead text-xl md:text-2xl text-gray-800 mb-8 font-serif italic border-l-4 border-blue-500 pl-4">
                "Em meio a tanta agitação, você já olhou para o mundo ao seu redor — as notícias, os conflitos, as incertezas — e se perguntou para onde a humanidade está caminhando?"
            </p>
            <p class="mb-4 text-lg">
                Em meio a tantas perguntas, existe uma fonte de clareza e esperança: <strong>a profecia bíblica</strong>.
            </p>
            <p class="text-lg">
                Longe de serem enigmas assustadores, as profecias são a forma como Deus, em Seu imenso amor, nos oferece um mapa para o presente e uma janela para o futuro. Elas nos mostram que, em meio aos acontecimentos históricos, há um plano divinamente orquestrado que culminará no evento mais glorioso de todos: a volta de Jesus Cristo.
            </p>
        </div>
    </section>

    <!-- Por Que Estudar -->
    <section class="bg-white py-6 md:py-8 px-4 shadow-sm">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-6 md:mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Por Que Estudar as Profecias Hoje?</h2>
                <p class="mt-4 text-lg text-gray-500">O estudo das profecias não é para nos causar medo, mas para fortalecer nossa fé e nos encher de esperança.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <!-- Item 1 -->
                <div class="flex items-start p-6 bg-gray-50 rounded-lg hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i data-lucide="shield-check"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Encontrar Paz em Meio ao Caos</h3>
                        <p class="mt-2 text-base text-gray-500">Compreender que Deus está no controle de cada detalhe da história.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex items-start p-6 bg-gray-50 rounded-lg hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i data-lucide="eye"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Entender os Sinais do Nosso Tempo</h3>
                        <p class="mt-2 text-base text-gray-500">Reconhecer os acontecimentos atuais à luz dos escritos sagrados.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex items-start p-6 bg-gray-50 rounded-lg hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i data-lucide="smile"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Preparar-se com Alegria</h3>
                        <p class="mt-2 text-base text-gray-500">Focar no que realmente importa enquanto aguardamos o retorno de nosso Salvador.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="flex items-start p-6 bg-gray-50 rounded-lg hover:shadow-md transition">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            <i data-lucide="heart"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Conhecer Jesus Mais Profundamente</h3>
                        <p class="mt-2 text-base text-gray-500">Ver Cristo como o centro de toda a mensagem profética, do início ao fim.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Guias de Estudo -->
    <section class="py-12 md:py-16 px-4 bg-gray-50">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-8 md:mb-16">
                <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mb-4">Seu Guia Para os Últimos Acontecimentos</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Para ajudar você nesta jornada fascinante de descoberta, preparamos dois guias de estudo incríveis, baseados em dois dos livros proféticos mais importantes da Bíblia: <strong>Daniel</strong> e <strong>Apocalipse</strong>.
                </p>
                <p class="mt-4 text-blue-600 font-medium">Comece sua jornada hoje mesmo, escolhendo a melhor forma para você!</p>
            </div>

            <!-- Daniel Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8 md:mb-12 flex flex-col md:flex-row">
                <div class="md:w-1/3 bg-blue-900 text-white p-6 md:p-8 flex flex-col justify-center items-center text-center">
                    <i data-lucide="book-open" class="w-12 h-12 md:w-16 md:h-16 mb-4 text-blue-300"></i>
                    <h3 class="text-xl md:text-2xl font-bold">As Profecias de Daniel</h3>
                    <p class="text-blue-200 mt-2 text-sm md:text-base">O Fundamento da História</p>
                </div>
                <div class="md:w-2/3 p-6 md:p-8 md:p-10 flex flex-col justify-center">
                    <p class="text-gray-600 mb-6 leading-relaxed text-sm md:text-base">
                        O livro de Daniel é a chave que abre nosso entendimento sobre o plano de Deus através dos séculos. Descubra como Deus revelou o surgimento e a queda de impérios mundiais com séculos de antecedência, estabelecendo um alicerce sólido para compreendermos as profecias do tempo do fim. Este estudo é essencial para quem deseja decifrar o Apocalipse.
                    </p>
                    <div class="space-y-4">
                        <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                            <a href="https://drive.google.com/file/d/1u7cneUzs8Ub9vceKdWf9bh2I9m47TRpc/view?usp=sharing" target="_blank" class="btn-primary w-full sm:w-auto">
                                <i data-lucide="download" class="w-5 h-5 mr-2"></i>
                                Baixar em PDF
                            </a>
                            <span class="text-xs md:text-sm text-gray-500">Tenha acesso imediato ao guia completo.</span>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center pt-2 border-t border-gray-100">
                            <a href="https://cursos.novotempo.com/biblia-facil-daniel/correio/" target="_blank" class="btn-secondary w-full sm:w-auto">
                                <i data-lucide="mail" class="w-5 h-5 mr-2"></i>
                                Receber pelos Correios
                            </a>
                            <span class="text-xs md:text-sm text-gray-500">Material impresso gratuito em sua casa.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Apocalipse Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-1/3 bg-purple-900 text-white p-6 md:p-8 flex flex-col justify-center items-center text-center">
                    <i data-lucide="sun" class="w-12 h-12 md:w-16 md:h-16 mb-4 text-purple-300"></i>
                    <h3 class="text-xl md:text-2xl font-bold">Apocalipse</h3>
                    <p class="text-purple-200 mt-2 text-sm md:text-base">A Revelação da Vitória de Jesus</p>
                </div>
                <div class="md:w-2/3 p-6 md:p-8 md:p-10 flex flex-col justify-center">
                    <p class="text-gray-600 mb-6 leading-relaxed text-sm md:text-base">
                        Longe de ser um livro selado e misterioso, o Apocalipse é a "revelação de Jesus Cristo". Este guia de estudo irá conduzi-lo, capítulo por capítulo, a desvendar os símbolos e a encontrar a mensagem central do livro: a certeza da vitória final de Jesus sobre o mal e a promessa de um novo lar para todos os que O aceitam.
                    </p>
                    <div class="space-y-4">
                        <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                            <a href="https://drive.google.com/file/d/13GLidRAKTLBIWPOb3QU3o7RLzzELlKJv/view?usp=sharing" target="_blank" class="btn-primary btn-purple w-full sm:w-auto">
                                <i data-lucide="download" class="w-5 h-5 mr-2"></i>
                                Baixar em PDF
                            </a>
                            <span class="text-xs md:text-sm text-gray-500">Mergulhe agora mesmo no estudo digital.</span>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center pt-2 border-t border-gray-100">
                            <a href="https://cursos.novotempo.com/apocalipse/correio/" target="_blank" class="btn-secondary btn-purple-secondary w-full sm:w-auto">
                                <i data-lucide="mail" class="w-5 h-5 mr-2"></i>
                                Receber pelos Correios
                            </a>
                            <span class="text-xs md:text-sm text-gray-500">Receba no conforto da sua casa.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Conclusão Call to Action -->
    <section class="dark-section text-white py-12 md:py-20 px-4 text-center relative overflow-hidden">
        <!-- Elemento decorativo de fundo -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 opacity-20">
             <div class="absolute -top-24 -left-24 w-64 h-64 rounded-full bg-blue-500 blur-3xl"></div>
             <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full bg-purple-600 blur-3xl"></div>
        </div>

        <div class="relative z-10 container mx-auto max-w-3xl">
            <h2 class="text-2xl md:text-4xl font-bold mb-6">A Hora é Agora!</h2>
            <p class="text-lg md:text-xl text-blue-100 mb-8 leading-relaxed">
                Não adie a oportunidade de encontrar as respostas que sua alma procura. O estudo da profecia nos aproxima de Jesus e nos dá a segurança de que pertencemos a um Reino que jamais será destruído.
            </p>
            <p class="text-lg md:text-xl font-medium text-white mb-8">
                Estamos aqui para apoiar você em cada passo dessa caminhada de fé.
            </p>
            <div class="inline-block border border-blue-400 rounded-lg p-6 bg-blue-800/50 backdrop-blur-sm">
                <p class="text-lg md:text-xl font-serif italic text-blue-200">
                    "Que a paz e a esperança de um futuro glorioso com Cristo inundem seu coração."
                </p>
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
