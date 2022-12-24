const blogSearch = () => {
    const filterFeedback = document.querySelector(".search-feedback");
    filterFeedback.style.display = "none";
    
    const searchInput = document.querySelector(".input-filter");
    const articles = document.querySelectorAll(".article-searchable");
    const articleTitles = document.querySelectorAll(".article-title");



    // On input start displaying matching content
    searchInput.addEventListener("input", function () {
        var searchInputValue = searchInput.value;
        var amountOfResults = 0;

        // When input is empty -> display normal content
        if (searchInputValue.length < 1) {
            for (let i = 0; i < articles.length; i++) {
                articles[i].style.display = "block";
            }

            filterFeedback.style.display = "none";
        }
        // When input is not empty -> only show matching content on title
        else {
            for (let i = 0; i < articles.length; i++) {
                var searchableTitleArticle = articleTitles[i].innerHTML.toLowerCase();

                if (searchableTitleArticle.includes(searchInputValue)) {
                    amountOfResults++;
                    articles[i].style.display = "block";
                }
                else {
                    articles[i].style.display = "none";
                }

                // Show how many results in title
                if (amountOfResults == 0) {
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = 'geen resultaten voor zoekterm "' + searchInputValue + '"';
                }
                else if (amountOfResults == 1) {
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = '1 resultaat voor zoekterm "' + searchInputValue + '"';
                }
                else {
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = amountOfResults + ' resultaten voor zoekterm "' + searchInputValue + '"';
                }
            }
        }
    });
};

blogSearch();