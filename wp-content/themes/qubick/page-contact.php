<?php 
    include 'header.php';
?>

<main class="mt-20">
 


                <section class="bg-white dark:bg-white">    
                        
                    <div class="grid max-w-screen-xl px-8 mx-auto lg:gap-8 xl:gap-0 lg:pt-4 lg:grid-cols-12 flex">
                        <div class="place-self-start col-span-6 md:mt-12 ">
                            <div class="gs_revealY">
                                    <h2 class="mb-2 text-xs font-semibold text-black uppercase dark:text-gray-400">Head Office - Surabaya, Indonesia</h2>
                                    <ul class="text-gray-500 dark:text-gray-400">
                                        <p class="-mt-4">-</p>
                                        <li class="mb-8">
                                            <a href="#" class="flex justify-start text-black hover:underline text-xs ">Jl. Kalianget No.15B Perak Utara, <br>Surabaya, Jawa Timur 60615 <br>Ph.+62 31 328 7604 <br>+62 31 328 5278</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gs_revealY">
                                    <h2 class="mb-2 text-xs font-semibold text-black uppercase dark:text-gray-400">Operational Office - Medan, Indonesia</h2>
                                    <ul class="text-gray-500 dark:text-gray-400">
                                        <p class="-mt-4">-</p>
                                        <li class="mb-8">
                                            <a href="#" class="flex justify-start text-black hover:underline text-xs ">Graha Harmoni 5th Floor, <br>Jl Gaharu no.28, Kec. Medan Timur, <br>Medan Sumatera Utara 20235 <br>Ph.+62 61 4141 755</a>
                                        </li>
                                    </ul>
                                </div>
                                 <div class="gs_revealY">
                                    <h2 class="mb-2 text-xs font-semibold text-black uppercase dark:text-gray-400">Operational Office - Ha Noi, Vietnam</h2>
                                    <ul class="text-gray-500 dark:text-gray-400">
                                        <p class="-mt-4">-</p>
                                        <li class="mb-8">
                                            <a href="#" class="flex justify-start text-black hover:underline text-xs ">18444 Due Giang Street, Long Beach District, <br>Hanoi, Vietnam <br>Ph.+84 395 77 11351</a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        <div class="place-self-start col-span-6 ">
                            <div class="container gs_revealX">
                               
                                            <div>
                                                <h1 class = "max-w-2xl mb-4 text-2xl md:text-4xl xl:text-4xl font-bold leading-none tracking-tight text-yellow-400 ">Get In Touch</h1>
                                                <p>If you have any question about us or how we can support yourr business, please contact us directly by selecting from one of the below categories in the most relevant to your inquiry and fill our short feedback form.</p>
                                            </div>
                                            <form name="sentMessage" id="contactForm" novalidate>
                                                
                                                    <div >
                                                    
                                                        <input class="rounded-lg border-slate-300 border-2 bg-white p-1 my-3 w-full" type="text" id="name" class="form-control" placeholder="Name" required="required">
                                                        <p class="help-block text-danger"></p>
                                                   
                                                    </div>
                                                    <div>
                                                  
                                                        <input class="rounded-lg border-slate-300 border-2 bg-white p-1 my-3 w-full" type="email" id="email" class="form-control" placeholder="Email" required="required">
                                                        <p class="help-block text-danger"></p>
                                                   
                                                    </div>
                                              
                                                <div>
                                                    <textarea class="rounded-lg border-slate-300 border-2 bg-white p-1 my-3 w-full" name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                                                    <p class="help-block text-danger"></p>
                                                </div>
                                                <div></div>
                                                <button class="bg-yellow-400 rounded-lg p-3" type="submit" class="btn btn-custom btn-lg">Send Message</button>
                                            </form>
                                      
                               
                                
                                   <div class="mb-6 flex justify-end">
                                                <a
                                                href="#!"
                                                type="button"
                                                class="m-1 h-9 w-9 mr-4 rounded-full border-black uppercase leading-normal text-black transition duration-20 ease-in-out hover:bg-black hover:bg-gray-400 focus:outline-none focus:ring-0"
                                                data-te-ripple-init
                                                data-te-ripple-color="light">
                                                <img class="w-40" src="<?php bloginfo('template_directory');?>/images/contact/Asset 1.png" alt="wa">
                                                </a>

                                                <a
                                                href="#!"
                                                type="button"
                                                class="m-1 h-9 w-9 mr-4 border-black uppercase leading-normal text-black transition duration-20 ease-in-out hover:bg-black hover:bg-gray-400 focus:outline-none focus:ring-0"
                                                data-te-ripple-init
                                                data-te-ripple-color="light">
                                                <img class="w-40" src="<?php bloginfo('template_directory');?>/images/contact/Asset 2.png" alt="wa">
                                                </a>

                                                <a
                                                href="#!"
                                                type="button"
                                                class="m-1 h-9 w-9 mr-4 border-black uppercase leading-normal text-black transition duration-20 ease-in-out hover:bg-black hover:bg-gray-400 focus:outline-none focus:ring-0"
                                                data-te-ripple-init
                                                data-te-ripple-color="light">
                                                <img class="w-40" src="<?php bloginfo('template_directory');?>/images/contact/Asset 3.png" alt="wa">
                                                </a>
                                                
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                   
                </section>

        

</main>

<?php 
    include 'footer.php';
?>