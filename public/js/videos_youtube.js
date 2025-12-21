// Usa a URL base da aplicação (definida no layout) ou fallback para caminho relativo
const apiUrl = (window.APP_URL || '') + '/api/videos-youtube';

fetch(apiUrl)
    .then(response => response.json())
    .then(videos => {
        if (!videos || videos.length === 0) return;

        const aoVivoDiv = document.querySelector('.yt_ao_vivo iframe');
        if (aoVivoDiv && videos[0]) {
            aoVivoDiv.src = `https://www.youtube.com/embed/${videos[0].id}?controls=0`;
        }

        const thumbs = document.querySelectorAll('.thumb_em_breve');
        videos.slice(1, 4).forEach((video, index) => {
            if (thumbs[index]) {
                const img = thumbs[index].querySelector('img');
                const a = thumbs[index].querySelector('a');

                img.src = video.thumbnail;
                a.href = `https://www.youtube.com/watch?v=${video.id}`;
                a.textContent = video.title;
            }
        });
    })
    .catch(error => console.error('Erro ao carregar vídeos:', error));