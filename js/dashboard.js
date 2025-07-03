/* globals Chart:false */

(() => {
  'use strict'

  // Graphs
  const ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483,
          24003,
          23489,
          24092,
          12034
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          boxPadding: 3
        }
      }
    }
  })
})()

// Données mockées pour la démonstration
const demandes = Array.from({length: 37}, (_, i) => ({
    id: i + 1,
    nom: `Demandeur ${i + 1}`,
    date: `2024-06-${(i % 30 + 1).toString().padStart(2, '0')}`
}));

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
            if (key === 'id' && txt.includes('id')) return i;
            if (key === 'nom' && txt.includes('nom')) return i;
            if (key === 'email' && txt.includes('email')) return i;
            if (key === 'date' && txt.includes('date')) return i;
            if (key === 'titre' && txt.includes('titre')) return i;
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
            if (key === 'id') {
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
        renderTable();
    }

    if (searchInput) {
        searchInput.addEventListener('input', () => {
            currentPage = 1;
            renderTable();
        });
    }

    renderTable();
});
