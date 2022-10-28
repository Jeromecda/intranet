// RÉCUPÉRATION DES ONGLETS
const ongletSemaine = document.querySelector('.semaine');
const ongletWeekEnd = document.querySelector('.weekEnd');
const ongletEfs = document.querySelector('.efs');
let onglets = [];
onglets.push(ongletSemaine, ongletWeekEnd);

// RÉCUPÉRATION DES DIVS
const divSemaine = document.querySelector('.divSemaine');
const divWeekEnd = document.querySelector('.divWeekEnd');
let divs = [];
divs.push(divSemaine, divWeekEnd);

// Ajouter la classe "active" et l'attribut "aria-current" à l'onglet permanences des soins
document.addEventListener("DOMContentLoaded", () => {
    ongletSemaine.classList.add('active');
    ongletSemaine.setAttribute('aria-label','page');
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