document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("search_query");
    const suggestions = document.getElementById("suggestions");

    searchInput.addEventListener("input", () => {
        const query = searchInput.value;

        if (query.length > 1) {
            fetch(`search_suggestions.php?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    suggestions.innerHTML = "";
                    if (data.length > 0) {
                        const list = document.createElement("ul");
                        data.forEach(item => {
                            const listItem = document.createElement("li");
                            listItem.textContent = `${item.title} by ${item.artist}`;
                            list.appendChild(listItem);
                        });
                        suggestions.appendChild(list);
                    }
                });
        } else {
            suggestions.innerHTML = "";
        }
    });
});
