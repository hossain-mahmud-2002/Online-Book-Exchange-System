// Confirm before delete
function confirmDelete() {
    return confirm("Are you sure you want to delete this book?");
}

// Search filter
document.addEventListener("DOMContentLoaded", () => {
    const search = document.getElementById("search");
    const table = document.getElementById("bookTable");
    search.addEventListener("keyup", function() {
        let filter = search.value.toLowerCase();
        let rows = table.getElementsByTagName("tr");
        for (let i = 1; i < rows.length; i++) {
            let text = rows[i].textContent.toLowerCase();
            rows[i].style.display = text.includes(filter) ? "" : "none";
        }
    });
});
