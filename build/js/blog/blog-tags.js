const tagFilter = () => {
    const filterFeedback = document.querySelector(".search-feedback");
    filterFeedback.style.display = "none";

    const tags = document.querySelectorAll(".filter-tag");
    const articles = document.querySelectorAll(".article-searchable");

    const removeTagsButton = document.querySelector(".filter-tags__remove__tag");

    var activeTags = [];
    var amountOfResults = 0;



    // Collect all article tags in multidimensional array
    const structuredTags = [];

    for(let i = 0; i < articles.length; i++) {
        structuredTags.push(articles[i].querySelectorAll(".tag"));
    }



    removeTagsButton.addEventListener("click", function() {

        // Reset active tags & amount of results
        activeTags = [];
        amountOfResults = 0;

        // Set display of filterFeedback to none
        filterFeedback.style.display = "none";

        for(let i = 0; i < tags.length; i++) {
            tags[i].classList.remove("active");
        }

        // Set all articles display to block
        for(let i = 0; i < articles.length; i++) {
            articles[i].style.display = "block";
        }
    })



    // Onclick of tag -> start filtering articles
    for(let i = 0; i < tags.length; i++) {
        tags[i].addEventListener("click", function() {
            tags[i].classList.toggle("active");

            // Collect all active tags
            activeTags = document.querySelectorAll(".filter-tag.active");

            // Reset results
            amountOfResults = 0;

            // At first set display of all articles to none
            for(let j = 0; j < articles.length; j++) {
                articles[j].style.display = "none";
            }

            // When no active tags -> display normal content
            if(activeTags.length < 1) {
                for (let j = 0; j < articles.length; j++) {
                    articles[j].style.display = "block";
                }

                filterFeedback.style.display = "none";
            }
            // When input is not empty -> only show matching content on title
            else {

                // Loop through articles
                for (let j = 0; j < articles.length; j++) {

                    // Loop through tags of each article
                    for(let k = 0; k < structuredTags[j].length; k++) {
                        var filterableTag = structuredTags[j][k].innerHTML.toLowerCase();
                    
                        // Loop through active tags
                        for(let l = 0; l < activeTags.length; l++) {

                            // If tag matches one of the active tags
                            if(activeTags[l].innerHTML.toLowerCase() == filterableTag) {

                                // If articles display was not yet set to block, set to block
                                if(articles[j].style.display != "block") {
                                    articles[j].style.display = "block";
                                    amountOfResults += 1;
                                }
                            }
                        }
                    }
                }

                if (amountOfResults == 1) {
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = "1 resultaat";
                }
                else {
                    filterFeedback.style.display = "block";
                    filterFeedback.innerHTML = amountOfResults + " resultaten";
                }
            }
        });
    }
};

tagFilter();