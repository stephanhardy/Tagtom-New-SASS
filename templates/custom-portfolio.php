<?php
/*
 * Template Name: Custom-portfolio
 * Description: A Page Template with a darker design.
 */
 

get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>

<?php 

if (is_page('portfolio-2')) {
  // to English Portfolio

?>



<script>
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });


        $(window).load(function(){
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
        $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    });
});

  
    $(".fancyboxphoto")
         .attr('rel', 'gallery')
         .fancyboxphoto({
        padding : 0
    });
         </script>
         <a name="portfolio"></a>
<div class="row"> <div class="page-header"></div>

        <div id="filter" class="portfolioFilter">

            <a class="current btn-theme" title="See all Tagtom's projects." data-filter="*" href="#">ALL PROJECTS</a>
                       
            <a class="btn-theme" title="See web development projects."  data-filter=".webdesign" href="#">WEB DEVELOPMENT</span></a>
                 
            <a class="btn-theme" title="See digital marketing projects." data-filter=".marketing" href="#">DIGITAL MARKETING</a>
                  
            <a class="btn-theme" title="See web copywriting, editing and publishing projects." data-filter=".publication" href="#">COPYWRITING</a>
        </div>
           
  <div class="portfolioContainer">
           <div class="col-md-4 col-sm-6 portfolio-item publication marketing">
                 <img class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/colorplaza_logo.jpg" alt="Colorplaza Sàrl">   
                  <article class="text-under">
                            <h4 class="modal-title">Digital Marketing</h4>
                            <h4 class="modal-title">Web copywriting</h4>
                            <br />
                            <div><a target="_blank" title="Colorplaza/Colormailer now belongs to Pixum. See their website (new window)" href="http://www.colormailer.com">Colorplaza Sàrl</a></div>
                            <ul>
                                <li>SEM - Google Adwords, Google Analytics</li>
                                <li>SEO</li>
                                <li>Multilingual copywriting</li></ul>
                  </article>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item marketing">
                    <img class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/easyswap_logo.jpg" alt="Association Easyswap">   
                        <article class="text-under">
                                <h4 class="modal-title">Digital Marketing</h4>
                                <br />
                                <div><a target="_blank" title="See Easyswap's website (new window)" href="http://www.easyswap.org">Easyswap Association</a>
                                    </div><br />
                                <ul>
                                <li>Accessibility</li>
                                <li>SEO</li></ul>
                        </article>
                 
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item webdesign marketing publication">
                    <img class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/responsive-design-pic_delaquis-antiques300x229.jpg" alt="Delaquis Antiques">
                 <article class="text-under">
                            <h4 class="modal-title">Web Development</h4>
                            <h4 class="modal-title">Web Copywriting</h4>
                            <h4 class="modal-title">Digital Marketing</h4>
                            <div><a target="_blank" title="See Delaquis Antiques' website (new window)" href="http://www.delaquis-antiques.com">Delaquis Antiques</a></div>
                                <ul>
                                <li>Based on a template by <a href="http://www.lingulo.com">Lingulo</a></li>
                                <li>Hard-coded HTML5/CSS3</li>
                                <li>Responsive</li>
                                <li>SEO, web copywriting, photography</li>
                            </ul>
                  </article>
            </div>


            <div class="col-md-4 col-sm-6 portfolio-item publication">
                <a title="Nouvel homme - fiction" href="http://www.plaines.ca/2009/07/20/nouvel-homme/">
                    <img class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/Nouvel_homme_Stephan_Hardy.jpg" alt="Nouvel homme"></a>
                        <article class="text-under">
                                <h4 class="modal-title">Writing and Editing</h4> 
                                <br />
                                <div><a target="_blank" title="See Editions des plaines' website (new window)" href="http://www.plaines.ca/2009/07/20/nouvel-homme/">"Nouvel homme" - a work of fiction</a></div>
                                <br />
                                <ul><li>Anthologie de nouvelles sous la direction
                                de Stephan Hardy</li>
                                <li>Editions des plaines, St-Boniface, Canada,
                                2003, 144 pages.</li></ul>
                        </article>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item marketing">
                <img  title="Association Bénévolat Vaud" class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/benevolat_vaud.jpg" alt="Association Bénévolat Vaud"></a>
                <article class="text-under">
                                <h4 class="modal-title">Digital Marketing</h4> 
                                <br />   
                                <div><a target="_blank" title="See Bénévolt Vaud's website (new window)" href="http://www.benevolat-vaud.ch/">Association Bénévolat Vaud</a></div>
                                <br />
                                <ul><li>Digital communication training</li>
                                <li>Member of the "Réseau des consultants spécialisés" in 2012 & 2013</li>
                                </ul>
                                
                        </article>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item webdesign">
                
                    <img  title="Auresoavi - Blog d'informazione e critica musicale" class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/responsive_auresoavi.jpg" alt="Auresoavi.com">
                <article class="text-under">
                                <h4 class="modal-title">Web Development</h4>
                                <br />
                                <div><a target="_blank" title="See Auresoavi's website (new window)" title="Auresoavi.com" href="http://www.auresoavi.com/" alt="Auresoavi">www.auresoavi.com</a></div>
                                <br />
                                <ul>
                                <li>Gumby/SASS/Compass</li>
                                <li>Responsive</li>
                                <li>Wordpress 4</li></ul>
                                
                        </article>
            </div>
</div>

