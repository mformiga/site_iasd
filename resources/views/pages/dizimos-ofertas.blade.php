@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Dízimos e Ofertas')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dizimos_ofertas.css') }}">
@endpush

@section('content')
<img src="{{ asset('img/cards/estudo_biblico/estudo_biblico_header.png') }}" alt="Dízimos e Ofertas" style="width: 100%;">
<main class="main-dizimos-ofertas">
    <div class="container-main-dizimos-ofertas">
        <h2>Dízimos e Ofertas: Adoração, Fidelidade e Parceria com Deus</h2>
        <p>
            Bem-vindo à nossa seção sobre Dízimos e Ofertas. Compreender e praticar a devolução dos dízimos e a entrega das ofertas é uma parte fundamental da jornada de fé e adoração para muitos cristãos, incluindo nós, Adventistas do Sétimo Dia. Mais do que uma obrigação, vemos esses atos como uma resposta de amor, gratidão e reconhecimento de que tudo o que temos pertence a Deus. É uma forma de nos associarmos a Ele em Sua missão de espalhar o Evangelho e cuidar das necessidades do mundo.
        </p>

        <section id="o-que-e-dizimo">
            <h3>O que é o Dízimo?</h3>
            <p>A palavra "dízimo" significa literalmente "a décima parte". Biblicamente, refere-se à devolução de 10% de toda a nossa renda (ou "bênçãos materiais" recebidas) a Deus. Não é um pagamento, mas um ato de reconhecimento de que Ele é o Dono e Provedor de tudo.</p>
        </section>

        <section id="base-biblica-dizimo">
            <h3>Base Bíblica</h3>
            <p>O princípio do dízimo é anterior à lei mosaica, praticado por patriarcas como Abraão (Gênesis 14:20) e Jacó (Gênesis 28:22). Foi formalizado na lei de Israel (Levítico 27:30, Números 18:21) e reafirmado por Jesus (Mateus 23:23) e pelos profetas, como Malaquias, que nos convida a experimentar a fidelidade de Deus:</p>
            <blockquote style="display: inline-block;">"Trazei todos os dízimos à casa do tesouro, para que haja mantimento na minha casa; e provai-me nisto, diz o Senhor dos Exércitos, se eu não vos abrir as janelas do céu e não derramar sobre vós bênção sem medida."<span class="referencia-biblica" style="display: inline-block;">— Malaquias 3:10</span></blockquote>
        </section>

        <section id="proposito-principal-dizimo">
            <h3>Propósito Principal</h3>
            <p>Conforme as Escrituras e a prática da Igreja Adventista, o dízimo é primariamente destinado ao sustento do ministério evangélico – pastores, obreiros bíblicos e missionários – permitindo a pregação do evangelho em todo o mundo. É o sistema divino para financiar Sua obra na Terra.</p>
        </section>

        <section id="o-que-sao-ofertas">
            <h3>O que são as Ofertas?</h3>
            <p>Diferente do dízimo (que é 10%), as ofertas são contribuições voluntárias, dadas de coração, além do dízimo. Elas representam nossa gratidão pelas bênçãos de Deus e nosso desejo de apoiar causas específicas da igreja e necessidades humanitárias. O valor ou porcentagem é decidido individualmente, conforme Deus toca o coração de cada um.</p>
        </section>

        <section id="base_biblica">
            <h3>Base Bíblica</h3>
            <p>A Bíblia está repleta de exemplos e incentivos à oferta voluntária. O apóstolo Paulo orienta:</p>
            <blockquote style="display: inline-block;">"Cada um contribua segundo tiver proposto no coração, não com tristeza ou por necessidade; porque Deus ama a quem dá com alegria."<span class="referencia-biblica" style="display: inline-block;">— 2 Coríntios 9:7</span></blockquote>
            <p>As ofertas demonstram nosso amor a Deus e ao próximo.</p>
        </section>

        <section id="proposito" style="width: 100%;">
            <h3>Propósito e destino das Ofertas</h3>
            <ul class="topicos_dizimos_ofertas">
                <li><p>Necessidades da igreja local (manutenção, materiais, ministérios locais).</p></li>
                <li><p>Projetos missionários específicos (nacionais e internacionais).</p></li>
                <li><p>Ação social e ajuda humanitária (ADRA, ASA).</p></li>
                <li><p>Construção e reforma de templos e escolas.</p></li>
                <li><p>Outros projetos especiais definidos pela comunidade da igreja.</p></li>
            </ul>
        </section>

        <section id="por-que-dizimar-ofertar">
            <h3>Por que devolver o Dízimo e entregar Ofertas?</h3>
            <p>
                Contribuir é mais do que um dever, é um privilégio que traz múltiplos benefícios espirituais:
            </p>
            <p><strong>Ato de Adoração:</strong> Dar é uma forma tangível de adorar a Deus, reconhecendo Sua grandeza e bondade.</p>
            <p><strong>Expressão de Fé e Confiança:</strong> Ao devolvermos o dízimo e ofertarmos, demonstramos nossa confiança de que Deus continuará a prover nossas necessidades.</p>
            <p><strong>Desenvolvimento do Caráter:</strong> A generosidade combate o egoísmo e o materialismo, moldando nosso caráter à semelhança de Cristo.</p>
            <p><strong>Parceria na Missão:</strong> Contribuímos diretamente para o avanço da obra de Deus na Terra, tornando-nos Seus colaboradores.</p>
            <p><strong>Obediência por Amor:</strong> É uma resposta de amor aos mandamentos e princípios de Deus, motivada pela gratidão por Sua salvação.</p>
            <p><strong>Bênçãos Prometidas:</strong> Deus promete abençoar aqueles que são fiéis (Malaquias 3:10-12). Essas bênçãos podem ser espirituais, materiais e, acima de tudo, a alegria de participar da Sua obra.</p>
        </section>

        <section id="como">
            <h3>Como Contribuir na IASD Central?</h3>
            <p>Entendemos a importância de facilitar seu ato de adoração através da contribuição. Aqui estão as formas disponíveis em nossa igreja:</p>
            <ul>
                <li class="seven_me"><strong>Online:</strong> Através do sistema oficial da igreja. É seguro, prático e rápido.<a href="">Acesse o 7me</a></li>
                <li><strong>Envelope de Dízimos e Ofertas:</strong> Disponíveis na igreja. Preencha seus dados e deposite nos gazofilácios durante os cultos ou entregue na tesouraria.</li>
                <li><strong>Transferência Bancária/PIX:</strong> Para sua conveniência, utilize os seguintes dados: <br><em>[Informar aqui os dados bancários ou chave PIX da igreja, se aplicável e seguro publicamente]</em>.</li>
                <li><strong>Tesouraria da Igreja:</strong> Você pode entregar sua contribuição diretamente na tesouraria durante o horário de funcionamento: <br><em>[Informar dias e horários de funcionamento da tesouraria, se houver]</em>.</li>
            </ul>

            <h3>Transparência</h3>
            <p>Garantimos que todos os recursos são administrados com responsabilidade e transparência, seguindo as diretrizes financeiras da Igreja Adventista do Sétimo Dia, com auditorias regulares. Relatórios financeiros podem ser consultados junto à tesouraria.</p>
        </section>

        <section id="conclusao">
            <h3>Reflita</h3>
            <p>Devolver o dízimo e entregar ofertas são privilégios que nos conectam mais profundamente com Deus e Sua missão. Que possamos experimentar a alegria e as bênçãos de sermos fiéis mordomos dos recursos que Ele nos confia. Se tiver dúvidas ou precisar de mais informações, não hesite em procurar a tesouraria ou um dos líderes de nossa igreja.</p>

            <blockquote style="text-align: center; font-size: 1.1em; border: none; margin-top: 30px;">
                <span style="display: inline-block;">"[...] mais bem-aventurado é dar que receber."</span>
                <span class="referencia-biblica" style="display: inline-block;">— Atos 20:35</span>
            </blockquote>
        </section>
    </div>
</main>
@endsection

