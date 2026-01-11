<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Página inicial
Route::get('/', [PageController::class, 'home'])->name('home');

// Páginas do site
Route::get('/igreja', [PageController::class, 'igreja'])->name('igreja');
Route::get('/dizimos-ofertas', [PageController::class, 'dizimosOfertas'])->name('dizimos-ofertas');
Route::get('/escola-sabatina', [PageController::class, 'escolaSabatina'])->name('escola-sabatina');
Route::get('/estudo-biblico', [PageController::class, 'estudoBiblico'])->name('estudo-biblico');
Route::get('/oracao-visita', [PageController::class, 'oracaoVisita'])->name('oracao-visita');
Route::get('/participe', [PageController::class, 'participe'])->name('participe');
Route::get('/midias', [PageController::class, 'midias'])->name('midias');
Route::get('/midias/cpb', [PageController::class, 'cpb'])->name('midias.cpb');
Route::get('/midias/criacionismo', [PageController::class, 'criacionismo'])->name('midias.criacionismo');
Route::get('/midias/evidencias-biblicas', [PageController::class, 'evidenciasBiblicas'])->name('midias.evidencias-biblicas');
Route::get('/midias/filmes-series', [PageController::class, 'filmesSeries'])->name('midias.filmes-series');
Route::get('/midias/profecias', [PageController::class, 'profecias'])->name('midias.profecias');
Route::get('/midias/radio-tv', [PageController::class, 'radioTv'])->name('midias.radio-tv');
Route::get('/asa', [PageController::class, 'asa'])->name('asa');
Route::get('/secretaria', [PageController::class, 'secretaria'])->name('secretaria');

// Formulários
Route::post('/contato/enviar', [PageController::class, 'enviarContato'])->name('contato.enviar');
Route::post('/estudo-biblico/enviar', [PageController::class, 'enviarEstudoBiblico'])->name('estudo-biblico.enviar');
Route::post('/oracao-visita/enviar', [PageController::class, 'enviarOracaoVisita'])->name('oracao-visita.enviar');

// API para vídeos do YouTube
Route::get('/api/videos-youtube', [PageController::class, 'getVideosYoutube'])->name('api.videos-youtube');
