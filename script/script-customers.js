const modalCount = document.querySelector('.modal-count');

document.querySelector('.btn-close-count').addEventListener('click', () => {
    modalCount.classList.add('hidden');
    overlay.classList.add('hidden');
});

document.querySelector('.btn-count').addEventListener('click', () => {
    modalCount.classList.remove('hidden');
    overlay.classList.remove('hidden');
});
