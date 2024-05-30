import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const searchForm = document.getElementById('search-form');
const searchSelect = document.getElementById('search');
searchSelect.addEventListener("change", () => {
    if (searchSelect.value !== 'all') {
        searchForm.submit();
    }
});

const deleteButtonShow = document.getElementById('deleteButton');
deleteButtonShow.addEventListener("click", (event) => {
    console.log('deleteButton');
    // event.preventDefault();
    // const myModal = new bootstrap.Modal(
    //     document.getElementById('ModalShow')
    // );
    // myModal.show();
});

