<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>StoreManager Pro - Ventes</title>


    <style>

        /* =====================================================
           1. RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family: Arial, Helvetica, sans-serif;

            background: #080d17;

            color: #f1f5f9;

            min-height: 100vh;

            padding: 24px 18px;
        }


        .container {

            max-width: 1800px;

            margin: auto;
        }


        /* =====================================================
           2. NAVIGATION
        ===================================================== */

        .navbar {

            height: 56px;

            background: #0b111d;

            border: 1px solid #172338;

            border-radius: 18px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 22px;

            margin-bottom: 20px;
        }


        .logo {

            font-size: 17px;

            font-weight: bold;

            color: #f8fafc;
        }


        .logo span {

            margin-right: 8px;
        }


        .menu {

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .menu a {

            text-decoration: none;

            color: #8d99aa;

            font-size: 11px;

            font-weight: bold;

            padding: 9px 14px;

            border-radius: 10px;

            transition: 0.2s;
        }


        .menu a:hover {

            color: white;

            background: #111c2d;
        }


        .menu a.active {

            color: #19d3c5;

            border: 1px solid #087f80;

            background: #0c2028;
        }


        /* =====================================================
           3. STATISTIQUES
        ===================================================== */

        .stats {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 14px;

            margin-bottom: 38px;
        }


        .stat-card {

            height: 64px;

            background: #111827;

            border: 1px solid #1b2a40;

            border-radius: 18px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 12px 15px;
        }


        .stat-card.green {

            border-left: 3px solid #22d3a5;
        }


        .stat-card.red {

            border-left: 3px solid #ff6666;
        }


        .stat-title {

            font-size: 9px;

            color: #8995a7;

            font-weight: bold;

            margin-bottom: 5px;

            text-transform: uppercase;
        }


        .stat-value {

            font-size: 16px;

            font-weight: bold;
        }


        .stat-icon {

            font-size: 20px;
        }


        /* =====================================================
           4. CONTENU PRINCIPAL
        ===================================================== */

        .content {

            display: grid;

            grid-template-columns: 475px 1fr;

            gap: 24px;

            align-items: start;
        }


        .card {

            background: #101827;

            border: 1px solid #1b2a40;

            border-radius: 20px;
        }


        /* =====================================================
           5. NOUVELLE VENTE
        ===================================================== */

        .new-sale {

            padding: 18px;
        }


        .section-title {

            display: flex;

            align-items: center;

            gap: 8px;

            font-size: 13px;

            font-weight: bold;

            margin-bottom: 20px;
        }


        .section-title::before {

            content: "";

            width: 3px;

            height: 18px;

            background: #1dd3c5;

            border-radius: 4px;
        }


        .badge {

            margin-left: auto;

            font-size: 9px;

            color: #8c98aa;

            background: #182235;

            padding: 5px 8px;

            border-radius: 6px;
        }


        /* =====================================================
           6. FORMULAIRE
        ===================================================== */

        .form-group {

            margin-bottom: 18px;
        }


        .form-label {

            display: block;

            color: #8f9bae;

            font-size: 9px;

            font-weight: bold;

            text-transform: uppercase;

            margin-bottom: 7px;
        }


        .input,
        .select {

            width: 100%;

            height: 36px;

            background: #090f1a;

            color: #e5e7eb;

            border: 1px solid #1b2a3d;

            border-radius: 9px;

            padding: 0 11px;

            outline: none;

            font-size: 11px;
        }


        .input:focus,
        .select:focus {

            border-color: #17bcb4;
        }


        .separator {

            border-top: 1px dashed #1b293c;

            margin: 20px 0;
        }


        .subtitle {

            color: #1bd4c4;

            font-size: 10px;

            font-weight: bold;

            text-transform: uppercase;

            margin-bottom: 10px;
        }


        /* =====================================================
           7. ARTICLE
        ===================================================== */

        .article-row {

            display: grid;

            grid-template-columns: 1fr 80px 34px;

            gap: 7px;

            align-items: end;
        }


        .add-button {

            height: 34px;

            width: 34px;

            border: none;

            border-radius: 7px;

            background: #15c5b7;

            color: #06231f;

            font-size: 20px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.2s;
        }


        .add-button:hover {

            background: #22dfcf;

            transform: scale(1.05);
        }


        /* =====================================================
           8. PANIER
        ===================================================== */

        .cart {

            margin-top: 13px;
        }


        .cart-header {

            display: grid;

            grid-template-columns: 1fr 60px 90px 25px;

            border-bottom: 1px solid #1b293c;

            padding-bottom: 8px;

            color: #8290a4;

            font-size: 8px;

            font-weight: bold;

            text-transform: uppercase;
        }


        .empty-cart {

            height: 55px;

            display: flex;

            justify-content: center;

            align-items: center;

            color: #7e8a9c;

            font-size: 10px;
        }


        .cart-item {

            display: grid;

            grid-template-columns: 1fr 60px 90px 25px;

            align-items: center;

            min-height: 42px;

            border-bottom: 1px solid #192538;

            font-size: 10px;
        }


        .cart-product {

            color: #e4e9f0;

            padding-right: 5px;
        }


        .cart-quantity {

            color: #dce3ed;
        }


        .cart-price {

            color: #13d1c0;

            font-weight: bold;
        }


        .delete-button {

            border: none;

            background: transparent;

            color: #ff6b6b;

            cursor: pointer;

            font-size: 14px;
        }


        .delete-button:hover {

            color: #ff3030;
        }


        /* =====================================================
           9. TOTAL
        ===================================================== */

        .total-box {

            margin-top: 10px;

            min-height: 58px;

            border-radius: 13px;

            background: #17263d;

            display: flex;

            flex-direction: column;

            justify-content: center;

            align-items: center;

            padding: 8px;
        }


        .total-label {

            font-size: 8px;

            color: #8c98aa;

            font-weight: bold;

            text-transform: uppercase;

            margin-bottom: 5px;
        }


        .total-value {

            color: #62a9ff;

            font-size: 18px;

            font-weight: bold;
        }


        /* =====================================================
           10. PAIEMENT
        ===================================================== */

        .payment-row {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 14px;

            margin-top: 18px;
        }


        .restant-box {

            margin-top: 10px;

            background: #0d1726;

            border: 1px solid #1b2b40;

            border-radius: 8px;

            padding: 7px;

            font-size: 9px;

            color: #8995a7;
        }


        .restant-value {

            color: #ffbd5a;

            font-weight: bold;

            margin-left: 5px;
        }


        .validate-button {

            width: 100%;

            height: 36px;

            margin-top: 18px;

            border: none;

            border-radius: 9px;

            background: linear-gradient(
                90deg,
                #2dd39c,
                #09a978
            );

            color: white;

            font-size: 10px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.2s;
        }


        .validate-button:hover {

            filter: brightness(1.1);

            transform: translateY(-1px);
        }


        /* =====================================================
           11. REGISTRE
        ===================================================== */

        .sales {

            padding: 20px 22px;
        }


        .sales-table {

            width: 100%;
        }


        .table-header,
        .sale-row {

            display: grid;

            grid-template-columns:
                120px
                1.3fr
                1fr
                1.1fr
                80px;

            align-items: center;
        }


        .table-header {

            color: #8290a4;

            font-size: 8px;

            font-weight: bold;

            text-transform: uppercase;

            padding: 0 0 10px;

            border-bottom: 1px solid #1d2a3c;
        }


        .sale-row {

            min-height: 56px;

            border-bottom: 1px solid #192538;

            font-size: 10px;
        }


        .sale-id {

            color: #9aa6b8;

            font-weight: bold;
        }


        .client-name {

            font-weight: bold;

            color: #e8edf4;

            margin-bottom: 2px;
        }


        .phone {

            color: #7e8b9e;

            font-size: 8px;
        }


        .amount {

            color: #13d1c0;

            font-weight: bold;
        }


        .payment {

            color: #d7dde7;

            font-size: 9px;

            font-weight: bold;
        }


        .line-button {

            border: 1px solid #25344a;

            background: #141e2e;

            color: #d9e0e9;

            padding: 5px 9px;

            border-radius: 7px;

            font-size: 8px;

            cursor: pointer;

            transition: 0.2s;
        }


        .line-button:hover {

            border-color: #1bbdb4;

            color: #1bbdb4;
        }


        /* =====================================================
           12. DETAIL FACTURE
        ===================================================== */

        .invoice-detail {

            margin: 10px 0;

            background: #121d2d;

            border: 1px solid #1d2b40;

            border-radius: 13px;

            padding: 14px;

            display: none;
        }


        .invoice-detail.visible {

            display: block;
        }


        .invoice-title {

            color: #17cfc0;

            font-size: 10px;

            font-weight: bold;

            margin-bottom: 10px;
        }


        .invoice-table {

            width: 100%;

            border-collapse: collapse;
        }


        .invoice-table th {

            color: #8491a5;

            text-align: left;

            font-size: 8px;

            text-transform: uppercase;

            padding-bottom: 8px;

            border-bottom: 1px solid #1c2a3c;
        }


        .invoice-table td {

            font-size: 10px;

            padding: 10px 0;

            border-bottom: 1px solid #1a2739;
        }


        .invoice-table tr:last-child td {

            border-bottom: none;
        }


        .invoice-total {

            color: #16d2c1;

            font-weight: bold;
        }


        /* =====================================================
           13. MESSAGE
        ===================================================== */

        .message {

            position: fixed;

            right: 25px;

            bottom: 25px;

            min-width: 280px;

            padding: 15px 18px;

            background: #142337;

            border: 1px solid #1bbdb4;

            border-radius: 10px;

            color: white;

            font-size: 11px;

            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);

            display: none;

            z-index: 1000;
        }


        .message.visible {

            display: block;

            animation: apparition 0.3s ease;
        }


        @keyframes apparition {

            from {

                opacity: 0;

                transform: translateY(10px);

            }

            to {

                opacity: 1;

                transform: translateY(0);

            }

        }


        /* =====================================================
           14. RESPONSIVE
        ===================================================== */

        @media (max-width: 1100px) {

            .content {

                grid-template-columns: 1fr;
            }


            .stats {

                grid-template-columns: 1fr;
            }


            .new-sale {

                max-width: 100%;
            }
        }


        @media (max-width: 800px) {

            body {

                padding: 10px;
            }


            .navbar {

                height: auto;

                padding: 15px;

                flex-direction: column;

                gap: 15px;
            }


            .menu {

                flex-wrap: wrap;

                justify-content: center;
            }


            .table-header,
            .sale-row {

                grid-template-columns:
                    80px
                    1fr
                    90px;
            }


            .table-header div:nth-child(4),
            .table-header div:nth-child(5),

            .sale-row > div:nth-child(4),
            .sale-row > div:nth-child(5) {

                display: none;
            }
        }

    </style>

