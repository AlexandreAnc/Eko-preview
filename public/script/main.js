document.addEventListener('DOMContentLoaded', () => {
    function checkScreenSize() {
        if (window.innerWidth > 768) {
            document.body.innerHTML = '<p>Merci de mettre le format en version téléphone</p>';
        } else {
            location.reload();
        }
    }

    checkScreenSize();
    window.addEventListener('resize', checkScreenSize);
});

function tryBySongs(category) {
    const categoryItems = document.querySelectorAll('.category-music-item');

    categoryItems.forEach(item => {
        item.classList.remove('active-music-category');
    });

    const activeItem = Array.from(categoryItems).find(item => item.getAttribute('onclick') === `tryBySongs('${category}');`);
    if (activeItem) {
        activeItem.classList.add('active-music-category');
    }

    const allSections = document.querySelectorAll('.songs-category ~ section');
    allSections.forEach(section => {
        section.style.transition = 'opacity 0.5s';
        section.style.opacity = 0;
        setTimeout(() => {
            section.style.display = 'none';
        }, 500);
    });

    setTimeout(() => {
        if (category === 'all') {
            allSections.forEach(section => {
                section.style.display = 'block';
                setTimeout(() => {
                    section.style.opacity = 1;
                }, 0);
            });
        } else {
            const activeSection = document.querySelector(`.${category}`);
            if (activeSection) {
                activeSection.style.display = 'block';
                setTimeout(() => {
                    activeSection.style.opacity = 1;
                }, 0);
            }
        }
    }, 500);
}

function tryByCards(category) {
    const categoryItems = document.querySelectorAll('.category-collection-item');

    categoryItems.forEach(item => {
        item.classList.remove('active-collection-category');
    });

    const activeItem = Array.from(categoryItems).find(item => item.getAttribute('onclick') === `tryByCards('${category}');`);
    if (activeItem) {
        activeItem.classList.add('active-collection-category');
    }
}


function tryByBooster(category) {
    const categoryItems = document.querySelectorAll('.category-boutique-item');

    categoryItems.forEach(item => {
        item.classList.remove('active-boutique-category');
    });

    const activeItem = Array.from(categoryItems).find(item => item.getAttribute('onclick') === `tryByBooster('${category}');`);
    if (activeItem) {
        activeItem.classList.add('active-boutique-category');
    }

    const allBoosters = document.querySelectorAll('.card-boutique');
    allBoosters.forEach(booster => {
        booster.style.transition = 'opacity 0.5s';
        booster.style.opacity = 0;
        setTimeout(() => {
            booster.style.display = 'none';
        }, 500);
    });

    setTimeout(() => {
        let activeBoosters;
        if (category === 'all') {
            activeBoosters = allBoosters;
        } else {
            activeBoosters = document.querySelectorAll(`.card-boutique[data-type='${category}']`);
        }

        const boosterList = document.querySelector('.booster-list');
        if (activeBoosters.length === 0) {
            const noBoosterMessage = document.createElement('p');
            noBoosterMessage.textContent = "Aucun booster correspondant n'est disponible";
            noBoosterMessage.classList.add('no-booster-message');
            boosterList.appendChild(noBoosterMessage);
        } else {
            document.querySelectorAll('.no-booster-message').forEach(message => message.remove());
            activeBoosters.forEach(booster => {
                booster.style.display = 'flex';
                setTimeout(() => {
                    booster.style.opacity = 1;
                }, 0);
            });
        }
    }, 500);
}


function show(element) {
    const navItems = document.querySelectorAll('nav *');
    navItems.forEach(item => {
        item.classList.remove('active-icon-1', 'active-icon-2');
    });

    const articles = document.querySelectorAll('nav article');
    articles.forEach((article, index) => {
        article.classList.remove('active-icon-1', 'active-icon-2');
    });
    const clickedArticle = Array.from(articles).find(article => article.getAttribute('onclick') === `show('${element}');`);
    if (clickedArticle) {
        const index = Array.from(articles).indexOf(clickedArticle);
        if (index % 2 === 0) {
            clickedArticle.classList.add('active-icon-1');
        } else {
            clickedArticle.classList.add('active-icon-2');
        }
    }

    const songsElement = document.getElementById('songs');
    const collectionElement = document.getElementById('collection');
    const boutiqueElement = document.getElementById('boutique');
    const profilElement = document.getElementById('profil');

    if (element === 'songs') {
        collectionElement.style.display = 'none';
        boutiqueElement.style.display = 'none';
        profilElement.style.display = 'none';
        songsElement.style.display = 'block';
        setTimeout(() => {
            songsElement.style.opacity = 1;
        }, 0);
    } else if (element === 'collection') {
        songsElement.style.display = 'none';
        boutiqueElement.style.display = 'none';
        profilElement.style.display = 'none';
        collectionElement.style.display = 'block';
        setTimeout(() => {
            collectionElement.style.opacity = 1;
        }, 0);
    } else if (element === 'boutique') {
        songsElement.style.display = 'none';
        collectionElement.style.display = 'none';
        profilElement.style.display = 'none';
        boutiqueElement.style.display = 'block';
        setTimeout(() => {
            boutiqueElement.style.opacity = 1;
        }, 0);
    } else if (element === 'profil') {
        songsElement.style.display = 'none';
        collectionElement.style.display = 'none';
        boutiqueElement.style.display = 'none';
        profilElement.style.display = 'block';
        setTimeout(() => {
            profilElement.style.opacity = 1;
        }, 0);
    }
}