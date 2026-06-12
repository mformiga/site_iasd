@extends('layouts.app')

@section('title', 'Boletim Digital - IASD Central de Brasília')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/boletim-digital.css') }}">
@endpush

@php
    $boletimBase = 'img/boletim/boletim_14_06_2026/Imagens para atualização do Boletim SITE';
    $oracao365Base = $boletimBase . '/365 Dias de Oração';
    $heroesBase = $boletimBase . '/HEROES';

    $texto365Dias = 'Continuamos envolvidos no projeto Jornada de Oração: Frutos do Espírito. Ao longo deste mês, vamos orar pedindo a Deus que desenvolva em nossa vida o fruto: PACIÊNCIA. O desafio da TERCEIRA semana de JUNHO é: Ore por paciência nos tempos de espera e diante de problemas que você não pode controlar.';
    $textoHeroes = 'Quem nunca desejou ser um herói e ter o poder de vencer suas próprias batalhas? Na nova série evangelística HEROES, você vai descobrir que os maiores heróis da Bíblia eram pessoas comuns, escolhidas para fazer coisas extraordinárias! Prepare-se para uma jornada emocionante de fé, coragem e transformação através das histórias de Abraão, Ester, Davi e Jesus. O herói que você procura pode ser exatamente quem Deus quer formar dentro de você. Não perca, a série HEROES, todos os domingos de junho, às 19h, aqui na igreja. Traga sua família e participe!';
    $textoJantarNamorados = 'O amor está no ar! Venha celebrar o romance em uma programação gostosa, divertida e com um lindo toque espiritual no nosso tradicional Jantar dos Namorados! Será no Restaurante De\'Vitto Pasta e Pizza, no Lago Sul, com um rodízio incrível de massas, pizzas e risotos. As vagas são limitadas! Não deixe para a última hora, mude a rotina e venha celebrar o amor conosco! Siga os passos para fazer a sua reserva:<br>
📅 Data do evento: 20/JUN (Sábado)<br>
🕡 Horário: às 19h<br>
📍 Onde: Restaurante De\'Vitto Pasta & Pizza - Instagram: @devittopastaepizza<br>
🍕 (Rodízio de Massas, Pizzas e Risotos) - QI 11 - Lago Sul<br>
💰 Valor por casal: R$ 160,00 (bebidas à parte)<br>
💳 Formas de Pagamento:<br>
1️⃣ Pelo aplicativo 7me Vá em Outras Ofertas ➡️ Eventos e Outros ➡️ Ministério da Família<br>
2️⃣ Chave PIX: pix.centralbsb.aplac@adventistas.org<br>
📝 Inscrições: Fale com o Gerson Kaiser pelo WhatsApp: (61) 98429-0130<br>
(Lembre-se de enviar o comprovante do depósito e o nome completo do casal!)';

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
            'src' => $oracao365Base . '/jornada_oracao.jpeg',
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
            'src' => $boletimBase . '/Ceia.jpg',
            'alt' => 'Ceia do Senhor',
            'title' => 'Ceia',
            'text' => 'No dia 4 de julho, no período da manhã, celebraremos a Ceia do Senhor. Que possamos preparar nossos corações para este momento de comunhão.',
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
            'src' => $boletimBase . '/Fim de Semana Fam.jpg',
            'alt' => 'Final de Semana da Família 2026',
            'title' => 'Fim de Semana da Família',
            'text' => '1º Final de Semana da Família de 2026 na Igreja Adventista Central de Brasília. De 12 a 14/06, receberemos o professor Airton Ramos, terapeuta e conselheiro familiar, para uma série especial de cultos e palestras imperdíveis.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/SDV.jpg',
            'alt' => 'Pôr do Sol para solteiros, divorciados e viúvos',
            'title' => 'SDV',
            'text' => 'Na sexta-feira, 12 de junho, às 17h46, teremos um Pôr do Sol especial para os solteiros, divorciados e viúvos, em função do Fim de Semana da Família. Para este evento faça sua inscrição com Emília pelo WhatsApp (61) 98119-9671.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Palestra 13-6- 15h.jpg',
            'alt' => 'Palestras do Fim de Semana da Família — sábado',
            'title' => 'Palestra Sábado FSF',
            'text' => 'No sábado, 13 de junho, às 09h teremos o Culto da Família e, às 15h, teremos palestras imperdíveis para casais e interessados em casar com os temas Comunicação Sem Estresse e Homens versus Mulheres: quem não entende quem?',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Paletra Pais.jpg',
            'alt' => 'Palestra para pais — Fim de Semana da Família',
            'title' => 'Palestra para Pais',
            'text' => 'No domingo, dia 14 de junho, às 10h, teremos uma palestra essencial para os pais sobre como Criar Filhos para o Céu em um Mundo Digital. Participe!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Palestra sexualidade 1 (2).jpg',
            'alt' => 'Palestra de sexualidade e Culto da Família',
            'title' => 'Sexualidade e Culto da Família',
            'text' => 'Às 17h, do domingo, haverá uma palestra exclusiva sobre Sexualidade para casais e interessados em casar e, para fechar com chave de ouro, o grande Culto da Família que acontecerá às 19h. Chegue no horário e participe do sorteio de brindes especiais! Teremos a distribuição de presentes para todas as famílias não adventistas. Invista na sua família e participe conosco! Aguardamos vocês!',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Anúncios 2026 (4).jpg',
            'alt' => 'Jantar dos Namorados',
            'title' => 'Jantar dos Namorados',
            'text' => $textoJantarNamorados,
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Etiquetagem.jpeg',
            'alt' => 'Impacto Esperança 2026 — etiquetagem',
            'title' => 'Etiquetagem',
            'text' => 'O Impacto Esperança 2026 precisa de você! Continuamos nosso mutirão de etiquetagem dos livros missionários todos os sábados, das 15h às 19h, em frente ao Centro White. Venha nos ajudar a preparar esse material evangelístico. Sua dedicação é essencial para o sucesso desta missão. Contamos com sua presença. EXCEPCIONALMENTE NESTE SÁBADO NÃO HAVERÁ ETIQUETAGEM. Retornaremos com os trabalhos no próximo sábado, 20/06/26.',
        ],
        [
            'type' => 'image',
            'src' => $boletimBase . '/Saúde.jpeg',
            'alt' => 'Classe Vida & Saúde',
            'title' => 'Classe de Saúde',
            'text' => 'Participe da Classe Vida & Saúde da Igreja Adventista Central de Brasília, aos sábados, sempre às 11h, e aprenda com profissionais renomados sobre temas vitais e ultra relevantes para o seu bem-estar físico, espiritual, corporal e material, a cada semana uma oportunidade única e gratuita para transformar sua vida por inteiro! Vem com a gente!',
        ],
        [
            'type' => 'image',
            'src' => $heroesBase . '/WhatsApp Image 2026-05-27 at 08.08.06.jpeg',
            'alt' => 'Série evangelística Heroes',
            'title' => 'Heroes',
            'text' => $textoHeroes,
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
