@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Escola Sabatina')

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

    .conteiner_licoes {
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 32px;
        margin: 20px 0;
        flex-wrap: wrap;
    }
    .licao_card {
        background: linear-gradient(135deg, #868a91ff 0%, #003366 100%);
        border-radius: 11px;
        width: 220px;
        min-height: 150px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        margin-bottom: 16px;
    }
    .licao_card h3 {
        color: #f1c9a1ff;
        font-size: 1.2rem;
        font-family: 'Montserrat', Arial, sans-serif;
        font-weight: 700;
        margin: 0 0 24px 0;
        text-align: center;
        letter-spacing: 1px;
    }
    .licao_card .licao_btn {
        background: #f1c9a1ff;
        color: #222;
        border: none;
        border-radius: 8px;
        padding: 12px 28px;
        font-size: 1rem;
        font-weight: 700;
        font-family: 'Montserrat', Arial, sans-serif;
        margin-bottom: 8px;
        margin-top: 0;
        cursor: pointer;
        box-shadow: 0 1px 4px rgba(0,0,0,0.04);
        transition: background 0.2s, color 0.2s;
    }
    .licao_card .licao_btn:hover {
        background: #e7ac6dff;
        color: #111;
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

    blockquote{
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
    <h2>Convite Especial: Venha Crescer Conosco na Escola Sabatina!</h2>
    <div class="container_text_estudo_biblico" style="width: 80%;">

        <p>
            A Escola Sabatina é um presente de Deus para você! Não é apenas um momento de estudo, mas um encontro semanal que alimenta a alma, fortalece a fé e nos une como família em Cristo. Se você deseja mergulhar nas riquezas da Bíblia, compartilhar experiências com outras pessoas e descobrir como viver a missão de Deus, este é o seu lugar!
        </p>

        <h3>Por Que Participar?</h3>
        <ul class="topicos_estudo_biblico">
            <li><p><strong>Conheça a Deus mais profundamente:</strong> Cada lição é uma jornada de descoberta das verdades eternas que transformam corações.</p></li>
            <li><p><strong>Viva em comunhão:</strong> Compartilhe alegrias, desafios e orações em um ambiente acolhedor e amoroso.</p></li>
            <li><p><strong>Seja um missionário:</strong> Aprenda a levar esperança ao mundo, começando pela sua família e comunidade.</p></li>
            <li><p><strong>Cresça com Cristo:</strong> Aplicar a Bíblia no dia a dia fortalece seu relacionamento com Ele e renova seu propósito.</p></li>
        </ul>

        <h3>Um Convite para Todos!</h3>
        <p>
            Não importa sua idade, cultura ou conhecimento bíblico: a Escola Sabatina tem um espaço para você! Com materiais preparados com carinho, desde as crianças até os adultos são inspirados a refletir a luz de Jesus em cada área da vida.
        </p>

        <h3>Como Participar?</h3>
        <ul class="topicos_estudo_biblico">
            <li><p><strong>Compareça aos sábados:</strong>Junte-se à classe da sua faixa etária e mergulhe na lição.</p></li>
            <li><p><strong>Estude em casa:</strong>Reserve um momento diário para meditar no estudo da semana.</p></li>
            <li><p><strong>Compartilhe o aprendizado:</strong>Use o que você descobre para encorajar alguém ao seu redor!</p></li>
        </ul>

        <h3>Participe!</h3>
        <p>
            A Escola Sabatina é mais que uma aula—é um instrumento de Deus para preparar seu coração para o Seu reino. Aqui, você se torna parte de uma comunidade que ora, serve e espera unida a volta de Jesus.
            <br>
            No próximo sábado, venha fazer parte! Traga sua família, seus amigos e seu coração aberto. Juntos, seremos transformados pela Palavra e usados por Deus para nos prepararmos para a breve volta de Jesus e ajudarmos outros nessa jornada!<br><br>
            "A Tua palavra é lâmpada para os meus pés e luz para o meu caminho." (Salmos 119:105)<br><br>
            Te esperamos para aprendermos juntos!
        </p>
    </div><!--Fim container_text_estudo_biblico-->
</div><!--Fim text_estudo_biblico-->

<!-- CSS das lições movido para escola_sabatina.php -->
<div class="conteiner_licoes">
    <div class="licao_card">
        <h3>LIÇÃO DA SEMANA</h3>
        <button class="licao_btn">ASSISTA</button>
    </div>
    <div class="licao_card">
        <h3>LIÇÃO DIGITAL</h3>
        <button class="licao_btn">ACESSAR</button>
    </div>
    <div class="licao_card">
        <h3>LIÇÃO FÍSICA</h3>
        <button class="licao_btn">ACESSAR</button>
    </div>
    <div class="licao_card">
        <h3>COMENTÁRIOS</h3>
        <button class="licao_btn">ACESSAR</button>
    </div>
</div>
@endsection

@push('scripts')
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endpush

