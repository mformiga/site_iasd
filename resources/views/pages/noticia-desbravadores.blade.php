@extends('layouts.app')

@section('title', 'Clube de Desbravadores Cruzeiro do Sul celebra participação marcante em Campori APLaC 2026 - IASD Central de Brasília')

@section('meta-description', 'Evento de quatro dias reuniu jovens para atividades de desenvolvimento pessoal, espiritual e fortalecimento comunitário; foco agora se volta para a edição sul-americana de 2027.')

@section('og-title', 'Clube de Desbravadores Cruzeiro do Sul celebra participação marcante em Campori APLaC 2026')
@section('og-description', 'Evento de quatro dias reuniu jovens para atividades de desenvolvimento pessoal, espiritual e fortalecimento comunitário; foco agora se volta para a edição sul-americana de 2027.')
@section('og-image', asset('img/noticias/desbravadores-1.jpeg'))

@section('page-name', 'Notícias')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/noticia-page.css') }}">
@endpush

@section('content')
<div style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 20px 20px 5px 20px; text-align: center;">
    <img src="{{ asset('img/noticias/desbravadores-1.jpeg') }}" alt="Clube de Desbravadores Cruzeiro do Sul em Campori APLaC 2026" style="max-width: 800px; width: 100%; height: auto; min-height: 400px; object-fit: cover; border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 51, 102, 0.15); display: inline-block; cursor: pointer; transition: transform 0.3s, box-shadow 0.3s;" fetchpriority="high" decoding="async" class="modal-trigger" data-src="{{ asset('img/noticias/desbravadores-1.jpeg') }}" onclick="openModal('{{ asset('img/noticias/desbravadores-1.jpeg') }}')">
</div>

<div class="noticia-page-wrapper" style="margin-top: 0;">
    <div class="noticia-page-intro">
        <div class="noticia-page__breadcrumb">
            <a href="{{ route('home') }}">Início</a>
            <span class="separator">/</span>
            <span>Notícias</span>
        </div>

        <div class="noticia-page__meta">
            <span class="noticia-page__categoria">Religião &amp; Comunidade</span>
            <span class="noticia-page__data">Brasília/DF, 10/06/2026</span>
        </div>

        <h1 class="noticia-page__title">Clube de Desbravadores Cruzeiro do Sul celebra participação marcante em Campori APLaC 2026</h1>

        <p class="noticia-page__subtitle">Evento de quatro dias reuniu jovens para atividades de desenvolvimento pessoal, espiritual e fortalecimento comunitário; foco agora se volta para a edição sul-americana de 2027.</p>
    </div>

    <div class="noticia-page-content">
        <div class="noticia-page__author">
            <span>Por Redação</span>
        </div>

        <div class="noticia-page__content">
            <p><strong>Brasília —</strong> O Clube de Desbravadores Cruzeiro do Sul consolidou, na última semana, mais um marco em sua trajetória com a conclusão de sua participação no Campori. O evento, que se estendeu por quatro dias, promoveu uma imersão focada no desenvolvimento de talentos, fortalecimento de laços de amizade e, fundamentalmente, no crescimento espiritual dos jovens participantes.</p>

            <p>Segundo a coordenação do Cruzeiro do Sul, as atividades proporcionaram momentos de reflexão e experiências práticas que devem gerar impactos duradouros na formação dos Desbravadores. O encontro é apontado pela liderança como um espaço essencial para a comunhão e o exercício da cidadania cristã.</p>

            <h2>Apoio e Fortalecimento Institucional</h2>
            <p>O sucesso da expedição foi creditado ao envolvimento direto da comunidade e do corpo eclesiástico. A diretoria do Clube emitiu um agradecimento público à liderança da igreja local pelo suporte contínuo e logístico, destacando o papel dos pastores e voluntários que atuaram na linha de frente das operações diárias.</p>

            <blockquote class="noticia-page__quote">
                <p>"Temos um clube forte porque contamos com o apoio, a confiança e o envolvimento da liderança e dos pastores da nossa igreja. Isso faz toda a diferença"</p>
                <cite>— Rozilene Manzi, líder do Clube Cruzeiro do Sul</cite>
            </blockquote>

            <p>Entre os colaboradores mencionados pelo suporte direto nas diversas atividades necessárias durante o acampamento estão os pastores Lucas Alves e Hugo Rodrigues, além de membros da equipe de apoio como Karin Gorski (com o suporte da ASA - Ação Solidária Adventista), Elisangela Terto Rosa "Rosinha", José Bullón, Luigi Braga, Silóe Almeida Júnior, Alexandre Tinoco, Fábio Costa, Diego Elesbão, Luciana Marques e Mateus Castanho.</p>

            <h2>Próximos Passos: Rumo a 2027</h2>
            <p>Com o encerramento das atividades desta edição, o Clube Cruzeiro do Sul já projeta suas atenções para o próximo grande desafio do calendário oficial. A organização confirmou o início do planejamento e da preparação para o Campori da DSA (Divisão Sul-Americana), agendado para janeiro de 2027, que reunirá clubes de diversos países da América do Sul.</p>

            <figure class="noticia-page__gallery">
                <img src="{{ asset('img/noticias/desbravadores-2.jpeg') }}" alt="Atividades do Campori APLaC 2026" loading="lazy" decoding="async" width="800" height="450" style="cursor: pointer; transition: transform 0.3s, box-shadow 0.3s;" onclick="openModal('{{ asset('img/noticias/desbravadores-2.jpeg') }}')">
                <figcaption>Atividades do Campori APLaC 2026</figcaption>
            </figure>
        </div>

        <div style="text-align: center; margin-top: 40px; padding-top: 20px; border-top: 2px solid #f0f0f0;">
            <a href="{{ route('home') }}" class="back-home-btn" style="display: inline-block; padding: 14px 32px; background: linear-gradient(135deg, #003366 0%, #001531 100%); color: #fff; text-decoration: none; border-radius: 8px; font-family: 'Roboto', sans-serif; font-weight: 600; transition: transform 0.3s, box-shadow 0.3s; box-shadow: 0 4px 15px rgba(0, 51, 102, 0.2);">
                <i class="bi bi-house-door" style="margin-right: 8px;"></i>
                Voltar para Home
            </a>
        </div>
    </div>
