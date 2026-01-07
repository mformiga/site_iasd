@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Dízimos e Ofertas')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');

    .dizimos-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .dizimos-intro {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .dizimos-intro h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .dizimos-intro p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        max-width: 900px;
        margin: 0 auto 20px;
    }

    .dizimo-section {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        padding: 60px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .dizimo-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #fff;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .dizimo-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #f8f9fa;
        margin-bottom: 30px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .dizimo-section blockquote {
        background: rgba(255,255,255,0.1);
        border-left: 4px solid #fff;
        padding: 20px 30px;
        margin: 30px auto;
        max-width: 800px;
        text-align: center;
        font-style: italic;
        font-size: 1.2rem;
    }

    .dizimo-section .referencia {
        display: block;
        margin-top: 15px;
        font-weight: 600;
    }

    .ofertas-section {
        background: #f8f9fa;
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        border-left: 5px solid #003366;
    }

    .ofertas-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        margin-bottom: 30px;
        font-weight: 500;
        text-align: center;
    }

    .ofertas-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.8em;
        color: #003366;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .ofertas-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
        margin-bottom: 20px;
    }

    .ofertas-section blockquote {
        background: #fff;
        border-left: 4px solid #003366;
        padding: 20px 30px;
        margin: 30px 0;
        font-style: italic;
        font-size: 1.1rem;
    }

    .beneficios-section {
        margin: 60px 0;
    }

    .beneficios-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .beneficios-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .beneficio-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 35px 25px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .beneficio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .beneficio-card .emoji {
        font-size: 3em;
        margin-bottom: 20px;
        display: block;
    }

    .beneficio-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #003366;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .beneficio-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
    }

    .como-contribuir-section {
        margin: 60px 0;
    }

    .como-contribuir-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .formas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .forma-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 30px 25px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .forma-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.12);
    }

    .forma-card .icon {
        font-size: 2.5em;
        margin-bottom: 15px;
        display: block;
    }

    .forma-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #003366;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .forma-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #666;
        line-height: 1.6;
    }

    .forma-card a {
        color: #003366;
        text-decoration: none;
        font-weight: 600;
    }

    .forma-card a:hover {
        text-decoration: underline;
    }

    .btn-contribuir {
        display: block;
        text-align: center;
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        color: #fff;
        padding: 18px 50px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.2em;
        margin: 40px auto;
        max-width: 400px;
        transition: transform 0.3s, box-shadow 0.3s;
        font-family: 'Roboto', sans-serif;
    }

    .btn-contribuir:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    .transparencia-section {
        background: linear-gradient(135deg, #003366 0%, #1b4472 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .transparencia-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #fff;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .transparencia-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #f8f9fa;
        max-width: 900px;
        margin: 0 auto;
    }

    .reflexao-section {
        background: #f8f9fa;
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
    }

    .reflexao-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.2em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .reflexao-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
        margin-bottom: 25px;
    }

    .reflexao-section blockquote {
        background: #fff;
        border-left: 5px solid #003366;
        padding: 25px 35px;
        margin: 30px auto;
        max-width: 800px;
        font-style: italic;
        font-size: 1.15rem;
        color: #003366;
    }

    .reflexao-section .referencia {
        display: block;
        margin-top: 15px;
        font-weight: 600;
    }

    .contato-section {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        padding: 45px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .contato-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #fff;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .contato-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #f8f9fa;
        margin-bottom: 15px;
    }

    .testemunhos-section {
        margin: 60px 0;
    }

    .testemunhos-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .video-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .video-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
    }

    .video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .video-thumbnail {
        width: 100%;
        aspect-ratio: 16/9;
        object-fit: cover;
        display: block;
    }

    .video-play-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: rgba(0, 51, 102, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        pointer-events: none;
    }

    .video-play-overlay::after {
        content: '';
        width: 0;
        height: 0;
        border-left: 25px solid #fff;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        margin-left: 5px;
    }

    .video-info {
        padding: 25px 30px;
    }

    .video-info h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3rem;
        color: #003366;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .video-info p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #666;
        line-height: 1.6;
    }

    .thumbnail-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 16/9;
        background: #f0f0f0;
    }

    .loading-spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #003366;
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
    }

    @media (max-width: 768px) {
        .dizimos-container {
            padding: 20px 15px;
        }

        .dizimos-intro {
            padding: 30px 20px;
        }

        .dizimos-intro h1 {
            font-size: 2.2em;
        }

        .dizimo-section,
        .transparencia-section,
        .contato-section {
            padding: 40px 20px;
        }

        .dizimo-section h2 {
            font-size: 2em;
        }

        .beneficios-grid,
        .formas-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Dízimos e Ofertas" style="width: 100%;">

<div class="dizimos-container">

    <!-- Seção Introdutória -->
    <div class="dizimos-intro">
        <h1>Dízimos e Ofertas: Adoração, Fidelidade e Parceria com Deus</h1>
        <p>
            Compreender e praticar a devolução dos dízimos e a entrega das ofertas é uma parte fundamental da jornada de fé e adoração para nós, Adventistas do Sétimo Dia. Mais do que uma obrigação, vemos esses atos como uma resposta de amor, gratidão e reconhecimento de que tudo o que temos pertence a Deus.
        </p>
        <p>
            É uma forma de nos associarmos a Ele em Sua missão de espalhar o Evangelho e cuidar das necessidades do mundo, sendo fiéis mordomos dos recursos que Ele nos confia.
        </p>
    </div>

    <!-- Seção Dízimo -->
    <div class="dizimo-section">
        <h2>O que é o Dízimo?</h2>
        <p>
            A palavra "dízimo" significa literalmente "a décima parte". Biblicamente, refere-se à devolução de 10% de toda a nossa renda a Deus. Não é um pagamento, mas um ato de reconhecimento de que Ele é o Dono e Provedor de tudo.
        </p>
        <p>
            O princípio do dízimo é anterior à lei mosaica, praticado por patriarcas como Abraão (Gênesis 14:20) e Jacó (Gênesis 28:22). Foi formalizado na lei de Israel (Levítico 27:30, Números 18:21) e reafirmado por Jesus (Mateus 23:23).
        </p>
        <p>
            <strong>Propósito:</strong> O dízimo é primariamente destinado ao sustento do ministério evangélico – pastores, obreiros bíblicos e missionários – permitindo a pregação do evangelho em todo o mundo.
        </p>
        <blockquote>
            "Trazei todos os dízimos à casa do tesouro, para que haja mantimento na minha casa; e provai-me nisto, diz o Senhor dos Exércitos, se eu não vos abrir as janelas do céu e não derramar sobre vós bênção sem medida."
            <span class="referencia">— Malaquias 3:10</span>
        </blockquote>
    </div>

    <!-- Seção Ofertas -->
    <div class="ofertas-section">
        <h2>O que são as Ofertas?</h2>
        <p>
            Diferente do dízimo (que é 10%), as ofertas são contribuições voluntárias, dadas de coração, além do dízimo. Elas representam nossa gratidão pelas bênçãos de Deus e nosso desejo de apoiar causas específicas da igreja e necessidades humanitárias.
        </p>

        <h3>Destino das Ofertas</h3>
        <ul style="list-style: none; padding: 0;">
            <li style="margin-bottom: 12px; padding-left: 25px; position: relative;">
                <span style="position: absolute; left: 0; color: #003366; font-weight: bold;">✓</span>
                Necessidades da igreja local (manutenção, materiais, ministérios)
            </li>
            <li style="margin-bottom: 12px; padding-left: 25px; position: relative;">
                <span style="position: absolute; left: 0; color: #003366; font-weight: bold;">✓</span>
                Projetos missionários específicos (nacionais e internacionais)
            </li>
            <li style="margin-bottom: 12px; padding-left: 25px; position: relative;">
                <span style="position: absolute; left: 0; color: #003366; font-weight: bold;">✓</span>
                Ação social e ajuda humanitária (<a href="https://adra.org.br/" target="_blank" style="color: #003366; font-weight: 600;">ADRA</a>, <a href="https://adventistascentralbrasilia.org/asa" target="_blank" style="color: #003366; font-weight: 600;">ASA</a>)
            </li>
            <li style="margin-bottom: 12px; padding-left: 25px; position: relative;">
                <span style="position: absolute; left: 0; color: #003366; font-weight: bold;">✓</span>
                Construção e reforma de templos e escolas
            </li>
            <li style="padding-left: 25px; position: relative;">
                <span style="position: absolute; left: 0; color: #003366; font-weight: bold;">✓</span>
                Outros projetos especiais definidos pela comunidade
            </li>
        </ul>

        <blockquote>
            "Cada um contribua segundo tiver proposto no coração, não com tristeza ou por necessidade; porque Deus ama a quem dá com alegria."
            <span class="referencia" style="display: block; margin-top: 10px; font-weight: 600; color: #003366;">— 2 Coríntios 9:7</span>
        </blockquote>
    </div>

    <!-- Seção Benefícios -->
    <div class="beneficios-section">
        <h2>Por que Devolver o Dízimo e Ofertar?</h2>

        <div class="beneficios-grid">
            <div class="beneficio-card">
                <span class="emoji">🙏</span>
                <h4>Ato de Adoração</h4>
                <p>Dar é uma forma tangível de adorar a Deus, reconhecendo Sua grandeza e bondade em nossa vida.</p>
            </div>

            <div class="beneficio-card">
                <span class="emoji">💪</span>
                <h4>Expressão de Fé</h4>
                <p>Demonstramos nossa confiança de que Deus continuará a prover todas as nossas necessidades.</p>
            </div>

            <div class="beneficio-card">
                <span class="emoji">😊</span>
                <h4>Desenvolvimento do Caráter</h4>
                <p>A generosidade combate o egoísmo e o materialismo, moldando nosso caráter à semelhança de Cristo.</p>
            </div>

            <div class="beneficio-card">
                <span class="emoji">🤝</span>
                <h4>Parceria na Missão</h4>
                <p>Contribuímos diretamente para o avanço da obra de Deus na Terra, tornando-nos Seus colaboradores.</p>
            </div>

            <div class="beneficio-card">
                <span class="emoji">❤️</span>
                <h4>Obediência por Amor</h4>
                <p>É uma resposta de amor aos mandamentos de Deus, motivada pela gratidão por Sua salvação.</p>
            </div>

            <div class="beneficio-card">
                <span class="emoji">🌟</span>
                <h4>Bênçãos Prometidas</h4>
                <p>Deus promete abençoar os fiéis. Essas bênçãos podem ser espirituais, materiais e a alegria de participar de Sua obra.</p>
            </div>
        </div>
    </div>

    <!-- Seção Como Contribuir -->
    <div class="como-contribuir-section">
        <h2>Como Contribuir na IASD Central?</h2>
        <p style="text-align: center; font-family: 'Roboto', sans-serif; font-size: 1.1rem; color: #666; margin-bottom: 30px; max-width: 800px; margin-left: auto; margin-right: auto;">
            Entendemos a importância de facilitar seu ato de adoração através da contribuição. Escolha a forma mais conveniente para você:
        </p>

        <div class="formas-grid">
            <div class="forma-card">
                <span class="icon">💻</span>
                <h4>Online (7me)</h4>
                <p>Através do sistema oficial da igreja. É seguro, prático e rápido.</p>
                <p style="margin-top: 10px;"><a href="https://play.google.com/store/apps/details?id=com.iatec.acms.me&hl=pt_BR&pli=1" target="_blank">Acesse o 7me →</a></p>
            </div>

            <div class="forma-card">
                <span class="icon">✉️</span>
                <h4>Envelope</h4>
                <p>Disponíveis na igreja. Preencha seus dados e deposite nos gazofilácios durante os cultos ou entregue na tesouraria.</p>
            </div>

            <div class="forma-card">
                <span class="icon">🏦</span>
                <h4>Transferência/PIX</h4>
                <p>Para sua conveniência, utilize os dados bancários da igreja. Entre em contato para obter as informações.</p>
            </div>

            <div class="forma-card">
                <span class="icon">🏢</span>
                <h4>Tesouraria</h4>
                <p>Entregue sua contribuição diretamente na tesouraria durante o horário de funcionamento.</p>
            </div>
        </div>

        <a href="{{ route('oracao-visita') }}" class="btn-contribuir">QUERO CONTRIBUIR AGORA!</a>
    </div>

    <!-- Seção Transparência -->
    <div class="transparencia-section">
        <h3>Transparência e Responsabilidade</h3>
        <p>
            Garantimos que todos os recursos são administrados com responsabilidade e transparência, seguindo as diretrizes financeiras da Igreja Adventista do Sétimo Dia, com auditorias regulares. Relatórios financeiros podem ser consultados junto à tesouraria.
        </p>
        <div style="background: rgba(255,255,255,0.15); border-radius: 10px; padding: 30px; margin-top: 30px;">
            <p style="font-size: 1.15rem; font-weight: 600; margin-bottom: 20px;">
                📚 Saiba Mais Sobre Dízimos e Ofertas
            </p>
            <p style="margin-bottom: 20px;">
                Se quiser conhecer mais sobre os dízimos e ofertas, acesse os documentos abaixo e/ou visite a página oficial de mordomia cristã da igreja adventista.
            </p>
            <div style="display: flex; justify-content: center; margin-top: 25px;">
                <a href="https://www.adventistas.org/pt/mordomiacrista/" target="_blank" style="display: inline-block; background: #fff; color: #003366; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 600; transition: transform 0.3s, box-shadow 0.3s; font-family: 'Roboto', sans-serif;">
                    Mordomia Cristã →
                </a>
            </div>
        </div>
    </div>

    <!-- Seção Reflexão -->
    <div class="reflexao-section">
        <h3>Reflita</h3>
        <p>
            Devolver o dízimo e entregar ofertas são privilégios que nos conectam mais profundamente com Deus e Sua missão. Que possamos experimentar a alegria e as bênçãos de sermos fiéis mordomos dos recursos que Ele nos confia.
        </p>
        <p>
            Se tiver dúvidas ou precisar de mais informações, não hesite em procurar a tesouraria ou um dos líderes de nossa igreja.
        </p>
        <blockquote>
            "[...] mais bem-aventurado é dar que receber."
            <span class="referencia">— Atos 20:35</span>
        </blockquote>
    </div>

    <!-- Seção Testemunhos -->
    <div class="testemunhos-section">
        <h2>Testemunhos (Provai e Vede)</h2>
        <p style="text-align: center; font-family: 'Roboto', sans-serif; font-size: 1.1rem; color: #666; margin-bottom: 30px; max-width: 800px; margin-left: auto; margin-right: auto;">
            Assista ao testemunho mais recente e veja como a fidelidade a Deus transforma vidas.
        </p>

        <div class="video-container">
            <div class="video-card" id="videoCard" onclick="openVideo()">
                <div class="thumbnail-wrapper">
                    <div class="loading-spinner" id="loadingSpinner">Carregando vídeo...</div>
                    <img class="video-thumbnail" id="videoThumbnail" style="display: none;" alt="Testemunho">
                    <div class="video-play-overlay" id="playOverlay" style="display: none;"></div>
                </div>
                <div class="video-info">
                    <h3 id="videoTitle">Carregando...</h3>
                    <p id="videoDescription">Clique para assistir no YouTube</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção Contato -->
    <div class="contato-section">
        <h3>Precisa de Ajuda?</h3>
        <p>
            Entre em contato conosco para mais informações sobre como contribuir:
        </p>
        <p style="margin-top: 20px;">
            <strong>📧 Email:</strong> tesouraria@iasdcentraldebrasilia.com.br
        </p>
        <p style="margin-top: 15px;">
            <strong>📍 Local:</strong> Tesouraria da IASD Central de Brasília
        </p>
    </div>

</div>
@endsection

@push('scripts')
<script>
const CHANNEL_HANDLE = '@provaievedeoficial';
let latestVideoUrl = '';

// Função para buscar o vídeo mais recente usando o método noembed
async function fetchLatestVideo() {
    try {
        // Primeiro, tentamos obter o ID do canal através da página do canal
        // Usando a API do YouTube para buscar vídeos do canal
        const response = await fetch(`https://www.youtube.com/@${CHANNEL_HANDLE.replace('@', '')}/videos`);
        const html = await response.text();

        // Extrair o ID do primeiro vídeo usando regex
        const match = html.match(/"videoId":"([a-zA-Z0-9_-]{11})"/);

        if (match && match[1]) {
            const videoId = match[1];
            latestVideoUrl = `https://www.youtube.com/watch?v=${videoId}`;

            // Atualizar a thumbnail
            const thumbnailUrl = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;
            const thumbnail = document.getElementById('videoThumbnail');
            const playOverlay = document.getElementById('playOverlay');
            const loadingSpinner = document.getElementById('loadingSpinner');

            // Carregar a imagem
            thumbnail.src = thumbnailUrl;
            thumbnail.onload = function() {
                loadingSpinner.style.display = 'none';
                thumbnail.style.display = 'block';
                playOverlay.style.display = 'flex';
            };

            thumbnail.onerror = function() {
                // Se maxresdefault não funcionar, tentar hqdefault
                thumbnail.src = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
            };

            // Buscar metadados do vídeo usando noembed (para o título)
            try {
                const noembedResponse = await fetch(`https://noembed.com/embed?url=${encodeURIComponent(latestVideoUrl)}`);
                const data = await noembedResponse.json();

                if (data.title) {
                    document.getElementById('videoTitle').textContent = data.title;
                } else {
                    document.getElementById('videoTitle').textContent = 'Último Testemunho';
                }
            } catch (e) {
                document.getElementById('videoTitle').textContent = 'Último Testemunho';
            }
        } else {
            showError();
        }
    } catch (error) {
        console.error('Erro ao buscar vídeo:', error);
        showError();
    }
}

function showError() {
    document.getElementById('loadingSpinner').textContent = 'Vídeo não disponível no momento';
    document.getElementById('videoTitle').textContent = 'Testemunhos';
    document.getElementById('videoDescription').textContent = 'Acesse nosso canal no YouTube para ver os testemunhos mais recentes';
}

function openVideo() {
    if (latestVideoUrl) {
        window.open(latestVideoUrl, '_blank');
    } else {
        window.open('https://www.youtube.com/@provaievedeoficial', '_blank');
    }
}

// Carregar o vídeo quando a página estiver pronta
document.addEventListener('DOMContentLoaded', function() {
    // Usar um timeout pequeno para garantir que a página carregou
    setTimeout(fetchLatestVideo, 500);
});
</script>
@endpush
