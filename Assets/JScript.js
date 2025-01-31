

document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");

    form.addEventListener("submit", (e) => {
        const isbn = document.getElementById("isbn").value.trim();
        const title = document.getElementById("title").value.trim();
        const price = document.getElementById("price").value.trim();

        if (!isbn || !title || !price || isNaN(price)) {
            e.preventDefault();
            alert("Please fill out all required fields correctly.");
        }
    });
});