@extends('layouts.app')

@section('title', 'Boletim Digital - IASD Central de Brasília')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/boletim-digital.css') }}">
@endpush

@php
    $boletimBase = 'img/boletim/boletim_30_05_2026';

    $boletins = [
        // Com descrição (script DOCX)
        [
            'type' => 'image',
            'src' => $boletimBase . '/culto_permanente.jpeg',
            'alt' => 'Reunião de oração',
            'title' => 'Oração',
            'text' => 'Próximo sábado dia 06/06, às 16h30, teremos nossa reunião de oração. Temos recebido grandes bênçãos do Senhor! Participe conosco e venha clamar pelo derramamento do Espírito Santo!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/agasalho.jpeg',
            'alt' => 'Campanha do agasalho',
            'title' => 'Campanha do Agasalho',
            'text' => 'A ASA está arrecadando agasalhos, cobertores e roupas de frio em geral. Colabore doando itens limpos e em bom estado de conservação; o que não lhe serve mais será de grande valia para famílias que enfrentam o rigor deste inverno. Deixe sua doação na caixa da ASA, localizada na recepção da igreja.',
        ],
        [
            'type' => 'image',
            'src' => 'img/boletim/boletim_23_05_2026/missao.jpeg',
            'alt' => 'Sábado Missionário da Mulher Adventista',
            'title' => 'Sábado Missionário',
            'text' => 'Temos um encontro marcado para celebrar o Sábado Missionário da Mulher Adventista, reconhecer a força e a dedicação das mulheres na liderança do evangelho. Será uma manhã repleta de testemunhos reais de quem vive a missão intensamente. Venha se inspirar, fortalecer sua fé e participar conosco desta linda celebração. Não perca! Aguardamos vocês a partir das 8h45.',
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
            'text' => 'O Impacto Esperança 2026 precisa de você! Continuamos nosso mutirão de etiquetagem dos livros missionários todos os sábados, das 15h às 19h, em frente ao Centro White. Venha nos ajudar a preparar esse material evangelístico. Sua dedicação é essencial para o sucesso desta missão. Contamos com sua presença.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/heroes.jpeg',
            'alt' => 'Série evangelística Heroes',
            'title' => 'Heroes',
            'text' => 'Quem nunca desejou ser um herói e ter o poder de vencer suas próprias batalhas? Na nova série evangelística HEROES, você vai descobrir que os maiores heróis da Bíblia eram pessoas comuns, escolhidas para fazer coisas extraordinárias! Prepare-se para uma jornada emocionante de fé, coragem e transformação através das histórias de Abraão, Ester, Davi e Jesus. Serão quatro domingos que podem transformar completamente a sua história! O herói que você procura pode ser exatamente quem Deus quer formar dentro de você. Não perca, a série HEROES começa no próximo domingo, aqui na igreja. Traga sua família e participe!',
        ],
        [
            'type' => 'image',
            'src' => 'img/boletim/boletim_23_05_2026/enem.jpeg',
            'alt' => '22º Encontro Nacional de Quartetos Masculinos',
            'title' => '22º ENQM',
            'text' => 'Hoje, às 19h30, na Igreja Memorial Batista da 906 Sul. Acontecerá o 22º Encontro Nacional de Quartetos Masculinos – Especial Jader Santos. O evento contará com a presença do Quarteto Arautos do Rei (em sua formação atual e na memorável formação de 1992), além do destaque especial ao nosso querido Quarteto Agnus e a diversos outros grandes quartetos que enriquecerão essa noite. Além um grande coral com mais de 100 vozes. Prestigie este evento.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/arautos.jpeg',
            'alt' => 'Arautos do Rei na Igreja Adventista Central de Brasília',
            'title' => 'Arautos',
            'text' => 'Prepare o seu coração! Os Arautos do Rei estarão conosco na Igreja Adventista Central de Brasília, neste domingo, 30/05, às 19h, para um culto especial de muito louvor, testemunhos e mensagens inspiradoras. Venha ouvir canções clássicas e inéditas que tocam o coração, em uma oportunidade perfeita para adorar a Deus junto com a sua família e amigos. E atenção: teremos surpresas incríveis, por isso chegue cedo para garantir o seu lugar. Aproveite e convide aquela pessoa especial que precisa de uma palavra de esperança.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/convite_jotinha_18h_16_9.png',
            'alt' => 'Convite para o Jotinha às 18h',
            'title' => 'Jotinha',
            'text' => 'Neste sábado, 18h, teremos mais uma edição incrível do Jotinha! Uma programação totalmente feita pelas crianças e para as crianças, preparada com muito carinho para fortalecer a fé, as amizades e o desenvolvimento dos talentos dos nossos pequenos. Neste segundo Jotinha do ano, teremos louvor, conjunto de instrumentos, dinâmicas e muita alegria, e queremos convidar toda a igreja para viver essa experiência conosco! Pais, mães e responsáveis: tragam suas crianças! E você, garotada, convide os seus amiguinhos! Será um momento alegre, acolhedor e cheio da presença de Deus. Não perca: neste sábado, às dezoito horas, aqui na igreja. Esperamos a sua família!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/asa_aberta.jpeg',
            'alt' => 'ASA Aberta com pizzas, sucos e lanches',
            'title' => 'ASA Aberta',
            'text' => 'Hoje, após o Jotinha, a ASA estará aberta para receber você com pizzas e lanches deliciosos a preços acessíveis, em um ambiente acolhedor e descontraído, perfeito para reencontrar amigos e fazer novas conexões. Aproveite!',
        ],
        // Sem descrição — apenas mídia
        [
            'type' => 'video',
            'src' => $boletimBase . '/aventureiros.mp4',
            'alt' => 'Vídeo dos Aventureiros',
            'title' => null,
            'text' => null,
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/classe_saude.jpeg',
            'alt' => 'Classe de saúde',
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