</head>


<body>


<div class="container">


    <!-- =====================================================
         NAVIGATION
    ====================================================== -->

    <nav class="navbar">


        <div class="logo">

            <span>📦</span>

            StoreManager Pro

        </div>


        <div class="menu">

            <a href="#">
                Tableau de Bord
            </a>

            <a href="#" class="active">
                Ventes / POS
            </a>

            <a href="#">
                Gestion Dettes
            </a>

            <a href="#">
                Approvisionnements
            </a>

            <a href="#">
                Produits & Tiers
            </a>

        </div>


    </nav>



    <!-- =====================================================
         STATISTIQUES
    ====================================================== -->

    <section class="stats">


        <div class="stat-card green">

            <div>

                <div class="stat-title">
                    CA ENCAISSÉ NET
                </div>

                <div
                    class="stat-value"
                    id="caEncaisse"
                >
                    92 000 F
                </div>

            </div>

            <div class="stat-icon">
                💰
            </div>

        </div>



        <div class="stat-card red">

            <div>

                <div class="stat-title">
                    EN COURS CLIENT TOTAL
                </div>

                <div
                    class="stat-value"
                    id="creditTotal"
                >
                    99 000 F
                </div>

            </div>

            <div class="stat-icon">
                🛑
            </div>

        </div>



        <div class="stat-card green">

            <div>

                <div class="stat-title">
                    COMMANDES ENREGISTRÉES
                </div>

                <div
                    class="stat-value"
                    id="nombreVentes"
                >
                    4 ventes
                </div>

            </div>

            <div class="stat-icon">
                📊
            </div>

        </div>


    </section>



    <!-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== -->

    <main class="content">


        <!-- =================================================
             NOUVELLE VENTE
        ================================================== -->

        <section class="card new-sale">


            <div class="section-title">

                🛒 Nouvelle Vente

                <span class="badge">
                    Terminal POS
                </span>

            </div>



            <!-- CLIENT -->

            <div class="form-group">

                <label class="form-label">
                    Client Acheteur
                </label>


                <select
                    class="select"
                    id="client"
                >

                    <option value="Cissé Awa">
                        Cissé Awa (783332211)
                    </option>

                    <option value="Maïmouna Diallo">
                        Maïmouna Diallo (701123344)
                    </option>

                    <option value="Moussa Sarr">
                        Moussa Sarr (769876543)
                    </option>

                    <option value="Fatma Diouf">
                        Fatma Diouf (781234567)
                    </option>

                    <option value="Abdou Ndiaye">
                        Abdou Ndiaye (776543210)
                    </option>

                </select>

            </div>



            <div class="separator"></div>



            <!-- ARTICLES -->

            <div class="subtitle">

                Sélection des articles

            </div>



            <div class="article-row">


                <div>

                    <label class="form-label">
                        Article
                    </label>


                    <select
                        class="select"
                        id="article"
                    >

                        <option
                            value="25000"
                            data-nom="Sac de riz 50kg"
                        >
                            🟡 Sac de riz 50kg
                        </option>


                        <option
                            value="12000"
                            data-nom="Carton de savon"
                        >
                            🧼 Carton de savon
                        </option>


                        <option
                            value="15000"
                            data-nom="Bidon d'huile 5L"
                        >
                            🛢️ Bidon d'huile 5L
                        </option>


                        <option
                            value="5000"
                            data-nom="Sucre 1kg"
                        >
                            🍚 Sucre 1kg
                        </option>


                    </select>

                </div>



                <div>

                    <label class="form-label">
                        Qté
                    </label>


                    <input
                        class="input"
                        type="number"
                        id="quantite"
                        value="1"
                        min="1"
                    >

                </div>



                <button
                    class="add-button"
                    id="ajouter"
                    type="button"
                >

                    +

                </button>


            </div>



            <!-- PANIER -->

            <div class="cart">


                <div class="cart-header">

                    <span>
                        Produit
                    </span>

                    <span>
                        Qté
                    </span>

                    <span>
                        Total
                    </span>

                    <span></span>

                </div>



                <div id="panier">


                    <div
                        class="empty-cart"
                        id="panierVide"
                    >

                        Panier vide.
                        Ajoutez des articles.

                    </div>


                </div>


            </div>



            <!-- TOTAL -->

            <div class="total-box">


                <div class="total-label">

                    Montant total net à payer

                </div>


                <div class="total-value">

                    <span id="total">
                        0
                    </span>

                    <small>
                        FCFA
                    </small>

                </div>


            </div>



            <!-- PAIEMENT -->

            <div class="payment-row">


                <div>

                    <label class="form-label">
                        Règlement
                    </label>


                    <select
                        class="select"
                        id="reglement"
                    >

                        <option value="Wave">
                            Wave
                        </option>

                        <option value="Espèces">
                            Espèces
                        </option>

                        <option value="Orange Money">
                            Orange Money
                        </option>

                        <option value="Crédit">
                            Crédit
                        </option>

                    </select>

                </div>



                <div>

                    <label class="form-label">
                        Versé (Avance)
                    </label>


                    <input
                        class="input"
                        type="number"
                        id="avance"
                        value="0"
                        min="0"
                    >

                </div>


            </div>



            <!-- RESTANT -->

            <div class="restant-box">

                Reste à payer :

                <span
                    class="restant-value"
                    id="reste"
                >
                    0 FCFA
                </span>

            </div>



            <!-- VALIDATION -->

            <button
                class="validate-button"
                id="valider"
                type="button"
            >

                VALIDER LA VENTE (DML)

            </button>


        </section>



        <!-- =================================================
             REGISTRE DES VENTES
        ================================================== -->

        <section class="card sales">


            <div class="section-title">

                Registre Général des Ventes & Commandes

            </div>



            <div class="sales-table">


                <!-- EN-TÊTE -->

                <div class="table-header">

                    <div>
                        ID
                    </div>

                    <div>
                        CLIENT
                    </div>

                    <div>
                        TOTAL FACTURE
                    </div>

                    <div>
                        RÈGLEMENT
                    </div>

                    <div>
                        ACTIONS
                    </div>

                </div>






                <!-- =================================================
                     COMMANDE 1
                ================================================== -->

                <div class="sale-row">
