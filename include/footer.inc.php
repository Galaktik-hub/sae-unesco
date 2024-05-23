<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, width=device-width">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <title>Footer</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inknut Antiqua:wght@500&display=swap');
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap");

            :root {
                --bg-footer: #505050;
            }

            * {
                margin: 0;
            }

            /**** Footer ****/
            footer {
                background-color: var(--bg-footer);
                background-image: url("http://perso-etudiant.u-pem.fr/~julien.synaeve/assets/Header-Footer/background.png");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                height: auto;
                border-radius: 50px 50px 0 0;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                padding: 15px 0;
            }

            footer .container {
                width: 50%;
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }

            /* Réseaux sociaux */
            footer .container .social {
                margin: 10px 0 20px 0;
                width: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            footer .container .social a {
                text-decoration: none;
                color: white;
                font-size: calc(1.5rem + 1.5vw);
                margin: 0 20px 0 20px;
            }

            footer .container .ligne {
                width: 80%;
                background-color: white;
                height: 0.2em;
            }

            /* Links */
            footer .container .links {
                width: 100%;
                margin: 10px 0 10px 0;
            }

            footer .container .links ul {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
            }

            footer .container .links ul li {
                margin: 10px 0;
            }

            footer .container .links a {
                text-decoration: none;
                color: white;
                font-family: "Inter";
                font-size: calc(0.6rem + 0.6vw);
                font-weight: bold;
            }

            /* Images */
            footer .container .logos {    
                width: 100%;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                padding-top: 20px;
            }

            footer .container .logos a {
                text-decoration: none;
                color: white;
            }

            footer .container .logos img {
                padding: 10px;
            }

            footer .container .logos img.mcn {
                max-width: 180px;
                max-height: 120px;
                height: 100%;
            }

            footer .container .logos img.unesco {
                max-width: 180px;
                max-height: 90px;
                height: 100%;
            }

            footer .container .logos img.iut {
                max-height: 60px;
                max-width: 180px;
            }

            /**** Footer - Responsive ****/
            @media (max-width: 1200px) {
                footer {
                    border-radius: 30px 30px 0 0;
                }
                footer .container {
                    width: 90%;
                }
                footer .container .ligne {
                    width: 100%;
                }
                footer .container .links a {
                    font-size: calc(0.8rem + 0.8vw);
                }
            }

            @media (max-width: 600px) {
                footer {
                    border-radius: 15px 15px 0 0;
                    height: auto;
                    padding: 15px 0;
                }
                footer .container .social a {
                    font-size: calc(1.8rem + 1.8vw);
                }
                footer .container .links ul {
                    flex-direction: column;
                    align-items: baseline;
                    position: relative;
                    left: 20%;
                }
                footer .container .links ul li {
                    margin: 20px 0;
                }
                footer .container .logos {
                    flex-direction: column;
                }

                footer .container .logos img {
                    padding: 20px;
                }
            }
        </style>
    </head>
    <body>

        <footer>
            <div class="container"> 
                <div class="social">
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>  
                    </a>
                    <a href="">
                        𝕏
                    </a>
                    <a href="">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                </div>
                <div class="ligne"></div>
                <div class="links">
                    <ul>
                        <li>
                            <a href="">Mentions légales</a>
                        </li>
                        <li>
                            <a href="">Qui sommes nous ?</a>
                        </li>
                    </ul>
                </div>
                <div class="logos">
                    <img src="http://perso-etudiant.u-pem.fr/~julien.synaeve/logo/logo_MCN_blanc.png" alt="Logo MCN" class="mcn">
                    <a href="https://whc.unesco.org/fr/list/86/" class="link-img" targer="_blank" rel="noopener noreferrer">
                        <img src="http://perso-etudiant.u-pem.fr/~julien.synaeve/logo/png-transparent-unesco-hd-logo-thumbnail.png" alt="Logo UNESCO" class="unesco">
                    </a>
                    <a href="https://iut.univ-gustave-eiffel.fr/" class="link-img" targer="_blank" rel="noopener noreferrer">
                        <img src="http://perso-etudiant.u-pem.fr/~julien.synaeve/logo/IUT-CMJN-couleurs-300dpi.png" alt="Logo IUT" class="iut">
                    </a>
                </div>
            </div>
        </footer>
    </body>
    <script>
    </script>
</html>
