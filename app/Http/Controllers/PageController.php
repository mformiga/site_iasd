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
     * Exibe a página de Criacionismo
     */
    public function criacionismo()
    {
        return view('pages.criacionismo');
    }

    /**
     * Exibe a página de Evidências Bíblicas
     */
    public function evidenciasBiblicas()
    {
        return view('pages.evidencias-biblicas');
    }

    /**
     * Exibe a página de Filmes e Séries
     */
    public function filmesSeries()
    {
        return view('pages.filmes-series');
    }

    /**
     * Exibe a página de Profecias Bíblicas
     */
    public function profecias()
    {
        return view('pages.profecias');
    }

    /**
     * Exibe a página de Rádio e TV Novo Tempo
     */
    public function radioTv()
    {
        return view('pages.radio-tv');
    }

    /**
     * Exibe a página da ASA (Ação Solidária Adventista)
     */
    public function asa()
    {
        return view('pages.asa');
    }

    /**
     * Exibe a página Fale com a Secretaria
     */
    public function secretaria()
    {
        return view('pages.secretaria');
    }
    /**
     * Exibe a página Classe Novo Tempo
     */
    public function classeNovoTempo()
    {
        return view('pages.classe-novo-tempo');
    }

    /**
     * Exibe a página Classe de Saúde
     */
    public function classeSaude()
    {
        return view('pages.classe-saude');
    }
    /**
     * Exibe a página Clube do Livro
     */
    public function clubeDoLivro()
    {
        return view('pages.clube-do-livro');
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
    /**
     * Exibe a página de Doutores da Esperança
     */
    public function doutoresEsperanca()
    {
        return view('pages.doutores-esperanca');
    }
    /**
     * Exibe a página de Programações
     */
    public function programacoes()
    {
        return view('pages.programacoes');
    }

    /**
     * API para buscar vídeos do canal Provai e Vede
     */
    public function getVideosProvaieVede()
    {
        $channelUrl = 'https://www.youtube.com/@provaievedeoficial/videos';
        $maxResults = 10;

        try {
            $context = stream_context_create([
                'http' => [
                    'ignore_errors' => true,
                    'timeout' => 10,
                    'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36\r\n"
                ],
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false
                ]
            ]);

            // Buscar o HTML da página do canal
            $response = @file_get_contents($channelUrl, false, $context);

            if ($response === false) {
                return response()->json(['error' => 'Não foi possível conectar ao YouTube'], 500);
            }

            $videos = [];
            $videoIdPattern = '/"videoId":"([a-zA-Z0-9_-]{11})"/';
            $titlePattern = '/"videoId":"' . '([a-zA-Z0-9_-]{11})' . '".*?"title":"([^"]+)"/s';
            $thumbnailPattern = '/"videoId":"' . '([a-zA-Z0-9_-]{11})' . '".*?"thumbnails":\{[^}]*"medium":\{[^}]*"url":"([^"]+)"/s';

            // Extrair todos os IDs de vídeo
            preg_match_all($videoIdPattern, $response, $videoIdMatches);

            if (isset($videoIdMatches[1]) && is_array($videoIdMatches[1])) {
                // Remover duplicatas mantendo a ordem
                $uniqueVideoIds = array_unique($videoIdMatches[1]);
                $uniqueVideoIds = array_slice($uniqueVideoIds, 0, $maxResults);

                foreach ($uniqueVideoIds as $videoId) {
                    // Criar URLs de thumbnail
                    $thumbnail = "https://img.youtube.com/vi/{$videoId}/mqdefault.jpg";

                    $videos[] = [
                        'id' => $videoId,
                        'title' => 'Testemunho - Provai e Vede',
                        'thumbnail' => $thumbnail,
                        'url' => "https://www.youtube.com/watch?v={$videoId}"
                    ];

                    if (count($videos) >= $maxResults) {
                        break;
                    }
                }
            }

            if (empty($videos)) {
                return response()->json(['error' => 'Nenhum vídeo encontrado'], 404);
            }

            return response()->json($videos);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao carregar vídeos: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Exibe a página do CEMAB (Centro Musical Adventista de Brasília)
     */
    public function cemab()
    {
        return view('pages.cemab');
    }

}
