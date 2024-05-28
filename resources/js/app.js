import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const searchForm = document.getElementById('search-form');
document.getElementById('search').addEventListener("change", () => {
    searchForm.submit();
})
