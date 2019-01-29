@extends('layouts.app2')
@section('title')
About
@endsection
@section('css_content')
    <link rel="icon" type="image/png" href="{{URL::asset('images/icons/favicon.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/themify/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/elegant-font/html-css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
@endsection

@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/icons/1.png);">
    <h2 class="l-text2 t-center">
        <!--About-->
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-b-30">

                <p class="p-b-28">
                    <h2 align="center" id="nous">Nature Bio</h2>
                <br>
                <br>
                    Boutique de produits Naturels, Bio et Artisanaux EXCLUSIVEMENT EN LIGNE. Et vous propose des produits de qualité, labellisés.
                <br>
                <br>
                <b>Naturebio.com.tn</b> est aujourd'hui le spécialiste en Tunisie dans la vente en ligne de produits naturels, biologiques et artisanaux avec plusieurs références.
                    Les produits Bio sélectionnés par Naturebio.com.tn sont des produits issus de l’agriculture biologique en Tunisie. Le Bio est donc un retour à la tradition, à une agriculture et à un élevage qui respectent l’équilibre de la terre et qui utilisent les ressources qu’elle nous donne sans la polluer ni l’épuiser.
                    Notre objectif est d'aider les personnes qui veulent vivre autrement à accéder à ce type de produits, où qu’ils soient, partout en Tunisie. Nos produits sont à votre disposition 24h/24 sur notre site et livrés par la Poste ou par tierce personne (transporteur, livreur, etc.).
                <br>
                <h2>NATUREBIO, C'EST UNE EQUIPE!</h2>
                <br>
                Naturebio.com.tn, c’est une équipe motivée et dynamique. Son défit, est de faire de Naturebio.com.tn  la référence en produits naturels et Bio en Tunisie! Naturebio.com.tn  a comme ambition de vous fournir une grande diversité de produits en vous assurant un service de qualité et d’écoute.
                <br>
                <br>
                NOS ENGAGEMENTS AU QUOTIDIEN:
                <br>
                <br>
                <b>Choix varié</b>
                <br>
                <br>
                •	Des produits pour toute la famille
                <br>
                <br>
                •	Des produits qui conviennent à différents moments de la journée
                <br>
                <br>
                •	Des produits certifiés Bio
                <br>
                <br>
                •	Des produits de qualité, sélectionnés auprès de professionnels sérieux qui aiment leur métier
                <br>
                <br>
                <b>Hyper service</b>
                <br>
                <br>
                •	Préparation et expédition express de  toute commande passée avant 11 heures est expédiée le jour même (du lundi au vendredi, sous réserve de validation du paiement)!
                <br>
                <br>
                •	Pas de  montant minimum d’achat!
                <br>
                <br>
                Venez découvrir le goût, les saveurs et l’authenticité des produits que nous avons sélectionnés pour vous. N’attendez plus, visitez www.Naturebio.com.tn . Faites vos courses et faites-vous livrer vos produits dans le bureau de poste le plus proche de vous, essayez-les tranquillement, en famille, et dites-nous ce que vous en pensez.!
                <br>
                <h2>SERVICE CLIENT</h2>
                <br>
                Du lundi au vendredi de 07h à 20h
                <br>
                <br>
                Téléphone : 58
                <br>
                <br>
                Email : clients@naturebio.com
                <br>
                <br>
                </p>



               <h2 align="center" id="livraison">LIVRAISON</h2>
                <br>
                Les commandes sont livrées le lendemain de leur validation en ligne à l'adresse de livraison communiquée par le client sur le bon de commande.
                <br>
                <br>
                Les délais de livraison sont de 2 à 4 jours ouvrables (en moyenne). Les commandes validées le samedi après 10h00 seront expédiées le lundi suivant. Toutefois, et pour les commandes validées avant 10h00, l'expédition peut se faire dans la journée. Les délais de livraison ne sont donnés qu'à titre indicatif.
                <br>
                <br>
                Sur <u>tout le territoir Tunisien</u>, les frais de livraison sont à <b>6 dt</b> pour un collis du poids inférieur à 15 Kg. Au-delà de 15 Kg, la livraison est à  <b>12 dt</b>.
                <br>
                <br>
                <b>Naturebio.tn</b> vous offre la livraison <b>gratuitement</b> pour chaque commande qui dépasse 90 dt.
                <br>
                <br>
                Toutes les commandes sont expédiées par les services d’une entreprise tierse spécialisée dans la livraison des collis. <b>Naturebio.tn</b>  s'engage à effectuer les livraisons des articles disponibles dans les plus brefs délais.
                <br>
                <br>
                Les délais indiqués sont des délais moyens habituels et correspondent aux délais de traitement et de livraison. Les délais de livraison ne peuvent être assurés en cas de force majeure, notamment en cas de grève, telle que définie par la jurisprudence.
                <br>
                <br>
                <u><i>IMPORTANT:</i></u>
                <br>
                Pour tous les produits expédiés hors la Tunisie, des droits de douane, taxes locales, droits d'importation ou taxes d'Etat, sont susceptibles d'être exigés. Ces droits et sommes ne sont pas du ressort du site <b>Naturebio.tn</b> . Ils seront à la charge de l’Acheteur et relèvent de son entière responsabilité tant en termes de déclaration que de paiement aux autorités et organismes compétents de son pays.
                <br>
                <br>
                Nous conseillons nos chers clients de se renseigner sur ces aspects auprès des autorités locales.
                <br>
                <br>
                <h2 align="center" id="cgv">CONDITIONS GENERALES DE VENTE (CGV)</h2>
                <br>
                L'utilisation du Site www.naturebio.tn est régie par les termes et conditions apparaissant ci-dessous.
                <br>
                <br>
                <b>VEUILLEZ LIRE ATTENTIVEMENT CES TERMES ET CONDITIONS AVANT D'UTILISER LE SITE.</b>
                <br>
                <br>
                En utilisant <b>www.naturebio.tn</b>, vous reconnaissez avoir lu et compris ces conditions.
                <br>
                <br>
                Les présentes conditions générales de vente sont conclues d’une part entre <b>NatureBio.tn</b> et d’autre part, par toute personne physique ou morale souhaitant procéder à un achat via le site internet <b>"www.naturebio.tn "</b>.
                <br>
                <br>
                Les présentes conditions générales de vente définissent les droits et obligations des parties dans le cadre des ventes effectuées via le site <b>www.naturebio.tn</b>
                <br>
                <br>
                Elles règlent toutes les étapes nécessaires à la passation et au suivi de la commande.
                <br>
                <br>
                Ces conditions ne concernent que les personnes âgées d'au moins de 18 ans.
                <br>
                <br>
                Il est précisé que vous pouvez sauvegarder ou imprimer les présentes conditions générales de vente.
                <br>
                <br>
                Naturebio.tn se réserve la possibilité d'adapter ou de modifier à tout moment les présentes conditions générales de vente. En cas de modification, seront appliquées à chaque commande les conditions générales de vente en vigueur au jour de la passation de la commande.
                <br>
                <br>
                La dernière date de mise à jour des conditions générales de vente est indiquée en bas de cette page.
                <br>
                <h2>LA COMMANDE</h2>
                <br>

                Les commandes s'effectuent exclusivement par Internet à l’adresse : http://www.naturebio.tn. La commande ne peut être enregistrée sur le site que si l'internaute a bien suivi les instructions figurant sur le présent site. Préalablement à toute commande, chaque client devra s’enregistrer sur le site Internet en créant son compte personnel.

                <br><br>
                La commande ne peut être enregistrée sur le site que si vous vous êtes clairement identifié par l'entrée de votre adresse e-mail et de votre mot de passe.
                <br>
                <br>
                Le client a la possibilité de modifier son panier en supprimant ou en ajoutant des produits jusqu’à sa validation finale. Toute commande est validée et ferme dès l’envoi par notre société d’un e-mail d’Accusé Réception de votre commande.
                <br>
                <br>
                En règle générale, les informations sur la disponibilité des produits vous sont données lors de la passation de votre commande. De manière exceptionnelle, il peut cependant arriver qu’un produit ne soit plus disponible, provisoirement, après la validation de la commande. Dans ce cas, Naturebio.tn  vous en informe dans les plus brefs délais par email ou par téléphone et l’article est alors automatiquement annulé et vous ne serez alors débité que du montant des articles expédiés ou votre compte sera dans ce cas automatiquement crédité du montant de l’article passé en indisponible après validation de la commande.
                <br>
                <br>
                Après avoir passé votre commande nous vous envoyons un e-mail vous confirmant l'enregistrement de celle-ci, avec un récapitulatif des articles commandés et de l'adresse de livraison.
                <br>
                <br>
                Les prix sont exprimés en Dinar tunisien. Naturebio.tn  se réserve le droit de les modifier en cas d'augmentation des charges, notamment du taux de TVA. Les produits seront facturés sur la base du tarif annoncé lors de la passation de la commande.
                <br>
                <h2>OFFRES PROMOTIONNELLES</h2>
                <br>
                <b>Naturebio.tn</b>  se réserve le droit de proposer des offres promotionnelles spécifiques.
                <br>
                <br>
                Ces offres peuvent être nominatives. Dans l’hypothèse ou deux offres promotionnelles seraient concomitantes (ex. promotion du mois, et offre anniversaire), en aucun cas, le pourcentage de remise pourrait être cumulé : le client a le choix de choisir l’offre qu’il souhaite, sans se prévaloir de l’autre pour la même commande.
                <br>
                <br>
                De plus, pour toutes commandes promotionnelles hors Tunisie, les frais de port et d’emballage, voire d’assurance ou de taxes, sont toujours dus dans leur intégralité (nous consulter préalablement pour savoir leur montant).
                <br>
                <h2 id="paiement">LE PAIEMENT</h2>
                <br>
                <br>
                Le paiement s´effectuera immédiatement et en totalité par :
                <br>
                <br>
                •	Cash à la livraison. Pour plus de détails sur la livraison (délais, frais, etc.), veuillez consulter la rubrique livraison.
                <br>
                <br>
                •	Mandat minute: Les commandes sont livrées qu'après paiement complet des produits.
                <br>
                <br>
                •	Le paiement sur Internet (sauf indisponibilité du serveur) par: Paiement par carte bancaire: Les cartes admises sont toutes les cartes bancaires portant la marque CIB (cartes interbancaires), Visa et MasterCard nationales. En tout état de cause, le vendeur se réserve le droit de refuser toute commande ou toute livraison en cas de litige existant avec le client, en raison d’un refus d´autorisation de paiement par carte bancaire des organismes bancaires.
                <br>
                <h2>DISPONIBILITE DES PRODUITS</h2>
                <br>
                <b>Naturebio.tn</b> s’engage à honorer les commandes reçues sur le site Internet uniquement dans la limite des stocks disponibles de produits au moment de la validation de ladite commande. Naturebio.tn ne garantit en aucun cas la disponibilité des produits offerts. En cas d’une rupture de stock de l’un ou de plusieurs produits après passation de votre commande Naturebio.tn s’engage :
                <br>
                <br>
                •	A vous prévenir au plus vite par téléphone ou par mail
                <br>
                <br>
                •	A vous proposer des produits de remplacements susceptibles de vous interessez
                <br>
                <br>
                •	A vous faire un avoir valable sur l’ensemble du site ou un remboursement des produits non disponibles, ceci concerne les commandes payées par carte bancaire ou par mandat.
                <br>
                <br>
                Dans l’hypothèse d’une rupture de stocks d’un ou plusieurs produits faisant l’objet d’une offre promotionnelle à durée limitée, en aucun cas, le client pourra se prévaloir de ladite offre pour demander le report de l’offre promotionnelle à une date ultérieure.
                <br>
                <br>
                Dans le cas où l’indisponibilité du produit est constatée après la validation de la commande, l’acheteur aura la possibilité d’annuler sa commande portant sur le produit, dans les 15 jours de la validation de ladite commande, sans pour autant demander des dommages et intérêts ou autre avantage ou compensation financière : Naturebio.tn n’encourt aucune responsabilité en cas de rupture de stock ou d’indisponibilité des produits.
                <br>
                <h2>RESPONSABILITE</h2>
                <br>
                <b>Naturebio.tn</b> décline toute responsabilité concernant des éventuels interruptions ou bogues du site.
                <br>
                <br>
                <b>Naturebio.tn</b> s'engage à décrire avec exactitude les produits vendus sur le site.
                <br>
                <br>
                Le site web www.naturebio.tn et ses éléments sont fournis tels quels, sans aucune garantie, implicite ou explicite. Naturebio.tn, ses compagnies liées, ses dirigeants, employés, représentants ou agents ne pourront en aucun cas être tenus responsables de tout dommage relié directement ou indirectement à l'utilisation du site. Le contenu du site www.naturebio.tn incluant les textes, les graphiques et les images sont de nature uniquement informative et éducationnelle. Le contenu du site ne peut substituer en aucun cas un diagnostic ou un conseil médical professionnel. Consulter toujours un professionnel de la santé avant d'entreprendre un quelconque traitement.
                <br>
                <h2>VALIDATION</h2>
                <br>
                Tout bon de commande électronique signé par l’utilisateur par un clic effectué au bas du bon de commande sur le rectangle intitulé « VALIDER VOTRE COMMANDE », et expédié via internet, constitue une acceptation irrévocable qui ne peut être remise en cause que dans les limites prévues dans les présentes C.G.V.
                <br>
                <br>
                Ce clic associé à la protection de l’intégrité des messages constitue une signature électronique. Cette signature électronique a valeur entre les parties au même titre qu’une signature manuscrite.
                <br>
                <br>
                <b>Naturebio.tn</b> se réserve le droit d'annuler ou de refuser toute commande d'un client avec lequel il existerait un litige, notamment relatif au paiement ou à des abus liés à une commande antérieure.
                <br>
                <h2>DROIT DE RETRACTATION</h2>
                <br>
                A compter de la date de livraison de votre commande, vous disposez d'un délai de 3 jours pour faire valoir votre droit de rétractation, et être intégralement remboursé. Les frais de renvoi des marchandises restant à votre charge. Cependant, seules les marchandises retournées en parfait état de revente, complètes et dans leur emballage d'origine (non-ouvert) pourront être remboursées. Les remboursements des produits seront effectués dans un délai inferieurs ou égal à 30 jours après la réception de la commande en bon état et non ouvert. Le remboursement s'effectuera soit par un avoir ou par échange de produit
                <br>
                <h2>RESTRICTIONS RELATIVES A L'UTILISATION</h2>
                <br>
                Sauf indication contraire spécifiée dans l'une ou l'autre des sections de www.naturebio.tn, il est interdit de copier, reproduire, distribuer, publier, traduire, télécharger, afficher ou transmettre de quelque façon que ce soit, tout élément pour des raisons commerciales sans la permission préalable écrite de Naturebio.tn. Il est permis d'afficher ou de télécharger les éléments de Naturebio.tn, mais uniquement à des fins non commerciales et en autant qu'ils ne soient pas modifiés.
                <br>
                <h2>DROIT APPLICABLE</h2>
                <br>
                <b>Naturebio.tn</b>  est une marque déposée et protégée par la loi tunisienne, elle n'est pas responsable des abus des tiers en utilisant frauduleusement le nom de Naturebio.tn
                <br>
                <br>
                La gestion du site répond aux normes de la législation tunisienne en vigueur. En cas de litiges, seuls les tribunaux tunisiens seront compétents.


            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{URL::asset('vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });

    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect2')
    });
</script>
<!--===============================================================================================-->
<script src="{{URL::asset('js/main.js')}}"></script>
@endsection
