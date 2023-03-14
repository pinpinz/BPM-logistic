<?php 
    include 'header.php';
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
    <section class="bg-white dark:bg-gray-100">
       
       <div class="grid max-w-screen-xl px-4 md:pt-20 pb-8 mx-auto md:gap-8 gap-1 py-16 grid-cols-12">
          <div class="hidden mt-0 col-span-4 md:block md:pl-24 gs_revealY">
                  <img class="max-w-l mb-10" src="<?php bloginfo('template_directory');?>/images/about/Asset12.png" alt="logo">
           
                  <img class="" src="<?php bloginfo('template_directory');?>/images/about/Asset 6.png" alt="HeroImage">  
                  
          </div>
          
          <div class="mr-auto place-self-center md:col-span-8 col-span-12 md:px-24 gs_revealX">
                  <h1 class="max-w-l mb-4 text-2xl font-bold leading-none tracking-tight  text-yellow-300 ">WHO  WE ARE ?</h1>  
                  <p class="md:w-[30rem] mb-6 text-gray-700 lg:mb-8 md:text-sm lg:text-sm dark:text-gray-700 font-medium text-justify ">"Creating a network to assist you in reaching your potential buyers and growing your business."
                    <br><br>We are a dedicated, professional, transparent team with 12 years of experience serving our client's logistics needs and creating a total solution by connecting and providing solutions to their business (not just logistics) while prioritizing a long-term relationship to grow.
                    <br><br>Our people, from top management to staff level, are hands-on in building this culture to grow the value and exposure of our clients and partners.
                <br><br>Some of our clients have gained the benefits of greater exposure in the region, getting new prospects, and even expanding their business sectors.</p>
              <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                  <a href="#" class="items-center justify-center md:w-full px-5 py-3 text-sm bg-white font-medium text-center text-gray-900 hover:text-white md:border-2 border-gray-200 rounded-3xl sm:w-auto md:hover:bg-sky-900 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-sky-900 dark:focus:ring-gray-800">
                  <img class="md:w-48" src="<?php bloginfo('template_directory');?>/images/about/Asset 1.png" alt="logo">
                  <br>
                  <h1 class="tracking-widest md:text-left text-center max-w-2xl mb-4 text-xl font-bold leading-none tracking-tight  text-yellow-300 ">BUILD<br>STRONG<br>DISTRIBUTION<br>NETWORK</h1>  
                </a>
                  <a href="#" class="items-center justify-center md:w-full px-5 py-3 text-sm bg-white font-medium text-center text-gray-900 hover:text-white md:border-2 border-gray-200 rounded-3xl sm:w-auto md:hover:bg-sky-900 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-sky-900 dark:focus:ring-gray-800">
                  <img class="md:w-48" src="<?php bloginfo('template_directory');?>/images/about/Asset 2.png" alt="logo">
                  <br>
                  <h1 class="tracking-widest md:text-left text-center max-w-2xl mb-4 text-xl font-bold leading-none tracking-tight text-yellow-300 ">BUSINESS<br>TO BUSINESS<br>SERVICE<br></h1>    
                </a>   
              </div>
          </div>
                         
      </div>
    </section>
    <section class="bg-yellow-400 dark:bg-yellow-400 gs_revealX">        
        <div class="grid max-w-screen-xl px-28 py-12 mx-auto md:grid-cols-12  ">
            
              <div class="  md:col-span-3 lg:block ">
                <h1 class="text-2xl font-bold text-white mb-4">VISION</h1>
                <div class="flex py-2">
                    <p class=" pl-2 mb-6 text-gray-700 lg:mb-8 md:text-sm lg:text-sm dark:text-gray-700 font-medium text-justify ">We aim to be the most reliable partner for our customers, partners, and shareholders and strive to grow the business together in every aspect</p>
                </div>
              </div>
             <div class="  md:col-span-1 lg:block "></div>
              <div class="  md:col-span-3 lg:block">
                   <h1 class="text-2xl font-bold text-white mb-4">MISSION</h1>
                    <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset9.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-gray-700 lg:mb-8 md:text-sm lg:text-sm dark:text-gray-700 font-medium text-justify ">Delivering measurable supply chain enhancement</p>
                    </div>
                    <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset9.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-gray-700 lg:mb-8 md:text-sm lg:text-sm dark:text-gray-700 font-medium text-justify ">Ensuring complete satisfaction of our customers pre to post-service.</p>
                    </div>
              </div>
              <div class="  md:col-span-1 lg:block "></div>
              <div class=" lg:mt-0 lg:col-span-3 lg:block">
                   <h1 class="text-2xl font-bold text-yellow-400 mb-4">.</h1>
                    <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset9.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-gray-700 lg:mb-8 md:text-sm lg:text-sm dark:text-gray-700 font-medium text-justify ">Decentralized decision-making to deliver superior speed to market</p>
                    </div>
                    <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset9.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-gray-700 lg:mb-8 md:text-sm lg:text-sm dark:text-gray-700 font-medium text-justify ">Creates a Challenging and Rewarding workplace for our employees</p>
                    </div>
              </div>
              <div class="  md:col-span-1 lg:block "></div>
              
        </div>
    </section>

    <section class="bg-sky-900 dark:bg-sky-900 gs_revealX">        
        <div class="grid max-w-screen-xl px-28 py-12 mx-auto  md:grid-cols-12  ">
            
              <div class="  md:col-span-3 lg:block ">
                <h1 class="text-2xl font-bold text-yellow-400 mb-4">CORE VALUES</h1>
                 <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset10.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-white lg:mb-8 md:text-sm lg:text-sm dark:text-white font-medium text-justify ">We aim to be a market leader while promoting an ethical business and ensuring environmental and social positive impact wherever we operate.</p>
                    </div>
                    <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset10.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-white lg:mb-8 md:text-sm lg:text-sm dark:text-white font-medium text-justify ">Delivering measurable supply chain enhancements, quality improvements and cost savings will reinforce our customers’ faith in us.</p>
                    </div>
                     <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset10.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-white lg:mb-8 md:text-sm lg:text-sm dark:text-white font-medium text-justify ">Ensuring complete satisfaction of our existing customers comes first.</p>
                    </div>
              </div>
             <div class="  md:col-span-1 lg:block "></div>
              <div class="  md:col-span-3 lg:block">
                   <h1 class="text-2xl font-bold text-sky-900 mb-4">.</h1>
                    <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset10.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-white lg:mb-8 md:text-sm lg:text-sm dark:text-white font-medium text-justify ">A true partnership approach is essential to achieve continuous improvement. Top-down, long-term commitment strengthens the partnership.</p>
                    </div>
                    <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset10.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-white lg:mb-8 md:text-sm lg:text-sm dark:text-white font-medium text-justify ">Creating a challenging and rewarding workplace for our employees is a high priority.</p>
                    </div>
              </div>
              <div class="  md:col-span-1 lg:block "></div>
              <div class=" lg:mt-0 lg:col-span-3 lg:block">
                   <h1 class="text-2xl font-bold text-sky-900 mb-4">.</h1>
                    <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset10.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-white lg:mb-8 md:text-sm lg:text-sm dark:text-white font-medium text-justify ">Decentralized decision-making builds a culture of empowerment and results in superior speed-to-market.</p>
                    </div>
                    <div class="flex py-2">
                    <img class="w-7 h-7" src="<?php bloginfo('template_directory');?>/images/about/Asset10.png" alt="HeroImage">  
                    <p class=" pl-2 mb-6 text-white lg:mb-8 md:text-sm lg:text-sm dark:text-white font-medium text-justify ">Continuously driving innovation in all facets of our business engenders success.</p>
                    </div>
              </div>
              <div class="  md:col-span-1 lg:block "></div>
              
        </div>
    </section>

   
<?php 
    include 'footer.php';
?>

