<?php 
    include 'header.php';
?>

<main class="mt-20">
 


                <section class="bg-white dark:bg-white">    
                        
                    <div class="grid max-w-screen-xl px-8 mx-auto lg:gap-8 xl:gap-0 lg:pt-4 lg:grid-cols-12 flex">
                        <div class="place-self-start col-span-6 md:mt-12 ">
                            <div class="gs_revealY">
                                    <h2 class="mb-2 text-xs font-semibold text-black dark:text-gray-400">Head Office - Surabaya, Indonesia</h2>
                                    <ul class="text-gray-500">
                                        <p class="-mt-4">-</p>
                                        <li class="mb-8">
                                            <a href="#" class="flex justify-start text-black hover:underline text-xs ">Jl. Kalianget No.15B Perak Utara, <br>Surabaya, Jawa Timur 60615 <br>Ph.+62 31 328 7604 <br>+62 31 328 5278</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gs_revealY">
                                    <h2 class="mb-2 text-xs font-semibold text-black dark:text-gray-400">Operational Office - Medan, Indonesia</h2>
                                    <ul class="text-gray-500">
                                        <p class="-mt-4">-</p>
                                        <li class="mb-8">
                                            <a href="#" class="flex justify-start text-black hover:underline text-xs ">Graha Harmoni 5th Floor, <br>Jl Gaharu no.28, Kec. Medan Timur, <br>Medan Sumatera Utara 20235 <br>Ph.+62 61 4141 755</a>
                                        </li>
                                    </ul>
                                </div>
                                 <div class="gs_revealY">
                                    <h2 class="mb-2 text-xs font-semibold text-black dark:text-gray-400">Operational Office - Ha Noi, Vietnam</h2>
                                    <ul class="text-gray-500">
                                        <p class="-mt-4">-</p>
                                        <li class="mb-8">
                                            <a href="#" class="flex justify-start text-black hover:underline text-xs ">18444 Due Giang Street, Long Beach District, <br>Hanoi, Vietnam <br>Ph.+84 395 77 11351</a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        <div class="col-span-5 mb-10">
                            <div class="container gs_revealX w-full">
                               
                                        <div>
                                                <h1 class = "max-w-2xl mb-4 text-2xl md:text-4xl xl:text-4xl font-bold leading-none tracking-tight text-[#fdce28] ">Get In Touch</h1>
                                               
                                            </div>
                                            <form name="sentMessage" id="contactForm" novalidate>
                                                <div id="step1" class="tabcontent">
                                                    <p>Let's start a conversation about a new business, services or inquiries.</p>
                                                    
                                              
                                               
                                                
                                               

                                                </div>


                                                <div id="step2" class="tabcontent">
                                                     <p>Tell us more about your company.</p>

                                                   <div class="mt-3">
                                                     <p class="text-xl text-[#fdce28]">Full Name</p>
                                                     <input class="rounded-lg border-slate-300 border-2 bg-white p-1 my-3 w-full" type="text" id="name" class="form-control" placeholder="Enter Your full name" required="required">
                                                    </div>

                                                     <div class="mt-3">
                                                     <p class="text-xl text-[#fdce28]">Company Name</p>
                                                     <input class="rounded-lg border-slate-300 border-2 bg-white p-1 my-3 w-full" type="text" id="companyName" class="form-control" placeholder="Type your company name" required="required">
                                                    </div>

                                                     <div class="mt-3">
                                                     <p class="text-xl text-[#fdce28]">Industries</p>
                                                     <input class="rounded-lg border-slate-300 border-2 bg-white p-1 my-3 w-full" type="text" id="industry" class="form-control" placeholder="Write down the type of your industry" required="required">
                                                    </div>

                                                     <div class="mt-3">
                                                     <p class="text-xl text-[#fdce28]">Email Address</p>
                                                     <input class="rounded-lg border-slate-300 border-2 bg-white p-1 my-3 w-full" type="text" id="email" class="form-control" placeholder="Enter your email address" required="required">
                                                    </div>

                                                     <div class="mt-3">
                                                     <p class="text-xl text-[#fdce28]">Phone Number (Optional)</p>
                                                     <input class="rounded-lg border-slate-300 border-2 bg-white p-1 my-3 w-full" type="text" id="phone" class="form-control" placeholder="Enter your phone number" required="required">
                                                    </div>
                                                                                                                                             
                                              
                                                </div>

                                                <div id="step3" class="tabcontent">
                                                       <p>How can I help you?Write down your request here.</p>
                                                 <div class="mt-5">
                                                    <p class="text-2xl text-[#fdce28]">Message</p>
                                                    <textarea class="rounded-lg border-slate-300 border-2 bg-white p-1 my-3 w-full" name="message" id="message" class="form-control" rows="4" placeholder="type your massage here" required></textarea>
                                                    
                                                </div>
                                                </div>
                                                
                                            </form>
                                            <div>
                                                 <div id="step1." class="tabcontent w-full">
                                                    <button class="bg-[#fdce28] rounded-lg p-3 float-right" type=""  onclick="openCity(event, 'step2', 'step2.')">next</button>
                                                 </div>
                                                 <div id="step2." class="tabcontent w-full">
                                                    <button class="bg-[#fdce28] rounded-lg p-3 float-left" type=""  onclick="openCity(event, 'step1', 'step1.')">back</button>
                                                     <button class="bg-[#fdce28] rounded-lg p-3 float-right" type=""  onclick="openCity(event, 'step3', 'step3.')">next</button>
                                                 </div>
                                                     <div id="step3." class="tabcontent w-full">            
                                                     <button class="bg-[#fdce28] rounded-lg p-3 float-left" type=""  onclick="openCity(event, 'step2', 'step2.')">back</button>                                   
                                                     <button class="bg-[#fdce28] rounded-lg p-3 float-right" type=""  onclick="openCity(event, 'step3', 'step3.')">Submit</button>
                                                 </div>
                                               
                                            </div>
                                            
                                                   <script>
function openCity(evt, kode1,kode2) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) { 
    tabcontent[i].style.display = "none";
  }
 
  document.getElementById(kode1).style.display = "block"; 
  document.getElementById(kode2).style.display = "block"; 
}

openCity(event, 'step1', 'step1.');


   
</script>                                 
                                                                  
                                
                                   <div class="mt-5 mb-6 flex justify-end hidden">
                                                <a
                                                href="#!"
                                                type="button"
                                                class="m-1 h-9 w-9 mr-4 rounded-full border-black uppercase leading-normal text-black transition duration-20 ease-in-out hover:opacity-50 hover:opacity-50 focus:outline-none focus:ring-0"
                                                data-te-ripple-init
                                                data-te-ripple-color="light">
                                                <img class="w-40" src="<?php bloginfo('template_directory');?>/images/contact/Asset 1.png" alt="wa">
                                                </a>

                                                <a
                                                href="#!"
                                                type="button"
                                                class="m-1 h-9 w-9 mr-4 border-black uppercase leading-normal text-black transition duration-20 ease-in-out hover:opacity-50 hover:opacity-50 focus:outline-none focus:ring-0"
                                                data-te-ripple-init
                                                data-te-ripple-color="light">
                                                <img class="w-40" src="<?php bloginfo('template_directory');?>/images/contact/Asset 2.png" alt="wa">
                                                </a>

                                                <a
                                                href="#!"
                                                type="button"
                                                class="m-1 h-9 w-9 mr-4 border-black uppercase leading-normal text-black transition duration-20 ease-in-out hover:opacity-50 hover:opacity-50 focus:outline-none focus:ring-0"
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