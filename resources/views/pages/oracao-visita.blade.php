@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Oração e Visita')

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

    span{
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
    <h2>Precisa de Oração ou Visita? Estamos Aqui para Interceder por Você!</h2>
    <div class="container_text_estudo_biblico" style="width: 80%;">

        <p>
            No Ministério de Oração, nossa missão é apoiar você em meio às dificuldades da vida. Oramos por seus pedidos, confiando no poder transformador da oração.
        </p>

        <p>
            Não carregue suas lutas sozinho(a). Deus ouve cada oração e, através da nossa comunidade, queremos ser um canal de esperança para sua vida.
        </p>
    </div><!--Fim container_text_estudo_biblico-->
</div><!--Fim text_estudo_biblico-->

<div class="container_form">
    <form action="{{ route('oracao-visita.enviar') }}" method="POST">
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
            <label for="telefone">Telefone</label>
            <div class="container_input">
                <i class='bx bx-phone' style='color:#000000'></i>  
                <input type="tel" name="telefone" id="telefone" placeholder="Telefone com DDD" required>
            </div>
        </div>

        <div class="container_label">
            <label for="email">Email</label>
            <div class="container_input">
                <i class='bx bx-envelope' style='color:#000000'></i> 
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
        </div>

        <div class="container_checkbox" style="display: flex; align-items: center; margin-top: 20px;">
            <input type="checkbox" name="contato_pastor" value="1" style="width: 13px; margin-right: 6px;">
            <span>Deseja ser contatado por um dos nossos pastores</span>
        </div>

        <div class="container_label">
            <label for="pedido">Pedido de oração</label>
            <textarea name="pedido" id="pedido" placeholder="Faça seu pedido..." rows="10" required></textarea>
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

