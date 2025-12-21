// Menu dropdown simples que funciona como outras páginas do site

// Apenas para dispositivos móveis
document.addEventListener('DOMContentLoaded', function() {

    // Verifica se está em modo mobile
    if (window.innerWidth <= 800) {
        const btn_drop = document.querySelectorAll('.btn_drop');
        const dropdown = document.querySelectorAll('.dropdown');

        btn_drop.forEach((btn, index) => {
            btn.addEventListener('click', function(e) {
                // Previne apenas se o link principal não tiver href válido
                const href = btn.querySelector('a').getAttribute('href');
                if (!href || href === '#' || href === '') {
                    e.preventDefault();
                }
                e.stopPropagation();

                // Fecha todos os outros dropdowns
                dropdown.forEach((drop, dropIndex) => {
                    if (dropIndex !== index) {
                        drop.classList.remove('ativo');
                    }
                });

                // Abre/fecha o dropdown atual
                dropdown[index].classList.toggle('ativo');
            });
        });

        // Fecha dropdowns quando clicar fora
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.btn_drop') && !e.target.closest('.dropdown')) {
                dropdown.forEach(drop => {
                    drop.classList.remove('ativo');
                });
            }
        });
    }

    // Para links dentro dos dropdowns, não fazer nada - deixar navegar normalmente
});