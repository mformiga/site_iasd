@extends('layouts.app')

@section('title', 'Boletim Digital - IASD Central de Brasília')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/boletim-digital.css') }}">
@endpush

@php
    $boletimBase = 'img/boletim/boletim_06_06_2026';

    $boletins = [
        // Com descrição (script PDF)
        [
            'type' => 'image',
            'src' => $boletimBase . '/Agasalho.jpg',
            'alt' => 'Campanha do agasalho',
            'title' => 'Campanha do Agasalho',
            'text' => 'A ASA está arrecadando agasalhos, cobertores e roupas de frio em geral. Colabore doando itens limpos e em bom estado de conservação; o que não lhe serve mais será de grande valia para famílias que enfrentam o rigor deste inverno. Deixe sua doação na caixa da ASA, localizada na recepção da igreja.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Bordado.jpg',
            'alt' => 'Curso de bordado ASA',
            'title' => 'Curso de Bordado',
            'text' => 'Oportunidade Imperdível: Curso de Bordado ASA! Venha aprender técnicas exclusivas para confeccionar lindas peças. Aprender a bordar é uma excelente oportunidade para empreender e conquistar uma renda extra. Todos os domingos às 9h. Invista no seu talento e transforme o seu domingo em um momento de aprendizado e crescimento. Esperamos por você!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/PG Feminino.jpeg',
            'alt' => 'Pequeno Grupo Feminino',
            'title' => 'PG Feminino',
            'text' => 'Atenção mulheres! Nesta quinta-feira, dia 11/06, teremos mais um encontro do PG Feminino, um espaço de acolhimento, amizade e fé. Fale com a líder do Ministério da Mulher, Cristiane Barreto, para participar. Nos reunimos a cada 15 dias. Participe conosco!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/reniao_oracao.jpeg',
            'alt' => 'Reunião de oração',
            'title' => 'Reunião de Oração',
            'text' => 'No sábado, 06/06/26, às 16h30, teremos nossa reunião de oração. Temos recebido grandes bênçãos do Senhor. Participe conosco e venha clamar pelo derramamento do Espírito Santo! Nossas reuniões acontecem a cada 15 dias, acompanhe e venha orar conosco.',
        ],
        [
            'type' => 'image',
            'src' => 'img/boletim/calendário doutores.jpeg',
            'alt' => 'Calendário dos Doutores de Esperança',
            'title' => 'Coração do Bem',
            'text' => 'No domingo, 07/06/26, às 9h, na sala dos Doutores de Esperança, teremos nossa oficina do bem, onde voluntários se reúnem para confeccionar corações de feltro que serão distribuídos aos pacientes durante os Plantões dos Doutores de Esperança. Qualquer pessoa pode participar. Venha! Nossa oficina acontece a cada 15 dias, siga nosso calendário e venha ser um voluntário.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Fim de Semana Fam.jpg',
            'alt' => 'Final de Semana da Família 2026',
            'title' => 'Fim de Semana da Família',
            'text' => 'Vem aí o 1º Final de Semana da Família de 2026 na Igreja Adventista Central de Brasília! De 12 a 14/06, receberemos o professor Airton Ramos, terapeuta e conselheiro familiar, para uma série especial de cultos e palestras imperdíveis. No sábado, 13 de junho, às 09h teremos o Culto da Família e, às 15h, teremos palestras imperdíveis para casais e interessados em casar com os temas Comunicação Sem Estresse e Homens versus Mulheres: quem não entende quem? No domingo, dia 14 de junho, às 10h, teremos uma palestra essencial para os pais sobre como Criar Filhos para o Céu em um Mundo Digital. Às 17h, do domingo, haverá uma palestra exclusiva sobre Sexualidade para casais e interessados em casar e, para fechar com chave de ouro, o grande Culto da Família que acontecerá às 19h. Chegue no horário e participe do sorteio de brindes especiais! Teremos a distribuição de presentes para todas as famílias não adventistas. Invista na sua família e participe conosco! Aguardamos vocês!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/SDV.jpg',
            'alt' => 'Pôr do Sol para solteiros, divorciados e viúvos',
            'title' => 'SDV',
            'text' => 'Na sexta-feira, 12 de junho, às 17h46, teremos um Pôr do Sol especial para os solteiros, divorciados e viúvos, em função do Fim de Semana da Família. Para este evento reserve sua vaga pelo telefone que aparece neste anúncio.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Jantar_Namorados.jpg',
            'alt' => 'Jantar dos Namorados',
            'title' => 'Jantar dos Namorados',
            'text' => 'O amor está no ar! Venha celebrar o romance em uma programação gostosa, divertida e com um lindo toque espiritual no nosso tradicional Jantar dos Namorados! Será no sábado, 20 de junho, às 19h30, no Restaurante De\'Vitto Pasta e Pizza, no Lago Sul, com um rodízio incrível de massas, pizzas e risotos. As vagas são limitadas! Não deixe para a última hora, mude a rotina e venha celebrar o amor conosco! Data: 20/JUN (Sábado), às 19h30. Onde: Restaurante De\'Vitto Pasta & Pizza — QI 11, Lago Sul. Valor por casal: R$ 160,00 (bebidas à parte). Pagamento pelo aplicativo 7me (Outras Ofertas → Eventos e Outros → Ministério da Família) ou PIX: pix.centralbsb.aplac@adventistas.org. Inscrições: Gerson Kaiser pelo WhatsApp (61) 98429-0130. Envie o comprovante do depósito e o nome completo do casal.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/heroes.jpg',
            'alt' => 'Série evangelística Heroes',
            'title' => 'Heroes',
            'text' => 'Quem nunca desejou ser um herói e ter o poder de vencer suas próprias batalhas? Na nova série evangelística HEROES, você vai descobrir que os maiores heróis da Bíblia eram pessoas comuns, escolhidas para fazer coisas extraordinárias! Prepare-se para uma jornada emocionante de fé, coragem e transformação através das histórias de Abraão, Ester, Davi e Jesus. O herói que você procura pode ser exatamente quem Deus quer formar dentro de você. Não perca, a série HEROES, todos os domingos de junho, às 19h, aqui na igreja. Traga sua família e participe!',
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
