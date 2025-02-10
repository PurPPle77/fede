let menu = document.getElementById("clicmenu");
let lienMenu = document.getElementById("lienmenu");
let catcoche = document.getElementById("cocheactiv");

const categorieprincipale = {
    aquatique: {
        "En Piscine": ["Natation", "Natation artistique", "Plongeon", "Aquagym", "Water-Polo", "Apnée", "Aquabike", "Hockey", "Plongée sportive", "Nage avec palmes", "Tir sur cible"],

        "En mer": ["Surf", "Bodyboard", "Foil-surf", "Windsurf", "Kitesurf", "Stand-up paddle", "Voile", "jet-ski", "Ski nautique", "Motonautisme", "Plongée", "Apnée", "Snorkelling", "Chasse sous marine", "Nage en eau libre", "Pêche sportive", "Kayak en mer", "Char à voile", "Planche à voile"],

        "Eau vive ou lac": ["Rafting", "Canoë-Kayak", "Slalom Canoë-Kayak", "Descente Canoë-Kayak", "Freestyle Canoë-Kayak", "Hydrospeed", "Stand-up paddle", "Canyoning", "Pêche sportive", "Tubing", "raft collectif", "Voile", "jet-ski", "Ski nautique", "Motonautisme", "Planche à voile", "Nage en eau libre"]
    },

    terrestre: {
        "En intérieur": ["Basket-ball", "Volley-ball", "Handball", "Badminton", "Tennis de table", "Gymnastique artistique", "Gymnastique rythmique", "Escalade en salle", "Escrime", "Boxe", "Arts martiaux (judo, karaté, taekwondo, etc.)", "Danse (classique, moderne, hip-hop, etc.)", "Hockey en salle", "Futsal", "Trampoline", "CrossFit ou fitness en salle", "Basket fauteuil (handisport)", "Haltérophilie", "Tir à l'arc en salle", "Parkour en salle (freerun indoor)"],

        "En extérieur": ["Football", "Rugby", "Tennis", "Athlétisme", "Cyclisme sur route", "Course d'orientation", "Randonnée", "Trail running", "Escalade en falaise", "Golf", "Tir à l'arc en extérieur", "Skateboard", "RollerBlade", "VTT (vélo tout terrain)", "Equitation", "Beach-volley", "Pétanque", "Marche nordique", "Parkour en extérieur (freerun)", "Boules lyonnaises"]
    },
    //LISTE PAS FINIS DU TOUT A TRIER
    aeriennes: {
        "Parapente": ["Parapente en montagne"],
        "Saut en parachute": ["Chute libre"]
    },
    mixte: {
        "Triathlon": ["Compétition combinée"],
        "Duathlon": ["Cyclisme et course"]
    },
    glace: {
        "Ski": ["Ski de fond", "Ski alpin"],
        "Patinage": ["Patinage artistique"]
    }
};

// Ajouter ici le code pour l’affichage des catégories selon la sélection de l’utilisateur
// ne pas oublier de rétablir l’ensemble si on décoche tout


// Étape 1 : Sélectionner toutes les cases à cocher ayant la classe 'coche'.
const checkboxes = document.querySelectorAll('.coche');
// - 'const' crée une variable qui ne changera pas.
// - 'checkboxes' est le nom de cette variable qui contiendra une liste de toutes les cases à cocher.
// - 'document.querySelectorAll(".coche")' cherche tous les éléments dans le HTML qui ont la classe 'coche'.

// Étape 2 : Parcourir chaque case à cocher pour y attacher un événement.
checkboxes.forEach(function (checkbox) {
    // - '.forEach' signifie : "Pour chaque élément de la liste checkboxes, fais ce qui suit."
    // - 'checkbox' est le petit nom donné à chaque case à cocher pendant qu'on travaille dessus.

    // Ajouter un événement de clic sur chaque case à cocher.
    checkbox.addEventListener('click', function () {
        // - '.addEventListener' écoute les événements. Ici, on écoute un 'click'.
        // - 'function() { ... }' est une fonction classique. Elle s'exécute quand on clique sur une case.

        // Étape 3 : Parcourir à nouveau toutes les cases à cocher pour décocher les autres.
        checkboxes.forEach(function (cb) {
            // - Une nouvelle boucle 'forEach' commence pour parcourir toutes les cases à cocher.
            // - 'cb' est un nouveau petit nom pour chaque case qu'on examine dans cette boucle.

            // Si la case actuelle n'est pas celle qui a été cliquée...
            if (cb !== checkbox) {
                // - 'if' vérifie une condition.
                // - 'cb !== checkbox' signifie : "Si cette case (cb) est différente de la case qui a été cliquée (checkbox)..."

                // ... alors, décocher cette case.
                cb.checked = false;
                // - '.checked' est une propriété qui indique si une case est cochée (true) ou non (false).
                // - 'cb.checked = false;' signifie : "Décoche cette case."
            }
        });
        // Fin de la deuxième boucle qui vérifie et décoche les autres cases.
    });
    // Fin de l'événement de clic attaché à chaque case.
});
// Fin de la première boucle qui parcourt toutes les cases à cocher.
