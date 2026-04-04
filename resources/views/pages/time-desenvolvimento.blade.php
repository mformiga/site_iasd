@extends('layouts.app')

@section('title', 'Time de Desenvolvimento')

@section('content')
    <img class="page-header-img"
         src="{{ asset('img/time_dev/time_dev_header.webp') }}"
         alt="Time de Desenvolvimento"
         fetchpriority="high"
         decoding="async">

    <div class="page-container" style="padding-left: 16px; padding-right: 16px;">
        <div class="page-hero" style="margin-bottom: 22px;">
            <h1 class="page-title" style="margin-bottom: 10px;">Time de Desenvolvimento</h1>
            <p class="page-subtitle">Pessoas que ajudam a manter e evoluir este site.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px;">
            <article style="background: #fff; border-radius: 14px; padding: 16px; box-shadow: 0 8px 20px rgba(0,0,0,.06); border: 1px solid rgba(0,0,0,.06);">
                <a href="https://www.linkedin.com/in/mauricio-marinho-formiga-198b9429/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="LinkedIn do Maurício (abre em nova aba)"
                   style="display:block;">
                    <img src="{{ asset('img/time_dev/mauricio.webp') }}"
                         alt="Maurício"
                         loading="lazy"
                         decoding="async"
                         style="width: 100%; aspect-ratio: 4/3; object-fit: cover; border-radius: 12px; margin-bottom: 12px;">
                </a>
                <h2 style="margin: 0 0 6px; font-size: 1.1rem;">Maurício Marinho</h2>
                <p style="margin: 0 0 8px; opacity: .85; font-size: .92rem; line-height: 1.6;">
                    Servidor Público Federal na área de Gestão em TI, contribuindo para o desenvolvimento de sistemas que impactam milhões de cidadãos.
                </p>
                <ul style="margin: 0; padding-left: 18px; opacity: .85; font-size: .92rem; line-height: 1.8;">
                    <li style="list-style-type: disc;">Graduação em Tecnologia da Informação</li>
                    <li style="list-style-type: disc;">Mestrado em Tecnologia da Informação</li>
                    <li style="list-style-type: disc;">Especialização em Inteligência Artificial</li>
                </ul>
            </article>

            <article style="background: #fff; border-radius: 14px; padding: 16px; box-shadow: 0 8px 20px rgba(0,0,0,.06); border: 1px solid rgba(0,0,0,.06);">
                <a href="https://www.linkedin.com/in/gr%C3%A9gori-crispim-265954271/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="LinkedIn do Grégori (abre em nova aba)"
                   style="display:block;">
                    <img src="{{ asset('img/time_dev/gregori.webp') }}"
                         alt="Grégori"
                         loading="lazy"
                         decoding="async"
                         style="width: 100%; aspect-ratio: 4/3; object-fit: cover; border-radius: 12px; margin-bottom: 12px;">
                </a>
                <h2 style="margin: 0 0 6px; font-size: 1.1rem;">Grégori Crispim</h2>
                <p style="margin: 0 0 8px; opacity: .85; font-size: .92rem; line-height: 1.6;">
                    Desenvolvedor Full Stack
                </p>
                <ul style="margin: 0; padding-left: 18px; opacity: .85; font-size: .92rem; line-height: 1.8;">
                    <li style="list-style-type: disc;">Graduando Bacharelado em Engenharia de Software</li>
                    <li style="list-style-type: disc;">Graduando Bacharelado em Sistemas de Informação</li>
                    <li style="list-style-type: disc;">Graduando Licenciatura em Computação</li>
                    <li style="list-style-type: disc;">Graduando Tecnólogo em Análise e Desenvolvimento de Sistemas</li>
                </ul>
            </article>
        </div>
    </div>
@endsection

