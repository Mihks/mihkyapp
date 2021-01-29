<? php

// Lit les variables envoyées via POST

$ sessionId = $ _POST ["sessionId"];

$ serviceCode = $ _POST ["serviceCode"];

$ text = $ _POST ["text"];

// Ceci est le premier écran de menu

si ($ text == "") {

$ response = "CON Bonjour, je peux vous aider avec la réservation d'événement \ n";

$ response. = "1. Entrez 1 pour continuer";

}
// Menu pour un utilisateur qui sélectionne '1' dans le premier menu

// Sera amené à ce deuxième écran de menu

sinon si ($ text == "1") {

$ response = "CON Choisissez une table pour la réservation ci-dessous \ n ";

$ response. = "1. Table pour 2 \ n";

$ response. = "2. Table pour 4 \ n";

$ response. = "3. Table pour 6 \ n";

$ response. = "4. Table pour 8 \ n";

}
// Menu pour un utilisateur qui sélectionne '1' dans le deuxième menu ci-dessus

// Sera amené à ce troisième écran de menu

sinon si ($ text == "1 * 1") {

$ response = "CON Vous êtes sur le point de réserver une table pour 2 \ n ";

$ response. = "Veuillez entrer 1 pour confirmer \ n";

}

else if ($ text == "1 * 1 * 1") {

$ response = "CON Table for 2 cost -N- 50,000.00 \ n";

$ response. = "Entrez 1 pour continuer \ n";

$ response. = "Entrez 0 pour annuler";

}
else if ($ text == "1 * 1 * 1 * 1") {

$ response = "END Votre réservation de table pour 2 a été réservée";

}

else if ($ text == "1 * 1 * 1 * 0") {

$ response = "

// Menu pour un utilisateur qui sélectionne "2" dans le deuxième menu ci-dessus

// Sera amené à ce quatrième écran de menu

sinon si ($ text == "1 * 2") {

$ response = "CON Vous êtes sur le point de réserver une table pour 4 \ n ";

$ response. = "Veuillez entrer 1 pour confirmer \ n";

}
// Menu pour un utilisateur qui sélectionne "1" dans le quatrième écran de menu

sinon si ($ text == "1 * 2 * 1") {

$ response = "CON Table for 4 cost -N- 150,000.00 \ n";

$ response. = "Entrez 1 pour continuer \ n";

$ response. = "Entrez 0 pour annuler";

}

else if ($ text == "1 * 2 * 1 * 1") {

$ response = "END Votre réservation de table pour 4 a été réservée";

}

else if ($ text == "

}

// Menu pour un utilisateur qui entre "3" dans le deuxième menu ci-dessus

// Sera amené à ce cinquième écran de menu

sinon si ($ text == "1 * 3") {

$ response = "CON Vous êtes sur le point de réserver une table pour 6 \ n ";

$ response. = "Veuillez entrer 1 pour confirmer \ n";

}

// Menu pour un utilisateur qui entre "1" dans le cinquième menu

sinon si ($ text == "1 * 3 * 1") {

$ response = "CON Table for 6 cost -N- 250,000.00 \ n";

$ response. = "Entrez 1 pour continuer \ n";

$ response. = "Entrez 0 pour annuler";

}

else if ($ text == "1 * 3 * 1 * 1") {

$ response = "END Votre réservation de table pour 6 a été réservée";

}

else if ($ text == "

$ response = "END Votre réservation de table pour 6 a été annulée";

}

// Menu pour un utilisateur qui entre "4" dans le deuxième menu ci-dessus

// Sera amené à ce sixième écran de menu

sinon si ($ text == "1 * 4") {

$ response = "CON Vous êtes sur le point de réserver une table pour 8 \ n ";

$ response. = "Veuillez entrer 1 pour confirmer \ n";

}

// Menu pour un utilisateur qui entre "1" dans le sixième menu

sinon si ($ text == "1 * 4 * 1") {

$ response = "CON Table for 8 cost -N- 250,000.00 \ n";

$ response. = "Entrez 1 pour continuer \ n";

$ response. = "Entrez 0 pour annuler";

}

else if ($ text == "1 * 4 * 1 * 1") {

$ response = "

else if ($ text == "1 * 4 * 1 * 0") {

$ response = "END Votre réservation de table pour 8 a été annulée";

}

// en-

tête de

réponse d'écho

('Content-type: text / plain');

echo $ response

?>
