function clearErrors(element) {
    element.setCustomValidity("");
}

function validateForm(element = null) {
    var args;
    var fornavnErr, etternavnErr, fodselsaarErr, yrkerErr;

    if (element === null) {
        args = 0;
    }


    if (args === 0 || element.id === "forNavn") {
        fornavnErr = true;
        var fornavn = document.getElementById("forNavn").value;
        if (fornavn === "") {
            document.getElementById("forNavn-error").innerHTML = "Fornavn er påkrevd!";
            document.getElementById("forNavn-error").style.display = "list-item";
            document.getElementById("forNavn").setCustomValidity("Invalid field.");

        } else {
            document.getElementById("forNavn-error").style.display = "none";
            fornavnErr = false;
        }
    }

    if (args === 0 || element.id === "etterNavn") {
        etternavnErr = true;
        var etternavn = document.getElementById("etterNavn").value;
        if (etternavn === "") {
            document.getElementById("etterNavn-error").innerHTML = "Etternavn er påkrevd!";
            document.getElementById("etterNavn-error").style.display = "list-item";
            document.getElementById("etterNavn").setCustomValidity("Invalid field.");
        } else {
            document.getElementById("etterNavn-error").style.display = "none";
            etternavnErr = false;
        }
    }

    if (args === 0 || element.id === "fodselsAar") {
        fodselsaarErr = true;
        var fodselsaar = document.getElementById("fodselsAar").value;
        var minFodselsAar = new Date().getFullYear() - 80;
        var maxFodselsAar = new Date().getFullYear() - 10;

        if (fodselsaar === "") {
            document.getElementById("fodselsAar-error").innerHTML = "Fødselsår er påkrevd!";
            document.getElementById("fodselsAar-error").style.display = "list-item";
            document.getElementById("fodselsAar").setCustomValidity("Invalid field.");
        } else if (fodselsaar < minFodselsAar || fodselsaar > maxFodselsAar) {
            document.getElementById("fodselsAar-error").innerHTML = "Fødselsår må være mellom " + minFodselsAar + " og " + maxFodselsAar + "!";
            document.getElementById("fodselsAar-error").style.display = "list-item";
            document.getElementById("fodselsAar").setCustomValidity("Invalid field.");
        } else {
            document.getElementById("fodselsAar-error").style.display = "none";
            fodselsaarErr = false;
        }
    }

    var path = window.location.pathname;
    var page = path.split("/").pop();

    if ((args === 0 || element.id === "yrker") && page === "phpoop.php") {
        if ( document.getElementById("yrker").options[ document.getElementById("yrker").selectedIndex].value === "") {
            document.getElementById("yrker-error").innerHTML = "Vennligst velg et yrke!";
            document.getElementById("yrker-error").style.display = "list-item";
            document.getElementById("yrker").setCustomValidity("Invalid field.");
            yrkerErr = true;
        } else {
            document.getElementById("yrker-error").style.display = "none";
            yrkerErr = false;
        }
    }

    if (fornavnErr || etternavnErr || fodselsaarErr || yrkerErr) {
        document.getElementById("form-errors").classList.remove("fadeout");
        document.getElementById("form-errors").classList.add("fadein");
        return false;
    } else {
        document.getElementById("form-errors").classList.remove("fadein");
        document.getElementById("form-errors").classList.add("fadeout");
    }
}