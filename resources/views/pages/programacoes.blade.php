@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Programações 2026')

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');

    .programacoes-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .programacoes-intro {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .programacoes-intro h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .programacoes-intro p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        text-align: center;
        max-width: 900px;
        margin: 0 auto;
    }

    .calendario-section {
        margin: 20px 0;
    }

    .calendario-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #003366;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
    }

    .mes-header {
        grid-column: 1 / -1;
        text-align: center;
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #003366;
        margin: 10px 0 20px 0;
        padding: 15px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 10px;
        font-weight: 500;
    }

    .calendario-grid {
        display: grid;
        gap: 25px;
        margin-bottom: 40px;
    }

    .evento-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative;
        overflow: hidden;
    }

    .evento-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 6px;
        background: linear-gradient(180deg, #003366 0%, #1b4472 100%);
    }

    .evento-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .evento-data {
        display: inline-block;
        background: linear-gradient(135deg, #003366 0%, #001531 100%);
        color: #fff;
        padding: 8px 20px;
        border-radius: 25px;
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.3em;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .evento-titulo {
        font-family: 'Roboto', sans-serif;
        font-size: 1.4em;
        color: #003366;
        margin-bottom: 15px;
        font-weight: 700;
        line-height: 1.4;
    }

    .evento-descricao {
        font-family: 'Roboto', sans-serif;
        font-size: 1.05rem;
        color: #555;
        line-height: 1.7;
    }

    .evento-descricao strong {
        color: #003366;
        font-weight: 600;
    }

    /* Cores diferentes para cada mês */
    .evento-card[data-mes="01"]::before {
        background: linear-gradient(180deg, #f093fb 0%, #f5576c 100%);
    }
    .evento-card[data-mes="01"] .evento-data {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    .evento-card[data-mes="01"] .evento-titulo {
        color: #f5576c;
    }

    .evento-card[data-mes="02"]::before {
        background: linear-gradient(180deg, #4facfe 0%, #00f2fe 100%);
    }
    .evento-card[data-mes="02"] .evento-data {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    .evento-card[data-mes="02"] .evento-titulo {
        color: #0099cc;
    }

    .evento-card[data-mes="03"]::before {
        background: linear-gradient(180deg, #43e97b 0%, #38f9d7 100%);
    }
    .evento-card[data-mes="03"] .evento-data {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    }
    .evento-card[data-mes="03"] .evento-titulo {
        color: #2eb91a;
    }

    .evento-card[data-mes="04"]::before {
        background: linear-gradient(180deg, #fa709a 0%, #fee140 100%);
    }
    .evento-card[data-mes="04"] .evento-data {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
    }
    .evento-card[data-mes="04"] .evento-titulo {
        color: #fa709a;
    }

    .evento-card[data-mes="05"]::before {
        background: linear-gradient(180deg, #ff9a56 0%, #ff6a88 100%);
    }
    .evento-card[data-mes="05"] .evento-data {
        background: linear-gradient(135deg, #ff9a56 0%, #ff6a88 100%);
    }
    .evento-card[data-mes="05"] .evento-titulo {
        color: #ff6a88;
    }

    .evento-card[data-mes="06"]::before {
        background: linear-gradient(180deg, #a8edea 0%, #fed6e3 100%);
    }
    .evento-card[data-mes="06"] .evento-data {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .evento-card[data-mes="06"] .evento-titulo {
        color: #764ba2;
    }

    .evento-card[data-mes="07"]::before {
        background: linear-gradient(180deg, #d299c2 0%, #fef9d7 100%);
    }
    .evento-card[data-mes="07"] .evento-data {
        background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);
        color: #333;
    }
    .evento-card[data-mes="07"] .evento-titulo {
        color: #c4779e;
    }

    .evento-card[data-mes="08"]::before {
        background: linear-gradient(180deg, #ffecd2 0%, #fcb69f 100%);
    }
    .evento-card[data-mes="08"] .evento-data {
        background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        color: #333;
    }
    .evento-card[data-mes="08"] .evento-titulo {
        color: #f47b3c;
    }

    .evento-card[data-mes="09"]::before {
        background: linear-gradient(180deg, #a1c4fd 0%, #c2e9fb 100%);
    }
    .evento-card[data-mes="09"] .evento-data {
        background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
        color: #333;
    }
    .evento-card[data-mes="09"] .evento-titulo {
        color: #5b9bd5;
    }

    .evento-card[data-mes="10"]::before {
        background: linear-gradient(180deg, #a1c4fd 0%, #c2e9fb 100%);
    }
    .evento-card[data-mes="10"] .evento-data {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    .evento-card[data-mes="10"] .evento-titulo {
        color: #f5576c;
    }

    .evento-card[data-mes="11"]::before {
        background: linear-gradient(180deg, #ffecd2 0%, #fcb69f 100%);
    }
    .evento-card[data-mes="11"] .evento-data {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    .evento-card[data-mes="11"] .evento-titulo {
        color: #0099cc;
    }

    .evento-card[data-mes="12"]::before {
        background: linear-gradient(180deg, #a18cd1 0%, #fbc2eb 100%);
    }
    .evento-card[data-mes="12"] .evento-data {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .evento-card[data-mes="12"] .evento-titulo {
        color: #764ba2;
    }

    .filtro-section {
        background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
        padding: 30px;
        border-radius: 15px;
        margin: 40px 0;
        text-align: center;
        border: 2px solid #90caf9;
    }

    .filtro-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.8em;
        color: #003366;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .filtro-botoes {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }

    .filtro-btn {
        background: #fff;
        color: #003366;
        border: 2px solid #003366;
        padding: 10px 25px;
        border-radius: 25px;
        font-family: 'Roboto', sans-serif;
        font-size: 1em;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .filtro-btn:hover,
    .filtro-btn.active {
        background: #003366;
        color: #fff;
    }

    @media (max-width: 768px) {
        .programacoes-container {
            padding: 20px 15px;
        }

        .programacoes-intro {
            padding: 30px 20px;
        }

        .programacoes-intro h1 {
            font-size: 2.2em;
        }

        .evento-card {
            padding: 20px;
        }

        .evento-titulo {
            font-size: 1.2em;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/programacoes/programacoes_header.webp') }}" alt="Programações 2026" style="width: 100%; height: 200px; object-fit: cover; object-position: center;">

<div class="programacoes-container">

    <!-- Seção Introdutória -->
    <div class="programacoes-intro">
        <h1>Programações 2026</h1>
        <p>
            Confira todas as programações e eventos da IASD Central de Brasília para o ano de 2026.
            Reuniões espirituais, convenções, congressos e muito mais. Marque sua presença e cresça connosco na fé!
        </p>
    </div>

    <!-- Seção de Filtros -->
    <div class="filtro-section">
        <h3>Filtrar por Mês</h3>
        <div class="filtro-botoes">
            <button class="filtro-btn active" data-mes="todos">Todos</button>
            <button class="filtro-btn" data-mes="01">Janeiro</button>
            <button class="filtro-btn" data-mes="02">Fevereiro</button>
            <button class="filtro-btn" data-mes="03">Março</button>
            <button class="filtro-btn" data-mes="04">Abril</button>
            <button class="filtro-btn" data-mes="05">Maio</button>
            <button class="filtro-btn" data-mes="06">Junho</button>
            <button class="filtro-btn" data-mes="07">Julho</button>
            <button class="filtro-btn" data-mes="08">Agosto</button>
            <button class="filtro-btn" data-mes="09">Setembro</button>
            <button class="filtro-btn" data-mes="10">Outubro</button>
            <button class="filtro-btn" data-mes="11">Novembro</button>
            <button class="filtro-btn" data-mes="12">Dezembro</button>
        </div>
    </div>

    <!-- Calendário de Eventos -->
    <div class="calendario-section">
        <div class="calendario-grid">

            <!-- Janeiro -->
            <div class="mes-header" data-mes="01">Janeiro</div>
            <div class="evento-card" data-mes="01">
                <span class="evento-data">01/01</span>
                <div class="evento-titulo">Feriado nacional</div>
            </div>
            <div class="evento-card" data-mes="01">
                <span class="evento-data">17/01</span>
                <div class="evento-titulo">Reunião Direção Escola</div>
            </div>
            <div class="evento-card" data-mes="01">
                <span class="evento-data">17/01</span>
                <div class="evento-titulo">Sabatina e Líderes de Unidades de Ação</div>
                <div class="evento-descricao">
                    <strong>Tarde</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="01">
                <span class="evento-data">17/01</span>
                <div class="evento-titulo">Reunião Diretoria Executiva</div>
                <div class="evento-descricao">
                    <strong>Desbravadores</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="01">
                <span class="evento-data">18-22/01</span>
                <div class="evento-titulo">Concílio Pastoral UCOB e APLAC</div>
            </div>
            <div class="evento-card" data-mes="01">
                <span class="evento-data">23/01</span>
                <div class="evento-titulo">Divulgação atividades Clube Desbravadores</div>
            </div>
            <div class="evento-card" data-mes="01">
                <span class="evento-data">24/01</span>
                <div class="evento-titulo">Consagração Equipe MJ</div>
            </div>
            <div class="evento-card" data-mes="01">
                <span class="evento-data">24/01</span>
                <div class="evento-titulo">Formação Geral Vivos em Jesus</div>
            </div>
            <div class="evento-card" data-mes="01">
                <span class="evento-data">24/01</span>
                <div class="evento-titulo">1ª Reunião Comissão Missionária</div>
            </div>

            <!-- Fevereiro -->
            <div class="mes-header" data-mes="02">Fevereiro</div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">01/02</span>
                <div class="evento-titulo">Reunião da Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h
                </div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">07/02</span>
                <div class="evento-titulo">Início da 1ª Temporada da Classe Bíblica NT</div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">07/02</span>
                <div class="evento-titulo">Plantão Dr. Esperança</div>
                <div class="evento-descricao">
                    <strong>HMIB</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">07/02</span>
                <div class="evento-titulo">Reunião Diretoria Executiva</div>
                <div class="evento-descricao">
                    <strong>Desbravadores</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">07/02</span>
                <div class="evento-titulo">APLAC Integrada – Encontro de Líderes</div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">08/02</span>
                <div class="evento-titulo">Plantão Dr. Esperança</div>
                <div class="evento-descricao">
                    <strong>Hospital da Criança</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">13-16/02</span>
                <div class="evento-titulo">Retiro Espiritual</div>
                <div class="evento-descricao">
                    <strong>CATRE</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">17/02</span>
                <div class="evento-titulo">Plantão Dr. Esperança</div>
                <div class="evento-descricao">
                    <strong>HMIB</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">19-27/02</span>
                <div class="evento-titulo">10 Dias de Clamor</div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">21/02</span>
                <div class="evento-titulo">10 Horas de Jejum e Oração</div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">21/02</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">28/02</span>
                <div class="evento-titulo">Encerramento dos 10 Dias de Clamor</div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">28/02</span>
                <div class="evento-titulo">1ª Ceia do Senhor</div>
            </div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">28/02</span>
                <div class="evento-titulo">1ª Vigília do Ministério de Oração</div>
            </div>

            <!-- Março -->
            <div class="mes-header" data-mes="03">Março</div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">01/03</span>
                <div class="evento-titulo">Início das Classes Bíblicas</div>
                <div class="evento-descricao">
                    <strong>Embaixadores e Juvenis</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">01/03</span>
                <div class="evento-titulo">Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h00
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">01/03</span>
                <div class="evento-titulo">Aventureiro por 1 Dia</div>
                <div class="evento-descricao">
                    <strong>Passeio Ciclístico</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">07/03</span>
                <div class="evento-titulo">Convenção das Novas Gerações</div>
                <div class="evento-descricao">
                    <strong>MDA e Ministério Jovem</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">07/03</span>
                <div class="evento-titulo">Início das Classes Bíblicas</div>
                <div class="evento-descricao">
                    <strong>Embaixadores e Juvenis</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">08-10/03</span>
                <div class="evento-titulo">Concílio Pastoral APLAC</div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">14/03</span>
                <div class="evento-titulo">Pr. Arilton – Culto Divino e Instrução Bíblica</div>
                <div class="evento-descricao">
                    <strong>Tarde</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">21/03</span>
                <div class="evento-titulo">Dia Mundial do Jovem Adventista</div>
                <div class="evento-descricao">
                    <strong>Manhã/Tarde</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">21/03</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">22/03</span>
                <div class="evento-titulo">Formação Recepção / Discipulado e Missão</div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">28/03</span>
                <div class="evento-titulo">Musical de Páscoa</div>
                <div class="evento-descricao">
                    <strong>Ministério da Música - 19h</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">28/03</span>
                <div class="evento-titulo">2ª Reunião da Comissão Missionária</div>
                <div class="evento-descricao">
                    <strong>Tarde</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">29/03</span>
                <div class="evento-titulo">Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h00
                </div>
            </div>

            <!-- Abril -->
            <div class="mes-header" data-mes="04">Abril</div>
            <div class="evento-card" data-mes="04">
                <span class="evento-data">01-04/04</span>
                <div class="evento-titulo">Evangelismo Semana Santa</div>
            </div>
            <div class="evento-card" data-mes="04">
                <span class="evento-data">08-10/04</span>
                <div class="evento-titulo">Santa Convocação</div>
                <div class="evento-descricao">
                    <strong>Mordomia – APLAC</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="04">
                <span class="evento-data">11/04</span>
                <div class="evento-titulo">Trilha JA</div>
            </div>
            <div class="evento-card" data-mes="04">
                <span class="evento-data">11/04</span>
                <div class="evento-titulo">Simpósio MAP para líderes</div>
                <div class="evento-descricao">
                    <strong>Adventist Health</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="04">
                <span class="evento-data">15/04</span>
                <div class="evento-titulo">Rodrigo Silva</div>
                <div class="evento-descricao">
                    <strong>Evangelismo</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="04">
                <span class="evento-data">18/04</span>
                <div class="evento-titulo">Encontro de Homens</div>
                <div class="evento-descricao">
                    <strong>Ministério da Família</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="04">
                <span class="evento-data">18/04</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="04">
                <span class="evento-data">25/04</span>
                <div class="evento-titulo">Culto de Gratidão</div>
                <div class="evento-descricao">
                    <strong>Aniversário do Clube de Desbravadores</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="04">
                <span class="evento-data">25/04</span>
                <div class="evento-titulo">Jotão Regional</div>
                <div class="evento-descricao">
                    <strong>(Ministério Jovem) Tarde</strong>
                </div>
            </div>

            <!-- Maio -->
            <div class="mes-header" data-mes="05">Maio</div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">01/05</span>
                <div class="evento-titulo">Feriado nacional</div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">09/05</span>
                <div class="evento-titulo">Cerimônia de Admissão Aventureiro</div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">10/05</span>
                <div class="evento-titulo">Dia das Mães</div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">16/05</span>
                <div class="evento-titulo">Dia da Criança Adventista e do Aventureiro</div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">16/05</span>
                <div class="evento-titulo">Culto Jovem</div>
                <div class="evento-descricao">
                    <strong>Raissa Andreoli</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">16/05</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">22-24/05</span>
                <div class="evento-titulo">1º Seminário de Liberdade Religiosa no Tempo do Fim</div>
                <div class="evento-descricao">
                    <strong>Noite/Tarde/Noite</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">23/05</span>
                <div class="evento-titulo">Congresso de Liberdade Religiosa</div>
                <div class="evento-descricao">
                    <strong>APLAC</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">23/05</span>
                <div class="evento-titulo">Congresso de Liberdade Religiosa</div>
                <div class="evento-descricao">
                    <strong>APLAC – Igreja Central</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">24/05</span>
                <div class="evento-titulo">Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h00
                </div>
            </div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">30/05</span>
                <div class="evento-titulo">3ª Reunião da Comissão Missionária</div>
            </div>

            <!-- Junho -->
            <div class="mes-header" data-mes="06">Junho</div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">01-06/06</span>
                <div class="evento-titulo">Campori de Desbravadores APLAC</div>
                <div class="evento-descricao">
                    <strong>CATRE</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">06/06</span>
                <div class="evento-titulo">Jantar do Dia dos Namorados</div>
                <div class="evento-descricao">
                    <strong>JA e Ministério Família</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">20/06</span>
                <div class="evento-titulo">2ª Ceia do Senhor</div>
            </div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">20/06</span>
                <div class="evento-titulo">Sábado Universitário JA</div>
            </div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">20/06</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">27/06</span>
                <div class="evento-titulo">Dia do Ancionato</div>
            </div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">27/06</span>
                <div class="evento-titulo">Cerimônia de Investidura Aventureiros</div>
                <div class="evento-descricao">
                    <strong>16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">28/06</span>
                <div class="evento-titulo">Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h00
                </div>
            </div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">28/06</span>
                <div class="evento-titulo">2º Seminário de Liberdade Religiosa</div>
            </div>

            <!-- Julho -->
            <div class="mes-header" data-mes="07">Julho</div>
            <div class="evento-card" data-mes="07">
                <span class="evento-data">11/07</span>
                <div class="evento-titulo">Culto Jovem – Consagração dos Calebes</div>
            </div>
            <div class="evento-card" data-mes="07">
                <span class="evento-data">12-17/07</span>
                <div class="evento-titulo">Missão Calebe</div>
                <div class="evento-descricao">
                    <strong>Ministério Jovem</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="07">
                <span class="evento-data">18/07</span>
                <div class="evento-titulo">Missão Calebe</div>
                <div class="evento-descricao">
                    <strong>Ministério Jovem</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="07">
                <span class="evento-data">18/07</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="07">
                <span class="evento-data">19-24/07</span>
                <div class="evento-titulo">Missão Calebe</div>
                <div class="evento-descricao">
                    <strong>Ministério Jovem</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="07">
                <span class="evento-data">25/07</span>
                <div class="evento-titulo">4ª Reunião da Comissão Missionária</div>
            </div>
            <div class="evento-card" data-mes="07">
                <span class="evento-data">26/07</span>
                <div class="evento-titulo">Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h00
                </div>
            </div>
            <div class="evento-card" data-mes="07">
                <span class="evento-data">31/07</span>
                <div class="evento-titulo">Celebração Calebe APLAC</div>
            </div>

            <!-- Agosto -->
            <div class="mes-header" data-mes="08">Agosto</div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">01/08</span>
                <div class="evento-titulo">Celebração Calebe APLAC</div>
                <div class="evento-descricao">
                    <strong>Ginásio Nilson Nelson</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">08/08</span>
                <div class="evento-titulo">Curso de Noivos</div>
                <div class="evento-descricao">
                    <strong>APLAC</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">08/08</span>
                <div class="evento-titulo">Dia da Asa</div>
                <div class="evento-descricao">
                    <strong>APLAC</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">14-16/08</span>
                <div class="evento-titulo">ECC – Encontro de Casais com Cristo</div>
            </div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">15/08</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">22/08</span>
                <div class="evento-titulo">Musical do Coral Jovem</div>
                <div class="evento-descricao">
                    <strong>Ministério da Música - 19h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">23/08</span>
                <div class="evento-titulo">Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h00
                </div>
            </div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">29/08</span>
                <div class="evento-titulo">Congresso SVA – APLAC</div>
                <div class="evento-descricao">
                    <strong>Igreja Central - 16h</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">29/08</span>
                <div class="evento-titulo">Encerramento da 2ª Temporada da Classe Bíblica NT</div>
            </div>

            <!-- Setembro -->
            <div class="mes-header" data-mes="09">Setembro</div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">05/09</span>
                <div class="evento-titulo">Retiro Jovem</div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">07/09</span>
                <div class="evento-titulo">Feriado nacional</div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">13-18/09</span>
                <div class="evento-titulo">Semana do Lenço</div>
                <div class="evento-descricao">
                    <strong>Desbravadores</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">19/09</span>
                <div class="evento-titulo">Dia Mundial dos Desbravadores</div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">19/09</span>
                <div class="evento-titulo">Semana do Lenço</div>
                <div class="evento-descricao">
                    <strong>Desbravadores</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">19/09</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">20/09</span>
                <div class="evento-titulo">Início dos Trabalhos da Comissão de Nomeações</div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">26/09</span>
                <div class="evento-titulo">Batismo da Primavera</div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">26/09</span>
                <div class="evento-titulo">5ª Reunião da Comissão Missionária</div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">27/09</span>
                <div class="evento-titulo">Conclusão dos Trabalhos da Comissão de Nomeações</div>
            </div>
            <div class="evento-card" data-mes="09">
                <span class="evento-data">27/09</span>
                <div class="evento-titulo">Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h00
                </div>
            </div>

            <!-- Outubro -->
            <div class="mes-header" data-mes="10">Outubro</div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">03/10</span>
                <div class="evento-titulo">Sábado da Educação Adventista</div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">10/10</span>
                <div class="evento-titulo">Culto Jovem ao Ar Livre</div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">10/10</span>
                <div class="evento-titulo">Projeto Reencontro</div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">12/10</span>
                <div class="evento-titulo">Nossa Senhora Aparecida</div>
                <div class="evento-descricao">
                    <strong>Feriado</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">17/10</span>
                <div class="evento-titulo">Impacto Esperança</div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">17/10</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">24/10</span>
                <div class="evento-titulo">Sábado da Criação</div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">24/10</span>
                <div class="evento-titulo">Dia do Pastor</div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">25/10</span>
                <div class="evento-titulo">Planejamento 2027</div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">25/10</span>
                <div class="evento-titulo">Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h00
                </div>
            </div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">31/10</span>
                <div class="evento-titulo">Musical Cênico "O Grande Desapontamento"</div>
                <div class="evento-descricao">
                    <strong>19h</strong>
                </div>
            </div>

            <!-- Novembro -->
            <div class="mes-header" data-mes="11">Novembro</div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">02/11</span>
                <div class="evento-titulo">Feriado nacional</div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">07/11</span>
                <div class="evento-titulo">Festa das Primícias</div>
                <div class="evento-descricao">
                    <strong>Mordomia Cristã</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">07/11</span>
                <div class="evento-titulo">Congresso Comunidade Teen</div>
                <div class="evento-descricao">
                    <strong>APLAC - Igreja Central - 16h</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">08/11</span>
                <div class="evento-titulo">Conclusão do Planejamento 2027</div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">11-13/11</span>
                <div class="evento-titulo">Mini Semana Jovem</div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">14/11</span>
                <div class="evento-titulo">Impacto Brasília</div>
                <div class="evento-descricao">
                    <strong>APLAC</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">15/11</span>
                <div class="evento-titulo">Feriado nacional</div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">20/11</span>
                <div class="evento-titulo">Feriado nacional</div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">21/11</span>
                <div class="evento-titulo">6ª Reunião da Comissão Missionária</div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">21/11</span>
                <div class="evento-titulo">Programa "Volta para Casa Filho"</div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">21/11</span>
                <div class="evento-titulo">Culto Hospital Brasília</div>
                <div class="evento-descricao">
                    <strong>Ministério Pessoal - 16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">21/11</span>
                <div class="evento-titulo">Investidura dos Aventureiros</div>
                <div class="evento-descricao">
                    <strong>16h00</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">22/11</span>
                <div class="evento-titulo">Comissão Diretiva</div>
                <div class="evento-descricao">
                    <strong>Horário:</strong> 17h00
                </div>
            </div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">28/11</span>
                <div class="evento-titulo">In Concert – Jefferson Pilar</div>
                <div class="evento-descricao">
                    <strong>Ministério Jovem</strong>
                </div>
            </div>

            <!-- Dezembro -->
            <div class="mes-header" data-mes="12">Dezembro</div>
            <div class="evento-card" data-mes="12">
                <span class="evento-data">05/12</span>
                <div class="evento-titulo">Musical de Natal</div>
                <div class="evento-descricao">
                    <strong>Ministério da Música</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="12">
                <span class="evento-data">12/12</span>
                <div class="evento-titulo">Encontro Distrital do Ministério da Criança e Adolescente</div>
                <div class="evento-descricao">
                    <strong>APLAC – Igreja Central</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="12">
                <span class="evento-data">19/12</span>
                <div class="evento-titulo">Natal Solidário</div>
                <div class="evento-descricao">
                    <strong>Dr. Esperança</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="12">
                <span class="evento-data">19/12</span>
                <div class="evento-titulo">Mutirão de Natal</div>
            </div>
            <div class="evento-card" data-mes="12">
                <span class="evento-data">25/12</span>
                <div class="evento-titulo">Feriado nacional</div>
            </div>
            <div class="evento-card" data-mes="12">
                <span class="evento-data">26/12</span>
                <div class="evento-titulo">13º Sábado</div>
                <div class="evento-descricao">
                    <strong>Escola Sabatina</strong>
                </div>
            </div>
            <div class="evento-card" data-mes="12">
                <span class="evento-data">31/12</span>
                <div class="evento-titulo">Culto de Ação de Graças</div>
            </div>

        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Funcionalidade de filtro por mês
    const filtroBtns = document.querySelectorAll('.filtro-btn');
    const eventoCards = document.querySelectorAll('.evento-card');
    const mesHeaders = document.querySelectorAll('.mes-header');

    filtroBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class de todos os botões
            filtroBtns.forEach(b => b.classList.remove('active'));
            // Adiciona active class no botão clicado
            this.classList.add('active');

            const mes = this.getAttribute('data-mes');

            // Filtra os eventos e headers
            eventoCards.forEach(card => {
                if (mes === 'todos' || card.getAttribute('data-mes') === mes) {
                    card.style.display = 'block';
                    // Adiciona animação
                    card.style.animation = 'fadeIn 0.5s ease';
                } else {
                    card.style.display = 'none';
                }
            });

            mesHeaders.forEach(header => {
                if (mes === 'todos' || header.getAttribute('data-mes') === mes) {
                    header.style.display = 'block';
                    header.style.animation = 'fadeIn 0.5s ease';
                } else {
                    header.style.display = 'none';
                }
            });
        });
    });

    // Animação de fadeIn
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    `;
    document.head.appendChild(style);
});
</script>
@endpush
