@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Estudo Bíblico')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');

    .estudo-biblico-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .estudo-intro {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .estudo-intro h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .estudo-intro p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        max-width: 900px;
        margin: 0 auto;
    }

    .motivos-section {
        margin: 60px 0;
    }

    .motivos-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .motivos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .motivo-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 25px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .motivo-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .motivo-card .emoji {
        font-size: 3em;
        margin-bottom: 20px;
        display: block;
    }

    .motivo-card h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #003366;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .motivo-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
    }

    .experiencia-section {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        padding: 60px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .experiencia-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #fff;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .experiencia-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #f8f9fa;
        margin-bottom: 20px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .como-funciona-section {
        margin: 60px 0;
    }

    .como-funciona-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .steps-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .step {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 25px 20px;
        margin-bottom: 25px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        display: flex;
        align-items: flex-start;
        gap: 20px;
    }

    .step:hover {
        transform: translateX(5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.12);
    }

    .step-number {
        background: #003366;
        color: #fff;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.3em;
        flex-shrink: 0;
        font-family: 'Bebas neue', sans-serif;
    }

    .step-content h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #003366;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .step-content p {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
    }

    .materiais-section {
        background: #f8f9fa;
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        border-left: 5px solid #003366;
    }

    .materiais-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .materiais-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
    }

    .material-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 25px 20px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .material-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.12);
    }

    .material-card .emoji {
        font-size: 2.5em;
        margin-bottom: 15px;
        display: block;
    }

    .material-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1em;
        color: #003366;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .btn-material-destaque {
        display: block;
        text-align: center;
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        color: #fff;
        padding: 18px 50px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.2em;
        margin: 0 auto 50px auto;
        max-width: 450px;
        transition: transform 0.3s, box-shadow 0.3s;
        font-family: 'Roboto', sans-serif;
    }

    .btn-material-destaque:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    /* FORMULÁRIO */
    .container_form {
        width: 100%;
        max-width: 700px;
        margin: 50px auto;
    }

    form {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    form h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #003366;
        text-align: center;
        margin-bottom: 30px;
        font-weight: 500;
    }

    .container_label {
        width: 100%;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-family: 'Roboto', sans-serif;
        font-weight: 600;
        color: #333;
    }

    .container_input {
        position: relative;
    }

    .container_input i {
        position: absolute;
        bottom: 10px;
        left: 10px;
        color: #666;
    }

    input {
        width: 100%;
        padding: 10px 10px 10px 40px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1rem;
        font-family: 'Roboto', sans-serif;
        box-sizing: border-box;
    }

    input:focus {
        outline: none;
        border-color: #003366;
    }

    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1rem;
        font-family: 'Roboto', sans-serif;
        resize: vertical;
        box-sizing: border-box;
    }

    textarea:focus {
        outline: none;
        border-color: #003366;
    }

    button {
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        color: #fff;
        padding: 15px 50px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
        font-size: 1.1em;
        font-weight: bold;
        margin: 20px auto 0;
        display: block;
        font-family: 'Roboto', sans-serif;
    }

    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    @media (max-width: 768px) {
        .estudo-biblico-container {
            padding: 20px 15px;
        }

        .estudo-intro {
            padding: 30px 20px;
        }

        .estudo-intro h1 {
            font-size: 2.2em;
        }

        .motivos-grid,
        .materiais-grid {
            grid-template-columns: 1fr;
        }

        .experiencia-section {
            padding: 40px 20px;
        }

        .step {
            flex-direction: column;
            text-align: center;
        }

        .step-number {
            margin: 0 auto;
        }

        form {
            padding: 30px 20px;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Estudo Bíblico" style="width: 100%;">

<div class="estudo-biblico-container">

    <!-- Seção Introdutória -->
    <div class="estudo-intro">
        <h1>Estudo Bíblico: Uma Jornada para Conectar-se com Deus</h1>
        <p>
            Procurando respostas, fortalecimento espiritual ou alívio para desafios emocionais? O Estudo Bíblico é o caminho! Seja qual for sua idade ou momento de vida, aqui você encontrará um espaço acolhedor, dinâmico e adaptado às suas necessidades. Encontros presenciais na sua residência, na igreja ou online — <strong>você escolhe como participar!</strong>
        </p>
    </div>

    <!-- Seção Por Que Estudar a Bíblia -->
    <div class="motivos-section">
        <h2>Por que estudar a Bíblia?</h2>
        <div class="motivos-grid">
            <div class="motivo-card">
                <span class="emoji">📖</span>
                <h3>Aprendizado Simples</h3>
                <p>Aprenda de forma simples como os ensinamentos de Jesus transformam vidas.</p>
            </div>

            <div class="motivo-card">
                <span class="emoji">🤝</span>
                <h3>Respostas Reais</h3>
                <p>Descubra respostas para questões pessoais e espirituais, guiado pelo amor de Cristo.</p>
            </div>

            <div class="motivo-card">
                <span class="emoji">👥</span>
                <h3>Conexão Autêntica</h3>
                <p>Conecte-se com Deus de maneira prática e autêntica, em comunidade.</p>
            </div>
        </div>
    </div>

    <!-- Seção Experiência -->
    <div class="experiencia-section">
        <h2>Mais que estudo, uma experiência!</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin: 40px 0; max-width: 900px; margin-left: auto; margin-right: auto;">
            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 12px; backdrop-filter: blur(10px);">
                <span style="font-size: 3em; display: block; margin-bottom: 15px;">✨</span>
                <h3 style="color: #fff; font-family: 'Roboto', sans-serif; font-size: 1.3em; font-weight: 600; margin-bottom: 12px;">Transformação Diária</h3>
                <p style="color: #f8f9fa; margin: 0; line-height: 1.7;">Cada lição é um passo para entender melhor a Palavra de Deus e seu propósito para você.</p>
            </div>

            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 12px; backdrop-filter: blur(10px);">
                <span style="font-size: 3em; display: block; margin-bottom: 15px;">💫</span>
                <h3 style="color: #fff; font-family: 'Roboto', sans-serif; font-size: 1.3em; font-weight: 600; margin-bottom: 12px;">Renovação e Esperança</h3>
                <p style="color: #f8f9fa; margin: 0; line-height: 1.7;">Venha renovar sua esperança, encontrar apoio e caminhar mais perto dEle.</p>
            </div>

            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 12px; backdrop-filter: blur(10px);">
                <span style="font-size: 3em; display: block; margin-bottom: 15px;">🙏</span>
                <h3 style="color: #fff; font-family: 'Roboto', sans-serif; font-size: 1.3em; font-weight: 600; margin-bottom: 12px;">Crescimento Espiritual</h3>
                <p style="color: #f8f9fa; margin: 0; line-height: 1.7;">Venha estudar, compartilhar e crescer na graça de Deus!</p>
            </div>
        </div>

        <div style="background: rgba(255,255,255,0.15); padding: 30px 40px; border-radius: 12px; border-left: 5px solid #F9A01B; max-width: 800px; margin: 0 auto;">
            <p style="color: #fff; font-size: 1.2em; font-weight: 600; margin: 0; text-align: center;">
                🌟 Sua jornada espiritual começa agora! Descubra como a Bíblia pode iluminar sua vida!
            </p>
        </div>
    </div>

    <!-- Seção Como Funciona -->
    <div class="como-funciona-section">
        <h2>Como funciona?</h2>
        <div class="steps-container">
            <div class="step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>Ambiente Leve</h3>
                    <p>Materiais como Bíblia e guias são fornecidos. Suas dúvidas e experiências são sempre bem-vindas!</p>
                </div>
            </div>

            <div class="step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Encontros Envolventes</h3>
                    <p>Começamos com oração, exploramos passagens bíblicas e refletimos juntos.</p>
                </div>
            </div>

            <div class="step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>Transformação Real</h3>
                    <p>Ao final, você é incentivado a aplicar os aprendizados no dia a dia e crescer na fé.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção Materiais de Estudo -->
    <div class="materiais-section">
        <h2>Materiais de Estudo</h2>
        <p style="text-align: center; font-family: 'Roboto', sans-serif; font-size: 1.1rem; color: #666; margin-bottom: 30px;">
            Acesse nossos conteúdos e solicite materiais gratuitos.
        </p>

        <a href="https://cursobiblicool.wordpress.com/2019/01/08/sumario/" target="_blank" class="btn-material-destaque">
            📚 Materiais para Estudo Bíblico
        </a>

        <div class="materiais-grid">
            <a href="https://cursos.novotempo.com/" target="_blank" class="material-card">
                <span class="emoji">🎁</span>
                <h4>Solicite materiais impressos ou digitais gratuitamente</h4>
            </a>

            <a href="https://www.youtube.com/user/BibliaFacil" target="_blank" class="material-card">
                <span class="emoji">🎥</span>
                <h4>Canal Bíblia Fácil</h4>
            </a>

            <a href="https://www.youtube.com/@NaMiradaVerdadeNT" target="_blank" class="material-card">
                <span class="emoji">🔍</span>
                <h4>Canal Na Mira da Verdade</h4>
            </a>
        </div>
    </div>

    <!-- Seção Solicitação de Estudo Bíblico -->
    <div style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); padding: 50px 40px; border-radius: 15px; margin: 60px 0; border-left: 5px solid #F9A01B;">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 50px;">
            <h2 style="font-family: 'Bebas neue', sans-serif; font-size: 2.5em; color: #003366; margin-bottom: 25px; font-weight: 500;">
                Solicite Seu Estudo Bíblico Gratuito
            </h2>
            <p style="font-family: 'Roboto', sans-serif; font-size: 1.15rem; line-height: 1.8; color: #333; margin: 0 auto 20px;">
                Deseja aprofundar seu conhecimento na Palavra de Deus? Oferecemos <strong>estudos bíblicos gratuitos</strong> que podem ser realizados da forma que preferir!
            </p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin: 30px auto 0;">
                <div style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <span style="font-size: 2.5em; display: block; margin-bottom: 10px;">🏠</span>
                    <h3 style="font-family: 'Roboto', sans-serif; font-size: 1.1em; color: #003366; font-weight: 600; margin-bottom: 8px;">Presencial</h3>
                    <p style="font-family: 'Roboto', sans-serif; font-size: 0.95rem; color: #666; margin: 0;">Na sua residência ou na igreja</p>
                </div>

                <div style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <span style="font-size: 2.5em; display: block; margin-bottom: 10px;">💻</span>
                    <h3 style="font-family: 'Roboto', sans-serif; font-size: 1.1em; color: #003366; font-weight: 600; margin-bottom: 8px;">Online</h3>
                    <p style="font-family: 'Roboto', sans-serif; font-size: 0.95rem; color: #666; margin: 0;">Por videoconferência</p>
                </div>

                <div style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <span style="font-size: 2.5em; display: block; margin-bottom: 10px;">📱</span>
                    <h3 style="font-family: 'Roboto', sans-serif; font-size: 1.1em; color: #003366; font-weight: 600; margin-bottom: 8px;">Remoto</h3>
                    <p style="font-family: 'Roboto', sans-serif; font-size: 0.95rem; color: #666; margin: 0;">Por telefone ou mensagem</p>
                </div>
            </div>
            <p style="font-family: 'Roboto', sans-serif; font-size: 1.1em; color: #003366; font-weight: 600; margin: 30px 0 0;">
                📝 Preencha o formulário abaixo e entraremos em contato com você!
            </p>
        </div>

        <!-- FORMULÁRIO -->
        <div style="max-width: 700px; margin: 0 auto;">
            <form action="{{ route('estudo-biblico.enviar') }}" method="POST" style="background: #fff; border: 2px solid #e0e0e0; border-radius: 15px; padding: 40px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                @csrf
                <h2 style="font-family: 'Bebas neue', sans-serif; font-size: 2em; color: #003366; text-align: center; margin-bottom: 30px; font-weight: 500;">Preencha o formulário</h2>
                <div class="container_label">
                    <label for="nome">Nome</label>
                    <div class="container_input">
                        <i class='bx bx-user'></i>
                        <input type="text" name="nome" id="nome" placeholder="Nome" required>
                    </div>
                </div>

                <div class="container_label">
                    <label for="email">Email</label>
                    <div class="container_input">
                        <i class='bx bx-envelope'></i>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="container_label">
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" id="mensagem" placeholder="Mensagem" rows="10" required></textarea>
                </div>

                <button type="submit">Enviar Mensagem</button>
            </form>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    // Validação do formulário
    document.querySelector('form').addEventListener('submit', function(e) {
        const email = document.getElementById('email').value.trim();

        if (email.length === 0 || !email.includes('@')) {
            alert('Por favor, insira um e-mail válido.');
            e.preventDefault();
        }
    });
</script>
@endpush

