/* FORMULAIRE */

// RÉCUPÉRATION DU BOUTON EFFACER
const boutonEffacer = document.querySelector('.boutonEffacer');
// RÉCUPÉRATION DU FORMULAIRE
const formulaire = document.querySelector('#formulaire');
// GESTION DU BOUTON EFFACER
boutonEffacer.addEventListener("click", () => {
    formulaire.reset();
})


/* AFFICHAGE */

// RÉCUPÉRATION DES ONGLETS
const ongletPermanencesDesSoins = document.querySelector('.permanencesDesSoins');
const ongletNumerosAbreges = document.querySelector('.numerosAbreges');
const ongletNumerosUsuels = document.querySelector('.numerosUsuels');
const ongletInfos = document.querySelector('.infos');
const ongletProcedureDect = document.querySelector('.procedureDect');
const ongletNumerosSecours = document.querySelector('.numerosSecours');
const ongletGipGie = document.querySelector('.gipGie');
const ongletEfs = document.querySelector('.efs');
let onglets = [];
onglets.push(ongletPermanencesDesSoins, ongletNumerosUsuels, ongletNumerosAbreges, ongletInfos, ongletProcedureDect, ongletNumerosSecours, ongletGipGie, ongletEfs);

// RÉCUPÉRATION DES DIVS
const divPermanencesDesSoins = document.querySelector('.divPermanencesDesSoins');
const divNumerosUsuels = document.querySelector('.divNumerosUsuels');
const divNumerosAbreges = document.querySelector('.divNumerosAbreges');
const divInfos = document.querySelector('.divInfos');
const divProcedureDect = document.querySelector('.divProcedureDect');
const divNumerosSecours = document.querySelector('.divNumerosSecours');
const divGipGie = document.querySelector('.divGipGie');
const divEfs = document.querySelector('.divEfs');
let divs = [];
divs.push(divPermanencesDesSoins, divNumerosUsuels, divNumerosAbreges, divInfos, divProcedureDect, divNumerosSecours, divGipGie, divEfs);

// Ajouter la classe "active" et l'attribut "aria-current" à l'onglet permanences des soins
document.addEventListener("DOMContentLoaded", () => {
    ongletPermanencesDesSoins.classList.add('active');
    ongletPermanencesDesSoins.setAttribute('aria-label','page');
})

// AFFICHER OU NON LES DIVS
for (let i = 0; i < onglets.length; i++) {
    // Quand on clique sur un onglet
    onglets[i].addEventListener("click", () => {
        // On enlève la classe "active" et l' attribut "aria-current" de tous les onglets
        for (let j = 0; j < onglets.length; j++) {
            // Si les classes contiennent le mot 'active'
            if (onglets[j].classList.contains('active')) {
                onglets[j].classList.remove('active');
                onglets[j].removeAttribute('aria-current');
            }
        }
        for (let k = 0; k < divs.length; k++) {
            // On supprime tous les templates de l'affichage
            divs[k].style.display = "none";
        }
        // On ajoute la classe 'active' et l'attribut 'aria-current="page"' à l'onglet en cours
        onglets[i].classList.add('active');
        onglets[i].setAttribute('active','page');
        // On affiche la div de l'onglet en cours
        divs[i].style.display = "contents";
    })
}