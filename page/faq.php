<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ-INOVYX</title>
  <!-- Lien vers Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%; /* Prendre toute la hauteur de l'écran */
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    body {
      background-color: #87CEEB; /* Couleur bleu ciel */
    }

    .content-wrapper {
      flex: 1; /* Cette section prend toute la place restante */
      display: flex;
      flex-direction: column;
    }

    .faq-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .faq-accordion {
      flex: 1;
      min-width: 300px;
    }

    .faq-text {
      flex: 1;
      min-width: 300px;
      font-size: 1rem;
      color: #333;
      line-height: 1.6;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      min-height: 300px;
    }

    h2 {
      color: red; /* Couleur rouge pour le titre */
      text-align: center;
      margin-bottom: 20px;
    }

    /* Footer stylisé */
    footer {
      background-color: #f8f9fa;
      border-top: 1px solid #ddd;
      padding: 20px 0;
    }

    footer h5 {
      font-weight: bold;
      color: #007bff;
    }

    footer a {
      text-decoration: none;
      color: #007bff;
      transition: color 0.3s ease;
    }

    footer a:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    footer p {
      font-size: 0.85rem;
      color: #777;
    }

    footer .footer-link {
      margin: 0 10px;
    }

    /* Réactivité pour petits écrans */
    @media (max-width: 768px) {
      .faq-container {
        flex-direction: column; /* Placer les éléments les uns sous les autres sur petits écrans */
      }

      .faq-accordion,
      .faq-text {
        min-width: 100%; /* Les blocs de FAQ et texte prennent toute la largeur */
      }
    }
  </style>
</head>
<body>

  <div class="content-wrapper">
    <div class="container my-5">
      <h2><u>FAQ'S</u></h2>
      <div class="faq-container">
        <!-- FAQ sous forme d'accordéon -->
        <div class="faq-accordion">
          <div class="accordion" id="accordionExample">
            <!-- Section 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" onclick="updateText('INOVYX est une entreprise technologique de droit Ivoirien. Nous sommes spécialisés dans la conception, fabrication et commercialisation de bornes digitales Made in Côte d\'Ivoire.')">
                  Qu'est-ce qu'Inovyx Tech ?
                </button>
              </h2>
            </div>
            <!-- Section 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button" type="button" onclick="updateText('- INOVYX FEED-BACK <br>- DIGITALYX <br>- BRANDWAY')">
                  Quels services proposez-vous ?
                </button>
              </h2>
            </div>
            <!-- Section 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button" type="button" onclick="updateText('Vous pouvez nous contacter via le formulaire de contact sur notre site ou en envoyant un e-mail à info@inovyx.net.')">
                  Comment puis-je contacter Inovyx Tech ?
                </button>
              </h2>
            </div>
            <!-- Section 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button" type="button" onclick="updateText('Nous sommes situés à la Cité SIR, non loin de CHAWARMA +.')">
                  Où êtes-vous situés ?
                </button>
              </h2>
            </div>
           <!-- Section 5 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button" type="button" onclick="updateText('Vous pouvez nous contacter via le formulaire de contact sur notre site ou en envoyant un e-mail à  info@inovyx.net  pour toute information complémentaire.')">
                Puis-je obtenir plus d'informations sur vos services ?
              </button>
            </h2>
          </div>
          <!-- Section 6 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button" type="button" onclick="updateText('L’innovation réside dans la polyvalence et l’adaptabilité des bornes digitales d’INOVYX. Elles permettent des usages multiples : gestion de files d’attente, enquêtes de satisfaction , accueil événementiel , prise de rendez-vous, et plus encore. Ces bornes intègrent des technologies tactiles avancées et des interfaces conviviales adaptées aux besoins locaux, sous-régional et partout en Afrique.')">
                En quoi consiste l’innovation derrière ce produit ?
              </button>
            </h2>
          </div>
          <!-- Section 7 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
              <button class="accordion-button" type="button" onclick="updateText('Sa particularité réside dans sa modularité et sa capacité à répondre à des besoins variés. <br> INOVYX offre une solution 100 % personnalisable allant des fonctionnalités jusqu’au design..')">
                Quelle est la particularité de cette solution ?
              </button>
            </h2>
          </div>
        </div>
      </div>
      <!-- Texte explicatif -->
      <div class="faq-text" id="faq-text">
        Cliquez sur une question à gauche pour afficher les informations ici.
      </div>
    </div>
  </div>

  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-auto">
          <h5 style="color: #007bff;">INOVYX TECH</h5>
        </div>
      </div>
      <div class="row justify-content-center text-center mt-3">
        <div class="col-auto">
          <a href="../index.html" class="footer-link">Home</a>
          <span> | </span>
          <a href="terms_of_use.php" class="footer-link">Conditions d'utilisation</a>
          <span> | </span>
          <a href="#" class="footer-link">FAQ</a>
        </div>
      </div>
      <div class="row justify-content-center text-center mt-2">
        <div class="col-auto">
          <p class="m-0 copyright-text" style="color: #adb5bd; font-size: 0.8rem;">Copyright &copy; INOVYX-2024. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Lien vers Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function updateText(content) {
      document.getElementById('faq-text').innerHTML = content;
    }
  </script>
</body>
</html>
