<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="{{ asset('timelees-digital/assets/img/home-perfil.png')}} " type="image/x-icon">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{ asset('timelees-digital/assets/css/styles.css')}}">
      <title>Portofolio TD</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               <img src="{{ asset('timelees-digital/assets/img/about-perfil.png')}}" class="nav__logo-circle">
               <span class="nav__logo-name">Timelees Digital.</span>
            </a>
            <div class="nav__menu" id="nav-menu">
               <span class="nav__title">Menu</span>
               <h3 class="nav__name">TD</h3>

               <ul class="nav__list">
                  <li class="nav __item">
                     <a href="#home" class="nav__link active-link">Home</a>
                  </li>
                  <li class="nav __item">
                     <a href="#about" class="nav__link">Tentang Kami</a>
                  </li>
                  <li class="nav __item">
                     <a href="#layanan" class="nav__link">Layanan</a>
                  </li>
                  <li class="nav __item">
                     <a href="#projects" class="nav__link">Produk</a>
                  </li>
                  <li class="nav __item">
                     <a href="#blog" class="nav__link">Blog</a>
                  </li>
                  <li class="nav __item">
                     <a href="#contact" class="nav__link nav__link-button">Kontak</a>
                  </li>
               </ul>

               <!--Close button-->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            
            <div class="nav__buttons">
               <!-- theme button -->
               <i class="ri-moon-line change-theme" id="theme-button"></i>

            <!--toggle button-->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-4-line"></i>
               </div>
            </div>
         </nav>
      </header>


      <div class="container mt-5">
        <div class="col mb-5">
            <div>
                <img src="\img\tes.jpg" class="rounded" width="100%" height="400px"
                    style="object-fit: cover" alt="">
            </div>
        </div>

        <div class="col" style="margin-bottom:200px">
            <div class="row">
                <div class="col-md-7 border-end">
                    <h1>Ferdi Sambo Dipenjara Matii</h1>
                    <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, est consectetur aspernatur accusamus,
                         ullam esse dolores quaerat nostrum itaque hic pariatur amet quis beatae placeat laboriosam animi debitis accusantium assumenda.</p>
                    <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, est consectetur aspernatur accusamus,
                         ullam esse dolores quaerat nostrum itaque hic pariatur amet quis beatae placeat laboriosam animi debitis accusantium assumenda.</p>
                    <div class="mt-3" style="font-weight: 400">
                    </div>
                    <div class="details mt-3">
                        <h6>Penulis: Sambo</h6>
                    </div>
                </div>
                {{-- Komentar --}}
                <div class="col-md-4 ms-md-4 mt-3 mt-md-0">
                    <h5>Komentar</h5>
                    <hr>

                    <!-- component -->
<div class="flex justify-center relative top-1/3">




<!-- This is an example component -->
{{-- <div class="relative grid grid-cols-1 gap-4 p-3 mb-8 border rounded bg-white shadow">
    <div class="relative flex">
        <img src="\img\tes1.png" class="relative rounded-lg -top-1 -mb-2 bg-white border" style="height: 5%">
        <div class="flex flex-col w-full">
            <div class="flex flex-row justify-between">
                <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">COMMENTOR</p>
                <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
            </div>
            <p class=" text-muted fw-bold">20 April 2022, at 14:88 PM</p>
        </div>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan komentar">
      </div>
    {{-- <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Maxime quisquam vero adipisci beatae voluptas dolor ame.</p> --}}
{{-- </div>  --}}





<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://timelees-digital-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">





       <!--==================== FOOTER ====================-->
       <footer class="footer">
        <div class="footer__container container grid">
           <ul class="footer__links">
              <li>
                 <a href="#home" class="footer__link">Home</a>
              </li>
              <li>
                 <a href="#about" class="footer__link">Tentang</a>
              </li>
              <li>
                 <a href="#layanan" class="footer__link">Layanan</a>
              </li>
           </ul>

           <span class="footer__copy">
              &#169; All Rights Reserved By 
              <a href="#">Timelees Digital.</a>
           </span>
        </div>
     </footer>

     <!--========== SCROLL UP ==========-->
     <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
     </a>

     <!--=============== SCROLLREVEAL ===============-->
     <script src="{{ asset('timelees-digital/assets/js/scrollreveal.min.js')}}"></script>
     
     <!--=============== EMAIL JS ===============-->
     <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>


     <!--=============== MAIN JS ===============-->
     <script src="{{ asset('timelees-digital/assets/js/main.js')}}"></script>
  </body>
</html>