</div>

<!-- Modal para visualização de imagem -->
<div id="imageModal" style="display: none; position: fixed; z-index: 10000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.9); backdrop-filter: blur(5px);">
    <span style="position: absolute; top: 20px; right: 35px; color: #f1f1f1; font-size: 40px; font-weight: bold; cursor: pointer; transition: 0.3s; z-index: 10001;" onclick="closeModal()">&times;</span>
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 95%; max-height: 95%;">
        <img id="modalImage" style="max-width: 100%; max-height: 95vh; width: auto; height: auto; border-radius: 8px; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);">
    </div>
</div>
@endsection

@push('scripts')
<style>
    /* Modal styles */
    #imageModal {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    #imageModal.show {
        opacity: 1;
    }

    #imageModal span:hover {
        color: #003366;
        transform: scale(1.1);
    }

    /* Button hover effect */
    .back-home-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 51, 102, 0.3) !important;
    }

    /* Image hover effects */
    .modal-trigger {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .modal-trigger:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 30px rgba(0, 51, 102, 0.25);
    }

    .noticia-page__gallery img:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 30px rgba(0, 51, 102, 0.25);
    }
</style>

<script>
    // Modal functionality
    function openModal(imageSrc) {
        var modal = document.getElementById('imageModal');
        var modalImg = document.getElementById('modalImage');

        modal.style.display = 'block';
        modalImg.src = imageSrc;

        // Prevent body scroll when modal is open
        document.body.style.overflow = 'hidden';

        // Add animation
        setTimeout(function() {
            modal.classList.add('show');
        }, 10);
    }

    function closeModal() {
        var modal = document.getElementById('imageModal');
        modal.classList.remove('show');

        setTimeout(function() {
            modal.style.display = 'none';
            // Restore body scroll
            document.body.style.overflow = 'auto';
        }, 300);
    }

    // Close modal when clicking outside the image
    window.onclick = function(event) {
        var modal = document.getElementById('imageModal');
        if (event.target == modal) {
            closeModal();
        }
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });

    // Add hover effects to images when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover class to clickable images
        var clickableImages = document.querySelectorAll('.modal-trigger, .noticia-page__gallery img');
        clickableImages.forEach(function(img) {
            img.style.cursor = 'pointer';
        });
    });
</script>
@endpush
