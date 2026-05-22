@extends('layouts.app')

@section('title', 'Boletim Digital - IASD Central de Brasília')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/boletim-digital.css') }}">
@endpush

@php
    $boletimBase = 'img/boletim/boletim_23_05_2026';

    $boletins = [
        // Com descrição (script PDF)
        [
            'type' => 'image',
            'src' => $boletimBase . '/oracao.jpeg',
            'alt' => '365 Dias de Oração — motivo de oração',
            'title' => '365 Dias de Oração',
            'text' => 'Continuamos envolvidos no projeto Jornada de Oração: Frutos do Espírito. Ao longo deste mês, vamos orar pedindo a Deus que desenvolva em nossa vida o fruto: PAZ. O desafio da quinta semana de maio é: Ore para ser um instrumento de paz na vida das pessoas.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/pg.jpeg',
            'alt' => 'Pequeno Grupo Feminino',
            'title' => 'PG',
            'text' => 'Convidamos todas as mulheres para mais um encontro do Pequeno Grupo Feminino, que acontecerá na próxima quinta-feira, dia 28/05. Este é um espaço dedicado ao acolhimento, à amizade e ao suporte mútuo entre as mulheres da nossa igreja. Se você deseja integrar essa comunidade de fé, entre em contato com a líder do Ministério da Mulher, Cristiane Barreto, para mais detalhes. Sua presença será uma grande alegria!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/missao.jpeg',
            'alt' => 'Sábado Missionário da Mulher Adventista',
            'title' => 'Sábado Missionário',
            'text' => 'No próximo sábado, temos um encontro marcado para celebrar o Sábado Missionário da Mulher Adventista, reconhecer a força e a dedicação das mulheres na liderança do evangelho. Será uma manhã repleta de testemunhos reais de quem vive a missão intensamente. Venha se inspirar, fortalecer sua fé e participar conosco desta linda celebração. Não perca! Aguardamos vocês a partir das 8h45.',
        ],
        [
            'type' => 'image',
            'src' => 'img/boletim/calendário doutores.jpeg',
            'alt' => 'Calendário dos Doutores de Esperança',
            'title' => 'Coração do Bem',
            'text' => 'Amanhã, dia 24/05, às 9h, acontecerá mais uma Oficina do Bem, na sala dos Doutores de Esperança. Um encontro de afeto e solidariedade, onde voluntários se reúnem para confeccionar corações de feltro que serão distribuídos aos pacientes durante os plantões do projeto Doutores de Esperança. Qualquer pessoa pode participar.',
        ],
        [
            'type' => 'image',
            'src' => 'img/boletim/voluntariado.jpeg',
            'alt' => 'Voluntariado nos ministérios da igreja',
            'title' => 'Voluntariado',
            'text' => 'Seja voluntário em um de nossos ministérios! Acesse o QR Code e escolha o departamento da igreja que mais combina com você.',
        ],
        [
            'type' => 'image',
            'src' => 'img/boletim/impacto esperanca.jpeg',
            'alt' => 'Impacto Esperança 2026',
            'title' => 'Etiquetagem',
            'text' => 'O Impacto Esperança 2026 precisa de você! Continuamos nosso mutirão de etiquetagem dos livros missionários todos os sábados, das 15h às 19h, em frente ao Centro White. Venha nos ajudar a preparar esse material evangelístico. Sua dedicação é essencial para o sucesso desta missão. Contamos com sua presença!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/classe_novo_tempo.jpeg',
            'alt' => 'Classe Novo Tempo — segunda temporada de estudos bíblicos',
            'title' => 'Classe Novo Tempo',
            'text' => 'Hoje, a Classe Novo Tempo inicia a Segunda Temporada de Estudos Bíblicos. A ideia é receber os amigos da Igreja, e você pode convidar pessoas que queiram estudar a Sã Doutrina Bíblica. Os encontros são sempre às 11 h, após o Culto Divino, e os estudos podem, também, ser ministrados de modo online, em caráter individual. Participe e traga amigos!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/enem.jpeg',
            'alt' => '22º Encontro Nacional de Quartetos Masculinos',
            'title' => '22º ENQM',
            'text' => 'No próximo sábado, dia 30/05/26, às 19h30, na Igreja Memorial Batista da 906 Sul. Acontecerá o 22º Encontro Nacional de Quartetos Masculinos – Especial Jader Santos. O evento contará com a presença do Quarteto Arautos do Rei (em sua formação atual e na memorável formação de 1992), além do destaque especial ao nosso querido Quarteto Agnus e a diversos outros grandes quartetos que enriquecerão essa noite. Para encerrar com chave de ouro, um grande coral com mais de 100 vozes unirá a comunidade em louvor; venha prestigiar e celebrar a beleza da música cristã.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/asa_aberta.jpeg',
            'alt' => 'ASA Aberta com pizzas, sucos e lanches',
            'title' => 'ASA Aberta',
            'text' => 'Hoje, após o Seminário de Liberdade Religiosa, a ASA estará aberta para receber você com pizzas e lanches deliciosos a preços acessíveis, em um ambiente acolhedor e descontraído, perfeito para reencontrar amigos e fazer novas conexões. Aproveite!',
        ],
        // Sem descrição — apenas imagem
        [
            'type' => 'image',
            'src' => $boletimBase . '/culto_permanente.jpeg',
            'alt' => 'Culto permanente',
            'title' => null,
            'text' => null,
        ],
        [
            'type' => 'image',
            'src' => 'img/boletim/liberdade religiosa.jpeg',
            'alt' => 'Seminário de Liberdade Religiosa',
            'title' => null,
            'text' => null,
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/saude.jpeg',
            'alt' => 'Ministério de saúde',
            'title' => null,
            'text' => null,
        ],
    ];
