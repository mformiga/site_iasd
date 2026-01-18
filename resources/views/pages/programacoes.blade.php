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

    .evento-descricao br {
        display: block;
        margin: 8px 0;
        content: '';
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

    .destaque-badge {
        display: inline-block;
        background: #ff6b6b;
        color: #fff;
        padding: 4px 12px;
        border-radius: 15px;
        font-size: 0.85em;
        font-weight: 600;
        margin-left: 10px;
        vertical-align: middle;
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

    .info-section {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        padding: 50px 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .info-section h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #fff;
        margin-bottom: 20px;
        font-weight: 500;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .info-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #f8f9fa;
        margin-bottom: 25px;
        line-height: 1.8;
    }

    .contato-info {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        padding: 40px;
        border-radius: 15px;
        margin: 50px 0;
        text-align: center;
        color: #fff;
    }

    .contato-info h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2em;
        color: #fff;
        margin-bottom: 20px;
        font-weight: 500;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .contato-info p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #fff;
        margin-bottom: 10px;
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

        .info-section {
            padding: 40px 20px;
        }
    }
</style>
@endpush

@section('content')
<img src="{{ asset('img/cards/asa/asa_header.png') }}" alt="Programações 2026" style="width: 100%;">

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
            <button class="filtro-btn" data-mes="08">Agosto</button>
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
                <span class="evento-data">22/01</span>
                <div class="evento-titulo">Formação de Professores do DF</div>
                <div class="evento-descricao">
                    <strong>[Educação Adventista de Brasília e Entorno]</strong>
                </div>
            </div>

            <!-- Fevereiro -->
            <div class="mes-header" data-mes="02">Fevereiro</div>
            <div class="evento-card" data-mes="02">
                <span class="evento-data">07/02</span>
                <div class="evento-titulo">APlaC Integrada – Encontro de Líderes 2026</div>
                <div class="evento-descricao">
                    <strong>Macrorregiões:</strong> Centro e Sobradinho<br>
                    <strong>Horário:</strong> 15h<br>
                    <strong>Público-alvo:</strong><br>
                    1. Ancionato / Diretores de Grupo<br>
                    2. Líderes: ASA, MAP, Comunicação e Ministério Pessoal<br>
                    3. Líderes Distritais: MM, MF, MCA (1 por distrito)
                </div>
            </div>

            <div class="evento-card" data-mes="02">
                <span class="evento-data">11/02</span>
                <div class="evento-titulo">Simpósio MAP</div>
                <div class="evento-descricao">
                    Ministério das Possibilidades
                </div>
            </div>

            <div class="evento-card" data-mes="02">
                <span class="evento-data">13 a 18/02</span>
                <div class="evento-titulo">Retiro Espiritual – CATRE</div>
            </div>

            <div class="evento-card" data-mes="02">
                <span class="evento-data">19 a 28/02</span>
                <div class="evento-titulo">10 Dias de Oração e 10 Horas de Jejum</div>
            </div>

            <div class="evento-card" data-mes="02">
                <span class="evento-data">28/02</span>
                <div class="evento-titulo">Vigília de Oração</div>
            </div>

            <!-- Março -->
            <div class="mes-header" data-mes="03">Março</div>
            <div class="evento-card" data-mes="03">
                <span class="evento-data">01/03</span>
                <div class="evento-titulo">Convenção das Novas Gerações</div>
                <div class="evento-descricao">
                    <strong>MDA e Ministério Jovem</strong>
                </div>
            </div>

            <div class="evento-card" data-mes="03">
                <span class="evento-data">08/03</span>
                <div class="evento-titulo">Convenção Escola Sabatina</div>
            </div>

            <div class="evento-card" data-mes="03">
                <span class="evento-data">21/03</span>
                <div class="evento-titulo">Dia Mundial do Jovem Adventista</div>
            </div>

            <div class="evento-card" data-mes="03">
                <span class="evento-data">22/03</span>
                <div class="evento-titulo">Formação Recepção | Discipulado e Missão</div>
            </div>

            <div class="evento-card" data-mes="03">
                <span class="evento-data">28/03 a 04/04</span>
                <div class="evento-titulo">Semana Santa</div>
            </div>

            <!-- Maio -->
            <div class="mes-header" data-mes="05">Maio</div>
            <div class="evento-card" data-mes="05">
                <span class="evento-data">09/05</span>
                <div class="evento-titulo">Congresso de Liberdade Religiosa</div>
            </div>

            <div class="evento-card" data-mes="05">
                <span class="evento-data">10/05</span>
                <div class="evento-titulo">Encontro de Ancionato e Diretores de Grupos</div>
            </div>

            <!-- Junho -->
            <div class="mes-header" data-mes="06">Junho</div>
            <div class="evento-card" data-mes="06">
                <span class="evento-data">14/06</span>
                <div class="evento-titulo">Investidura de Liderança</div>
                <div class="evento-descricao">
                    <strong>Ministério da Criança</strong>
                </div>
            </div>

            <div class="evento-card" data-mes="06">
                <span class="evento-data">21/06</span>
                <div class="evento-titulo">Formação Liderança de Aventureiros | Investidura de Liderança</div>
            </div>

            <!-- Agosto -->
            <div class="mes-header" data-mes="08">Agosto</div>
            <div class="evento-card" data-mes="08">
                <span class="evento-data">29/08</span>
                <div class="evento-titulo">Almoço de Universitários</div>
            </div>

            <div class="evento-card" data-mes="08">
                <span class="evento-data">29/08</span>
                <div class="evento-titulo">Congresso SVA</div>
            </div>

            <!-- Outubro -->
            <div class="mes-header" data-mes="10">Outubro</div>
            <div class="evento-card" data-mes="10">
                <span class="evento-data">03/10</span>
                <div class="evento-titulo">FEMUSA – Festival de Música</div>
            </div>

            <div class="evento-card" data-mes="10">
                <span class="evento-data">25/10</span>
                <div class="evento-titulo">Investidura do Ministério do Adolescente</div>
            </div>

            <!-- Novembro -->
            <div class="mes-header" data-mes="11">Novembro</div>
            <div class="evento-card" data-mes="11">
                <span class="evento-data">07/11</span>
                <div class="evento-titulo">Congresso Comunidade Teen</div>
                <div class="evento-descricao">
                    <strong>Novas Gerações</strong>
                </div>
            </div>

            <div class="evento-card" data-mes="11">
                <span class="evento-data">28/11</span>
                <div class="evento-titulo">Celebração Secretaria de Excelência</div>
            </div>

            <!-- Dezembro -->
            <div class="mes-header" data-mes="12">Dezembro</div>
            <div class="evento-card" data-mes="12">
                <span class="evento-data">12/12</span>
                <div class="evento-titulo">Encontro Distrital</div>
                <div class="evento-descricao">
                    <strong>Ministério da Criança e do Ministério do Adolescente</strong>
                </div>
            </div>

            <div class="evento-card" data-mes="12">
                <span class="evento-data">13/12</span>
                <div class="evento-titulo">Encontro de Casais CelebrAPlaC</div>
            </div>

            <div class="evento-card" data-mes="12">
                <span class="evento-data">17/12</span>
                <div class="evento-titulo">Culto de Gratidão e Confraternização da APlaC</div>
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
