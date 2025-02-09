document.getElementById('toggleOrderBtn').addEventListener('click', function() {
    const movieList = document.getElementById('movieList');
    const movies = Array.from(movieList.children);
    const currentOrder = this.getAttribute('data-order') || 'release';

    if (currentOrder === 'release') {
        // Ordenar por ordem cronológica (1, 2, 3, 4, 5, 6)
        movies.sort((a, b) => a.getAttribute('data-order') - b.getAttribute('data-order'));
        this.setAttribute('data-order', 'chrono');
        this.textContent = 'Ordenar por Lançamento';
    } else {
        // Ordenar por data de lançamento (4, 5, 6, 1, 2, 3)
        movies.sort((a, b) => {
            const orderA = parseInt(a.getAttribute('data-order'));
            const orderB = parseInt(b.getAttribute('data-order'));
            const releaseOrder = {4: 0, 5: 1, 6: 2, 1: 3, 2: 4, 3: 5};
            return releaseOrder[orderA] - releaseOrder[orderB];
        });
        this.setAttribute('data-order', 'release');
        this.textContent = 'Ordenar por Ordem Cronológica';
    }

    movieList.innerHTML = '';
    movies.forEach(movie => movieList.appendChild(movie));
});