jbb,:bnb,nbjbjkbj
                    <?php $arrays = $arrays??[];
                    foreach ($arrays as $array) :?>
                    <div class="sale-id">
                    <?php echo $array['reference'] ?>                    </div>


                    <div>

                        <div class="client-name">
                    <?php echo $array['prenom'] ?>  <?php echo $array['nom'] ?>                                              </div>

                        <div class="phone">
                           <?php echo $array['telephone'] ?>                        
                        </div>

                    </div>


                    <div class="amount">
                        58 000 F
                    </div>


                    <div class="payment">
                        COMPTANT (WAVE)
                    </div>


                    <div>

                        <button
                            class="line-button"
                            onclick="afficherDetails('detail1')"
                        >

                            Lignes

                        </button>

                    </div>


                </div>

              <?php endforeach ?>

                <!-- DETAIL CMD 1 -->

                <div
                    class="invoice-detail"
                    id="detail1"
                >

                    <div class="invoice-title">
                        Détails Facture :
                    </div>


                    <table class="invoice-table">

                        <thead>

                            <tr>

                                <th>
                                    Produit
                                </th>

                                <th>
                                    Qté
                                </th>

                                <th>
                                    P.U.
                                </th>

                                <th>
                                    Sous-total
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>
                                    Sac de riz 50kg
                                </td>

                                <td>
                                    2
                                </td>

                                <td>
                                    25 000 F
                                </td>

                                <td class="invoice-total">
                                    50 000 F
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    Sucre 1kg
                                </td>

                                <td>
                                    1
                                </td>

                                <td>
                                    8 000 F
                                </td>

                                <td class="invoice-total">
                                    8 000 F
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


            </div>

        </section>


    </main>


