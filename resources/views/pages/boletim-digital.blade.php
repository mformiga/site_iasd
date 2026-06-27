@extends('layouts.app')

@section('title', 'Boletim Digital - IASD Central de Brasília')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/boletim-digital.css') }}">
@endpush

@php
    $boletimBase = 'img/boletim/boletim_27_06_2026';
    $oracao365Base = $boletimBase . '/365 Dias de Oração';
    $heroesBase = $boletimBase . '/HEROES';

    $texto365Dias = 'Continuamos envolvidos no projeto Jornada de Oração: Frutos do Espírito. Ao longo deste mês, vamos orar pedindo a Deus que desenvolva em nossa vida o fruto: BENIGNIDADE - GENTILEZA. O desafio da PRIMEIRA semana de JULHO é: Ore para que suas palavras sejam mais suaves, sábias e cheias de graça, mesmo em conversas difíceis.';
    $textoReuniaoOracao = 'Participe da nossa Reunião de Oração. Temos recebido grandes bênçãos do Senhor. Venha clamar pelo derramamento do Espírito Santo! Nossas reuniões acontecem a cada 15 dias, acompanhe e venha orar conosco.';
    $textoHeroes = 'Quem nunca desejou ser um herói e ter o poder de vencer suas próprias batalhas? Na série evangelística HEROES, você vai descobrir que os maiores heróis da Bíblia eram pessoas comuns, escolhidas para fazer coisas extraordinárias! Prepare-se para uma jornada emocionante de fé, coragem e transformação através das histórias de Abraão, Ester, Davi e Jesus. O herói que você procura pode ser exatamente quem Deus quer formar dentro de você. Não perca, a série HEROES, todos os domingos de junho, às 19h, aqui na igreja. Traga sua família e participe!';

    $boletins = [
        // Com descrição (script DOCX)
        [
            'type' => 'image',
            'src' => $boletimBase . '/Culto Permanente.jpg',
            'alt' => 'Culto Permanente',
            'title' => 'Culto Permanente',
            'text' => 'Participe do Culto Permanente coordenado pela Igreja Adventista Central de Brasília. Um momento especial de paz, oração e fortalecimento espiritual para todos. Todo 3º sábado de cada mês, às no Hospital Brasília Lago Sul, Espaço Energia. O convite é aberto a pacientes, familiares, profissionais, colaboradores e toda a comunidade. Participe e venha viver este tempo de esperança!',
        ],
        [
            'type' => 'image',
            'src' => $oracao365Base . '/WhatsApp Image 2026-05-30 at 22.57.53 (2).jpeg',
            'alt' => '365 Dias de Oração — Jornada de Oração',
            'title' => '365 Dias de Oração',
            'text' => $texto365Dias,
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Entre Elas.jpg',
            'alt' => 'Entre Elas — palestra com Dra. Elisabete Ostrowski',
            'title' => 'Entre Elas',
            'text' => 'Atenção, mulheres! Vocês estão convidadas para o nosso próximo encontro do Entre Elas. Nesta edição, receberemos a Dra. Elisabete (Ginecologista), que conduzirá uma conversa fundamental sobre saúde feminina, bem-estar e cuidado integral. O evento acontecerá no Espaço Jovem da Igreja Central de Brasília, no domingo, 5 de julho, às 17h. Venham desfrutar de uma tarde enriquecedora. A presença de cada uma de vocês é essencial para tornar este momento ainda mais especial!',
        ],
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
            'src' => $boletimBase . '/Voluntariado.jpeg',
            'alt' => 'Voluntariado nos ministérios da igreja',
            'title' => 'Voluntariado',
            'text' => 'Seja voluntário em um de nossos ministérios! Acesse o link/QR Code e escolha o departamento da igreja que mais combina com você.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/PG FEm.jpeg',
            'alt' => 'Pequeno Grupo Feminino',
            'title' => 'PG Feminino',
            'text' => 'Atenção mulheres! Temos um encontro especial a cada 15 dias no nosso PG Feminino, um espaço de acolhimento, amizade e fé. Fale com a líder do Ministério da Mulher Cristiane Barreto, para participar. Nos reunimos às quintas-feiras a cada 15 dias. Participe conosco!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/M_Oracoa.jpeg',
            'alt' => 'Reunião de oração',
            'title' => 'Reunião de Oração',
            'text' => $textoReuniaoOracao,
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Ceia (1).jpg',
            'alt' => 'Ceia do Senhor',
            'title' => 'Ceia',
            'text' => 'No dia 4 de julho, a partir das 8h30, celebraremos a Ceia do Senhor. Que possamos preparar nossos corações para este momento de comunhão.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Oficina do Bem.png',
            'alt' => 'Oficina do Bem — Doutores de Esperança',
            'title' => 'Coração do Bem',
            'text' => 'Participe da Oficina do Bem, às 9h, na sala dos Doutores de Esperança. Onde voluntários se reúnem para confeccionar corações de feltro que serão distribuídos aos pacientes durante os Plantões dos Doutores de Esperança. Qualquer pessoa pode participar. Venha! Nossa oficina acontece a cada 15 dias, siga nosso calendário e venha ser um voluntário.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Entrega de livros.jpg',
            'alt' => 'Entrega de livros missionários',
            'title' => 'Entrega de Livros',
            'text' => 'Nós temos uma missão grandiosa e cada um de nós faz a diferença! Chegou a hora de acelerar o passo e incentivar a todos na entrega de dois livros por semana. Não é apenas uma distribuição, é uma entrega intencional, com propósito, oração e foco em alcançar corações. Imagine o impacto de cada página compartilhada na vida de alguém neste momento! Vamos juntos, com dedicação e amor, fazer essa mensagem ir mais longe. Procure a equipe de publicações, retire os seus livros e faça parte desse movimento de esperança!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/WhatsApp Image 2026-06-26 at 20.38.56.jpeg',
            'alt' => 'Classe de Saúde — A importância do descanso',
            'title' => 'Classe de Saúde',
            'text' => '✨ A IMPORTÂNCIA DO DESCANSO ✨<br><br>A ciência nos revela que fomos estruturados sob um ritmo biológico preciso: a luz para o despertar e o labor, e a escuridão para o repouso. Contudo, a Bíblia nos conduz a uma dimensão ainda mais profunda dessa necessidade. O descanso, sob a ótica das Escrituras, transcende o biológico; ele é, em sua essência, uma necessidade espiritual. 📖🙏<br><br>Compreender esse equilíbrio é o primeiro passo para uma vida plena e em sintonia com o propósito divino. Queremos aprofundar esse tema com você!<br><br>📅 Data: Sábado, 27/06<br>🕚 Horário: 11h<br>📍 Local: Classe de Saúde - Igreja Adventista Central de Brasília - SGAS 611 AV. L2 Sul Brasília/DF<br><br>Será um momento muito especial de aprendizado e renovo. Esperamos por você! ✨🙌',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/SGI.jpg',
            'alt' => 'SGI — Sistema de Gerenciamento de Interessados',
            'title' => 'SGI',
            'text' => 'Está no ar o SGI - Sistema de Gerenciamento de Interessados. Querido membro, se você está estudando a Bíblia com alguém, a Igreja Central conta agora com um sistema de cadastro de interessados, o SGI, onde você poderá se cadastrar como Instrutor bíblico e cadastrar seus alunos. Nele você contará com o apoio do Ministério Pessoal e com estudos bíblicos especialmente preparados. Aponte seu celular para o QR CODE que está na tela e faça hoje mesmo o seu cadastro. E se você é visitante: Que bom que você veio! É uma alegria tê-lo conosco. Se você está nos visitando pela primeira vez e gostaria que orássemos por você ou tem interesse em estudar a Bíblia, acesse o nosso site pelo QR CODE que está aparecendo na tela ou procure nossa equipe de recepção, preencha o cartão de visitas que teremos o maior prazer em atendê-lo.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/tela 16_9  capa centro.png',
            'alt' => 'Série Em Defesa da Liberdade',
            'title' => 'Em Defesa da Liberdade',
            'text' => 'Nos domingos de julho, aqui na Igreja Adventista Central de Brasília, sempre às 19h, teremos a série Em Defesa da Liberdade. Participe e traga a sua família!',
        ],
        [
            'type' => 'image',
            'src' => $heroesBase . '/WhatsApp Image 2026-05-27 at 08.08.06.jpeg',
            'alt' => 'Série evangelística Heroes',
            'title' => 'Heroes',
            'text' => $textoHeroes,
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/investidura (1).png',
            'alt' => 'Investidura do Clube de Aventureiros Cruzeiro do Sul',
            'title' => 'Investidura Aventureiros',
            'text' => 'Neste sábado, 27/06/26, às 16h, teremos a honra de realizar a 1ª Cerimônia de Investidura do Clube de Aventureiros Cruzeiro do Sul, um momento especial para celebrar o crescimento de nossas crianças, que receberão as especialidades conquistadas neste semestre, além da entrega das faixas para a classe Abelhinhas; traga sua família e participe conosco desta grande conquista.',
        ],
    ];

    $boletimColumns = [[], []];
    foreach ($boletins as $index => $boletim) {
        $boletimColumns[$index % 2][] = $boletim;
    }
@endphp

@section('content')
<section class="boletim-page">
    <div class="boletim-page__header">
        <span class="boletim-page__eyebrow">Central Informa</span>
        <h1 class="acb-title-serif">Boletim Digital</h1>
        <p>Acompanhe as programações e eventos da IASD Central de Brasília.</p>
    </div>

    <div class="boletim-feed" aria-label="Conteúdos do boletim digital">
        @foreach ($boletimColumns as $columnIndex => $column)
            <div class="boletim-feed__column">
                @foreach ($column as $rowIndex => $boletim)
                    @php($hasCaption = !empty($boletim['title']) || !empty($boletim['text']))
                    <article class="boletim-feed__item{{ $hasCaption ? '' : ' boletim-feed__item--media-only' }}" style="--boletim-order: {{ $rowIndex * 2 + $columnIndex }}">
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
                                    <div class="boletim-feed__text-wrap">
                                        <div class="boletim-feed__text">
                                            <p>{!! $boletim['text'] !!}</p>
                                        </div>
                                        <button type="button" class="boletim-feed__toggle" hidden aria-expanded="false">
                                            <span class="boletim-feed__toggle-label">Mostrar mais</span>
                                            <span class="boletim-feed__toggle-icon" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </article>
                @endforeach
            </div>
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
