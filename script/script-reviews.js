const modalRevAvg = document.querySelector('.modal-rev-avg');

document.querySelector('.btn-close-rev-avg').addEventListener('click', () => {
    modalRevAvg.classList.add('hidden');
    overlay.classList.add('hidden');
});

document.querySelector('.btn-rev-avg').addEventListener('click', () => {
    modalRevAvg.classList.remove('hidden');
    overlay.classList.remove('hidden');
});
