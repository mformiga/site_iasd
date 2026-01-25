@extends('layouts.app')

@section('title', 'IASD Central de Brasília - A Igreja')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
    
    .igreja-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .igreja-intro {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .igreja-intro h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .igreja-intro p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        max-width: 900px;
        margin: 0 auto;
    }

    .pilares-section {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        padding: 60px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .pilares-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #fff;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .pilares-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #f8f9fa;
        margin-bottom: 30px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .pilares-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-bottom: 30px;
    }

    .pilar-card {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        padding: 30px 25px;
        text-align: center;
        backdrop-filter: blur(10px);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .pilar-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
    }

    .pilar-card .emoji {
        font-size: 3em;
        margin-bottom: 15px;
        display: block;
    }

    .pilar-card h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #fff;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .pilar-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #f8f9fa;
        line-height: 1.6;
        text-align: center;
    }


    .estrutura-section {
        margin: 60px 0;
    }

    .estrutura-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .piramide-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        margin: 20px 0;
        padding: 10px;
    }

    .piramide-nivel {
        text-align: center;
        position: relative;
        width: 100%;
        max-width: 900px;
        margin: 0 auto;
        padding: 8px 15px;
        border-radius: 6px;
        background: #ffffff;
        border: 2px solid #003366;
        box-shadow: 0 2px 8px rgba(0, 51, 102, 0.08);
        transition: all 0.3s ease;
    }

    .piramide-nivel:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 51, 102, 0.15);
    }

    .piramide-nivel.nivel-1 {
        background: linear-gradient(to right, #e3f2fd, #bbdefb);
        color: #003366;
        border-color: #003366;
        width: 35%;
    }

    .piramide-nivel.nivel-2 {
        background: linear-gradient(to right, #e3f2fd, #bbdefb);
        color: #003366;
        border-color: #003366;
        width: 48%;
    }

    .piramide-nivel.nivel-3 {
        background: linear-gradient(to right, #e3f2fd, #bbdefb);
        color: #003366;
        border-color: #003366;
        width: 58%;
    }

    .piramide-nivel.nivel-4 {
        background: linear-gradient(to right, #e3f2fd, #bbdefb);
        color: #003366;
        border-color: #003366;
        width: 72%;
    }

    .piramide-nivel.nivel-5 {
        background: linear-gradient(to right, #e3f2fd, #bbdefb);
        color: #003366;
        border-color: #003366;
        width: 80%;
    }

    .piramide-nivel.nivel-6 {
        background: linear-gradient(to right, #e3f2fd, #bbdefb);
        color: #003366;
        border-color: #003366;
        width: 100%;
    }

    .piramide-nivel .icone {
        font-size: 1.3em;
        margin: 0 auto 3px auto;
        display: block;
    }

    .piramide-nivel h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.2em;
        margin: 0 auto 3px auto;
        font-weight: 500;
        letter-spacing: 0.5px;
        display: block;
    }

    .piramide-nivel p {
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .piramide-nivel .exemplo {
        font-family: 'Roboto', sans-serif;
        font-size: 0.85em;
        font-weight: 700;
        margin: 0 auto 3px auto;
        opacity: 1;
        display: block;
        text-align: center;
    }

    .piramide-nivel .descricao {
        font-family: 'Roboto', sans-serif;
        font-size: 0.75em;
        line-height: 1.3;
        margin: 0 auto;
        opacity: 1;
        font-weight: 400;
        display: block;
        text-align: center;
    }

    .seta-baixo {
        display: none;
    }

    .timeline-year {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3.5em;
        color: #003366;
        font-weight: 500;
        margin-bottom: 10px;
        display: block;
    }

    .timeline-content {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #666;
        font-weight: 500;
    }

    .campanhas-info {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        margin: 50px 0;
        border-left: 5px solid #003366;
    }

    .campanhas-info h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #003366;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .campanhas-info p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
    }

    .boletim-section {
        background: linear-gradient(135deg, #003366 0%, #1b4472 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .boletim-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #fff;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .boletim-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #f8f9fa;
        margin-bottom: 25px;
    }

    .btn-boletim {
        display: inline-block;
        background-color: #fff;
        color: #003366;
        padding: 12px 35px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1em;
        transition: transform 0.3s, box-shadow 0.3s;
        font-family: 'Roboto', sans-serif;
    }

    .btn-boletim:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .como-ajudar-section {
        margin: 60px 0;
    }

    .como-ajudar-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .formas-ajuda-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .forma-ajuda-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 25px 20px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .forma-ajuda-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.12);
    }

    .forma-ajuda-card .emoji {
        font-size: 3em;
        margin-bottom: 15px;
        display: block;
    }

    .forma-ajuda-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #003366;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .forma-ajuda-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #666;
        line-height: 1.6;
    }

    .btn-ajudar-grande {
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

    .btn-ajudar-grande:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    .contato-section {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
    }

    .contato-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #003366;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .contato-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 10px;
    }

    .contato-section a {
        color: #003366;
        text-decoration: none;
        font-weight: 600;
    }

    .contato-section a:hover {
        text-decoration: underline;
    }


    .historia-expansivel {
        display: none;
        background: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        margin-top: 30px;
        text-align: left;
    }

    .historia-expansivel.show {
        display: block;
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .historia-expansivel h4 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.8em;
        color: #003366;
        margin-top: 30px;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .historia-expansivel h4:first-child {
        margin-top: 0;
    }

    .historia-expansivel p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        margin-bottom: 15px;
    }

    .historia-expansivel img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin: 20px 0;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .historia-expansivel .verso {
        font-style: italic;
        color: #666;
        background: #fff;
        padding: 20px;
        border-left: 4px solid #003366;
        margin: 20px 0;
        border-radius: 5px;
    }


    .crencas-section {
        margin: 60px 0;
    }

    .crencas-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .crencas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-bottom: 50px;
    }

    .crenca-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .crenca-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        border-color: #003366;
    }

    .crenca-icon {
        font-size: 3em;
        margin-bottom: 15px;
        display: block;
    }

    .crenca-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #003366;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .crenca-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
    }

    .crencas-cta {
        background: linear-gradient(135deg, #003366 0%, #1b4472 100%);
        padding: 50px 40px;
        border-radius: 15px;
        text-align: center;
        color: #fff;
    }

    .btn-crencas-destaque {
        display: inline-block;
        background-color: #ff6b35;
        color: #fff;
        padding: 18px 50px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.3em;
        transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
        font-family: 'Roboto', sans-serif;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .btn-crencas-destaque:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        background-color: #e55a2b;
    }

    @media (max-width: 768px) {
        .igreja-container {
            padding: 20px 15px;
        }

        .igreja-intro {
            padding: 30px 20px;
        }

        .igreja-intro h1 {
            font-size: 2.2em;
        }

        .pilares-section {
            padding: 40px 20px;
        }

        .pilares-section h2 {
            font-size: 2em;
        }

        .estatisticas-grid,
        .formas-ajuda-grid,
        .pilares-grid,
        .crencas-grid {
            grid-template-columns: 1fr;
        }

        .timeline-year {
            font-size: 2.5em;
        }

        .piramide-nivel {
            width: 100% !important;
            padding: 6px 12px;
        }

        .piramide-nivel h3 {
            font-size: 1.1em;
        }

        .piramide-nivel .icone {
            font-size: 1.1em;
        }

        .piramide-nivel .exemplo {
            font-size: 0.8em;
        }

        .piramide-nivel .descricao {
            font-size: 0.7em;
        }

        .contato-section > div[style*="display: flex"] {
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/aigreja/fachada.webp') }}" alt="IASD Central de Brasília - A Igreja" style="width: 100%;">

<div class="igreja-container">
    
    <!-- Seção Introdutória -->
    <div class="igreja-intro">
        <h1>Quem Somos</h1>
        <p>
            A Igreja Adventista do Sétimo Dia é uma igreja cristã protestante com atuação mundial que teve suas primeiras raízes entre as décadas de 1850 e 1860, concomitantemente nos Estados Unidos e na Europa. Seu início se deu a partir de um grupo composto por homens e mulheres de várias denominações religiosas, estudiosos da Bíblia, que em 1863 organizou e oficializou uma estrutura denominacional, passando a adotar o nome atual.
        </p>
    </div>

    <!-- Seção Pilares de Nossa Fé -->
    <div class="pilares-section">
        <h2>⛪ Pilares de Nossa Fé</h2>

        <div class="pilares-grid">
            <div class="pilar-card">
                <span class="emoji">📖</span>
                <h3>A Bíblia</h3>
                <p>Nossa única regra de fé e prática</p>
            </div>

            <div class="pilar-card">
                <span class="emoji">✝️</span>
                <h3>A Trindade</h3>
                <p>Um só Deus em três pessoas (Pai, Filho e Espírito Santo)</p>
            </div>

            <div class="pilar-card">
                <span class="emoji">💫</span>
                <h3>Jesus Cristo</h3>
                <p>O Salvador da humanidade, que morreu por nós, ressuscitou e prometeu voltar a esta Terra</p>
            </div>
        </div>
    </div>

    <!-- Seção Estrutura Organizacional -->
    <div class="estrutura-section">
        <h2>🗺️ Estrutura Organizacional</h2>

        <div class="campanhas-info">
            <p style="margin-bottom: 30px;">
                No Brasil, a mensagem adventista chegou por meio de impressos que ingressaram nas colônias de imigrantes alemães e austríacos, nos estados de Santa Catarina, São Paulo e Espírito Santo. Na última estatística em 2021, eram 21,9 milhões de membros em 212 países sendo que o Brasil é o país com maior número de adventistas no mundo.
            </p>

            <!-- Pirâmide Organizacional HTML -->
            <div class="piramide-container">
                <!-- Nível 1: Conferência Geral -->
                <div class="piramide-nivel nivel-1">
                    <span class="icone">🌍</span>
                    <h3>Conferência Geral</h3>
                    <p class="exemplo">Sede Mundial - Maryland, EUA</p>
                    <p class="descricao">Supervisão global da igreja em escala mundial</p>
                </div>

                <!-- Nível 2: Divisões -->
                <div class="piramide-nivel nivel-2">
                    <span class="icone">🗺️</span>
                    <h3>Divisões</h3>
                    <p class="exemplo">Divisão Sul-Americana</p>
                    <p class="descricao">Grandes áreas geográficas compostas por uniões</p>
                </div>

                <!-- Nível 3: Uniões -->
                <div class="piramide-nivel nivel-3">
                    <span class="icone">🏢</span>
                    <h3>Uniões</h3>
                    <p class="exemplo">União Centro-Oeste Brasileira</p>
                    <p class="descricao">Grupos de associações dentro de um território</p>
                </div>

                <!-- Nível 4: Associações / Missões -->
                <div class="piramide-nivel nivel-4">
                    <span class="icone">🏛️</span>
                    <h3>Associações / Missões</h3>
                    <p class="exemplo">Associação Planalto Central</p>
                    <p class="descricao">Conjunto de igrejas locais em uma área específica</p>
                </div>

                <!-- Nível 5: Igrejas Locais -->
                <div class="piramide-nivel nivel-5">
                    <span class="icone">⛪</span>
                    <h3>Igrejas Locais</h3>
                    <p class="exemplo">IASD Central de Brasília</p>
                    <p class="descricao">Congregações de base formadas por membros</p>
                </div>

                <!-- Nível 6: Membros -->
                <div class="piramide-nivel nivel-6">
                    <span class="icone">👥</span>
                    <h3>Membros</h3>
                    <p class="exemplo">Fiéis batizados</p>
                    <p class="descricao">Base fundamental que forma e sustenta as igrejas locais</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção Nossa História -->
    <div class="como-ajudar-section">
        <h2>⏳ Nossa História: IASD Brasilia</h2>
        <p style="text-align: center; font-family: 'Roboto', sans-serif; font-size: 1.1rem; color: #666; margin-bottom: 30px; max-width: 800px; margin-left: auto; margin-right: auto;">
            Uma Jornada de Fé e Comunidade
        </p>

        <div class="formas-ajuda-grid">
            <div class="forma-ajuda-card">
                <h3 style="font-family: 'Bebas neue', sans-serif; font-size: 1.5em; color: #003366; margin-bottom: 10px;">1957</h3>
                <p style="text-align: justify;">
                    A dedicação do casal Walter e Antônia Leão foi fundamental. Eles abriram as portas de sua casa na Candangolândia para encontros de adoração a Deus com poucas pessoas, plantando a primeira semente adventista na região. Com o tempo, o casal se mudou para o Núcleo Bandeirante, mas a chama da missão continuou acesa, e os encontros evangelísticos prosseguiram.
                </p>
            </div>

            <div class="forma-ajuda-card">
                <h3 style="font-family: 'Bebas neue', sans-serif; font-size: 1.5em; color: #003366; margin-bottom: 10px;">1960</h3>
                <p style="text-align: justify;">
                    No ano da inauguração de Brasília, Walter e Antônia foram para o Gama. O endereço mudou novamente, mas a paixão por compartilhar a fé permaneceu inabalável. Outras pessoas, inspiradas pelo mesmo ideal, uniram-se a eles para fazer a obra avançar na nova capital.
                </p>
            </div>

            <div class="forma-ajuda-card">
                <h3 style="font-family: 'Bebas neue', sans-serif; font-size: 1.5em; color: #003366; margin-bottom: 10px;">1967</h3>
                <p style="text-align: justify;">
                    Um personagem crucial nesta história foi Clayton Rossi, Procurador da República. Já membro da igreja em Belo Horizonte, ele se mudou para Brasília com a missão em seu coração. Movido por sua fé, Clayton empreendeu uma verdadeira maratona para garantir, junto ao Governo Federal, um grande terreno que se estendia da Avenida L-2 à Avenida L-3. Esse esforço foi recompensado, e a propriedade foi adquirida. O estabelecimento efetivo da Igreja Central de Brasília aconteceu a partir deste ano. Inicialmente, foi construído um salão simples no terreno adquirido, conhecido como Capela Azul.
                </p>
            </div>

            <div class="forma-ajuda-card">
                <h3 style="font-family: 'Bebas neue', sans-serif; font-size: 1.5em; color: #003366; margin-bottom: 10px;">1968</h3>
                <p style="text-align: justify;">
                    Finalmente, o momento tão esperado chegou! O templo da Igreja Central de Brasília foi inaugurado em 8 de dezembro de 1968. Cerca de 60 adventistas assinaram a ata de inauguração. Desde seus primeiros dias até hoje, a Igreja Central de Brasília cresceu e se consolidou como uma grande e influente comunidade adventista, servindo de inspiração e apoio para outras igrejas na capital federal.
                </p>
            </div>
        </div>
    </div>

    <!-- Seção O Temporal que Uniu uma Comunidade -->
    <div class="boletim-section">
        <h3>🌧️ O Temporal que Uniu uma Comunidade</h3>
        <p>
            Na véspera da inauguração (7/12/1968), um temporal inundou o templo. Membros trabalharam a noite toda para limpar a igreja, garantindo que, ao amanhecer, tudo estivesse impecável para receber visitantes de todo o Brasil.
        </p>
        <div style="text-align: center; margin-top: 30px;">
            <a href="javascript:void(0)" id="btn-historia" style="display: inline-block; background-color: #ff6b35; color: #fff; padding: 12px 35px; border-radius: 8px; text-decoration: none; font-weight: bold; font-size: 1em; transition: transform 0.3s, box-shadow 0.3s; font-family: 'Roboto', sans-serif; cursor: pointer;" onmouseover="this.style.backgroundColor='#e55a2b'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.3)'" onmouseout="this.style.backgroundColor='#ff6b35'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">Veja mais sobre nossa história</a>
        </div>
        <div id="historia-expansivel" class="historia-expansivel">
            <p>
                Era o dia 08 de dezembro de 1968. A Cidade de Brasília, a nova Capital Federal do Brasil contava com apenas oito anos de inaugurada. Na linguagem maternal, estava apenas engatinhando. Estávamos vivendo uma nova época, cheia de expectativas e vislumbres de um futuro promissor. Havia chegado, finalmente, o tão almejado dia da inauguração do grande Templo da Igreja Adventista do Sétimo Dia, onde Cultos Divinos seriam celebrados para honra e glória do Senhor Deus Triúno, o TodoPoderoso.
            </p>

            <p>
                Assim a ordem Divina está escrita: "E Me farão um Santuário para que Eu habite no meio deles" exarada no Livro de Êxodo 25:8, estava sendo cumprida.
            </p>

            <p>
                Pelo exercício da fé e pelo esforço determinado de muitos, a magnífica realidade ali estava presente, numa demonstração de que aquela máxima citada pelo Apóstolo Paulo aos Filipenses capítulo 4, verso 13, inspirada pelo Espírito da Profecia, de que, "Tudo posso nAquele que me fortalece", estava sendo transformada em uma verdade deslumbrante, real, concreta esplendorosa, sublime, bem presente, cheia de luz, "e a Glória do Senhor Deus encheu o Templo" (II Crônicas 5:14).
            </p>

            <img src="{{ asset('img/cards/aigreja/inauguracao.png') }}" alt="Inauguração da Igreja Central de Brasília">

            <p>
                Naquele dia esta bela Igreja, esta Casa de Deus, nova, exuberante e confortável, estava pronta para ser dedicada ao Senhor Deus; e assim foi, para honra e glória do nosso Pai Eterno, a quem tudo devemos.
            </p>

            <p>
                O terreno onde está construída a Igreja tem a área total de 25.000 m², medindo 100 metros de frente por 250 metros de fundos, foi uma doação do Governo do Brasil à União Sul Brasileira, com a intermediação incansável do saudoso irmão Dr. João Batista Clayton Rossi, Procurador da República.
            </p>

            <img src="{{ asset('img/cards/aigreja/construcao.png') }}" alt="Construção do Templo">

            <p>
                De acordo com as informações colhidas com o Pr. Wilson Sarli, então Presidente da Missão Brasil Central da IASD, um dos vespertinos da Capital Federal anunciou: "Igreja Adventista inaugura Templo e reúne fiéis do DF". E acrescenta: "Foi inaugurada, às 11 horas de ontem, na Avenida L2 Sul, o novo Templo da Igreja Adventista, com o descerramento da fita pelo presidente mundial daquela Igreja, Pastor Roberto H. Pierson, e o Senador Carvalho Pinto, especialmente convidado para a cerimônia".
            </p>

            <img src="{{ asset('img/cards/aigreja/coral_taguatinga.png') }}" alt="Coral de Taguatinga na Inauguração">

            <p>
                Conforme informações colhidas, cinco ônibus chegaram de várias partes do Estado de Goiás, trazendo irmãos para a cerimônia de inauguração, além de mais outros dez ônibus e inúmeros carros particulares com pessoas de outros Estados.
            </p>

            <p>
                Após o descerramento da fita, a grande porta de vidro foi aberta e o Coral da Igreja Adventista de Taguatinga entoou o hino de nº 18, do então Hinário Cantai ao Senhor: SANTO, SANTO, SANTO.
            </p>
        </div>
    </div>

    <!-- Seção Em Que Cremos -->
    <div class="crencas-section">
        <h2>📖 Em Que Cremos</h2>
        <p style="text-align: center; font-family: 'Roboto', sans-serif; font-size: 1.1rem; color: #666; margin-bottom: 40px; max-width: 800px; margin-left: auto; margin-right: auto;">
            Os adventistas do sétimo dia baseiam suas crenças integralmente nas Sagradas Escrituras. Aceitamos a Bíblia como nossa única regra de fé e prática.
        </p>

        <div class="crencas-grid">
            <div class="crenca-card">
                <span class="crenca-icon">🕊️</span>
                <h4>Deus</h4>
                <p>Cremos em Deus como Pai, Filho e Espírito Santo, um Deus em três pessoas</p>
            </div>

            <div class="crenca-card">
                <span class="crenca-icon">📖</span>
                <h4>A Bíblia</h4>
                <p>As Escrituras Sagradas são a única regra de fé e prática cristã</p>
            </div>

            <div class="crenca-card">
                <span class="crenca-icon">✝️</span>
                <h4>Salvação</h4>
                <p>Jesus Cristo morreu por nossos pecados e oferece salvação pela graça</p>
            </div>

            <div class="crenca-card">
                <span class="crenca-icon">🔄</span>
                <h4>Retorno de Cristo</h4>
                <p>Jesus voltará pessoal e visivelmente a esta Terra para buscar seu povo</p>
            </div>

            <div class="crenca-card">
                <span class="crenca-icon">⚰️</span>
                <h4>Morte e Ressurreição</h4>
                <p>A morte é um sono inconsciente até a ressurreição no dia de Cristo</p>
            </div>

            <div class="crenca-card">
                <span class="crenca-icon">🏛️</span>
                <h4>Santuário</h4>
                <p>Há um santuário no céu onde Cristo ministra em nosso favor</p>
            </div>

            <div class="crenca-card">
                <span class="crenca-icon">📜</span>
                <h4>Lei de Deus</h4>
                <p>Os Dez Mandamentos refletem o caráter de Deus e são válidos hoje</p>
            </div>

            <div class="crenca-card">
                <span class="crenca-icon">🛁</span>
                <h4>Batismo</h4>
                <p>O batismo por imersão é símbolo de morte para o pecado e nova vida</p>
            </div>
        </div>

        <div class="crencas-cta">
            <h3 style="font-family: 'Bebas neue', sans-serif; font-size: 1.8em; color: #ffffff; margin-bottom: 20px; font-weight: 500;">
                Conheça Nossas 28 Crenças Fundamentais
            </h3>
            <p style="font-family: 'Roboto', sans-serif; font-size: 1rem; color: #f8f9fa; margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto;">
                Acesse gratuitamente a publicação "Nisto Cremos" para conhecer em detalhes todas as crenças que a Igreja Adventista sustenta a respeito dos ensinos bíblicos.
            </p>
            <a href="https://www.institutodemissao.org.br/wp-content/uploads/2021/07/Nisto-Cremos.pdf" target="_blank" class="btn-crencas-destaque">
                <span style="font-size: 1.5em; margin-right: 10px;">📖</span>
                Ler "Nisto Cremos"
            </a>
        </div>
    </div>

    <!-- Seção Liderança -->
    <div class="contato-section">
        <h2 style="font-family: 'Bebas neue', sans-serif; font-size: 2.5em; color: #003366; text-align: center; margin-bottom: 40px; font-weight: 500;">Liderança</h2>

        <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; margin-top: 30px;">
            <!-- Pastor Lucas Alves -->
            <div style="text-align: center; max-width: 400px;">
                <img src="{{ asset('img/cards/aigreja/Pr. Lucas para site.webp') }}"
                     alt="Pastor Lucas Alves"
                     style="width: 350px; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); margin-bottom: 15px;">
                <h3 style="font-family: 'Bebas neue', sans-serif; font-size: 1.5em; color: #003366; margin-bottom: 5px;">Pastor Lucas Alves</h3>
                <p style="font-family: 'Roboto', sans-serif; font-size: 1em; color: #666; font-weight: 600;">Pastor Sênior</p>
            </div>

            <!-- Pastor Hugo Rodrigues -->
            <div style="text-align: center; max-width: 400px;">
                <img src="{{ asset('img/cards/aigreja/Pr. Hugo para site.webp') }}"
                     alt="Pastor Hugo Rodrigues"
                     style="width: 350px; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); margin-bottom: 15px;">
                <h3 style="font-family: 'Bebas neue', sans-serif; font-size: 1.5em; color: #003366; margin-bottom: 5px;">Pastor Hugo Rodrigues</h3>
                <p style="font-family: 'Roboto', sans-serif; font-size: 1em; color: #666; font-weight: 600;">Área Jovem</p>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animação suave de scroll para links internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });


    // Toggle da história expansível
    const btnHistoria = document.getElementById('btn-historia');
    const historiaExpansivel = document.getElementById('historia-expansivel');

    if (btnHistoria && historiaExpansivel) {
        btnHistoria.addEventListener('click', function(e) {
            e.preventDefault();
            historiaExpansivel.classList.toggle('show');

            // Change button text based on state
            if (historiaExpansivel.classList.contains('show')) {
                btnHistoria.textContent = 'Recolher história';
            } else {
                btnHistoria.textContent = 'Veja mais sobre nossa história';
            }
        });
    }

    // Animação de fade-in para cards
    const cards = document.querySelectorAll('.pilar-card, .forma-ajuda-card, .crenca-card, .piramide-nivel');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) scale(1)';
                }, index * 100);
            }
        });
    }, { threshold: 0.2 });

    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px) scale(0.95)';
        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(card);
    });
});
</script>
@endpush
