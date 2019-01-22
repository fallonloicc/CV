<link rel="stylesheet" href="css/clean-blog.css">

<br><p><b>Présentation :</b></p>
<p>Django est un framework écrit en  Python créé en 2005 par Adrian Holovaty et Simon Willison. Le but de ce framework est de réduire le temps de développement d'un site au travers d'une structure simple.</p>
<div style="text-align: center;"><br><img src="img/django.png" width="300"></div>
<div class="espace"> </div>
<br><p><b>Pourquoi ce choix de veille ?</b></p>
<p>Lors de mon stage de 1er année, j'ai dû créer une application facilitant les tours de terrains des techniciens. Le responsable informatique du site avait auparavant créé une interface pour le controle des machines,
et me proposa de réaliser mon projet en ajoutant une fonctionnalité sur le site existant. Après quelque temps d'adaptation et de prise main, j'ai rapidemment compris l'utilité de Django et j'ai apprécié l'utilisé, c'est pourquoi mon choix de veille s'est porté dessus.</p>
<div class="espace"> </div>
<br><p><b>Outils utilisés :</b></p>
<p>Afin de rester a jour, j'utilise principalement Google Alerts, ainsi que Netvibes qui repertorie chaque articles évoquant mon sujet de veille.<br> Puis je repertorie les articles grâce à l'application Pocket qui me permet d'avoir accès aux documents sur tout mes appareils.</p>
<div style="text-align: center;"><br><img src="img/pocket.png" width="100"><img src="img/netvibes.png" width="300"></div>

<br><p><b>Articles :</b></p>
<div class="article">
  
  <?php
      $member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre
      $fichier="https://www.google.com/alerts/feeds/04375351586635854532/13619826572917629731";
      $limite="1";  // sujets compris entre 1
      $limite1="10";   //  et plus
       $aspect="1";  //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)
      $minute="1";  //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure)
      $sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets traités, 0 pas de titre )
      $te="Arial, Helvetica, sans-serif";  // Police de caractères (Verdana, arial etc...)
      $fil_textsize="11"; // taille des liens et description
      $title_textcolor="1F70B4"; // couleur des liens (000000 donne noir)
      $tlien="underline"; // style du lien none ou underline
      $text_textcolor="000000";  // couleur description (000000 donne noir)
      $frame_color="FFFFFF"; // couleur arrière plan (FFFFFF donne blanc)
      $content="1"; // 0 ou 1 comme paramètre optionnel, 1  format html,  0  format texte
      $extract="";  // laisser vide ou indiquez le nombre de caractères que vous souhaitez garder dans le corps du flux
      $cache="15"; // gestion du cache exprimée en minutes - en fonction de la fréquence de mise à jour
       $fichier="http://www.actifpub.com/rss.php?fichier_AP_=$fichier&limite_AP_=$limite&limite1_AP_=$limite1&fil_textsize_AP_=$fil_textsize&text_textcolor_AP_=$text_textcolor&title_textcolor_AP_=$title_textcolor&frame_color_AP_=$frame_color&te_AP_=$te&aspect_AP_=$aspect&minute_AP_=$minute&sujet_AP_=$sujet&content_AP_=$content&tlien_AP_=$tlien&cache_AP_=$cache&extract_AP_=$extract&member_AP_=$member";

      $fichier=str_replace(" ","+",$fichier);
       $ch = curl_init();
      curl_setopt ($ch, CURLOPT_URL, "$fichier");
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,7);
      curl_setopt ($ch, CURLOPT_TIMEOUT,25);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      $affiche_contenu=curl_exec($ch);
      curl_close ($ch);
      echo  $affiche_contenu;

   ?>
</div>
<img src="img/fleche.png" id="scrolltop" style="cursor: pointer; float: right;" width="50px">

<script>
    $(function(){
      $('#scrolltop').click(function(){
        $('html, body').animate({scrollTop:0},'slow');
      });
    });
</script>
