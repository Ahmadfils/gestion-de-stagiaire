document.addEventListener('DOMContentLoaded', () => {
    const table = document.getElementById('dataTable');
    if (!table) return;
    const tbody = table.querySelector('tbody');
    const searchInput = document.getElementById('searchInput');
    const sortSelect = document.getElementById('sortSelect');
    const pagination = document.getElementById('pagination');
    const rowsPerPage = 10;
    let currentPage = 1;
    let currentSort = sortSelect ? sortSelect.value : null;
    let currentSortAsc = true;

    function getAllRows() {
        return Array.from(tbody.querySelectorAll('tr'));
    }

    function getSortIndex(key) {
        const ths = Array.from(table.querySelectorAll('thead th'));
        for (let i = 0; i < ths.length; i++) {
            const txt = ths[i].textContent.trim().toLowerCase();
            if ((key === 'id_etudiant' || key === 'id_demande' || key === 'id_stage' || key === 'id_tuteur' || key === 'id_utilisateur') && txt.includes('id')) return i;
            if (key === 'nom' && txt.includes('nom')) return i;
            if (key === 'prenom' && txt.includes('prénom')) return i;
            if (key === 'email' && txt.includes('email')) return i;
            if (key === 'telephone' && txt.includes('téléphone')) return i;
            if (key === 'etablissement' && txt.includes('établissement')) return i;
            if (key === 'filiere' && txt.includes('filière')) return i;
            if (key === 'titre' && txt.includes('titre')) return i;
            if (key === 'date' && txt.includes('date')) return i;
            if (key === 'role' && txt.includes('rôle')) return i;
        }
        return 0;
    }

    function filterRows() {
        const val = searchInput ? searchInput.value.toLowerCase() : '';
        return getAllRows().filter(row =>
            Array.from(row.children).some(td => td.textContent.toLowerCase().includes(val))
        );
    }

    function sortRows(rows, key, asc) {
        const idx = getSortIndex(key);
        return rows.slice().sort((a, b) => {
            const aVal = a.children[idx].textContent.trim().toLowerCase();
            const bVal = b.children[idx].textContent.trim().toLowerCase();
            if (['id_etudiant', 'id_demande', 'id_stage', 'id_tuteur', 'id_utilisateur'].includes(key)) {
                return asc ? (parseInt(aVal) - parseInt(bVal)) : (parseInt(bVal) - parseInt(aVal));
            }
            return asc ? aVal.localeCompare(bVal) : bVal.localeCompare(aVal);
        });
    }

    function renderTable() {
        let rows = filterRows();
        if (currentSort) {
            rows = sortRows(rows, currentSort, currentSortAsc);
        }
        const totalPages = Math.ceil(rows.length / rowsPerPage) || 1;
        if (currentPage > totalPages) currentPage = totalPages;
        getAllRows().forEach(row => row.classList.add('d-none'));
        const start = (currentPage - 1) * rowsPerPage;
        const pageRows = rows.slice(start, start + rowsPerPage);
        pageRows.forEach(row => row.classList.remove('d-none'));
        renderPagination(totalPages);
    }

    function renderPagination(totalPages) {
        pagination.innerHTML = '';
        if (totalPages <= 1) return;
        for (let i = 1; i <= totalPages; i++) {
            const li = document.createElement('li');
            li.className = 'page-item' + (i === currentPage ? ' active' : '');
            li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
            li.addEventListener('click', (e) => {
                e.preventDefault();
                currentPage = i;
                renderTable();
            });
            pagination.appendChild(li);
        }
    }

    if (sortSelect) {
        sortSelect.addEventListener('change', () => {
            if (sortSelect.value === currentSort) {
                currentSortAsc = !currentSortAsc;
            } else {
                currentSortAsc = true;
            }
            currentSort = sortSelect.value;
            currentPage = 1;
            renderTable();
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', () => {
            currentPage = 1;
            renderTable();
        });
    }

    renderTable();
});
