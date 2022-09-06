const tagFilter = () => {
    const filterFeedback = document.querySelector(".search-feedback");
    filterFeedback.style.display = "none";

    const tags = document.querySelectorAll(".filter-tag");
    const articles = document.querySelectorAll(".article-searchable");

    const removeTagsButton = document.querySelector(".filter-tags__remove__tag");

    var activeTags = [];
    var amountOfResults = 0;



    //collect all article tags in multidimensional array
    const structuredTags = [];

    for(let i = 0; i < articles.length; i++) {
        structuredTags.push(articles[i].querySelectorAll(".tag"));
    }



    //onclick of removeTagsButton
    removeTagsButton.addEventListener("click", function() {
        //console.log("remove");

        //reset active tags & amount of results
        activeTags = [];
        amountOfResults = 0;

        //set display of filterFeedback to none
        filterFeedback.style.display = "none";

        for(let i = 0; i < tags.length; i++) {
            tags[i].classList.remove("active");
        }

        //set all articles display to block
        for(let i = 0; i < articles.length; i++) {
            articles[i].style.display = "block";
        }
    })



    //onclick of tag -> start filtering articles
    for(let i = 0; i < tags.length; i++) {
        tags[i].addEventListener("click", function() {
            tags[i].classList.toggle("active");

            //collect all active tags
            activeTags = document.querySelectorAll(".filter-tag.active");

            //reset results
            amountOfResults = 0;

            //at first set display of all articles to none
            for(let j = 0; j < articles.length; j++) {
                articles[j].style.display = "none";
            }

            //when no active tags -> display normal content
            if(activeTags.length < 1) {
                for (let j = 0; j < articles.length; j++) {
                    articles[j].style.display = "block";
                }

                filterFeedback.style.display = "none";
            }
            //when input is not empty -> only show matching content on title
            else {

                //loop through articles
                for (let j = 0; j < articles.length; j++) {

                    //loop through tags of each article
                    for(let k = 0; k < structuredTags[j].length; k++) {
                        var filterableTag = structuredTags[j][k].innerHTML.toLowerCase();
                    
                        //loop through active tags
                        for(let l = 0; l < activeTags.length; l++) {

                            //if tag matches one of the active tags
                            if(activeTags[l].innerHTML.toLowerCase() == filterableTag) {

                                //if articles display was not yet set to block, set to block
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