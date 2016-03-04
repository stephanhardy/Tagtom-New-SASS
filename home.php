<?php get_template_part('templates/home', 'header'); ?>


<!-- first section - Home -->
<div id="home" class="home">
<div class="text-vcenter row">
  <div class="homepage-parallax">
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('homepagewidget1') ) : ?>
        <?php endif; ?>
  </div>
</div>
</div>


<!-- second section - About -->
 <div id="en_vedette" class="pad-section">
   <div class="container">
      <div class="row">
        <div class="col-lg-4">
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('homepagewidget2_1_en_vedette') ) : ?>
        <?php endif; ?>
       </div>
       <div class="col-lg-4">
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('homepagewidget2_2_en_vedette') ) : ?>
        <?php endif; ?>
       </div>
       <div class="col-lg-4">
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('homepagewidget2_3_en_vedette') ) : ?>
        <?php endif; ?>
       </div>
      </div>
    </div>
 </div>
  <!-- /second section -->

<!-- third section - Services --> 


<div id="services" class="pad-section">

    
    <div class="row">
           <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('homepagewidget3_services') ) : ?>
           <?php endif; ?>
         <hr>
     
    <ul class="service nav nav-tabs">
              <li class="active service col-sm-3 col-md-3"><a data-toggle="tab" href="#sectionA"><i class="glyphicon"></i><span>1</span></a></li>
              <li class="service col-sm-3 col-md-3"><a data-toggle="tab" href="#sectionB"><i class="glyphicon"> </i><span>2</a></span></li>
              <li class="service col-sm-3 col-md-3"><a data-toggle="tab" href="#sectionC"><i class="glyphicon"></i><span>3</a></span></li>
              <li class="service col-sm-3 col-md-3"><a data-toggle="tab" href="#sectionD"><i class="glyphicon"></i><span>4</a></span></li>
    </ul>
  <div id="services-panel" class="row text-center tab-content panel-group">    
      <div id="sectionA" class="col-sm-12 tab-pane fade in active panel panel-default">
            <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('homepagewidget3_1_services') ) : ?>
           <?php endif; ?>
      </div>
      <div id="sectionB" class="col-sm-12 tab-pane fade panel panel-default">
           
           <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('homepagewidget3_2_services') ) : ?>
           <?php endif; ?>
      </div>
      <div id="sectionC" class="col-sm-12 tab-pane fade panel panel-default">
          
          <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('homepagewidget3_3_services') ) : ?>
           <?php endif; ?>
      </div>
      <div id="sectionD" class="col-sm-12 tab-pane fade panel panel-default">
         
          <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('homepagewidget3_4_services') ) : ?>
           <?php endif; ?>
      </div>
    </div>
  </div>
</div>

  <!-- /third section -->




<?php 
//Includes the footer.php template file from your current theme's directory
get_template_part('footer'); ?>