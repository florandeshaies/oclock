$(window).load(demarrer);

var duree = 5;
var compte = duree - 1;

function demarrer() {
    $("#mesImages img").hover(function () {
        auSurvol(this)
    }, function () {
        quitteSurvol(this)
    });
    $("#mesImages img").click(function () {
        auClicVisionnage(this)
    });
    $("#flecheG").click(function () {
        imagePrecedente()
    });
    $("#flecheD").click(function () {
        imageSuivante()
    });
    $("#bouton").click(function () {
        diapo()
    });
    $(document).keypress(function (event) {
        var tag = event.target.tagName.toLowerCase();
        if ( event.which == 32 && tag != 'input' && tag != 'textarea') {
            diapo()
        } else if ( event.which == 98 && tag != 'input' && tag != 'textarea') {
            imagePrecedente()
        } else if ( event.which == 110 && tag != 'input' && tag != 'textarea') {
            imageSuivante()
        }
    });
}

function diapo() {
    if ($("#bouton").val() == "STOP") {
        $("#bouton").val("LECTURE");
        stopDiapo();
    } else if ($("#bouton").val() == "LECTURE") {
        $("#bouton").val("STOP");
        lectureDiapo();
    }
}

function stopDiapo() {
    clearInterval(varDiapo);
    clearInterval(varTimer);
    compte = duree - 1;
    document.getElementById("decompte").innerHTML = "";
}

function lectureDiapo() {
    varDiapo = setInterval(imageSuivante, duree * 1000);
    varTimer = setInterval('decompte()', 1000);
}

function decompte() {
    if (compte <= 1) {
        pluriel = "";
    } else {
        pluriel = "s";
    }
    $("#decompte").text("Prochaine image dans " + compte + " seconde" + pluriel);
    if (compte == 1 || compte < 1) {
        compte = duree;
        clearInterval(timer);
    }
    compte--;
}

function imagePrecedente() {
    if (parseInt($("#imagePrincipale").attr('src').match(/[0-9]+/g)) == 1) {
        $("#imagePrincipale").attr('src', $("#imagePrincipale").attr('src').replace(1, $("#mesImages img").length));
    } else {
        $("#imagePrincipale").attr('src', $("#imagePrincipale").attr('src').
                replace(parseInt($("#imagePrincipale").attr('src').match(/[0-9]+/g)), parseInt($("#imagePrincipale").attr('src').match(/[0-9]+/g))-1));
    }
}
function imageSuivante() {
    if (parseInt($("#imagePrincipale").attr('src').match(/[0-9]+/g)) == $("#mesImages img").length) {
        $("#imagePrincipale").attr('src', $("#imagePrincipale").attr('src').replace($("#mesImages img").length, 1));
    } else {
        $("#imagePrincipale").attr('src', $("#imagePrincipale").attr('src').
                replace(parseInt($("#imagePrincipale").attr('src').match(/[0-9]+/g)), parseInt($("#imagePrincipale").attr('src').match(/[0-9]+/g))+1));
    }
}
function auClicVisionnage(img) {
    $("#imagePrincipale").attr('src', $(img).attr('src').replace("desat", "couleur"));
}
function auSurvol(img) {
    $(img).css("border", "2px solid red");
    $(img).attr('src', $(img).attr('src').replace("desat", "couleur"));
}
function quitteSurvol(img) {
    $(img).css("border", "2px solid white");
    $(img).attr('src', $(img).attr('src').replace("couleur", "desat"));
}