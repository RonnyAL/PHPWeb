var fornavnErr, etternavnErr, fodselsaarErr, yrkeErr;

function clearErrors(element) {
    element.setCustomValidity("");
}

function validateForm(element) {

    if (element.id === "forNavn") {
        fornavnErr = true;
        var fornavn = element.value;
        if (fornavn === "") {
            document.getElementById("forNavn-error").innerHTML = "Fornavn er påkrevd!";
            document.getElementById("forNavn-error").style.display = "list-item";
            element.setCustomValidity("Invalid field.");
        } else {
            document.getElementById("forNavn-error").style.display = "none";
            fornavnErr = false;
        }
    } else if (element.id === "etterNavn") {
        etternavnErr = true;
        var etternavn = element.value;
        if (etternavn === "") {
            document.getElementById("etterNavn-error").innerHTML = "Etternavn er påkrevd!";
            document.getElementById("etterNavn-error").style.display = "list-item";
            element.setCustomValidity("Invalid field.");
        } else {
            document.getElementById("etterNavn-error").style.display = "none";
            etternavnErr = false;
        }
    } else if (element.id === "fodselsAar") {
        fodselsaarErr = true;
        var fodselsaar = element.value;
        var minFodselsAar = new Date().getFullYear() - 80;
        var maxFodselsAar = new Date().getFullYear() - 10;

        if (fodselsaar === "") {
            document.getElementById("fodselsAar-error").innerHTML = "Fødselsår er påkrevd!";
            document.getElementById("fodselsAar-error").style.display = "list-item";
            element.setCustomValidity("Invalid field.");
        } else if (fodselsaar < minFodselsAar || fodselsaar > maxFodselsAar) {
            document.getElementById("fodselsAar-error").innerHTML = "Fødselsår må være mellom " + minFodselsAar + " og " + maxFodselsAar + "!";
            document.getElementById("fodselsAar-error").style.display = "list-item";
            element.setCustomValidity("Invalid field.");
        } else {
            document.getElementById("fodselsAar-error").style.display = "none";
            fodselsaarErr = false;
        }
    } else if (element.id === "yrker") {
        if (element.options[element.selectedIndex].value === "") {
            document.getElementById("yrker-error").innerHTML = "Vennligst velg et yrke!";
            document.getElementById("yrker-error").style.display = "list-item";
            element.setCustomValidity("Invalid field.");
            yrkeErr = true;
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