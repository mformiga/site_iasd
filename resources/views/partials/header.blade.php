<header>
    <img src="{{ asset('img/logo_iasd.png') }}" alt="">
    <nav class="navegation">
        <ul>
            <li><a href="{{ route('home') }}" style="margin: 0;">Início</a></li>
            <li><a href="{{ route('igreja') }}">A Igreja</a></li>
            <li class="btn_drop"><a href="{{ route('participe') }}">Participe <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown" style="margin-top: 6px;">
                    <li><a href="{{ route('cemab') }}">CEMAB</a></li>
                    <li><a href="{{ route('classe-novo-tempo') }}">Classe Novo Tempo</a></li>
                    <li><a href="{{ route('classe-saude') }}">Classe de Saúde</a></li>
                    <li><a href="{{ route('clube-do-livro') }}">Clube do Livro</a></li>
                    <li><a href="">Comunidades</a></li>
                    <li><a href="">Corais</a></li>
                    <li><a href="">Cursos</a></li>
                    <li><a href="{{ route('doutores-esperanca') }}">Doutores da esperança</a></li>
                    <li><a href="">MAP</a></li>
                    <li><a href="">Mulher Plena</a></li>
                </ul>
            </li>
            <li class="btn_drop"><a href="{{ route('midias') }}">Mídias <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown" style="margin-top: 6px;">
                    <li><a href="{{ route('midias.cpb') }}">CPB</a></li>
                    <li><a href="{{ route('midias.criacionismo') }}">Criacionismo</a></li>
                    <li><a href="{{ route('midias.evidencias-biblicas') }}">Evidências bíblicas</a></li>
                    <li><a href="{{ route('midias.filmes-series') }}">Filmes e séries</a></li>
                    <li><a href="{{ route('midias.profecias') }}">Profecias</a></li>
                    <li><a href="{{ route('midias.radio-tv') }}">Rádio e TV Novo Tempo</a></li>
                </ul>
            </li>
            <li><a href="{{ route('dizimos-ofertas') }}">Dízimos e Ofertas</a></li>
        </ul>
    </nav>

    <div class="container_por_do_sol">
        <img src="https://img.icons8.com/color/48/sunset.png" alt="sunset"/>
        <div class="container_info_por_do_sol">
            <h5>Pôr do Sol</h5>
            <h5 id="data"></h5>
            <h5 id="horario"></h5>
        </div>
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">
        <span id="menu-icon" class="icon-transition">
            <i id="bxicon" class='bx bx-menu'></i>
        </span>
        <span id="close-icon" class="icon-transition" style="display: none;">
            <i class='bx bx-x'></i>
        </span>
    </div>
</header>

