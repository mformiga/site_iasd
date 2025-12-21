<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Exibe a página inicial
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Exibe a página da igreja
     */
    public function igreja()
    {
        return view('pages.igreja');
    }

    /**
     * Exibe a página de dízimos e ofertas
     */
    public function dizimosOfertas()
    {
        return view('pages.dizimos-ofertas');
    }

    /**
     * Exibe a página da escola sabatina
     */
    public function escolaSabatina()
    {
        return view('pages.escola-sabatina');
    }

    /**
     * Exibe a página de estudo bíblico
     */
    public function estudoBiblico()
    {
        return view('pages.estudo-biblico');
    }

    /**
     * Exibe a página de oração e visita
     */
    public function oracaoVisita()
    {
        return view('pages.oracao-visita');
    }

    /**
     * Exibe a página de participação
     */
    public function participe()
    {
        return view('pages.participe');
    }

    /**
     * Exibe a página de mídias
     */
    public function midias()
    {
        return view('pages.midias');
    }

    /**
     * Exibe a página da CPB - Casa Publicadora Brasileira
     */
    public function cpb()
    {
        return view('pages.cpb');
    }

    /**
     * Exibe a página da ASA (Ação Solidária Adventista)
     */
    public function asa()
    {
        return view('pages.asa');
    }

    /**
     * Processa o formulário de contato
     */
    public function enviarContato(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'assunto' => 'required|string|max:255',
            'mensagem' => 'required|string|max:1000',
        ]);

        // Aqui você pode adicionar a lógica para enviar email ou salvar no banco
        // Por enquanto, apenas retorna com mensagem de sucesso

        return back()->with('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
    }

    /**
     * Processa o formulário de estudo bíblico
     */
    public function enviarEstudoBiblico(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string|max:1000',
        ]);

        // Aqui você pode adicionar a lógica para enviar email ou salvar no banco

        return back()->with('success', 'Solicitação de estudo bíblico enviada com sucesso! Entraremos em contato em breve.');
    }

    /**
     * Processa o formulário de oração e visita
     */
    public function enviarOracaoVisita(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'contato_pastor' => 'nullable|boolean',
            'pedido' => 'required|string|max:1000',
        ]);

        // Aqui você pode adicionar a lógica para enviar email ou salvar no banco

        return back()->with('success', 'Pedido de oração enviado com sucesso! Estaremos orando por você.');
    }

    /**
     * API para buscar vídeos do YouTube (mais recentes do canal)
     */
    public function getVideosYoutube()
    {
        $apiKey = 'AIzaSyB63pkSZDhSxyh7Fu7LbRSuRvS92NwT4dY';
        $channelId = 'UCk4NT38Kna-Fj5jyFtPwjQQ';
        
        // A playlist de uploads é "UU" + resto do ID do canal (substitui "UC" por "UU")
        $uploadsPlaylistId = 'UU' . substr($channelId, 2);
        $maxResults = 10;

        try {
            $context = stream_context_create([
                'http' => [
                    'ignore_errors' => true,
                    'timeout' => 10
                ]
            ]);

            // Usa PlaylistItems para pegar os vídeos da playlist de uploads (corresponde à página do canal)
            $url = "https://www.googleapis.com/youtube/v3/playlistItems?key={$apiKey}&playlistId={$uploadsPlaylistId}&part=snippet&maxResults={$maxResults}";
            
            $response = @file_get_contents($url, false, $context);
            
            if ($response === false) {
                return response()->json(['error' => 'Não foi possível conectar à API do YouTube'], 500);
            }
            
            $data = json_decode($response, true);

            if (isset($data['error'])) {
                return response()->json(['error' => $data['error']['message'] ?? 'Erro na API do YouTube'], 500);
            }

            $videos = [];

            // Pega os 4 primeiros vídeos (1 para o iframe principal + 3 para as thumbs)
            if (isset($data['items']) && is_array($data['items'])) {
                foreach ($data['items'] as $item) {
                    $videoId = $item['snippet']['resourceId']['videoId'] ?? null;
                    if ($videoId) {
                        $videos[] = [
                            'id' => $videoId,
                            'title' => $item['snippet']['title'] ?? 'Sem título',
                            'thumbnail' => $item['snippet']['thumbnails']['medium']['url'] ?? $item['snippet']['thumbnails']['default']['url'] ?? ''
                        ];
                        
                        // Pega apenas 4 vídeos (1 principal + 3 laterais)
                        if (count($videos) >= 4) {
                            break;
                        }
                    }
                }
            }

            return response()->json($videos);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao carregar vídeos: ' . $e->getMessage()], 500);
        }
    }
}

