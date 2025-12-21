@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Estudo Bíblico')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
    
    .text_estudo_biblico{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    h2{
        margin: 4vh 0 3vh;
        font-family: 'Bebas neue';
        font-size: 2.7em;
        color: #003366;
        font-weight: 500;
    }

    h3{
        margin: 4vh 0 3vh;
        font-family: "Noto Sans", sans-serif;
        font-size: 1.4em;
        color: #003366;
        font-weight: 600;
    }

    p{
        width: 100%;
        margin-bottom: 3vh;
        text-align: justify;
        font-family: "roboto", sans-serif;
        font-size: 1.1rem;
    }

    .topicos_estudo_biblico{
        margin-left: 20px;
    }

    .topicos_estudo_biblico li{
        list-style-type: disc;
    }

    .container_form{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 1px solid rgb(192, 191, 191);
        border-radius: 11px;
        padding: 30px 50px 0 50px;
        margin: 4vh 0 8vh 0;
    }

    .container_label{
        width: 100%;
        display: flex;
        flex-direction: column;
        margin-top: 20px;
    }

    label{
        margin-bottom: 4px;
        font-family: 'Roboto';
    }

    .container_input{
        position: relative;
    }

    .container_input i{
        position: absolute;
        bottom: 6px;
        left: 6px;
    }

    input{
        width: 100%;
        padding: 6px 0;
        border: 1px solid rgb(192, 191, 191);
        text-indent: 26px;
        border-radius: 8px;
    }

    textarea{
        text-indent: 6px;
        border: 1px solid rgb(192, 191, 191);
        padding: 6px 0;
        border-radius: 8px;
    }

    button{
        background-color: #001531;
        color: #fff;
        margin: 15px 0 25px 0;
        padding: 12px 50px;
        border-radius: 6px;
        cursor: pointer;
        transition: .4s;
    }

    button:hover{
        background-color: #003366;
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Estudo Bíblico" style="width: 100%;">

<div class="text_estudo_biblico">
    <h2>Estudo Biblíco: Uma Jornada para Conectar-se com Deus</h2>
    <div class="container_text_estudo_biblico" style="width: 80%;">

        <p>
            Procurando respostas, fortalecimento espiritual ou alívio para desafios emocionais? O Estudo Bíblico é o caminho! Seja qual for sua idade ou momento de vida, aqui você encontrará um espaço acolhedor, dinâmico e adaptado às suas necessidades. Encontros presenciais na sua residência, na igreja ou online — você escolhe como participar!  
        </p>

        <h3>Por que estudar a Bíblia?</h3>
        <ul class="topicos_estudo_biblico">
            <li><p>Aprenda de forma simples como os ensinamentos de Jesus transformam vidas.</p></li>
            <li><p>Descubra respostas para questões pessoais e espirituais, guiado pelo amor de Cristo.</p></li>
            <li><p>Conecte-se com Deus de maneira prática e autêntica, em comunidade.</p></li>
        </ul>  

        <h3>Como funciona?</h3>
        <ul class="topicos_estudo_biblico">
            <li><p>Ambiente leve: Materiais como Bíblia e guias são fornecidos. Suas dúvidas e experiências são sempre bem-vindas!</p></li>
            <li><p>Encontros envolventes: Começamos com oração, exploramos passagens bíblicas e refletimos juntos.</p></li>
            <li><p>Transformação real: Ao final, você é incentivado a aplicar os aprendizados no dia a dia e crescer na fé.</p></li>
        </ul>

        <h3>Mais que estudo, uma experiência!</h3>
        <p>
            Aqui, cada lição é um passo para entender melhor a Palavra de Deus e seu propósito para você. Venha renovar sua esperança, encontrar apoio e caminhar mais perto dEle.  
        </p>

        <h3>Participe!</h3>
        <p>
            Seja online ou presencial, sua jornada espiritual começa agora. Descubra como a Bíblia pode iluminar sua vida!
            <br>
            Venha estudar, compartilhar e crescer na graça de Deus! 
        </p>
    </div><!--Fim container_text_estudo_biblico-->
</div><!--Fim text_estudo_biblico-->

<div class="container_form">
    <form action="{{ route('estudo-biblico.enviar') }}" method="POST">
        @csrf
        <h2 style="margin: 0;">Preencha o formulário</h2>
        <div class="container_label">
            <label for="nome">Nome</label>
            <div class="container_input">
                <i class='bx bx-user' style='color:#000000'></i>
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
            </div>
        </div>

        <div class="container_label">
            <label for="email">Email</label>
            <div class="container_input">
                <i class='bx bx-envelope' style='color:#000000'></i> 
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
@endsection

@push('scripts')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        const email = document.getElementById('email').value.trim();

        if (email.length === 0 || !email.includes('@')) {
            alert('Por favor, insira um e-mail válido.');
            e.preventDefault();
        }
    });
</script>
@endpush

