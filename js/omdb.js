var coversDict = [];

function isOnDataList(title){
    const dtListOptions = document.getElementById("movieOptions").childNodes;
    for(var i=0;i<dtListOptions.length;i++){
        if(dtListOptions[i].value == title){
            return true;
        }
    }
    return false;
}

function getDataFromDict(title){
    for(var i=0;i<coversDict.length;i++){
        if(coversDict[i].key == title)
            return coversDict[i].value;
    }
}

function updateList(movies,coversDict) {
    coversDict = [];
    const datalist = document.getElementById('movieOptions');
    datalist.innerHTML = ''; 
    movies.forEach(movie => {
        coversDict.push({key:movie.Title,value:[movie.Poster,movie.Type]});
        const option = document.createElement('option');
        option.value = movie.Title;
        datalist.appendChild(option);
    });
    return coversDict;
}

function chooseMovie(){
    const title = document.getElementById("showname").value;

    if(isOnDataList(title)){
        var imgDisplay = document.getElementById("movieCover");
        var showData = getDataFromDict(title)

        document.getElementById("coverPath").value=showData[0];
        document.getElementById("showTitle").value=title;
        document.getElementById("showType").value=showData[1];

        if(showData[0] != "N/A"){
            imgDisplay.src = showData[0];
        }
    }
}

function formValidation(form) {
    var input = document.getElementById('showname');
    const defaultCover = "moviecoverplaceholder.jpg";
    var coverDisplay = document.getElementById("movieCover").src;

    coverDisplay = coverDisplay.substring(coverDisplay.length-25);

    if (input.value.trim() === "" ||
        (coverDisplay == defaultCover)) {
        input.setCustomValidity("You must enter a valid movie!");
    } else {
        input.setCustomValidity("");
    }

    if (!form.checkValidity()) {
        event.preventDefault(); 
        form.reportValidity();
    }
}

$(document).ready(function() {
    const apiKey = 'c710538c'; // Replace with your OMDB API key

    // Input event listener for #showname for OMDB API call
    $('#showname').on('input', function(e) {
        const title = e.target.value;
        const url = `http://www.omdbapi.com/?apikey=${apiKey}&s=${encodeURIComponent(title)}`;
        if (title.length > 2) {
            fetch(url)
            .then(response => response.json())
            .then(data => {
                if(data.Response === "True") {
                    coversDict = updateList(data.Search, coversDict);
                }
            })
            .catch(error => console.error('Error:', error));
        }

        if (!(e instanceof InputEvent) || e.inputType === 'insertReplacementText') {
            chooseMovie();
        }
    });

    // Keydown event listener for #showname to handle Enter or Tab
    $('#showname').on('keydown', function(e) {
        var code = e.keyCode || e.which;    
        if (code == 13 || code == 9) { // Enter or Tab
            chooseMovie();
        }
    });

    // Form submit event listener
    $('#addRatingForm').on('submit', function(event) {
        formValidation(this); // Pass 'this' as the form element
    });

    // Input event listener for resetting custom validation
    $('#showname').on('input', function() {
        this.setCustomValidity("");
    });
});