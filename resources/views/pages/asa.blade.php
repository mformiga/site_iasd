@extends('layouts.app')

@section('title', 'IASD Central de Brasília - ASA (Ação Social Adventista)')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
    
    .asa-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .asa-intro {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .asa-intro h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .asa-intro p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        max-width: 900px;
        margin: 0 auto;
    }

    .agencia-humanitaria {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        padding: 60px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .agencia-humanitaria h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #fff;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .agencia-humanitaria p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #f8f9fa;
        margin-bottom: 30px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-conhecer {
        display: inline-block;
        background-color: #fff;
        color: #003366;
        padding: 15px 40px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1em;
        transition: transform 0.3s, box-shadow 0.3s;
        font-family: 'Roboto', sans-serif;
    }

    .btn-conhecer:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .estatisticas-section {
        margin: 60px 0;
    }

    .estatisticas-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .estatisticas-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .estatistica-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .estatistica-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .estatistica-numero {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3.5em;
        color: #003366;
        font-weight: 500;
        margin-bottom: 10px;
        display: block;
    }

    .estatistica-label {
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

    .galeria-section {
        margin: 60px 0;
    }

    .galeria-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .galeria-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .galeria-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        aspect-ratio: 1;
        background: #f0f0f0;
    }

    .galeria-item:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    .galeria-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    @media (max-width: 768px) {
        .asa-container {
            padding: 20px 15px;
        }

        .asa-intro {
            padding: 30px 20px;
        }

        .asa-intro h1 {
            font-size: 2.2em;
        }

        .agencia-humanitaria {
            padding: 40px 20px;
        }

        .agencia-humanitaria h2 {
            font-size: 2em;
        }

        .estatisticas-grid,
        .formas-ajuda-grid {
            grid-template-columns: 1fr;
        }

        .estatistica-numero {
            font-size: 2.5em;
        }

        .galeria-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/asa/asa_header.png') }}" alt="ASA (Ação Social Adventista)" style="width: 100%;">

<div class="asa-container">
    
    <!-- Seção Introdutória -->
    <div class="asa-intro">
        <h1>ASA (Ação Social Adventista)</h1>
        <p>
            O Ministério da Ação Social Adventista é uma expressão viva do amor de Cristo em ação. Ele não se limita a doar alimentos, roupas ou suprimentos; vai além, buscando ver o ser humano em sua totalidade. Este ministério entende que as necessidades das pessoas vão muito além do material, abrangendo o emocional, o espiritual e o social.
        </p>
        <p>
            Cada ação realizada é um gesto de carinho e cuidado, revelando a preocupação genuína com o próximo. Seja através de seminários educativos, programas de desenvolvimento comunitário, visitas, aconselhamento, ou outras iniciativas, o Ministério da Ação Social Adventista se dedica a transformar vidas e a trazer esperança.
        </p>
        <p>
            Envolvendo-se de maneira profunda com outros ministérios da igreja, como a Sociedade de Homens Adventistas, diáconos e diaconisas, este ministério se torna uma verdadeira rede de apoio, refletindo a luz de Cristo em cada canto da comunidade. Sob a liderança de um diretor comprometido, que participa ativamente das comissões da igreja, o ministério se fortalece e se amplia, alcançando mais corações e promovendo um impacto duradouro.
        </p>
    </div>

    <!-- Seção Agência Humanitária -->
    <div class="agencia-humanitaria">
        <h2>CONHEÇA A AGÊNCIA HUMANITÁRIA DA IGREJA ADVENTISTA DO SÉTIMO DIA</h2>
        <p>
            A Agência Humanitária da Igreja Adventista do Sétimo Dia trabalha em conjunto com a ASA para promover ações de solidariedade e assistência humanitária em todo o mundo, seguindo os princípios cristãos de amor ao próximo e serviço desinteressado.
        </p>
        <a href="https://adra.org.br/" target="_blank" class="btn-conhecer">Conheça</a>
    </div>

    <!-- Seção de Estatísticas -->
    <div class="estatisticas-section">
        <h2>Estes são alguns dos números que a ASA alcançou esse ano (2025):</h2>
        
        <div class="estatisticas-grid">
            <div class="estatistica-card">
                <span class="estatistica-numero" data-value="150">0</span>
                <div class="estatistica-label">Atendimento Assistenciais<br><strong>famílias</strong></div>
            </div>

            <div class="estatistica-card">
                <span class="estatistica-numero" data-value="500">0</span>
                <div class="estatistica-label">Cestas Básicas entregues<br><strong>unidades</strong></div>
            </div>

            <div class="estatistica-card">
                <span class="estatistica-numero" data-value="2000">0</span>
                <div class="estatistica-label">Apoio a necessidades básicas (roupas)<br></div>
            </div>

            <div class="estatistica-card">
                <span class="estatistica-numero" data-value="300">0</span>
                <div class="estatistica-label">Doações (móveis e utensílios domésticos)<br></div>
            </div>
        </div>

        <div class="campanhas-info">
            <h3>Campanhas e Arrecadações</h3>
            <p>
                As Campanhas mensais, Drive Thru Solidário e SOS Rio Grande do Sul juntas arrecadaram <strong>12 toneladas de alimentos</strong>, grande parte foi destinada à população do Rio Grande do Sul, após as enchentes ocorridas nos meses de abril e maio/2024.
            </p>
        </div>
    </div>

    <!-- Seção Como Você Pode Ajudar -->
    <div class="como-ajudar-section">
        <h2>Como Você Pode Ajudar</h2>
        <p style="text-align: center; font-family: 'Roboto', sans-serif; font-size: 1.1rem; color: #666; margin-bottom: 30px; max-width: 800px; margin-left: auto; margin-right: auto;">
            A ASA depende de voluntários e doações para continuar seu trabalho. Você pode contribuir de várias formas:
        </p>

        <div class="formas-ajuda-grid">
            <div class="forma-ajuda-card">
                <span class="emoji">🎁</span>
                <h4>Doações materiais</h4>
                <p>Alimentos não perecíveis, roupas, cobertores, produtos de higiene</p>
            </div>

            <div class="forma-ajuda-card">
                <span class="emoji">💵</span>
                <h4>Doações financeiras</h4>
                <p>Recursos para manutenção dos projetos</p>
            </div>

            <div class="forma-ajuda-card">
                <span class="emoji">⏰</span>
                <h4>Trabalho voluntário</h4>
                <p>Seu tempo e talento fazendo a diferença</p>
            </div>

            <div class="forma-ajuda-card">
                <span class="emoji">📢</span>
                <h4>Divulgação</h4>
                <p>Compartilhando nosso trabalho em suas redes</p>
            </div>
        </div>

        <a href="{{ route('oracao-visita') }}" class="btn-ajudar-grande">QUERO AJUDAR AGORA!</a>
    </div>

    <!-- Seção Galeria de Fotos -->
    <div class="galeria-section">
        <h2>Galeria de Fotos</h2>

        <div class="galeria-grid">
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/apoio1.jpeg" alt="ASA - Apoio" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/apoio2.jpeg" alt="ASA - Apoio" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/apoio3.jpeg" alt="ASA - Apoio" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/apoio4.jpeg" alt="ASA - Apoio" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/apoio5.jpeg" alt="ASA - Apoio" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/apoio6.jpeg" alt="ASA - Apoio" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/apoio7.jpeg" alt="ASA - Apoio" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/apoio8.jpeg" alt="ASA - Apoio" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/apoio9.jpeg" alt="ASA - Apoio" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/bazar1.jpeg" alt="ASA - Bazar" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/costura1.jpeg" alt="ASA - Costura" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/costura2.jpeg" alt="ASA - Costura" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/costura3.jpeg" alt="ASA - Costura" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/culinaria1.jpeg" alt="ASA - Culinária" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/culinaria2.jpeg" alt="ASA - Culinária" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/culinaria3.jpeg" alt="ASA - Culinária" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/pizzas1.jpeg" alt="ASA - Pizzas" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/tesouras2.jpeg" alt="ASA - Tesouras" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/tesouras3.jpeg" alt="ASA - Tesouras" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/tesouras4.jpeg" alt="ASA - Tesouras" loading="lazy">
            </div>
            <div class="galeria-item">
                <img src="https://adventistascentralbrasilia.org/img/cards/asa/tesouras5.jpeg" alt="ASA - Tesouras" loading="lazy">
            </div>
        </div>
    </div>

    <!-- Seção de Contato -->
    <div class="contato-section">
        <h3>Contato ASA</h3>
        <p>
            <strong>📧 Email:</strong> <a href="mailto:asacentralbsb@gmail.com">asacentralbsb@gmail.com</a>
        </p>
        <p style="margin-top: 20px; font-style: italic; color: #666;">
            "Porque tive fome, e me destes de comer; tive sede, e me destes de beber; era estrangeiro, e me hospedastes; estava nu, e me vestistes; adoeci, e me visitastes; estava na prisão, e fostes ver-me."
        </p>
        <p style="margin-top: 10px; font-weight: 600; color: #003366;">
            📖 Mateus 25:35-36
        </p>
    </div>

</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const estatisticasSection = document.querySelector('.estatisticas-section');
    const numeros = document.querySelectorAll('.estatistica-numero');
    let animado = false;

    // Função para formatar número (sempre inteiro)
    function formatarNumero(num) {
        // Sempre retorna número inteiro com separador de milhar
        return Math.floor(num).toLocaleString('pt-BR');
    }

    // Função para animar contagem
    function animarContagem(elemento, valorFinal) {
        const duracao = 2000; // 2 segundos
        const incremento = valorFinal / (duracao / 16); // ~60 FPS
        let valorAtual = 0;

        const timer = setInterval(() => {
            valorAtual += incremento;
            
            if (valorAtual >= valorFinal) {
                valorAtual = valorFinal;
                clearInterval(timer);
            }

            elemento.textContent = formatarNumero(valorAtual);
        }, 16);
    }

    // Intersection Observer para detectar quando a seção entra na viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animado) {
                animado = true;
                
                numeros.forEach(numero => {
                    const valorFinal = parseFloat(numero.getAttribute('data-value'));
                    animarContagem(numero, valorFinal);
                });
            }
        });
    }, {
        threshold: 0.3 // Dispara quando 30% da seção está visível
    });

    if (estatisticasSection) {
        observer.observe(estatisticasSection);
    }
});
</script>
@endpush
