function openSearch() {
    const search = document.getElementById('searchBar');
    if (!search.style.display || search.style.display == "none") {
        search.style.display = "block";
    }
    else {
        search.style.display = "none";
    }
}