<?php get_header(); ?>
<div class="slider-container">
  <div class="cycle-slideshow" 
			data-cycle-fx="scrollHorz"
            data-cycle-pause-on-hover="true"
            data-cycle-speed="300">
			<img src="<?php bloginfo('template_directory'); ?>/img/interhaul-banner-1.jpg">
			<img src="<?php bloginfo('template_directory'); ?>/img/interhaul-banner-2.jpg">
        	<img src="<?php bloginfo('template_directory'); ?>/img/interhaul-banner-3.jpg">
          </div>
	</div>
    <a class="track" href="http://www.pallet-trackpods.com/" target="_blank">
    	<p>Inter Haul online pallet tracking</p>
        <img src="<?php bloginfo('template_directory'); ?>/img/track-pallet.png" alt="Track"> 
        <span>Track your order</span>
    </a>
    
    <div class="col first">
    	<a href="<?php bloginfo('url'); ?>/services/pallet-network/">
            <img src="<?php bloginfo('template_directory'); ?>/img/logistics-management.jpg" alt="Track">
            <h1>Logistics Management</h1>
            <p>Lorem ipsum is simply dummy text of the printing and typesetting.</p>
            <span>Learn more &rsaquo;</span>
        </a>
    </div>  
    <div class="col">
    	<a href="<?php bloginfo('url'); ?>/services/vehicle-features/">
            <img src="<?php bloginfo('template_directory'); ?>/img/vehicles.jpg" alt="Track">
            <h1>Vehicles</h1>
            <p>Lorem ipsum is simply dummy text of the printing and typesetting.</p>
            <span>Learn more &rsaquo;</span>
        </a>
    </div>
    <div class="col">
    	<a href="<?php bloginfo('url'); ?>/services/warehousing/">
            <img src="<?php bloginfo('template_directory'); ?>/img/warehouse.jpg" alt="Track">
            <h1>Warehouse</h1>
            <p>Lorem ipsum is simply dummy text of the printing and typesetting.</p>
            <span>Learn more &rsaquo;</span>
        </a>
    </div>
    <div class="col">
    	<a href="<?php bloginfo('url'); ?>/services/contract-logistics/">
            <img src="<?php bloginfo('template_directory'); ?>/img/logistics-contract.jpg" alt="Track">
            <h1>Contract logistics</h1>
            <p>Lorem ipsum is simply dummy text of the printing and typesetting.</p>
            <span>Learn more &rsaquo;</span>
        </a>
    </div>

<?php get_footer(); ?>
