<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#202020">
    <meta name="msapplication-TileColor" content="#202020">
    <meta name="description" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="https://alexanc.fr/eko/home.php">
    <meta property="og:locale" content="fr_FR">
    <meta name="author" content="Alexandre Ancelle">
    <link rel="stylesheet" href="style/style.css">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="My WebApp">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var script = document.createElement("script");
            script.src = "script/main.js";
            document.body.appendChild(script);
        });
    </script>
    <title>Eko - Accueil</title>
</head>
<body>
    <script>
        function checkScreenSize() {
            const overlay = document.getElementById('screen-size-overlay');
            console.log('Checking screen size:', window.innerWidth);
            if (window.innerWidth > 768) {
                console.log('Screen width is greater than 768px');
                if (!overlay) {
                    console.log('Overlay does not exist, creating one');
                    const div = document.createElement('div');
                    div.id = 'screen-size-overlay';
                    div.style.position = 'fixed';
                    div.style.top = '0';
                    div.style.left = '0';
                    div.style.width = '100%';
                    div.style.height = '100%';
                    div.style.backgroundColor = 'white';
                    div.style.zIndex = '9999';
                    div.style.display = 'flex';
                    div.style.justifyContent = 'center';
                    div.style.alignItems = 'center';
                    div.innerHTML = '<p style="color: #393939;">Merci de mettre le format en version téléphone</p>';
                    document.body.appendChild(div);
                } else {
                    console.log('Overlay already exists');
                }
            } else {
                console.log('Screen width is less than or equal to 768px');
                if (overlay) {
                    console.log('Removing overlay');
                    overlay.remove();
                } else {
                    console.log('No overlay to remove');
                }
            }
        }

        checkScreenSize();
        window.addEventListener('resize', checkScreenSize);
    </script>
    <section id="songs" class="songs">
        <section id="scrollable" class="scrollable">
            <section class="all-container">
                <section class="songs-category">

                    <article class="category-music-item active-music-category" onclick="tryBySongs('all');">
                        <p>Tout</p>
                    </article>

                    <article class="category-music-item" onclick="tryBySongs('albums');">
                        <p>Albums</p>
                    </article>

                    <article class="category-music-item" onclick="tryBySongs('musics');">
                        <p>Musiques</p>
                    </article>

                    <article class="category-music-item" onclick="tryBySongs('artists');">
                        <p>Artistes</p>
                    </article>


                </section>

                <section class="albums">
                    
                    <h2 class="orange">Albums disponibles</h2>
                    <div class="albums-container">

                        <article class="album-item">
                            <img src="img/album1.jpg" alt="">
                            <p class="title">Deftones</p>
                            <p class="artist">White pony</p>
                        </article>

                        <article class="album-item">
                            <img src="img/album1.jpg" alt="">
                            <p class="title">Deftones</p>
                            <p class="artist">White pony</p>
                        </article>

                        <article class="album-item">
                            <img src="img/album1.jpg" alt="">
                            <p class="title">Deftones</p>
                            <p class="artist">White pony</p>
                        </article>

                        <article class="album-item">
                            <img src="img/album1.jpg" alt="">
                            <p class="title">Deftones</p>
                            <p class="artist">White pony</p>
                        </article>

                        <article class="album-item">
                            <img src="img/album1.jpg" alt="">
                            <p class="title">Deftones</p>
                            <p class="artist">White pony</p>
                        </article>
                    </div>

                </section>

                <section id="musics" class="musics">
                    
                    <h2 class="orange">Musiques disponibles</h2>
                    <div class="musics-container">

                        <article class="music-item">
                            <img src="img/music1.jpg" alt="">
                            <p class="title">Bad Idea!</p>
                            <p class="artist">girl in red</p>
                        </article>

                        <article class="music-item">
                            <img src="img/music1.jpg" alt="">
                            <p class="title">Bad Idea!</p>
                            <p class="artist">girl in red</p>
                        </article>

                        <article class="music-item">
                            <img src="img/music1.jpg" alt="">
                            <p class="title">Bad Idea!</p>
                            <p class="artist">girl in red</p>
                        </article>

                        <article class="music-item">
                            <img src="img/music1.jpg" alt="">
                            <p class="title">Bad Idea!</p>
                            <p class="artist">girl in red</p>
                        </article>

                        
                    </div>

                </section>

                <section id="artists" class="artists">
                    
                    <h2 class="orange">Artistes disponibles</h2>
                    <div class="artists-container">

                        <article class="music-item">
                            <img src="img/artist1.jpg" alt="">
                            <p class="title">Cigarette After Sex</p>
                        </article>

                        <article class="music-item">
                            <img src="img/artist1.jpg" alt="">
                            <p class="title">Cigarette After Sex</p>
                        </article>

                        <article class="music-item">
                            <img src="img/artist1.jpg" alt="">
                            <p class="title">Cigarette After Sex</p>
                        </article>

                        
                    </div>

                </section>

            </section>
        </section>
    </section>


    <section id="collection" class="collection" style="display: none;">
        <section id="scrollable" class="scrollable">
            <section class="all-container">
                <div class="div-collec">
                    <section class="collection-category">
                        
                            <article class="category-collection-item active-collection-category" onclick="tryByCards('all');">
                                <p>Tout</p>
                            </article>
        
                            <article class="category-collection-item" onclick="tryByCards('unlock');">
                                <p>Débloqué</p>
                            </article>
        
                            <article class="category-collection-item" onclick="tryByCards('albums');">
                                <p>Cartes albums</p>
                            </article>

                            <article class="category-collection-item" onclick="tryByCards('musics');">
                                <p>Cartes Musiques</p>
                            </article>

                            <article class="category-collection-item" onclick="tryByCards('artists');">
                                <p>Cartes Artistes</p>
                            </article>
        

                    </section>
                </div>

                <section class="cards-container">

                    <article class="card-item" onclick="showCardSection();" data-get="unlocked" data-card="artist">
                        <img src="img/cartes-01.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                    <article class="card-item" data-get="locked" data-card="songs">
                        <img src="img/card.png" alt="">
                    </article>

                </section>

            </section>
        </section>
        <?php require_once 'nav.php'; ?>
    </section>

    <section id="boutique" class="boutique" style="display: none;">
        <section id="scrollable" class="scrollable">
            <section class="all-container">
                <div class="div-boutique">
                    <section class="boutique-category">
                        
                            <article class="category-boutique-item active-boutique-category" onclick="tryByBooster('all');">
                                <p>Tout</p>
                            </article>
        
                            <article class="category-boutique-item" onclick="tryByBooster('breakcore');">
                                <p>Breakcore</p>
                            </article>
        
                            <article class="category-boutique-item" onclick="tryByBooster('alt-rock');">
                                <p>Alt Rock</p>
                            </article>

                            <article class="category-boutique-item" onclick="tryByBooster('pop');">
                                <p>Pop</p>
                            </article>

                            <article class="category-boutique-item" onclick="tryByBooster('classic');">
                                <p>Classique</p>
                            </article>
        

                    </section>
                </div>

                <section class="booster-container">

                    <h2 class="booster-title-n">Boosters</h2>

                    <section class="booster-list">

                        <article class="card-boutique" data-type="breakcore">
                            <div class="card-info">
                                <div class="top-card">
                                    <p class="booster-generation">1er génération</p>
                                </div>
                                <div class="bottom-card">
                                    <img class="booster-pp" src="img/booster-breakcore.jpeg" alt="">
                                    <div>
                                        <p class="booster-title">Scream of Insomnia</p>
                                        <p class="booster-genre">Breakcore</p>
                                    </div>
                                </div>
                            </div>
                            <p class="booster-price">17.99$</p>

                        </article>

                        <article class="card-boutique" data-type="alt-rock">
                            <div class="card-info">
                                <div class="top-card">
                                    <p class="booster-generation">1er génération</p>
                                </div>
                                <div class="bottom-card">
                                    <img class="booster-pp" src="img/booster-breakcore.jpeg" alt="">
                                    <div>
                                        <p class="booster-title">Scream of Insomnia</p>
                                        <p class="booster-genre">Breakcore</p>
                                    </div>
                                </div>
                            </div>
                            <p class="booster-price">17.99$</p>

                        </article>

                        <article class="card-boutique" data-type="pop">
                            <div class="card-info">
                                <div class="top-card">
                                    <p class="booster-generation">1er génération</p>
                                </div>
                                <div class="bottom-card">
                                    <img class="booster-pp" src="img/booster-breakcore.jpeg" alt="">
                                    <div>
                                        <p class="booster-title">Scream of Insomnia</p>
                                        <p class="booster-genre">Breakcore</p>
                                    </div>
                                </div>
                            </div>
                            <p class="booster-price">17.99$</p>

                        </article>
                    </section>

                    <section class="information">
                        <p>Les boosters ici présent sont <span class="bold">physique</span> et contiennent <span class="bold">5 cartes</span>.</p>
                        <p>Une fois commandez, vous recevrez votre colis dans un délai de 5 à 7 jours.</p>
                    </section>

                    

                    <section class="booster-custom">

                        <h2 class="booster-title-n">Personnalisation</h2>

                        <section class="custom-container">

                            <article class="custom-cta">
                                <img class="card" src="img/card.png" alt="">
                                <p class="custom-button">Personnaliser</p>
                            </article>

                            <article class="custom-info">
                                <h3 class="question">C'est quoi la personnalisation ?</h3>

                                <p class="question-explaination">Si ton artiste favoris n’existe pas, tu peux nous envoyer une demande de personnalisation</p>

                                <p class="question-explaination">L’artiste de ton choix, le nom des “attaques”, le design global ou bien carte blanche</p>

                                <p class="question-explaination">Nous personnalisons ensuite ta carte selon ta demande</p>
                            </article>
                        </section>

                        <section class="custom-lastorder">
                            <p class="lastorder-title">Commande n°024</p>
                            <img class="lastorder-img" src="img/card.png" alt="">
                            <div>
                                <p class="lastorder-user">De November</p>
                                <p class="lastorder-date">04/12/2024</p>
                            </div>
                        </section>

                    </section>


                </section>
                

            </section>
        </section>
    </section>

    <section id="profil" class="profil" style="display: none;">
        <section id="scrollable" class="scrollable">
            <section class="all-container">

                <section class="profil-container">

                    <div class="profil-user">

                        <img class="profil-pp" src="img/artist1.jpg" alt="">
                        <p class="profil-name">November</p>

                    </div>

                    <div class="profil-stats">

                        <div class="albums-stats">
                            <p class="value">12</p>
                            <p class="label">Albums</p>
                        </div>

                        <div class="musics-stats">
                            <p class="value">12</p>
                            <p class="label">Musiques</p>
                        </div>


                        <div class="artists-stats">
                            <p class="value">7</p>
                            <p class="label">Artistes</p>
                        </div>

                    </div>
                    <div class="profil-button-container">
                        <p class="profil-button">Modifier</p>
                        <p class="profil-button">Partager le profil</p>
                    </div>
                </section>

                <section class="top-artist">
                    <h3 class="top-artist-name">Top artistes du mois</h3>
                    <section class="activity-container">

                        <article class="card-albums">
                            <img class="activity-albums-pp" src="img/album1.jpg" alt="">
                            <div>
                                <p class="activity-albums-name">Deftones</p>
                                <p class="activity-albums-album">White pony</p>
                            </div>
                        </article>


                        <article class="card-albums">
                            <img class="activity-albums-pp" src="img/album1.jpg" alt="">
                            <div>
                                <p class="activity-albums-name">Deftones</p>
                                <p class="activity-albums-album">White pony</p>
                            </div>
                        </article>


                        <article class="card-albums">
                            <img class="activity-albums-pp" src="img/album1.jpg" alt="">
                            <div>
                                <p class="activity-albums-name">Deftones</p>
                                <p class="activity-albums-album">White pony</p>
                            </div>
                        </article>


                        <article class="card-albums">
                            <img class="activity-albums-pp" src="img/album1.jpg" alt="">
                            <div>
                                <p class="activity-albums-name">Deftones</p>
                                <p class="activity-albums-album">White pony</p>
                            </div>
                        </article>


                        <article class="card-albums">
                            <img class="activity-albums-pp" src="img/album1.jpg" alt="">
                            <div>
                                <p class="activity-albums-name">Deftones</p>
                                <p class="activity-albums-album">White pony</p>
                            </div>
                        </article>

                    </section>
                </section>

                <section class="top-music">
                    <h3 class="top-music-name">Top artistes du mois</h3>
                    <section class="activity-container">


                        <article class="card-musics">
                            <img class="activity-musics-pp" src="img/music1.jpg" alt="">
                            <div>
                                <p class="activity-musics-name">Bad Idea!</p>
                                <p class="activity-musics-album">Girl in Red</p>
                            </div>
                        </article>

                        <article class="card-musics">
                            <img class="activity-musics-pp" src="img/music1.jpg" alt="">
                            <div>
                                <p class="activity-musics-name">Bad Idea!</p>
                                <p class="activity-musics-album">Girl in Red</p>
                            </div>
                        </article>

                        <article class="card-musics">
                            <img class="activity-musics-pp" src="img/music1.jpg" alt="">
                            <div>
                                <p class="activity-musics-name">Bad Idea!</p>
                                <p class="activity-musics-album">Girl in Red</p>
                            </div>
                        </article>

                        <article class="card-musics">
                            <img class="activity-musics-pp" src="img/music1.jpg" alt="">
                            <div>
                                <p class="activity-musics-name">Bad Idea!</p>
                                <p class="activity-musics-album">Girl in Red</p>
                            </div>
                        </article>

                        <article class="card-musics">
                            <img class="activity-musics-pp" src="img/music1.jpg" alt="">
                            <div>
                                <p class="activity-musics-name">Bad Idea!</p>
                                <p class="activity-musics-album">Girl in Red</p>
                            </div>
                        </article>
                        

                    </section>
                </section>

            </section>
        </section>
    </section>

    <section id="cardSection" class="card-section" style="display: none; position: fixed; top: 100%; left: 0; width: 100%; height: 100%; z-index: 9999; transition: top 0.5s;">
        <canvas style="background-color: rgba(4, 26, 26, 0.8); width: 100%; height: 100%;" id="myCanvas"></canvas>
        <button id="closeButton" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); z-index: 10000; background-color: grey; color: white; border: none; padding: 15px; cursor: pointer; border-radius: 50%; font-size: 18px;">X</button>
    </section>

    <script>
        function showCardSection() {
            const cardSection = document.getElementById('cardSection');
            cardSection.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Disable scrolling
            setTimeout(() => {
                cardSection.style.top = '0';
            }, 10);
        }

        function hideCardSection(event) {
            const cardSection = document.getElementById('cardSection');
            if (event.target.id === 'cardSection' || event.target.id === 'closeButton') {
                cardSection.style.top = '100%';
                setTimeout(() => {
                    cardSection.style.display = 'none';
                    document.body.style.overflow = 'auto'; // Enable scrolling
                }, 500);
            }
        }

        document.getElementById('cardSection').addEventListener('click', hideCardSection);
        document.getElementById('closeButton').addEventListener('click', hideCardSection);

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('myCanvas'), antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setClearColor(0x000000, 0);

        const light = new THREE.DirectionalLight(0xffffff, 1);
        light.position.set(1, 1, 1).normalize();
        scene.add(light);

        const ambientLight = new THREE.AmbientLight(0x404040, 1.5);
        scene.add(ambientLight);

        const pointLight1 = new THREE.PointLight(0xff0000, 1, 50);
        pointLight1.position.set(5, 5, 5);
        scene.add(pointLight1);

        const pointLight2 = new THREE.PointLight(0x0000ff, 1, 50);
        pointLight2.position.set(-5, -5, 5);
        scene.add(pointLight2);

        const pointLight3 = new THREE.PointLight(0xffffff, 1, 50);
        pointLight3.position.set(0, 5, -5);
        scene.add(pointLight3);

        const pointLight4 = new THREE.PointLight(0xffffff, 1, 50);
        pointLight4.position.set(0, -5, 5);
        scene.add(pointLight4);

        const loader = new THREE.GLTFLoader();
        loader.load('scene.gltf', function (gltf) {
            const model = gltf.scene;
            scene.add(model);

            model.rotation.y = Math.PI / -2;

            model.traverse((node) => {
                if (node.isMesh) {
                    node.material.metalness = 0.5;
                    node.material.roughness = 0.1;
                }
            });

            camera.position.z = 0.5;

            let isDragging = false;
            let previousMousePosition = { x: 0, y: 0 };

            document.addEventListener('mousemove', (event) => {
                if (isDragging) {
                    const deltaMove = {
                        x: event.clientX - previousMousePosition.x,
                        y: event.clientY - previousMousePosition.y
                    };

                    model.rotation.y += deltaMove.x * 0.01;
                    model.rotation.x += deltaMove.y * 0.01;

                    previousMousePosition = {
                        x: event.clientX,
                        y: event.clientY
                    };
                }
            });

            document.addEventListener('mousedown', (event) => {
                isDragging = true;
                previousMousePosition = {
                    x: event.clientX,
                    y: event.clientY
                };
            });

            document.addEventListener('mouseup', () => {
                isDragging = false;
            });

            document.addEventListener('touchmove', (event) => {
                if (isDragging && event.touches.length === 1) {
                    const touch = event.touches[0];
                    const deltaMove = {
                        x: touch.clientX - previousMousePosition.x,
                        y: touch.clientY - previousMousePosition.y
                    };

                    model.rotation.y += deltaMove.x * 0.01;
                    model.rotation.x += deltaMove.y * 0.01;

                    previousMousePosition = {
                        x: touch.clientX,
                        y: touch.clientY
                    };
                }
            });

            document.addEventListener('touchstart', (event) => {
                if (event.touches.length === 1) {
                    isDragging = true;
                    const touch = event.touches[0];
                    previousMousePosition = {
                        x: touch.clientX,
                        y: touch.clientY
                    };
                }
            });

            document.addEventListener('touchend', () => {
                isDragging = false;
            });

            function animate() {
                requestAnimationFrame(animate);
                renderer.render(scene, camera);
            }

            animate();
        }, undefined, function (error) {
            console.error(error);
        });
    </script>

    <nav class="nav">
        <article class="songs-item active-icon-1" onclick="show('songs');">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="33" viewBox="0 0 36 33" fill="none">
                <path d="M34.2914 0.257747C34.9137 0.125042 35.5 0.599509 35.5 1.23575V22.9167C35.5 24.6185 34.8207 26.2506 33.6116 27.4539C32.4025 28.6573 30.7626 29.3333 29.0526 29.3333C27.3427 29.3333 25.7028 28.6573 24.4937 27.4539C23.2845 26.2506 22.6053 24.6185 22.6053 22.9167C22.6053 21.2149 23.2845 19.5828 24.4937 18.3794C25.7028 17.176 27.3427 16.5 29.0526 16.5C29.4813 16.5 29.8996 16.5408 30.3033 16.6196C31.0283 16.7611 31.8158 16.2634 31.8158 15.5247V7.59588C31.8158 6.96013 31.2303 6.48577 30.6084 6.61761L14.1874 10.0986C13.7253 10.1966 13.3947 10.6045 13.3947 11.0769V26.5833C13.3947 28.2851 12.7155 29.9172 11.5063 31.1206C10.2972 32.324 8.65732 33 6.94737 33C5.23742 33 3.59751 32.324 2.38839 31.1206C1.17927 29.9172 0.5 28.2851 0.5 26.5833C0.5 24.8815 1.17927 23.2494 2.38839 22.0461C3.59751 20.8427 5.23742 20.1667 6.94737 20.1667C7.376 20.1667 7.79437 20.2075 8.19806 20.2863C8.92306 20.4277 9.71053 19.93 9.71053 19.1914V6.30922C9.71053 5.83732 10.0404 5.42964 10.502 5.33122L34.2914 0.257747Z" fill="#EEEEEE"/>
            </svg>
            <p>Musique</p>
        </article>

        <article class="collection-item" onclick="show('collection');">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="31" viewBox="0 0 24 31" fill="none">
                <rect x="0.5" y="0.5" width="23" height="30" rx="3" fill="#EEEEEE"/>
                <rect x="3.5" y="3.5" width="17" height="10" rx="2" fill="#D4D4D4"/>
            </svg>
            <p>Collection</p>
        </article>

        <article class="boutique-item" onclick="show('boutique');">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="29" viewBox="0 0 31 29" fill="none">
                <path d="M5.08452 0.175781C4.43915 0.175781 3.8238 0.385781 3.25348 0.805781C2.68315 1.22578 2.35296 1.76578 2.20287 2.42578L0.656989 9.04078C0.281774 10.6758 0.581946 12.0558 1.52749 13.2708C1.70759 13.4508 1.88769 13.6308 2.05279 13.7808C2.93829 14.6358 3.91385 15.1758 5.32466 15.1758C6.73547 15.1758 7.86111 14.5608 8.70159 13.7508C9.64713 14.6808 10.7878 15.1758 12.1986 15.1758C13.4593 15.1758 14.66 14.6208 15.5005 13.7808C16.5211 14.7258 17.6767 15.1758 18.9525 15.1758C20.2582 15.1758 21.3688 14.6808 22.3144 13.7508C23.1699 14.6058 24.2955 15.1758 25.7213 15.1758C27.1472 15.1758 28.1527 14.6508 29.0082 13.7658C29.1433 13.6308 29.2784 13.4808 29.4285 13.3308C30.419 12.1008 30.7192 10.6758 30.344 9.04078L28.7981 2.42578C28.603 1.76578 28.2578 1.22578 27.7025 0.805781C27.1622 0.385781 26.5768 0.175781 25.9165 0.175781H5.08452Z" fill="#EEEEEE"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.70019 17.6738C4.70019 17.1215 4.25247 16.6738 3.70019 16.6738H3.00049C2.4482 16.6738 2.00049 17.1215 2.00049 17.6738V27.8238C2.00049 28.3761 2.4482 28.8238 3.00049 28.8238H28.0005C28.5528 28.8238 29.0005 28.3761 29.0005 27.8238V17.6738C29.0005 17.1215 28.5528 16.6738 28.0005 16.6738H27.3002C26.7479 16.6738 26.3002 17.1215 26.3002 17.6738V21.0756C26.3002 21.6279 25.8525 22.0756 25.3002 22.0756H5.70019C5.1479 22.0756 4.70019 21.6279 4.70019 21.0756V17.6738Z" fill="#EEEEEE"/>
            </svg>
            <p>Boutique</p>
        </article>

        <article class="boutique-item" onclick="show('profil');">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                <path d="M15.5 0.5C17.4891 0.5 19.3968 1.29018 20.8033 2.6967C22.2098 4.10322 23 6.01088 23 8C23 9.98912 22.2098 11.8968 20.8033 13.3033C19.3968 14.7098 17.4891 15.5 15.5 15.5C13.5109 15.5 11.6032 14.7098 10.1967 13.3033C8.79018 11.8968 8 9.98912 8 8C8 6.01088 8.79018 4.10322 10.1967 2.6967C11.6032 1.29018 13.5109 0.5 15.5 0.5ZM15.5 19.25C23.7875 19.25 30.5 22.6063 30.5 26.75C30.5 28.8211 28.8211 30.5 26.75 30.5H4.25C2.17893 30.5 0.5 28.8211 0.5 26.75C0.5 22.6063 7.2125 19.25 15.5 19.25Z" fill="#EEEEEE"/>
            </svg>
            <p>Profil</p>
        </article>
    </nav>
</body>
</html>