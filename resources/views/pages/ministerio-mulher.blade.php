@extends('layouts.app')

@section('title', 'IASD Central de Brasília - Ministério da Mulher')

@section('meta-description', 'Ministério da Mulher da IASD Central de Brasília. Conheça nossa filosofia, missão, objetivos, atividades para 2026, calendário e muito mais.')
@section('og-title', 'Ministério da Mulher - Mulher Plena')
@section('og-description', 'Mulher Plena - Ministério da Mulher da IASD Central de Brasília. Filosofia, missão, objetivos e atividades para 2026.')
@section('page-name', 'Ministério da Mulher')

@push('styles')
<style>
    .mm-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px 40px;
        box-sizing: border-box;
    }

    .mm-header-wrap {
        width: 100%;
        overflow: hidden;
        aspect-ratio: 1920 / 300;
    }

    .mm-page-header-img {
        width: 100%;
        max-width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .hero-section {
        padding: 50px 40px;
        border-radius: 15px;
        margin-bottom: 50px;
        text-align: center;
    }

    .hero-content {
        max-width: 900px;
        margin: 0 auto;
    }

    .hero-section h1 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 3em;
        color: #003366;
        margin-bottom: 25px;
        font-weight: 500;
    }

    .hero-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        max-width: 900px;
        margin: 0 auto;
    }

    /* Abas Navigation */
    .tabs-container {
        margin: 40px 0;
    }

    .tabs-nav {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        margin-bottom: 0;
        border-bottom: 3px solid #d81b60;
    }

    .tab-button {
        background: #f5f5f5;
        border: none;
        padding: 15px 25px;
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        color: #333;
        cursor: pointer;
        transition: all 0.3s;
        border-radius: 8px 8px 0 0;
        flex: 1;
        min-width: 150px;
        text-align: center;
    }

    .tab-button:hover {
        background: #e0e0e0;
        color: #d81b60;
    }

    .tab-button.active {
        background: #d81b60;
        color: #fff;
    }

    /* Tab Content */
    .tab-content {
        display: none;
        background: #fff;
        padding: 40px;
        border-radius: 0 0 15px 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }

    .tab-content.active {
        display: block;
    }

    .tab-content h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.2em;
        color: #d81b60;
        margin-bottom: 25px;
        font-weight: 500;
        border-bottom: 2px solid #d81b60;
        padding-bottom: 10px;
    }

    .tab-content h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.8em;
        color: #880e4f;
        margin: 30px 0 15px;
        font-weight: 500;
    }

    .tab-content h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #d81b60;
        margin: 20px 0 10px;
        font-weight: 600;
    }

    .tab-content p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
        margin-bottom: 15px;
        text-align: justify;
    }

    .tab-content ul, .tab-content ol {
        margin: 15px 0;
        padding-left: 30px;
    }

    .tab-content li {
        font-family: 'Roboto', sans-serif;
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
        margin: 10px 0;
    }

    /* Calendário */
    .calendario-header-section {
        background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
        border-radius: 15px;
        padding: 40px;
        text-align: center;
        margin-bottom: 40px;
        border-left: 5px solid #d81b60;
    }

    .calendario-header-section .emoji {
        font-size: 3em;
        margin-bottom: 15px;
        display: block;
    }

    .calendario-header-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #880e4f;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .calendario-header-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #333;
        max-width: 700px;
        margin: 0 auto;
    }

    .calendario-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        margin: 30px 0;
    }

    .mes-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .mes-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(216, 27, 96, 0.2);
        border-color: #d81b60;
    }

    .mes-header {
        background: linear-gradient(135deg, #d81b60 0%, #880e4f 100%);
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .mes-header .mes-icon {
        font-size: 2em;
        background: rgba(255,255,255,0.2);
        width: 50px;
        height: 50px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .mes-header h4 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.8em;
        color: #fff;
        margin: 0;
        font-weight: 500;
        flex: 1;
    }

    .mes-eventos {
        padding: 20px;
    }

    .evento-item {
        padding: 12px 15px;
        margin-bottom: 12px;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 3px solid #d81b60;
        transition: all 0.3s;
    }

    .evento-item:hover {
        background: #fce4ec;
        border-left-color: #880e4f;
        transform: translateX(5px);
    }

    .evento-item:last-child {
        margin-bottom: 0;
    }

    .evento-item.destaque {
        background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
        border-left: 4px solid #880e4f;
    }

    .evento-item.destaque:hover {
        background: linear-gradient(135deg, #f8bbd0 0%, #fce4ec 100%);
    }

    .evento-data {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px;
    }

    .evento-data i {
        color: #d81b60;
        font-size: 1em;
    }

    .evento-data span {
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        color: #880e4f;
        font-weight: 600;
    }

    .evento-desc {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #333;
        line-height: 1.5;
        margin: 0;
    }

    /* Seção Pesquisa */
    .pesquisa-header-section {
        background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
        border-radius: 15px;
        padding: 40px;
        text-align: center;
        margin-bottom: 40px;
        border-left: 5px solid #d81b60;
    }

    .pesquisa-header-section .emoji {
        font-size: 3em;
        margin-bottom: 15px;
        display: block;
    }

    .pesquisa-header-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #880e4f;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .pesquisa-header-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #333;
        max-width: 800px;
        margin: 0 auto;
    }

    .pesquisa-info-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin: 40px 0;
    }

    .info-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(216, 27, 96, 0.2);
        border-color: #d81b60;
    }

    .info-card .info-icon {
        background: linear-gradient(135deg, #d81b60 0%, #880e4f 100%);
        width: 55px;
        height: 55px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: #fff;
        font-size: 1.5em;
    }

    .info-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #880e4f;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .info-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #333;
        line-height: 1.7;
    }

    /* Galeria simples da pesquisa */
    .pesquisa-simple-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }

    .pesquisa-image-container {
        text-align: center;
        background: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .pesquisa-image-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(216, 27, 96, 0.2);
    }

    .pesquisa-image-container img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    /* Imagens da pesquisa - manter para compatibilidade */
    .esperar-header-section {
        background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
        border-radius: 15px;
        padding: 40px;
        text-align: center;
        margin-bottom: 40px;
        border-left: 5px solid #d81b60;
    }

    .esperar-header-section .emoji {
        font-size: 3em;
        margin-bottom: 15px;
        display: block;
    }

    .esperar-header-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.5em;
        color: #880e4f;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .esperar-header-section p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.1rem;
        color: #333;
        max-width: 800px;
        margin: 0 auto;
    }

    .esperar-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin: 30px 0;
    }

    .esperar-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative;
    }

    .esperar-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(216, 27, 96, 0.25);
        border-color: #d81b60;
    }

    .esperar-card.featured {
        background: linear-gradient(135deg, #fce4ec 0%, #fff 100%);
        border: 3px solid #d81b60;
        box-shadow: 0 6px 20px rgba(216, 27, 96, 0.3);
    }

    .esperar-card.featured:hover {
        box-shadow: 0 15px 40px rgba(216, 27, 96, 0.4);
    }

    .card-number {
        position: absolute;
        top: 15px;
        right: 15px;
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.2em;
        color: #d81b60;
        background: rgba(216, 27, 96, 0.1);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }

    .esperar-card.featured .card-number {
        background: #d81b60;
        color: #fff;
        font-size: 1.3em;
    }

    .card-icon {
        background: linear-gradient(135deg, #d81b60 0%, #880e4f 100%);
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px auto;
        color: #fff;
        font-size: 1.8em;
    }

    .esperar-card h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #880e4f;
        text-align: center;
        margin: 15px 20px;
        font-weight: 700;
    }

    .card-badge {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: #d81b60;
        color: #fff;
        padding: 8px 15px;
        border-radius: 20px;
        margin: 0 20px 15px;
        font-size: 0.9em;
        font-weight: 600;
    }

    .card-badge i {
        color: #fff;
    }

    .card-content {
        padding: 20px;
    }

    .card-content h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.05em;
        color: #d81b60;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .card-content ul {
        list-style: none;
        padding: 0;
        margin: 12px 0;
    }

    .card-content ul li {
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        color: #333;
        line-height: 1.7;
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
    }

    .card-content ul li:before {
        content: "▪";
        position: absolute;
        left: 0;
        color: #d81b60;
        font-weight: bold;
    }

    .card-resumo {
        background: #f8f9fa;
        border-left: 4px solid #d81b60;
        padding: 12px 15px;
        border-radius: 6px;
        margin-top: 15px;
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        color: #333;
        line-height: 1.6;
    }

    .card-resumo strong {
        color: #880e4f;
    }

    /* Seção Filosofia e Missão */
    .filosofia-missao-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }

    .filosofia-card,
    .missao-card {
        background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
        border-radius: 15px;
        padding: 35px;
        border-left: 5px solid #d81b60;
        box-shadow: 0 4px 15px rgba(216, 27, 96, 0.2);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .filosofia-card:hover,
    .missao-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(216, 27, 96, 0.3);
    }

    .filosofia-card .icon-wrapper,
    .missao-card .icon-wrapper {
        width: 60px;
        height: 60px;
        background: #d81b60;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: #fff;
        font-size: 1.8em;
    }

    .filosofia-card h2,
    .missao-card h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.8em;
        color: #880e4f;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .filosofia-card p,
    .missao-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.05rem;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        margin: 0;
    }

    /* Seção Objetivos */
    .objetivos-section {
        margin: 60px 0;
    }

    .objetivos-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.2em;
        color: #d81b60;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
        border-bottom: 2px solid #d81b60;
        padding-bottom: 15px;
    }

    .objetivos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .objetivo-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px 25px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .objetivo-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .objetivo-card .emoji {
        width: 55px;
        height: 55px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        font-size: 1.8em;
        background: #fce4ec;
        transition: transform 0.3s;
    }

    .objetivo-card:hover .emoji {
        transform: scale(1.1);
    }

    .objetivo-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2em;
        color: #880e4f;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .objetivo-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #666;
        line-height: 1.7;
    }

    /* Seção Pilares */
    .pilares-section {
        margin: 60px 0;
    }

    .pilares-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.2em;
        color: #d81b60;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
        border-bottom: 2px solid #d81b60;
        padding-bottom: 15px;
    }

    .pilares-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin: 30px 0;
    }

    .pilares-grid .pilar-card {
        background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
        border: 2px solid #d81b60;
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(216, 27, 96, 0.2);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .pilares-grid .pilar-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(216, 27, 96, 0.3);
    }

    .pilares-grid .pilar-card .icon {
        font-size: 3em;
        margin-bottom: 15px;
        display: block;
        color: #d81b60;
    }

    .pilares-grid .pilar-card h3 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.3em;
        color: #880e4f;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .pilares-grid .pilar-card ul {
        list-style: none;
        padding: 0;
        text-align: left;
        margin: 15px 0;
    }

    .pilares-grid .pilar-card ul li {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #333;
        line-height: 1.8;
        margin: 8px 0;
    }

    /* Seção Atividades */
    .atividades-section {
        margin: 60px 0;
    }

    .atividades-section h2 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 2.2em;
        color: #d81b60;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 500;
        border-bottom: 2px solid #d81b60;
        padding-bottom: 15px;
    }

    .atividades-container {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .atividade-categoria {
        background: #fff;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .categoria-header {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 3px solid #fce4ec;
    }

    .categoria-header .emoji {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #d81b60 0%, #880e4f 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8em;
    }

    .categoria-header h3 {
        font-family: 'Bebas neue', sans-serif;
        font-size: 1.8em;
        color: #880e4f;
        margin: 0;
        font-weight: 500;
    }

    .atividades-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .atividade-card {
        background: #f8f9fa;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .atividade-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    .atividade-card .icon {
        width: 50px;
        height: 50px;
        background: #d81b60;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        color: #fff;
        font-size: 1.5em;
    }

    .atividade-card h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 1.15em;
        color: #880e4f;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .atividade-card p {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #333;
        line-height: 1.7;
        margin-bottom: 10px;
    }

    .atividade-card ul {
        list-style: none;
        padding: 0;
        margin: 10px 0;
    }

    .atividade-card ul li {
        font-family: 'Roboto', sans-serif;
        font-size: 0.95rem;
        color: #333;
        line-height: 1.6;
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
    }

    .atividade-card ul li:before {
        content: "•";
        position: absolute;
        left: 0;
        color: #d81b60;
        font-weight: bold;
    }

    /* Responsivo */
    @media (max-width: 768px) {
        .mm-container {
            padding: 0 15px 20px;
        }

        .hero-section {
            padding: 30px 20px;
        }

        .hero-section h1 {
            font-size: 2.2em;
        }

        .tabs-nav {
            flex-direction: column;
        }

        .tab-button {
            width: 100%;
            margin-bottom: 5px;
            border-radius: 8px;
        }

        .tab-content {
            padding: 25px 20px;
        }

        .pilares-grid {
            grid-template-columns: 1fr;
        }

        .pesquisa-images {
            grid-template-columns: 1fr;
        }

        .calendario-grid {
            grid-template-columns: 1fr;
        }

        .filosofia-missao-section {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .objetivos-grid,
        .atividades-grid {
            grid-template-columns: 1fr;
        }

        .categoria-header {
            flex-direction: column;
            text-align: center;
        }

        .atividade-categoria {
            padding: 25px 20px;
        }

        .calendario-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .mes-header {
            padding: 15px;
        }

        .mes-header .mes-icon {
            width: 45px;
            height: 45px;
            font-size: 1.8em;
        }

        .mes-header h4 {
            font-size: 1.5em;
        }

        .mes-eventos {
            padding: 15px;
        }

        .evento-item {
            padding: 10px 12px;
        }

        .esperar-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .esperar-card h3 {
            font-size: 1.15em;
            margin: 15px 15px;
        }

        .card-icon {
            width: 55px;
            height: 55px;
            margin: 18px auto;
        }

        .card-content {
            padding: 15px;
        }

        .card-badge {
            margin: 0 15px 12px;
        }

        .pesquisa-info-section {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .info-card {
            padding: 25px 20px;
        }

        .pesquisa-simple-gallery {
            grid-template-columns: 1fr;
            gap: 25px;
        }
    }
</style>
@endpush

@section('content')
<div class="mm-header-wrap">
    <img class="mm-page-header-img" src="{{ asset('img/cards/ministerio-mulher/mm_header.webp') }}" alt="Ministério da Mulher - Mulher Plena" fetchpriority="high" decoding="async">
</div>

<div class="mm-container">

    <!-- Hero Section -->
    <section class="hero-section acb-fullbleed acb-bg-gradient-muted">
        <div class="hero-content">
            <h1>Ministério da Mulher</h1>
            <p>
                Bem-vinda ao Ministério da Mulher da IASD Central de Brasília! Nossa missão é promover o crescimento espiritual, emocional e social das mulheres, criando um ambiente de acolhimento, apoio e desenvolvimento pessoal.
            </p>
        </div>
    </section>

    <!-- Sistema de Abas -->
    <div class="tabs-container">
        <div class="tabs-nav">
            <button class="tab-button active" onclick="openTab(event, 'geral')">Geral</button>
            <button class="tab-button" onclick="openTab(event, 'calendario')">Calendário 2026</button>
            <button class="tab-button" onclick="openTab(event, 'pesquisa')">Pesquisa</button>
            <button class="tab-button" onclick="openTab(event, 'esperar')">O Que Esperar</button>
        </div>

        <!-- Aba Geral -->
        <div id="geral" class="tab-content active">
            <!-- Seção Filosofia e Missão -->
            <div class="filosofia-missao-section">
                <div class="filosofia-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>
                    <h2>1. Filosofia</h2>
                    <p>
                        O Ministério da Mulher crê que cada mulher é chamada a conhecer Jesus como seu Salvador e a usar seus dons para servir como discípula no lar, na igreja e na comunidade.
                    </p>
                </div>

                <div class="missao-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h2>2. Missão</h2>
                    <p>
                        O Ministério da Mulher existe para cuidar, encorajar, desafiar e capacitar a mulher adventista do sétimo dia em sua caminhada diária como discípula de Jesus Cristo e como membro da Igreja.
                    </p>
                </div>
            </div>

            <!-- Seção Objetivos -->
            <div class="objetivos-section">
                <h2>3. Objetivos</h2>
                <div class="objetivos-grid">
                    <div class="objetivo-card">
                        <div class="emoji">📖</div>
                        <h4>Crescimento Espiritual</h4>
                        <p>Capacitar a mulher a aprofundar sua fé, crescer e renovar-se espiritualmente.</p>
                    </div>

                    <div class="objetivo-card">
                        <div class="emoji">💎</div>
                        <h4>Valor Inestimável</h4>
                        <p>Dignificar a mulher como pessoa de valor inestimável, criada e redimida por Deus.</p>
                    </div>

                    <div class="objetivo-card">
                        <div class="emoji">🤝</div>
                        <h4>Cooperação</h4>
                        <p>Cooperar com outros departamentos da igreja para atender às necessidades das mulheres.</p>
                    </div>

                    <div class="objetivo-card">
                        <div class="emoji">🗣️</div>
                        <h4>Voz Feminina</h4>
                        <p>Expressar a visão feminina adventista nos diversos espaços deliberativos da Igreja.</p>
                    </div>

                    <div class="objetivo-card">
                        <div class="emoji">🌟</div>
                        <h4>Serviço Cristão</h4>
                        <p>Ampliar oportunidades de serviço cristão dinâmico, desafiando cada mulher ao cumprimento da missão.</p>
                    </div>
                </div>
            </div>

            <!-- Seção 4 Pilares -->
            <div class="pilares-section">
                <h2>4. Os 4 Pilares da Plenitude</h2>
                <div class="pilares-grid">
                    <div class="pilar-card">
                        <div class="icon">
                            <i class="bi bi-book"></i>
                        </div>
                        <h3>1. Mulher Plena com Deus – Discipulado</h3>
                        <ul>
                            <li>● Mulher de oração</li>
                            <li>● Estudante da Bíblia, do Espírito de Profecia e da Lição da Escola Sabatina</li>
                            <li>● Mulher missionária</li>
                        </ul>
                    </div>

                    <div class="pilar-card">
                        <div class="icon">
                            <i class="bi bi-person-heart"></i>
                        </div>
                        <h3>2. Mulher Plena Consigo Mesma – Identidade</h3>
                        <ul>
                            <li>● Cuidado com a saúde física e emocional</li>
                            <li>● Ser autora da própria história</li>
                            <li>● Crescimento profissional</li>
                            <li>● Educação financeira e empreendedorismo</li>
                        </ul>
                    </div>

                    <div class="pilar-card">
                        <div class="icon">
                            <i class="bi bi-house-heart"></i>
                        </div>
                        <h3>3. Mulher Plena com a Família – Identidade e Novas Gerações</h3>
                        <ul>
                            <li>● Relacionamento conjugal</li>
                            <li>● Educação dos filhos para servir a Deus</li>
                            <li>● Delegar responsabilidades</li>
                            <li>● Vida sexual nas diferentes fases</li>
                        </ul>
                    </div>

                    <div class="pilar-card">
                        <div class="icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3>4. Mulher Plena com a Missão – Liderança e Serviço</h3>
                        <ul>
                            <li>● Desenvolver dons e transformá-los em ministério</li>
                            <li>● Preparar-se para estudar a Bíblia com pelo menos uma pessoa</li>
                            <li>● Apoiar a Semana de Evangelismo Feminino</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Seção Atividades 2026 -->
            <div class="atividades-section">
                <h2>5. Atividades para 2026</h2>

                <div class="atividades-container">
                    <!-- Mulher Plena com Deus -->
                    <div class="atividade-categoria">
                        <div class="categoria-header">
                            <div class="emoji">🙏</div>
                            <h3>MULHER PLENA COM DEUS</h3>
                        </div>

                        <div class="atividades-grid">
                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-whatsapp"></i>
                                </div>
                                <h4>Devoção Pessoal</h4>
                                <ul>
                                    <li>Grupo de WhatsApp "Mulher Plena BSB"</li>
                                    <li>Incentivo ao Projeto Maná</li>
                                    <li>Fortalecimento da Escola Sabatina</li>
                                    <li>Ministério de Oração ativo (Líder: Joana)</li>
                                </ul>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-bullseye"></i>
                                </div>
                                <h4>Dez Dias de Clamor e 365 Dias de Oração</h4>
                                <ul>
                                    <li>Apoiar e colaborar com a liderança da igreja</li>
                                    <li>Lançar a jornada anual dos Frutos do Espírito</li>
                                    <li><strong>Meta:</strong> Todas as Mulheres Envolvidas</li>
                                </ul>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-calendar-event"></i>
                                </div>
                                <h4>Quartas de Poder</h4>
                                <p>Última quarta-feira de cada mês – A partir do mês de junho</p>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <h4>Retiro Espiritual</h4>
                                <p>Realização de Retiro Espiritual com as mulheres da Igreja</p>
                                <p><strong>Data:</strong> 07 e 08 de agosto</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mulher Plena Consigo e com a Família -->
                    <div class="atividade-categoria">
                        <div class="categoria-header">
                            <div class="emoji">👨‍👩‍👧‍👦</div>
                            <h3>MULHER PLENA CONSIGO E COM A FAMÍLIA</h3>
                        </div>

                        <div class="atividades-grid">
                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-trophy"></i>
                                </div>
                                <h4>Curso de Liderança Feminina (APLaC)</h4>
                                <p>Divulgação e incentivo à participação</p>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-arrow-repeat"></i>
                                </div>
                                <h4>Projeto RENOVA (Outubro)</h4>
                                <p>Revista com jornada de 30 dias para formação de hábitos saudáveis (físico, espiritual e emocional).</p>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-gift"></i>
                                </div>
                                <h4>Dia da Mulher – 07/03/2026</h4>
                                <p>Recepção e homenagem especial na Igreja</p>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-chat-left-text"></i>
                                </div>
                                <h4>PG FEMININO (Quinzenal)</h4>
                                <p>Encontros com o material "Floresça", promovendo comunhão, discipulado, identidade em Cristo e crescimento espiritual.</p>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h4>ENTRE ELAS (Mensal)</h4>
                                <p>Encontros para fortalecimento espiritual, emocional e relacional (Mensal, aos domingos).</p>
                                <p><strong>Temas:</strong> Rede de apoio, ansiedade, saúde mental, educação de filhos, comunicação no casamento, intimidade com Deus, propósito e identidade.</p>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-megaphone"></i>
                                </div>
                                <h4>QUEBRANDO O SILÊNCIO – 22/08</h4>
                                <ul>
                                    <li>Sermão temático pela manhã</li>
                                    <li>Programação especial à tarde (a definir)</li>
                                </ul>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-book"></i>
                                </div>
                                <h4>EXPERIÊNCIA DO SÁBADO</h4>
                                <p><strong>Lançamento:</strong> Chá Entre Amigas</p>
                                <ul>
                                    <li>Folder orientativo</li>
                                    <li>Caixa quebra-gelo</li>
                                    <li>Livreto "Estarei pronta para o Sábado"</li>
                                    <li>Resgate da guarda do sábado como estilo de vida</li>
                                </ul>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-egg-fried"></i>
                                </div>
                                <h4>PROJETO VIDA QUE NUTRE</h4>
                                <p>O Projeto Vida que Nutre, realizado em parceria com a ASA, propõe oficinas práticas sobre saúde e alimentação saudável, promovendo conhecimento acessível e hábitos que fortalecem o corpo e a vida espiritual. Com encontros semestrais na igreja, as oficinas oferecerão orientações simples e aplicáveis ao dia a dia, incentivando o cuidado integral da mulher e da família, além de fortalecer a comunhão e o serviço à comunidade.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mulher Plena com a Missão -->
                    <div class="atividade-categoria">
                        <div class="categoria-header">
                            <div class="emoji">🌍</div>
                            <h3>MULHER PLENA COM A MISSÃO</h3>
                        </div>

                        <div class="atividades-grid">
                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-broadcast"></i>
                                </div>
                                <h4>EVANGELISMO FEMININO – 03 a 07/06</h4>
                                <ul>
                                    <li>Semana especial em PG</li>
                                    <li>Envolvimento ativo das mulheres</li>
                                </ul>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-globe"></i>
                                </div>
                                <h4>SÁBADO MISSIONÁRIO – 06/06</h4>
                                <ul>
                                    <li>Sermão com ênfase missionária</li>
                                    <li>Chá evangelístico à tarde</li>
                                </ul>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-hearts"></i>
                                </div>
                                <h4>REDE DE AMOR</h4>
                                <p>Trabalho de apoio às mulheres que necessitam e às que estão afastadas, realizado com sensibilidade, intencionalidade e espírito de discipulado. Organizar uma equipe preparada para ouvir sem julgamentos, oferecer apoio emocional e espiritual, orar junto e manter acompanhamento constante, criando vínculos de confiança.</p>
                            </div>

                            <div class="atividade-card">
                                <div class="icon">
                                    <i class="bi bi-music-note"></i>
                                </div>
                                <h4>CORAL FEMININO</h4>
                                <p>O Coral Feminino, em parceria com o Ministério da Mulher, é uma ferramenta poderosa de integração, evangelismo e fortalecimento espiritual. Essa união amplia as oportunidades de envolvimento, permitindo que mulheres de diferentes faixas etárias participem ativamente, desenvolvendo seus dons e criando laços de amizade e pertencimento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aba Calendário 2026 -->
        <div id="calendario" class="tab-content">
            <div class="calendario-header-section">
                <div class="emoji">📅</div>
                <h2>CALENDÁRIO 2026</h2>
                <p>Acompanhe todas as atividades programadas do Ministério da Mulher</p>
            </div>

            <div class="calendario-grid">
                <!-- Março -->
                <div class="mes-card">
                    <div class="mes-header">
                        <div class="mes-icon">🌸</div>
                        <h4>Março</h4>
                    </div>
                    <div class="mes-eventos">
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>07 (sábado)</span>
                            </div>
                            <div class="evento-desc">Homenagem às Mulheres (Dia Internacional da Mulher)</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>26 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino – Elza</div>
                        </div>
                    </div>
                </div>

                <!-- Abril -->
                <div class="mes-card">
                    <div class="mes-header">
                        <div class="mes-icon">🌷</div>
                        <h4>Abril</h4>
                    </div>
                    <div class="mes-eventos">
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>09 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino – Lourdes</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>23 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino – Lu Mesquita</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>26 (domingo)</span>
                            </div>
                            <div class="evento-desc">Entre ELAS</div>
                        </div>
                    </div>
                </div>

                <!-- Maio -->
                <div class="mes-card">
                    <div class="mes-header">
                        <div class="mes-icon">💐</div>
                        <h4>Maio</h4>
                    </div>
                    <div class="mes-eventos">
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>10 (domingo)</span>
                            </div>
                            <div class="evento-desc">Apoio à Homenagem Dia das Mães</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>14 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino – Ada (espaço reservado)</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>24 (domingo)</span>
                            </div>
                            <div class="evento-desc">Entre ELAS</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>28 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino – Elisabete</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>31 (domingo)</span>
                            </div>
                            <div class="evento-desc">Projeto Vida que Nutri</div>
                        </div>
                    </div>
                </div>

                <!-- Junho -->
                <div class="mes-card">
                    <div class="mes-header">
                        <div class="mes-icon">❄️</div>
                        <h4>Junho</h4>
                    </div>
                    <div class="mes-eventos">
                        <div class="evento-item destaque">
                            <div class="evento-data">
                                <i class="bi bi-calendar-star"></i>
                                <span>06 (sábado)</span>
                            </div>
                            <div class="evento-desc">Sábado Missionário da Mulher Adventista</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>11 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino – Adaiane</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>21 (domingo)</span>
                            </div>
                            <div class="evento-desc">Entre ELAS</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>25 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino – Eliane</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>27 (sábado)</span>
                            </div>
                            <div class="evento-desc">Junta Panelas (Almoço + Atividade Social)</div>
                        </div>
                    </div>
                </div>

                <!-- Julho -->
                <div class="mes-card">
                    <div class="mes-header">
                        <div class="mes-icon">🎉</div>
                        <h4>Julho</h4>
                    </div>
                    <div class="mes-eventos">
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>09 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>23 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>29 (quarta)</span>
                            </div>
                            <div class="evento-desc">Quartas de Poder</div>
                        </div>
                    </div>
                </div>

                <!-- Agosto -->
                <div class="mes-card">
                    <div class="mes-header">
                        <div class="mes-icon">🏖️</div>
                        <h4>Agosto</h4>
                    </div>
                    <div class="mes-eventos">
                        <div class="evento-item destaque">
                            <div class="evento-data">
                                <i class="bi bi-calendar-star"></i>
                                <span>07-08 (sexta-sáb)</span>
                            </div>
                            <div class="evento-desc">Retiro Espiritual para Mulheres</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>09 (domingo)</span>
                            </div>
                            <div class="evento-desc">Apoio à Homenagem Dia dos Pais</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>13 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>16 (domingo)</span>
                            </div>
                            <div class="evento-desc">Entre ELAS</div>
                        </div>
                        <div class="evento-item destaque">
                            <div class="evento-data">
                                <i class="bi bi-calendar-star"></i>
                                <span>22 (sábado)</span>
                            </div>
                            <div class="evento-desc">Quebrando o Silêncio</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>26 (quarta)</span>
                            </div>
                            <div class="evento-desc">Quartas de Poder</div>
                        </div>
                    </div>
                </div>

                <!-- Setembro -->
                <div class="mes-card">
                    <div class="mes-header">
                        <div class="mes-icon">🍂</div>
                        <h4>Setembro</h4>
                    </div>
                    <div class="mes-eventos">
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>03 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>20 (domingo)</span>
                            </div>
                            <div class="evento-desc">Entre ELAS</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>24 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>30 (quarta)</span>
                            </div>
                            <div class="evento-desc">Quartas de Poder</div>
                        </div>
                    </div>
                </div>

                <!-- Outubro -->
                <div class="mes-card">
                    <div class="mes-header">
                        <div class="mes-icon">🌻</div>
                        <h4>Outubro</h4>
                    </div>
                    <div class="mes-eventos">
                        <div class="evento-item destaque">
                            <div class="evento-data">
                                <i class="bi bi-calendar-star"></i>
                                <span>04 (domingo)</span>
                            </div>
                            <div class="evento-desc">Projeto RENOVA</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>08 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>18 (domingo)</span>
                            </div>
                            <div class="evento-desc">Entre ELAS</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>28 (quarta)</span>
                            </div>
                            <div class="evento-desc">Quartas de Poder</div>
                        </div>
                    </div>
                </div>

                <!-- Novembro -->
                <div class="mes-card">
                    <div class="mes-header">
                        <div class="mes-icon">🦃</div>
                        <h4>Novembro</h4>
                    </div>
                    <div class="mes-eventos">
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>05 (quinta)</span>
                            </div>
                            <div class="evento-desc">PG Feminino</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>25 (quarta)</span>
                            </div>
                            <div class="evento-desc">Quartas de Poder</div>
                        </div>
                        <div class="evento-item">
                            <div class="evento-data">
                                <i class="bi bi-calendar-day"></i>
                                <span>29 (domingo)</span>
                            </div>
                            <div class="evento-desc">Piquenique (Atividade Social)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aba Pesquisa -->
        <div id="pesquisa" class="tab-content">
            <div class="pesquisa-header-section">
                <div class="emoji">📊</div>
                <h2>Pesquisa de Perfil e Interesse</h2>
                <p>Conheça nossa pesquisa para entender melhor o perfil das mulheres da nossa igreja e suas áreas de interesse</p>
            </div>

            <!-- Cards Explicativos -->
            <div class="pesquisa-info-section">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="bi bi-clipboard-data"></i>
                    </div>
                    <h4>Objetivo da Pesquisa</h4>
                    <p>Mapear o perfil, necessidades, expectativas e áreas de interesse das mulheres da nossa igreja para direcionar ações e ministérios de forma mais eficaz.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h4>Participação</h4>
                    <p>A pesquisa foi disponibilizada para todas as mulheres da igreja, garantindo representatividade e voz ativa na construção do ministério.</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h4>Resultados</h4>
                    <p>Os dados coletados fundamentaram as 9 áreas identificadas na seção "O que esperar" e direcionam o planejamento de atividades para 2026.</p>
                </div>
            </div>

            <!-- Galeria Simples da Pesquisa -->
            <div class="pesquisa-simple-gallery">
                <div class="pesquisa-image-container">
                    <img src="{{ asset('img/cards/ministerio-mulher/1.webp') }}" alt="Página 1 da Pesquisa" loading="lazy" decoding="async">
                </div>

                <div class="pesquisa-image-container">
                    <img src="{{ asset('img/cards/ministerio-mulher/2.webp') }}" alt="Página 2 da Pesquisa" loading="lazy" decoding="async">
                </div>

                <div class="pesquisa-image-container">
                    <img src="{{ asset('img/cards/ministerio-mulher/3.webp') }}" alt="Página 3 da Pesquisa" loading="lazy" decoding="async">
                </div>

                <div class="pesquisa-image-container">
                    <img src="{{ asset('img/cards/ministerio-mulher/4.webp') }}" alt="Página 4 da Pesquisa" loading="lazy" decoding="async">
                </div>

                <div class="pesquisa-image-container">
                    <img src="{{ asset('img/cards/ministerio-mulher/5.webp') }}" alt="Página 5 da Pesquisa" loading="lazy" decoding="async">
                </div>

                <div class="pesquisa-image-container">
                    <img src="{{ asset('img/cards/ministerio-mulher/6.webp') }}" alt="Página 6 da Pesquisa" loading="lazy" decoding="async">
                </div>

                <div class="pesquisa-image-container">
                    <img src="{{ asset('img/cards/ministerio-mulher/7.webp') }}" alt="Página 7 da Pesquisa" loading="lazy" decoding="async">
                </div>

                <div class="pesquisa-image-container">
                    <img src="{{ asset('img/cards/ministerio-mulher/8.webp') }}" alt="Página 8 da Pesquisa" loading="lazy" decoding="async">
                </div>
            </div>
        </div>

        <!-- Aba O Que Esperar -->
        <div id="esperar" class="tab-content">
            <div class="esperar-header-section">
                <div class="emoji">🎯</div>
                <h2>O que você espera do Ministério da Mulher?</h2>
                <p>Baseado em nossa pesquisa, identificamos as 9 principais áreas de necessidade e expectativa das mulheres</p>
            </div>

            <div class="esperar-grid">
                <!-- Card 1 - Acolhimento -->
                <div class="esperar-card featured">
                    <div class="card-number">01</div>
                    <div class="card-icon">
                        <i class="bi bi-hearts"></i>
                    </div>
                    <h3>ACOLHIMENTO, UNIÃO E REDE DE APOIO</h3>
                    <div class="card-badge">
                        <i class="bi bi-star-fill"></i>
                        <span>Área mais recorrente</span>
                    </div>
                    <div class="card-content">
                        <h4>O que inclui:</h4>
                        <ul>
                            <li>Apoio e união verdadeira</li>
                            <li>Mulheres sem rede de apoio</li>
                            <li>Integração e acolhimento</li>
                            <li>União entre mulheres</li>
                            <li>Mulheres acolhendo mulheres</li>
                            <li>Pequenos grupos itinerantes</li>
                            <li>Encontros para fortalecer laços</li>
                            <li>Eventos de confraternização</li>
                            <li>Ministério ativo e atencioso</li>
                            <li>Maior integração entre membros</li>
                        </ul>
                        <div class="card-resumo">
                            <strong>Necessidade central:</strong> Criar um ambiente seguro, relacional e de pertencimento.
                        </div>
                    </div>
                </div>

                <!-- Card 2 - Vida Espiritual -->
                <div class="esperar-card">
                    <div class="card-number">02</div>
                    <div class="card-icon">
                        <i class="bi bi-book"></i>
                    </div>
                    <h3>VIDA ESPIRITUAL E FORTALECIMENTO DA FÉ</h3>
                    <div class="card-content">
                        <h4>O que inclui:</h4>
                        <ul>
                            <li>Fortalecimento da fé</li>
                            <li>Encontros de oração</li>
                            <li>Programas permanentes de oração</li>
                            <li>Leitura bíblica em conjunto (online)</li>
                            <li>Devocionais</li>
                            <li>Participação nos cultos</li>
                            <li>Vigílias</li>
                            <li>Retiro espiritual</li>
                            <li>Comunhão e intimidade com Deus</li>
                            <li>Reavivamento espiritual</li>
                        </ul>
                        <div class="card-resumo">
                            <strong>Necessidade central:</strong> Continuidade espiritual, não apenas eventos pontuais.
                        </div>
                    </div>
                </div>

                <!-- Card 3 - Família -->
                <div class="esperar-card">
                    <div class="card-number">03</div>
                    <div class="card-icon">
                        <i class="bi bi-house-heart"></i>
                    </div>
                    <h3>FAMÍLIA, CASAMENTO E CRIAÇÃO DE FILHOS</h3>
                    <div class="card-content">
                        <h4>O que inclui:</h4>
                        <ul>
                            <li>Como ter um lar cristão</li>
                            <li>Educação de filhos</li>
                            <li>Criar filhos sozinha</li>
                            <li>Relação conjugal</li>
                            <li>Casamento</li>
                            <li>Apoio a mães sobrecarregadas</li>
                            <li>Vida no lar</li>
                            <li>Delegação e responsabilidade familiar</li>
                            <li>Apoiar neurodivergentes</li>
                        </ul>
                        <div class="card-resumo">
                            <strong>Necessidade central:</strong> Suporte prático para desafios familiares reais.
                        </div>
                    </div>
                </div>

                <!-- Card 4 - Saúde Emocional -->
                <div class="esperar-card">
                    <div class="card-number">04</div>
                    <div class="card-icon">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h3>SAÚDE EMOCIONAL E SOBRECARGA FEMININA</h3>
                    <div class="card-content">
                        <h4>O que inclui:</h4>
                        <ul>
                            <li>Saúde emocional</li>
                            <li>Depressão</li>
                            <li>Ansiedade</li>
                            <li>Controle emocional</li>
                            <li>Dupla jornada</li>
                            <li>Exaustão feminina</li>
                            <li>Autocuidado</li>
                            <li>Palestras sobre saúde mental</li>
                            <li>Bem-estar da mulher</li>
                        </ul>
                        <div class="card-resumo">
                            <strong>Necessidade central:</strong> A igreja como espaço de cuidado emocional.
                        </div>
                    </div>
                </div>

                <!-- Card 5 - Saúde Física -->
                <div class="esperar-card">
                    <div class="card-number">05</div>
                    <div class="card-icon">
                        <i class="bi bi-activity"></i>
                    </div>
                    <h3>SAÚDE FÍSICA E ESTILO DE VIDA</h3>
                    <div class="card-content">
                        <h4>O que inclui:</h4>
                        <ul>
                            <li>Saúde natural</li>
                            <li>Alimentação saudável</li>
                            <li>Vida alimentar</li>
                            <li>Vida equilibrada</li>
                        </ul>
                        <div class="card-resumo">
                            <strong>Necessidade central:</strong> Cuidado integral (corpo, mente e espírito).
                        </div>
                    </div>
                </div>

                <!-- Card 6 - Encontros -->
                <div class="esperar-card">
                    <div class="card-number">06</div>
                    <div class="card-icon">
                        <i class="bi bi-calendar-heart"></i>
                    </div>
                    <h3>ENCONTROS, CHÁS E FORMATO DAS ATIVIDADES</h3>
                    <div class="card-content">
                        <h4>O que inclui:</h4>
                        <ul>
                            <li>Chá evangelístico</li>
                            <li>Piqueniques</li>
                            <li>Almoços</li>
                            <li>Atividades manuais</li>
                            <li>Oficinas práticas (cozinhar, fotografar, imagem pessoal)</li>
                            <li>PG Feminino</li>
                            <li>Congresso de mulheres</li>
                            <li>Coral feminino</li>
                        </ul>
                        <div class="card-resumo">
                            <strong>Necessidade central:</strong> Formatos leves, frequentes e relacionais.
                        </div>
                    </div>
                </div>

                <!-- Card 7 - Missão -->
                <div class="esperar-card">
                    <div class="card-number">07</div>
                    <div class="card-icon">
                        <i class="bi bi-globe-americas"></i>
                    </div>
                    <h3>MISSÃO E EVANGELISMO</h3>
                    <div class="card-content">
                        <h4>O que inclui:</h4>
                        <ul>
                            <li>Quebrando o Silêncio</li>
                            <li>Visitação</li>
                            <li>Trabalho com mulheres afastadas</li>
                            <li>Pequenos grupos</li>
                            <li>Engajamento com projetos da igreja</li>
                            <li>Ações sociais</li>
                            <li>Apresentar Deus a novas pessoas</li>
                        </ul>
                        <div class="card-resumo">
                            <strong>Necessidade central:</strong> Ministério feminino intencional e missionário.
                        </div>
                    </div>
                </div>

                <!-- Card 8 - Identidade -->
                <div class="esperar-card">
                    <div class="card-number">08</div>
                    <div class="card-icon">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <h3>IDENTIDADE, PROPÓSITO E DESENVOLVIMENTO PESSOAL</h3>
                    <div class="card-content">
                        <h4>O que inclui:</h4>
                        <ul>
                            <li>Encontrar o propósito</li>
                            <li>Atuação da mulher na igreja</li>
                            <li>Vida profissional</li>
                            <li>Empreendedorismo</li>
                            <li>Vida financeira</li>
                            <li>Etiqueta e imagem pessoal</li>
                            <li>Crescimento pessoal</li>
                        </ul>
                        <div class="card-resumo">
                            <strong>Necessidade central:</strong> Formação da mulher em todas as áreas da vida.
                        </div>
                    </div>
                </div>

                <!-- Card 9 - Inclusão -->
                <div class="esperar-card">
                    <div class="card-number">09</div>
                    <div class="card-icon">
                        <i class="bi bi-universal-access"></i>
                    </div>
                    <h3>INCLUSÃO E ACESSIBILIDADE</h3>
                    <div class="card-content">
                        <h4>O que inclui:</h4>
                        <ul>
                            <li>Acessibilidade em Libras</li>
                            <li>Apoio a mulheres com filhos neurodivergentes</li>
                        </ul>
                        <div class="card-resumo">
                            <strong>Necessidade central:</strong> Ministério inclusivo e sensível às diferenças.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de Contato -->
    <div class="contato-section acb-fullbleed" style="background: linear-gradient(135deg, #d81b60 0%, #880e4f 100%); color: #fff; text-align: center;">
        <h3 style="font-family: 'Bebas neue', sans-serif; font-size: 2em; color: #fff; margin-bottom: 20px; font-weight: 500;">Contato - Ministério da Mulher</h3>
        <p style="font-family: 'Roboto', sans-serif; font-size: 1.1rem; color: #f8f9fa; margin-bottom: 10px;">
            <strong><i class="bi bi-person"></i> Nome:</strong> Cristiane Barreto
        </p>
        <p style="font-family: 'Roboto', sans-serif; font-size: 1.1rem; color: #f8f9fa;">
            <strong><i class="bi bi-whatsapp"></i> WhatsApp:</strong> <a href="https://wa.me/5561982192355" style="color: #fff; text-decoration: none; font-weight: 600;">(61) 98219-2355</a>
        </p>
        <blockquote class="acb-quote" style="max-width: 900px; margin: 22px auto 0; border-left-color: #fff;">
            <p style="color: #f8f9fa;">
                "Enganosa é a graça, e vã é a formosura, mas a mulher que teme ao Senhor, essa será louvada."
            </p>
            <span class="acb-quote__ref" style="color: #fce4ec;"><i class="bi bi-book-half"></i> Provérbios 31:30</span>
        </blockquote>
    </div>

</div>
@endsection

@push('scripts')
<script>
function openTab(evt, tabName) {
    // Esconder todo conteúdo das abas
    const tabContents = document.getElementsByClassName('tab-content');
    for (let i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove('active');
    }

    // Remover classe active de todos os botões
    const tabButtons = document.getElementsByClassName('tab-button');
    for (let i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove('active');
    }

    // Mostrar a aba atual e adicionar classe active ao botão clicado
    document.getElementById(tabName).classList.add('active');
    evt.currentTarget.classList.add('active');
}

// Animação suave ao clicar nas abas
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-button');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Scroll suave para o conteúdo da aba
            setTimeout(function() {
                const tabsContainer = document.querySelector('.tabs-container');
                if (tabsContainer) {
                    tabsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 100);
        });
    });
});
</script>
@endpush