<?php


 } else {
// to default French version of portfolio
?>



<script>
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });


        $(window).load(function(){
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
        $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    });
});
       
  
    $(".fancyboxphoto")
         .attr('rel', 'gallery')
         .fancyboxphoto({
        padding : 0
    });
         </script>
         <a name="portfolio"></a>
<div class="row"> <div class="page-header"></div>

        <div id="filter" class="portfolioFilter">

            <a class="current btn-theme" title="Voir tous les projets."data-filter="*" href="#">TOUS LES PROJETS</a>
                       
            <a class="btn-theme" title="Voir les projets de développement web." data-filter=".webdesign" href="#">DEVELOPPEMENT WEB</span></a>
                 
            <a class="btn-theme" title="Voir les projets d'e-marketing." data-filter=".marketing" href="#">E-MARKETING</a>
                  
            <a class="btn-theme" title="Voir les projets d'édition et de rédaction." data-filter=".publication" href="#">REDACTION</a>
        </div>
           
  <div class="portfolioContainer">
           <div class="col-md-4 col-sm-6 portfolio-item publication marketing">
                 <img class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/colorplaza_logo.jpg" alt="Colorplaza Sàrl">   
                  <article class="text-under">
                            <h4 class="modal-title">E-marketing</h4>
                            <h4 class="modal-title">Rédaction web</h4>
                            <br />
                            <div><a target="_blank" title="Voir le site web de Pixum, le nouveau propriétaire de Colorplaza/Colormailer. (nouvelle fenêtre)" href="http://www.colormailer.com">Colorplaza Sàrl</a></div>
                            <ul>
                                <li>SEM - Google Adwords, Google Analytics</li>
                                <li>SEO</li>
                                <li>Rédaction multilingue</li></ul>
                  </article>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item marketing">
                    <img class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/easyswap_logo.jpg" alt="Association Easyswap">   
                        <article class="text-under">
                                <h4 class="modal-title">E-marketing</h4>
                                <br />
                                <div><a target="_blank" title="Voir le site web de l'Association Easyswap (nouvelle fenêtre)" href="http://www.easyswap.org">Association Easyswap</a>
                                    </div><br />
                                <ul>
                                <li>Accessibilité</li>
                                <li>SEO</li></ul>
                        </article>
                 
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item webdesign marketing publication">
                    <img class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/responsive-design-pic_delaquis-antiques300x229.jpg" alt="Delaquis Antiques">
                 <article class="text-under">
                            <h4 class="modal-title">Développement web</h4>
                            <h4 class="modal-title">Rédaction web</h4>
                            <h4 class="modal-title">E-marketing</h4>
                            <div><a target="_blank" title="Voir le site web de Delaquis Antiques website (nouvelle fenêtre)"href="http://www.delaquis-antiques.com">Delaquis Antiques</a></div>
                                <ul>
                                <li>Basé sur un modèle conçu par <a href="http://www.lingulo.com">Lingulo</a></li>
                                <li>HTML5 en dur/CSS3/Responsive</li>
                                <li>SEO, rédaction et photographie</li>
                            </ul>
                  </article>
            </div>


            <div class="col-md-4 col-sm-6 portfolio-item publication">
                <a title="Nouvel homme - fiction" href="http://www.plaines.ca/2009/07/20/nouvel-homme/">
                    <img class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/Nouvel_homme_Stephan_Hardy.jpg" alt="Nouvel homme"></a>
                        <article class="text-under">
                                <h4 class="modal-title">Rédaction et édition</h4> 
                                <br />
                                <div><a target="_blank" title="Voir le site web des Editions des plaines (nouvelle fenêtre)" href="http://www.plaines.ca/2009/07/20/nouvel-homme/">Publication littéraire - "Nouvel homme"</a></div>
                                <br />
                                <ul><li>Anthologie de nouvelles sous la direction
                                de Stephan Hardy</li>
                                <li>Editions des plaines, St-Boniface, Canada,
                                2003, 144 pages.</li></ul>
                        </article>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item marketing">
                <img  title="Association Bénévolat Vaud" class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/benevolat_vaud.jpg" alt="Association Bénévolat Vaud"></a>
                <article class="text-under">
                                <h4 class="modal-title">E-marketing</h4> 
                                <br />   
                                <div><a target="_blank" title="Voir le site web de Bénévolat Vaud (nouvelle fenêtre)" href="http://www.benevolat-vaud.ch/">Association Bénévolat Vaud</a></div>
                                <br />
                                <ul><li>Formateur en communication digitale</li>
                                <li>Membre du réseau des consultants spécialisés en 2012 & 2013</li>
                                </ul>
                                
                        </article>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item webdesign">
                
                    <img  title="Auresoavi - Blog d'informazione e critica musicale" class="img-portfolio img-hover" src="http://www.tagtom.com/wp-content/themes/Tagtom-New-SASS/assets/img/responsive_auresoavi.jpg" alt="Auresoavi.com">
                <article class="text-under">
                                <h4 class="modal-title">Développement web</h4>
                                <br />
                                <div><a target="_blank" title="Voir le site web d'Auresoavi (nouvelle fenêtre)" href="http://www.auresoavi.com/">www.auresoavi.com</a></div>
                                <br />
                                <ul>
                                <li>Gumby/SASS/Compass</li>
                                <li>Responsive</li>
                                <li>Wordpress 4</li></ul>
                                
                        </article>
            </div>
</div>


<?php

 }


?> 
