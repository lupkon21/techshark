const createModal = document.querySelector('.modal-create');
const modalEdit = document.querySelector('.modal-edit');
const overlay = document.querySelector('.overlay');

const openCreateModal = document.querySelector('.btn-create');
const closeModal = document.querySelector('.btn-close-create');

openCreateModal.addEventListener('click', showCreateModal);
closeModal.addEventListener('click', closeCreateModal);

if (document.querySelector('.btn-close-edit')) {
    document.querySelector('.btn-close-edit').addEventListener('click', () => {
        modalEdit.classList.add('hidden');
        overlay.classList.add('hidden');
    });
}

function showCreateModal() {
    createModal.classList.remove('hidden');
    overlay.classList.remove('hidden');
}

function closeCreateModal() {
    createModal.classList.add('hidden');
    overlay.classList.add('hidden');
}

let progress = 0;
const count_progress = () => {
    const progress_tag = document.querySelector('.progress');
    let form = document.querySelector('.form-create-customer');

    // get all input type fields except for submit
    form = [...form.querySelectorAll('input')];
    form = form.filter((i) => i.id != '');
    progress_tag.max = form.length;

    form.map((i) => {
        // if input hasn't been filled and now is
        if (i.value && !i.classList.contains('active')) {
            progress++;
            i.classList.add('active');
        }

        // if input has been filled and now is not
        if (!i.value && progress > 0 && i.classList.contains('active')) {
            progress--;
            i.classList.remove('active');
        }
    });
    progress_tag.value = progress;
};
