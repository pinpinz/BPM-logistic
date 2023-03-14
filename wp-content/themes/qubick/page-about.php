<?php 
    include 'header.php';
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
    <section class="bg-white dark:bg-gray-100">
       
       <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
          <div class="hidden lg:mt-0 lg:col-span-4 lg:block pl-24">
          <img class="max-w-l mb-10" src="<?php bloginfo('template_directory');?>/images/about/Asset12.png" alt="logo">
           
                  <img class="" src="<?php bloginfo('template_directory');?>/images/about/Asset 6.png" alt="HeroImage">  
                  
          </div>
          
          <div class="lg:mr-auto place-self-center lg:col-span-8 px-24 ">
                  <h1 class="max-w-l mb-4 text-2xl font-bold leading-none tracking-tight  text-yellow-300 ">WHO  WE ARE ?</h1>  
                  <p class="w-[30rem] mb-6 text-gray-700 lg:mb-8 md:text-sm lg:text-sm dark:text-gray-700 font-medium text-justify ">"Creating a network to assist you in reaching your potential buyers and growing your business."
                    <br><br>We are a dedicated, professional, transparent team with 12 years of experience serving our client's logistics needs and creating a total solution by connecting and providing solutions to their business (not just logistics) while prioritizing a long-term relationship to grow.
                    <br><br>Our people, from top management to staff level, are hands-on in building this culture to grow the value and exposure of our clients and partners.
                <br><br>Some of our clients have gained the benefits of greater exposure in the region, getting new prospects, and even expanding their business sectors.</p>
              <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                  <a href="#" class="items-center justify-center w-full px-5 py-3 text-sm bg-white font-medium text-center text-gray-900 hover:text-white border-2 border-gray-400 rounded-3xl sm:w-auto hover:bg-sky-900 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-sky-900 dark:focus:ring-gray-800">
                  <img class="w-48" src="<?php bloginfo('template_directory');?>/images/about/Asset 1.png" alt="logo">
                  <br>
                  <h1 class="tracking-widest text-left max-w-2xl mb-4 text-xl font-bold leading-none tracking-tight  text-yellow-300 ">BUILD<br>STRONG<br>DISTRIBUTION<br>NETWORK</h1>  
                </a>
                  <a href="#" class="items-center justify-center w-full px-5 py-3 text-sm bg-white font-medium text-center text-gray-900 hover:text-white border-2 border-gray-400 rounded-3xl sm:w-auto hover:bg-sky-900 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-sky-900 dark:focus:ring-gray-800">
                  <img class="w-48" src="<?php bloginfo('template_directory');?>/images/about/Asset 2.png" alt="logo">
                  <br>
                  <h1 class="tracking-widest text-left max-w-2xl mb-4 text-xl font-bold leading-none tracking-tight text-yellow-300 ">BUSINESS<br>TO BUSINESS<br>SERVICE<br></h1>    
                </a>   
              </div>
          </div>
                         
      </div>
    </section>
    <section class="bg-yellow-400 dark:bg-yellow-400">        
        <div class="grid max-w-screen-xl px-28 py-12 mx-auto  lg:grid-cols-12  ">
            
              <div class="hidden  md:col-span-3 lg:block ">
                <h1 class="text-2xl font-bold text-white mb-4">VISION</h1>
                <div class="flex py-2">
                    <p class=" pl-2 mb-6 text-gray-700 lg:mb-8 md:text-sm lg:text-sm dark:text-gray-700 font-medium text-justify ">We aim to be the most reliable partner for our customers, partners, and shareholders and strive to grow the business together in every aspect</p>
                </div>
              </div>
             <div class="hidden  md:col-span-1 lg:block "></div>
              <div class="hidden  md:col-span-3 lg:block">
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
              <div class="hidden  md:col-span-1 lg:block "></div>
              <div class="hidden lg:mt-0 lg:col-span-3 lg:block">
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
              <div class="hidden  md:col-span-1 lg:block "></div>
              
        </div>
    </section>

    <section class="bg-sky-900 dark:bg-sky-900">        
        <div class="grid max-w-screen-xl px-28 py-12 mx-auto  lg:grid-cols-12  ">
            
              <div class="hidden  md:col-span-3 lg:block ">
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
             <div class="hidden  md:col-span-1 lg:block "></div>
              <div class="hidden  md:col-span-3 lg:block">
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
              <div class="hidden  md:col-span-1 lg:block "></div>
              <div class="hidden lg:mt-0 lg:col-span-3 lg:block">
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
              <div class="hidden  md:col-span-1 lg:block "></div>
              
        </div>
    </section>

    <!-- <section class="bg-white dark:bg-white ">
    <div class="bg-yellow-400 dark:bg-yellow-400 lg:px-60 py-12">
                            <div class="grid grid-cols-2 gap-8 px-6 py-4 md:grid-cols-3">
                            <h1 class="text-2xl font-bold text-white">
                                VISION
                            </h1>
                            <h1 class="text-2xl font-bold text-white">
                                MISSION
                            </h1>
                            </div>
                            <div class="grid grid-cols-2 gap-8 px-6 py-2 md:grid-cols-3">
                                <div>
                                    <h2 class="mb-2 text-sm font-semibold text-black tracking-wider dark:text-gray-400">
                                    We aim to be the most reliable partner for our customers, partners, and shareholders and strive to grow the business together in every aspect
                                    </h2>
                                </div>
                                <div>
                                <ul class="text-gray-500 dark:text-gray-400 list-none">
                                    <li class="bg-['images/about/Asset9.png'] bg-no-repeat mb-8 text-black">                            
                                    Graha Harmoni 5th Floor, Jl Gaharu no.28, 755
                                    </li>
                                </ul>
                                </div>
                                <div>
                                    <h2 class="mb-2 text-xs font-semibold text-black uppercase dark:text-gray-400">Operational Office - Ha Noi, Vietnam</h2>
                                    <ul class="text-gray-500 dark:text-gray-400">
                                        <p class="-mt-4">-</p>
                                        <li class="mb-8">
                                            <a href="#" class="flex justify-start text-black hover:underline text-xs ">18444 Due Giang Street, Long Beach District, Hanoi, Vietnam Ph.+843957711954</a>
                                        </li>
                                    </ul>
                                </div>
                                    </div>
                                </div>
    </section>
    <section class="bg-white dark:bg-white ">
    <div class="bg-blue-700 dark:bg-blue-700 lg:px-60 py-12">
                            <div class="grid grid-cols-2 gap-8 px-6 py-4 md:grid-cols-3">
                            <h1 class="text-2xl font-bold text-yellow-400">
                                CORE VALUES
                            </h1>
                            </div>
                            <div class="grid grid-cols-2 gap-8 px-6 py-2 md:grid-cols-3">
                                <div>
                                    <h2 class="mb-2 text-sm font-semibold tracking-wider text-white dark:text-white">
                                    We aim to be the most reliable partner for our customers, partners, and shareholders and strive to grow the business together in every aspect
                                    </h2>
                                </div>
                                <div>
                                    <h2 class="mb-2 text-white text-xs font-semibold uppercase dark:text-white">Operational Office - Medan, Indonesia</h2>
                                    <ul class="text-white dark:text-text-white">
                                        <p class="-mt-4">-</p>
                                        <li class="mb-8">
                                            <a href="#" class="flex justify-start hover:underline text-xs ">Graha Harmoni 5th Floor, Jl Gaharu no.28, Medan Sumatera Utara 20235 Ph.+62615141755</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h2 class="mb-2 text-white text-xs font-semibold uppercase dark:text-white">Operational Office - Ha Noi, Vietnam</h2>
                                    <ul class="text-white dark:text-white">
                                        <p class="-mt-4">-</p>
                                        <li class="mb-8">
                                            <a href="#" class="flex justify-start hover:underline text-xs ">18444 Due Giang Street, Long Beach District, Hanoi, Vietnam Ph.+843957711954</a>
                                        </li>
                                    </ul>
                                </div>
                                    </div>
                                </div>
    </section> -->
<?php 
    include 'footer.php';
?>

