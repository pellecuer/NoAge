
$(document).ready(function() {
    $('#formationShowBought').on('click', function() {
        var bought = document.getElementById("bought");
        var created = document.getElementById("cree");
        var favoriteformations = document.getElementById("favoriteFormation");
        var favoriteformateurs = document.getElementById("favoriteFormateur");
        if (bought.style.display !== "block") {
            bought.style.display = "block";
            created.style.display = "none";
            favoriteformations.style.display = "none";
            favoriteformateurs.style.display = "none";
        }
    });

    $('#formationShowCreated').on('click', function() {
        var bought = document.getElementById("bought");
        var created = document.getElementById("cree");
        var favoriteformations = document.getElementById("favoriteFormation");
        var favoriteformateurs = document.getElementById("favoriteFormateur");
        if (created.style.display !== "block" ) {
            created.style.display = "block";
            bought.style.display = "none";
            favoriteformations.style.display = "none";
            favoriteformateurs.style.display = "none";
        }
    });

    $('#showFavoriteFormation').on('click', function() {
        var bought = document.getElementById("bought");
        var created = document.getElementById("cree");
        var favoriteformations = document.getElementById("favoriteFormation");
        var favoriteformateurs = document.getElementById("favoriteFormateur");
        if (favoriteformations.style.display !== "block") {
            favoriteformations.style.display = "block";
            created.style.display = "none";
            bought.style.display = "none";
            favoriteformateurs.style.display = "none";
        }
    });

    $('#showFavoriteFormateur').on('click', function() {
        var bought = document.getElementById("bought");
        var created = document.getElementById("cree");
        var favoriteformations = document.getElementById("favoriteFormation");
        var favoriteformateurs = document.getElementById("favoriteFormateur");
        if (favoriteformateurs.style.display !== "block") {
            favoriteformateurs.style.display = "block";
            favoriteformations.style.display = "none";
            created.style.display = "none";
            bought.style.display = "none";
        }
    });
});