</div>



<!-- =========================================================
     MESSAGE
========================================================== -->

<div
    class="message"
    id="message"
>
</div>



<!-- =========================================================
     JAVASCRIPT
========================================================== -->

<script>


    /* =====================================================
       1. VARIABLES
    ===================================================== */


    let panier = [];


    let nombreVentes = 4;


    const article =
        document.getElementById("article");


    const quantite =
        document.getElementById("quantite");


    const ajouter =
        document.getElementById("ajouter");


    const panierElement =
        document.getElementById("panier");


    const totalElement =
        document.getElementById("total");


    const avance =
        document.getElementById("avance");


    const reste =
        document.getElementById("reste");


    const reglement =
        document.getElementById("reglement");


    const valider =
        document.getElementById("valider");


    const nombreVentesElement =
        document.getElementById("nombreVentes");


    const message =
        document.getElementById("message");



    /* =====================================================
       2. FONCTION POUR AFFICHER UN MESSAGE
    ===================================================== */


    function afficherMessage(texte) {

        message.textContent = texte;

        message.classList.add("visible");


        setTimeout(function () {

            message.classList.remove("visible");

        }, 3000);

    }



    /* =====================================================
       3. AJOUTER UN PRODUIT
    ===================================================== */


    ajouter.addEventListener(
        "click",
        function () {


            /*
             * Récupération du produit sélectionné
             */

            const option =
                article.options[
                    article.selectedIndex
                ];


            const nom =
                option.dataset.nom;


            const prix =
                Number(article.value);


            const qte =
                Number(quantite.value);



            /*
             * Vérification quantité
             */

            if (qte <= 0) {

                afficherMessage(
                    "La quantité doit être supérieure à 0."
                );

                return;
            }



            /*
             * Vérifier si le produit
             * existe déjà dans le panier
             */

            const produitExiste =
                panier.find(
                    function (produit) {

                        return produit.nom === nom;

                    }
                );



            if (produitExiste) {


                /*
                 * Le produit existe :
                 * on augmente simplement
                 * sa quantité
                 */

                produitExiste.quantite += qte;


            } else {


                /*
                 * Nouveau produit
                 */

                panier.push({

                    nom: nom,

                    prix: prix,

                    quantite: qte

                });

            }



            /*
             * Affichage
             */

            afficherPanier();


            /*
             * Remettre quantité à 1
             */

            quantite.value = 1;


            afficherMessage(
                nom + " ajouté au panier."
            );

        }
    );



    /* =====================================================
       4. AFFICHER LE PANIER
    ===================================================== */


    function afficherPanier() {


        /*
         * On vide l'ancien affichage
         */

        panierElement.innerHTML = "";



        /*
         * Panier vide
         */

        if (panier.length === 0) {

            panierElement.innerHTML = `

                <div class="empty-cart">

                    Panier vide.
                    Ajoutez des articles.

                </div>

            `;


            totalElement.textContent = "0";


            calculerReste();


            return;
        }



        /*
         * Afficher chaque produit
         */

        panier.forEach(
            function (produit, index) {


                const sousTotal =
                    produit.prix *
                    produit.quantite;



                const ligne =
                    document.createElement("div");


                ligne.className =
                    "cart-item";



                ligne.innerHTML = `

                    <span class="cart-product">

                        ${produit.nom}

                    </span>


                    <span class="cart-quantity">

                        ${produit.quantite}

                    </span>


                    <span class="cart-price">

                        ${sousTotal.toLocaleString()}
                        F

                    </span>


                    <button
                        class="delete-button"
                        onclick="supprimerProduit(${index})"
                    >

                        ×

                    </button>

                `;



                panierElement.appendChild(ligne);

            }
        );



        /*
         * Mettre à jour le total
         */

        calculerTotal();

    }



    /* =====================================================
       5. CALCULER LE TOTAL
    ===================================================== */


    function calculerTotal() {


        let total = 0;



        panier.forEach(
            function (produit) {


                total +=
                    produit.prix *
                    produit.quantite;

            }
        );



        totalElement.textContent =
            total.toLocaleString();



        /*
         * Calculer aussi le reste
         */

        calculerReste();

    }



    /* =====================================================
       6. SUPPRIMER UN PRODUIT
    ===================================================== */


    function supprimerProduit(index) {


        const produit =
            panier[index];


        /*
         * Supprimer du tableau
         */

        panier.splice(index, 1);



        /*
         * Réafficher
         */

        afficherPanier();



        afficherMessage(
            produit.nom +
            " supprimé du panier."
        );

    }



    /* =====================================================
       7. CALCULER LE RESTE À PAYER
    ===================================================== */


    function calculerReste() {


        /*
         * Récupérer le total
         */

        let total = 0;


        panier.forEach(
            function (produit) {

                total +=
                    produit.prix *
                    produit.quantite;

            }
        );



        /*
         * Récupérer l'avance
         */

        let montantAvance =
            Number(avance.value);



        /*
         * Le crédit ne peut pas
         * dépasser le total
         */

        if (montantAvance > total) {

            montantAvance = total;

            avance.value = total;

        }



        /*
         * Calcul du reste
         */

        let montantReste =
            total - montantAvance;



        /*
         * Affichage
         */

        reste.textContent =
            montantReste.toLocaleString()
            + " FCFA";

    }



    /* =====================================================
       8. L'AVANCE CHANGE
    ===================================================== */


    avance.addEventListener(
        "input",
        function () {

            calculerReste();

        }
    );



    /* =====================================================
       9. CHANGEMENT DU MODE DE PAIEMENT
    ===================================================== */


    reglement.addEventListener(
        "change",
        function () {


            /*
             * Si paiement comptant,
             * l'avance devient automatiquement
             * égale au total
             */

            if (
                reglement.value === "Wave" ||
                reglement.value === "Espèces" ||
                reglement.value === "Orange Money"
            ) {


                let total = 0;


                panier.forEach(
                    function (produit) {

                        total +=
                            produit.prix *
                            produit.quantite;

                    }
                );


                avance.value = total;


            } else {


                /*
                 * Crédit
                 */

                avance.value = 0;

            }



            calculerReste();

        }
    );



    /* =====================================================
       10. AFFICHER / CACHER LES DÉTAILS
    ===================================================== */


    function afficherDetails(id) {


        const element =
            document.getElementById(id);



        /*
         * Vérifier si le détail est visible
         */

        if (
            element.classList.contains(
                "visible"
            )
        ) {


            element.classList.remove(
                "visible"
            );


        } else {


            element.classList.add(
                "visible"
            );

        }

    }



    /* =====================================================
       11. VALIDER LA VENTE
    ===================================================== */


    valider.addEventListener(
        "click",
        function () {


            /*
             * Vérifier si le panier est vide
             */

            if (panier.length === 0) {

                afficherMessage(
                    "Impossible de valider : le panier est vide."
                );

                return;

            }



            /*
             * Calcul du total
             */

            let total = 0;


            panier.forEach(
                function (produit) {

                    total +=
                        produit.prix *
                        produit.quantite;

                }
            );



            /*
             * Récupérer l'avance
             */

            const montantAvance =
                Number(avance.value);



            /*
             * Vérifier l'avance
             */

            if (montantAvance > total) {

                afficherMessage(
                    "L'avance ne peut pas dépasser le total."
                );

                return;

            }



            /*
             * Client
             */

            const client =
                document.getElementById(
                    "client"
                ).value;



            /*
             * Mode de règlement
             */

            const mode =
                reglement.value;



            /*
             * Confirmation
             */

            const confirmation =
                confirm(

                    "Confirmer la vente ?\n\n" +

                    "Client : " +
                    client +
                    "\n" +

                    "Total : " +
                    total.toLocaleString() +
                    " FCFA\n" +

                    "Versé : " +
                    montantAvance.toLocaleString() +
                    " FCFA\n" +

                    "Reste : " +
                    (
                        total -
                        montantAvance
                    ).toLocaleString() +
                    " FCFA\n" +

                    "Règlement : " +
                    mode

                );



            /*
             * Si l'utilisateur annule
             */

            if (!confirmation) {

                return;

            }



            /*
             * La vente est validée
             */

            nombreVentes++;


            nombreVentesElement.textContent =
                nombreVentes +
                " ventes";



            /*
             * Vider le panier
             */

            panier = [];


            afficherPanier();



            /*
             * Remettre les valeurs
             * par défaut
             */

            avance.value = 0;

            reglement.value = "Wave";



            calculerReste();



            /*
             * Message final
             */

            afficherMessage(
                "Vente enregistrée avec succès !"
            );

        }
    );


</script>


</body>

</html>