@endphp

@section('content')
<section class="boletim-page">
    <div class="boletim-page__header">
        <span class="boletim-page__eyebrow">Central Informa</span>
        <h1 class="acb-title-serif">Boletim Digital</h1>
        <p>Acompanhe as programações e eventos da IASD Central de Brasília.</p>
    </div>

    <div class="boletim-feed" aria-label="Conteúdos do boletim digital">
        @foreach ($boletins as $boletim)
            @php($hasCaption = !empty($boletim['title']) || !empty($boletim['text']))
            <article class="boletim-feed__item{{ $hasCaption ? '' : ' boletim-feed__item--media-only' }}">
                <div class="boletim-feed__media-wrap">
                    @if ($boletim['type'] === 'video')
                        <video class="boletim-feed__media" controls muted playsinline preload="metadata" aria-label="{{ $boletim['alt'] }}">
                            <source src="{{ asset($boletim['src']) }}" type="video/mp4">
                            Seu navegador não suporta a reprodução deste vídeo.
                        </video>
                    @else
                        <button type="button" class="boletim-feed__image-button boletim-lightbox-trigger" data-full="{{ asset($boletim['src']) }}" aria-label="Ampliar {{ $boletim['alt'] }}">
                            <img class="boletim-feed__media" src="{{ asset($boletim['src']) }}" alt="{{ $boletim['alt'] }}" loading="lazy" decoding="async">
                        </button>
                    @endif
                </div>

                @if ($boletim['title'] || $boletim['text'])
                    <div class="boletim-feed__caption">
                        @if ($boletim['title'])
                            <h2>{{ $boletim['title'] }}</h2>
                        @endif
                        @if ($boletim['text'])
                            <p>{{ $boletim['text'] }}</p>
                        @endif
                    </div>
                @endif
            </article>
        @endforeach
    </div>

    <div class="boletim-lightbox" id="boletim-lightbox" aria-hidden="true">
        <button type="button" class="boletim-lightbox__close" aria-label="Fechar">&times;</button>
        <img class="boletim-lightbox__content" id="boletim-lightbox-img" src="" alt="" loading="lazy" decoding="async">
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/boletim-digital.js') }}" defer></script>
@endpush
