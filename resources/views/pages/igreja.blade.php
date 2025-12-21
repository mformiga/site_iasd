@extends('layouts.app')

@section('title', 'IASD Central de Brasília - A Igreja')

@push('styles')
<style>
    .quem_somos, .historia, .que_cremos, .lideranca, .fale_conosco{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    h2{
        margin: 4vh 0 3vh;
        font-family: 'Bebas neue';
        font-size: 2.7em;
        color: #003366;
        font-weight: 500;
    }

    p{
        width: 80%;
        margin-bottom: 3vh;
        text-align: justify;
        font-family: "roboto", sans-serif;
        font-size: 1.1rem;
    }

    .img_historia{
        width: 35%;
        float: left;
        margin: 0px 15px;
    }

    .btn_historia{
        text-decoration: none;
        border: 2px solid #003366;
        border-radius: 5px;
        background-color:#003366;
        color: #fff;
        padding: 5px 8px;
    }

    .btn_historia:hover{
        background-color:rgb(19, 71, 168);
        border: 2px solid rgb(19, 71, 168);
        color: #fff;
    }

    .form_box{
        width: 80%;
        padding: 40px;
    }

    form{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .input-box{
        position: relative;
        width: 60%;
        height: 50px;
        border-bottom: 3px solid #003366;
        margin: 25px 0;
    }

    .input-box label{
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        font-size: 1.3em;
        color: #162938;
        font-weight: 600;
        pointer-events: none;
        transition: 0.5s;
    }

    .input-box input:focus~label,
    .input-box input:valid~label{
        top: -5px;
    }

    .input-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        color: #162938;
        font-weight: 600;
        padding: 0 35px 0 5px;
    }

    .input-box .icon{
        position: absolute;
        right: 8px;
        font-size: 1.6em;
        color: #162938;
        line-height: 57px;
    }

    .input-textarea{
        position: relative;
        width: 60%;
        height: auto;
        border: 3px solid #003366;
        margin: 25px 0;
        margin-top: 50px;
    }

    textarea{
        width: 98%;
        max-width: 98%;
        background-color: transparent;
        border: none;
        padding: 1%;
    }

    textarea:focus {
        outline: none;
        border: none;
        box-shadow: none;
    }

    .input-textarea label{
        position: absolute;
        top: -14%;
        left: 5px;
        transform: translateY(-50%);
        font-size: 1.3em;
        color: #162938;
        font-weight: 600;
        pointer-events: none;
        transition: 0.5s;
    }

    .input-textarea input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        color: #162938;
        font-weight: 600;
        padding: 10px;
    }

    .input-textarea .icon{
        position: absolute;
        top: -29%;
        right: 1.1%;
        font-size: 1.6em;
        color: #162938;
        line-height: 57px;
    }

    .termos{
        width: 60%;
    }

    .btn_submit{
        background-color: #003366;
        color: #fff;
        font-size: 1.2em;
        padding: 10px 30px;
        border-radius: 5px;
        margin-top: 3vh;
        border: none;
    }

    .btn_submit:hover{
        background-color:rgb(19, 71, 168);
        cursor: pointer;
    }

    input[type="checkbox"]{
        cursor: pointer;
        margin-right: 5px;
    }

    @media (max-width: 790px){
        .form_box{
            width: 100%;
        }
    }

    @media (max-width: 500px){
        .input-box{
            width: 80%;
        }

        .input-textarea{
            width: 80%;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/igreja/igreja.png') }}" alt="igreja Adeventista do Sétimo Dia Central de Brasília" style="width: 100%;">

<div class="quem_somos">
    <h2>Quem somos</h2>
    
    <p>A Igreja Adventista do Sétimo Dia é uma igreja cristã protestante com atuação mundial que teve suas primeiras raízes entre as décadas de 1850 e 1860, concomitantemente nos Estados Unidos e na Europa. Seu início se deu a partir de um grupo composto por homens e mulheres de várias denominações religiosas, estudiosos da Bíblia, que em 1863 organizou e oficializou uma estrutura denominacional, passando a adotar o nome "Igreja Adventista do Sétimo Dia". Dentre suas principais doutrinas estão: a crença na Bíblia, inspirada por Deus; a Trindade (Pai, Filho e Espírito Santo); e Jesus Cristo como salvador da humanidade por sua morte, ressurreição e retorno a esta Terra.</p>

    <p>Administrativamente a igreja é formada a partir dos seus membros, que por sua vez formam as igrejas (IASD Central de Brasília, por exemplo). Um conjunto de igrejas numa determinada região geográfica forma uma Associação (Associação Planalto Central) e um grupo de Associações forma uma União (União Centro Oeste Brasileira). Acima das Uniões está o último nível hierárquico e instância deliberativa máxima, que é chamada Conferência Geral, da qual fazem parte as 9 Divisões (Divisão SulAmerica), nas quais o mundo é dividido. Há unidade de doutrinas, preceitos, regulamentos e orientação administrativa entre todas as igrejas adventistas do mundo.</p>

    <p>No Brasil, a mensagem adventista chegou por meio de impressos que ingressaram nas colônias de imigrantes alemães e austríacos, nos estados de Santa Catarina, São Paulo e Espírito Santo. Na última estatística em 2021, eram 21,9 milhões de membros em 212 países sendo que, o Brasil é o país com maior número de adventistas no mundo (https://www.adventist.org/statistics/)</p>
</div>

<div class="historia">

    <h2>Nossa História</h2>
    
        <p><img src="{{ asset('img/igreja/inauguracao.png') }}" alt="inauguração" class="img_historia" style="margin-left: 0px;">Era o dia 08 de dezembro de 1968. A Cidade de Brasília, a nova Capital Federal do Brasil contava com apenas oito anos de inaugurada. Na linguagem maternal, estava apenas engatinhando. Estávamos vivendo uma nova época, cheia de expectativas e vislumbres de um futuro promissor. Havia chegado, finalmente, o tão almejado dia da inauguração do grande Templo da Igreja Adventista do Sétimo Dia, onde Cultos Divinos seriam celebrados para honra e glória do Senhor Deus Triúno, o TodoPoderoso.<br><br><br>

        Assim a ordem Divina está escrita: "E Me farão um Santuário para que Eu habite no meio deles" exarada no Livro de Êxodo 25:8, estava sendo cumprida.<br><br><br>

        Pelo exercício da fé e pelo esforço determinado de muitos, a magnífica realidade ali estava presente, numa demonstração de que aquela máxima citada pelo Apóstolo Paulo aos Filipenses capítulo 4, verso 13, inspirada pelo Espírito da Profecia, de que, "Tudo posso nAquele que me fortalece", estava sendo transformada em uma verdade deslumbrante, real, concreta esplendorosa, sublime, bem presente, cheia de luz, "e a Glória do Senhor Deus encheu o Templo" (II Crônicas 5:14).<br><br><br>

        <img src="{{ asset('img/igreja/construcao.png') }}" alt="construção igreja" class="img_historia" style="float: right; margin-right: 0px;">Naquele dia esta bela Igreja, esta Casa de Deus, nova, exuberante e confortável, estava pronta para ser dedicada ao Senhor Deus; e assim foi, para honra e glória do nosso Pai Eterno, a quem tudo devemos.<br><br><br>
        
        O terreno onde está construída a Igreja tem a área total de 25.000 m2, medindo 100 metros de frente por 250 metros de fundos, foi uma doação do Governo do Brasil à União Sul  Brasileira, com a intermediação incansável do saudoso irmão Dr. João Batista Clayton Rossi, Procurador da República.<br><br><br>
        
        De acordo com as informações colhidas com o Pr. Wilson Sarli, então Presidente da Missão Brasil Central da IASD, um dos vespertinos da Capital Federal anunciou: "Igreja Adventista inaugura Templo e reúne fiéis do DF". E acrescenta: "Foi inaugurada, às 11 horas de ontem, na Avenida L2 Sul, o novo Templo da Igreja Adventista, com o descerramento da fita pelo presidente mundial daquela Igreja, Pastor Roberto H. Pierson, e o Senador Carvalho Pinto, especialmente convidado para a cerimônia".<br><br>

        <img src="{{ asset('img/igreja/coral_taguatinga.png') }}" alt="coral inauguração" class="img_historia" style="margin-left: 0px;">Conforme informações colhidas, cinco ônibus chegaram de várias partes do Estado de Goiás, trazendo irmãos para a cerimônia de inauguração, além de mais outros dez ônibus e inúmeros carros particulares com pessoas de outros Estados.<br><br><br>

        Após o descerramento da fita, a grande porta de vidro foi aberta e o Coral da Igreja Adventista de Taguatinga entoou o hino de nº 18, do então Hinário Cantai ao Senhor: SANTO, SANTO, SANTO.<br><br>
        
        <a href="" class="btn_historia">Leia mais aqui</a></p>
</div>

<div class="que_cremos">
    <h2>Em que cremos</h2>

    <p>Os adventistas do sétimo dia aceitam a Bíblia como sua regra de fé e prática, e mantêm crenças fundamentais, como ensinam as Sagradas Escrituras. Essas crenças, aqui expostas, constituem a visão que a Igreja Adventista sustenta com respeito aos ensinos bíblicos.</p>
</div>
<div class="lideranca">
    <h2>Liderança</h2>
    <img src="{{ asset('img/igreja/lideres.png') }}" alt="lideres" style="width: 80%;">
</div>
<div class="fale_conosco">
    <h2>Fale conosco</h2>

    <div class="form_box">
        <form action="{{ route('contato.enviar') }}" method="POST">
            @csrf
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="person"></ion-icon>
                </span>
                <input type="text" name="nome" id="nome" required>
                <label for="nome">Nome</label>
            </div><!--input-box-->

            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="text" name="email" id="email" required>
                <label for="email">Email</label>
            </div><!--input-box-->

            <div class="input-box">
                <span class="icon">
                    <ion-icon name="call"></ion-icon>
                </span>
                <input type="text" name="telefone" id="telefone" required>
                <label for="telefone">Telefone</label>
            </div><!--input-box-->

            <div class="input-box">
                <span class="icon">
                    <ion-icon name="clipboard"></ion-icon>
                </span>
                <input type="text" name="assunto" id="assunto" required>
                <label for="assunto">Assunto</label>
            </div><!--input-box-->

            <div class="input-textarea">
                <span class="icon">
                    <ion-icon name="send"></ion-icon>
                </span>
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem" cols="30" rows="10" maxlength="255" required></textarea>
            </div><!--input-box-->

            <div class="termos">
                <label><input type="checkbox" required>Lí e aceito os termos</label>
                <a href="#">Política de Privacidade</a>
            </div><!--termos-->
            
            <button type="submit" class="btn_submit">Enviar</button>
        </form>
    </div><!--form_box-->
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

