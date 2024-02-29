<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="{{ asset('halaman_depan/assets/img/about-perfil.png')}}" type="image/x-icon">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{ asset('halaman_depan/assets/css/styles.css')}}">
      <title>TD</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               <img src="{{ asset('halaman_depan/assets/img/about-perfil.png')}}" class="nav__logo-circle">
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
                     <a href="#projects" class="nav__link">Portofolio</a>
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

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <div class="home__container container grid">
               <h1 class="home__name">
                  Timelees Digital
               </h1>

               <div class="home__perfil">
                  <div class="home__image">
                     <img src="{{ asset('halaman_depan/assets/img/home-perfil.png')}}" alt="image" class="home__img">
                     <div class="home__shadow"></div>
                     <img src="{{ asset('halaman_depan/assets/img/curved-arrow.svg')}}" alt="" class="home__arrow">
                     <img src="{{ asset('halaman_depan/assets/img/random-lines.svg')}}" alt="" class="home__line">

                     <div class="geometric-box"></div>
                  </div>


               </div>

               <div class="home__info">
                  <p class="home__description">
                     <b>Timelees Digital (TD)</b> perusahaan teknologi yang berfokus pada pengembangan layanan teknologi kreatif yang meliputi pengembangan segala jenis aplikasi, website, desain & pengelolaan konten sosial media.
                  </p>
                  <a href="#about" class="home__scroll">
                     <div class="home__scroll-box">
                        <i class="ri-arrow-down-s-line"></i>
                     </div>

                     <span class="home__scroll-text">Scroll Down</span>
                  </a>
               </div>
            </div>
         </section>

         <!--==================== ABOUT ====================-->
         <section class="about section" id="about">
            <div class="about__container container grid">
               <h2 class="section__title-1">
                  <span>Tentang Kami.</span>
               </h2>

               <div class="about__perfil">
                  <div class="about__image">
                     <img src="{{ asset('halaman_depan/assets/img/about-perfil.png')}}" alt="image" class="about__img">

                     <div class="about__shadow"></div>

                        <div class="geometric-box"></div>
                        <img src="{{ asset('halaman_depan/assets/img/random-lines.svg')}}" alt="" class="about__line">
                        <div class="about__box"></div>
                  </div>
               </div>

               <div class="about__info">
                  <p class="about__description">
                     <b>Timelees</b> atau 
                     <b>timeless</b>,
                     yang berarti tanpa batas waktu menjadi filosofi bagi
                     kami untuk memberikan pelayanan dan produk terbaik tanpa batas waktu.
                  </p> 

                  <ul class="about__list">
                     <li class="about__item">
                        <b>Nilai</b> yang kami junjung tinggi adalah <i>inovasi</i>, 
                        <i>kolaborasi</i>, dan <i>kreatifitas</i>. Kami percaya bahwa dengan
                        terus memberikan produk dan layanan yang terbaik dalam setiap solusi yang kami tawarkan, akan memberikan kepuasan bagi para mitra kami.
                     </li>
                  </ul>

                  <div class="about__buttons">
                     <a href="#contact" class="button">
                        <i class="ri-send-plane-line"></i>Contact
                     </a>

                     <a href="#" target="_blank" class="button__ghost">
                        <i class="ri-linkedin-box-line"></i>
                     </a>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== SERVICES ====================-->
         <section class="services section" id="layanan">
            <h2 class="section__title-2">
               <span>Layanan.</span>
            </h2>

            <div class="services__container container grid">
               <article class="services__card">
                  <div class="services__border"></div>

                  <div class="services__content">
                     <div class="services__icon">
                        <div class="services__box"></div>
                        <i class="ri-code-box-line"></i>
                     </div>

                     <h2 class="services__title">Pembuatan Website</h2>
                     <p class="services__description">
                        jasa pembuatan website yang profesional dan responsif. Dengan menggunakan teknologi terkini
                     </p>
                  </div>
               </article>
               <article class="services__card">
                  <div class="services__border"></div>

                  <div class="services__content">
                     <div class="services__icon">
                        <div class="services__box"></div>
                        <i class="ri-layout-4-line"></i>
                     </div>

                     <h2 class="services__title">Desain Produk</h2>
                     <p class="services__description">
                        desain packaging produk yang menarik dan berkesan. Kami memahami pentingnya packaging yang menarik dalam menarik perhatian konsumen
                     </p>
                  </div>
               </article>
               <article class="services__card">
                  <div class="services__border"></div>

                  <div class="services__content">
                     <div class="services__icon">
                        <div class="services__box"></div>
                        <i class="ri-file-copy-2-line"></i>
                     </div>

                     <h2 class="services__title">Undangan Digitals</h2>
                     <p class="services__description">
                        dalam desain digital dan penggunaan elemen interaktif, kami menciptakan undangan yang dapat menarik perhatian tamu Anda
                     </p>
                  </div>
               </article>
               <article class="services__card">
                  <div class="services__border"></div>

                  <div class="services__content">
                     <div class="services__icon">
                        <div class="services__box"></div>
                        <i class="ri-shapes-line"></i>
                     </div>

                     <h2 class="services__title">Logo dan Desain Grafis</h2>
                     <p class="services__description">
                        Design and transform website projects 
                        into mobile apps to provide a seamless
                        user experience.
                     </p>
                  </div>
               </article>
               <article class="services__card">
                  <div class="services__border"></div>

                  <div class="services__content">
                     <div class="services__icon">
                        <div class="services__box"></div>
                        <i class="ri-smartphone-line"></i>
                     </div>

                     <h2 class="services__title">Media Sosial Manajemen</h2>
                     <p class="services__description">
                        membantu mengelola akun media sosial Anda. Dari strategi konten hingga posting harian, kami dapat membantu Anda membangun kehadiran yang kuat di platform media sosial. 
                     </p>
                  </div>
               </article>
               <article class="services__card">
                  <div class="services__border"></div>
  
                  <div class="services__content">
                     <div class="services__icon">
                        <div class="services__box"></div>
                        <i class="ri-code-s-slash-fill"></i>
                     </div>
  
                     <h2 class="services__title">Aplikasi Customize</h2>
                     <p class="services__description">
                      Aplikasi yang bisa customize memudahkan perkerjaan mitra.
                     </p>
                  </div>
               </article>
              </div>
           </section>
  
           <!--==================== PROJECTS ====================-->
           <section class="projects section" id="projects">
              <h2 class="section__title-1">
                 <span>Portofolio.</span>
              </h2>
  
              <div class="projects__container container grid">
                 <article class="projects__card">
                    <div class="project__image">
                       <img src="{{ asset('halaman_depan/assets/img/ppdb.png')}}" alt="image" class="projects__img">
  
                       <a href="https://ppdb.smaknis.sch.id/" class="projects__button button">
                          <i class="ri-arrow-right-up-line"></i>
                       </a>
                    </div>
  
                    <div class="projects__content">
                       <h3 class="projects__subtitle">App</h3>
                       <h2 class="projects__title">PPDB Smk Nurul Islam</h2>
  
                       <p class="projects__description">
                          Aplikasi Penerimaan Peserta didik baru secara online untuk memudahkan peserta melakukan pendaftaran.
                       </p>
                    </div>
  
                    <div class="projects__buttons">
                       <a href="https://ppdb.smaknis.sch.id/" target="_blank" class="projects__link">
                          <i class="ri-device-line"></i>Lihat
                       </a>
  
  
                    </div>
                 </article>
  
                 <article class="projects__card">
                    <div class="project__image">
                       <img src="{{ asset('halaman_depan/assets/img/gtk.png')}}" alt="image" class="projects__img">
  
                       <a href="https://info.gtk.kemdikbud.go.id/" class="projects__button button">
                          <i class="ri-arrow-right-up-line"></i>
                       </a>
                    </div>
  
                    <div class="projects__content">
                       <h3 class="projects__subtitle">App</h3>
                       <h2 class="projects__title">GTK (Guru Tenaga Pendidik)</h2>
  
                       <p class="projects__description">
                          Aplikasi informasi guru dan Tenaga Kependidikan Smk Nurul Islam Cianjur 
                       </p>
                    </div>
  
                    <div class="projects__buttons">
                       <a href="https://info.gtk.kemdikbud.go.id/" target="_blank" class="projects__link">
                          <i class="ri-device-line"></i>Lihat
                       </a>
  
  
                    </div>
                 </article>
  
                 <article class="projects__card">
                    <div class="project__image">
                       <img src="{{ asset('halaman_depan/assets/img/sipinter.png')}}" alt="image" class="projects__img">
  
                       <a href="https://sipinter.smaknis.sch.id/login" class="projects__button button">
                          <i class="ri-arrow-right-up-line"></i>
                       </a>
                    </div>
  
                    <div class="projects__content">
                       <h3 class="projects__subtitle">App</h3>
                       <h2 class="projects__title">SiPinter</h2>
  
                       <p class="projects__description">
                          Aplikasi tempat Proses Penilaian Ujian tengah semester dan Akhir semester
                       </p>
                    </div>
  
                    <div class="projects__buttons">
                       <a href="https://sipinter.smaknis.sch.id/login" target="_blank" class="projects__link">
                          <i class="ri-device-line"></i>Lihat
                       </a>
  
  
                    </div>
                 </article>
  
                 <article class="projects__card">
                    <div class="project__image">
                       <img src="{{ asset('halaman_depan/assets/img/insan.png')}}" alt="image" class="projects__img">
  
                       <a href="https://smkplusinsanandalan.com/" class="projects__button button">
                          <i class="ri-arrow-right-up-line"></i>
                       </a>
                    </div>
  
                    <div class="projects__content">
                       <h3 class="projects__subtitle">Website Profile Sekolah</h3>
                       <h2 class="projects__title">Smk Plus Insan Mandiri</h2>
  
                       <p class="projects__description">
                          Website Profile Sekolah Smk Plus Insan Mandiri  
                       </p>
                    </div>
  
                    <div class="projects__buttons">
                       <a href="https://smkplusinsanandalan.com/" target="_blank" class="projects__link">
                          <i class="ri-device-line"></i>Lihat
                       </a>
  
  
                    </div>
                 </article>
  
                 <article class="projects__card">
                    <div class="project__image">
                       <img src="{{ asset('halaman_depan/assets/img/pgri.png')}}" alt="image" class="projects__img">
  
                       <a href="http://smppgriciranjang.sch.id" class="projects__button button">
                          <i class="ri-arrow-right-up-line"></i>
                       </a>
                    </div>
  
                    <div class="projects__content">
                       <h3 class="projects__subtitle">Website Profile Sekolah</h3>
                       <h2 class="projects__title">SMP PGRI Ciranjang</h2>
  
                       <p class="projects__description">
                          Website Profile Sekolah SMP PGRI ciranjang
                       </p>
                    </div>
  
                    <div class="projects__buttons">
                       <a href="http://smppgriciranjang.sch.id" target="_blank" class="projects__link">
                          <i class="ri-device-line"></i>Lihat
                       </a>
  
  
                    </div>
                 </article>
  
                 <article class="projects__card">
                    <div class="project__image">
                       <img src="{{ asset('halaman_depan/assets/img/ac.png')}}" alt="image" class="projects__img">
  
                       <a href="https://servicepasangaccianjur.com/" class="projects__button button">
                          <i class="ri-arrow-right-up-line"></i>
                       </a>
                    </div>
  
                    <div class="projects__content">
                       <h3 class="projects__subtitle">Website</h3>
                       <h2 class="projects__title">Servic AC</h2>
  
                       <p class="projects__description">
                          Multi Teknik Service AC Cianjur, Menawarkan berbagai jasa service serta produk. berlokasi di Cianjur
                       </p>
                    </div>
  
                    <div class="projects__buttons">
                       <a href="https://servicepasangaccianjur.com/" target="_blank" class="projects__link">
                          <i class="ri-device-line"></i>Lihat
                       </a>
  
  
                    </div>
                 </article>
  
                 <article class="projects__card">
                    <div class="project__image">
                       <img src="{{ asset('halaman_depan/assets/img/game1.png')}}" alt="image" class="projects__img">
  
                       <a href="https://siskarahmadani.itch.io/dbase-game" class="projects__button button">
                          <i class="ri-arrow-right-up-line"></i>
                       </a>
                    </div>
  
                    <div class="projects__content">
                       <h3 class="projects__subtitle">Game</h3>
                       <h2 class="projects__title">DBASE GAME</h2>
  
                       <p class="projects__description">
                          Game Edukasi 2D, untuk pembelajaran di Sekolah
                       </p>
                    </div>
  
                    <div class="projects__buttons">
                       <a href="https://siskarahmadani.itch.io/dbase-game" target="_blank" class="projects__link">
                          <i class="ri-device-line"></i>Lihat
                       </a>
  
                    </div>
                 </article>
  
                 <article class="projects__card">
                    <div class="project__image">
                       <img src="{{ asset('halaman_depan/assets/img/game2.png')}}" alt="image" class="projects__img">
  
                       <a href="https://ela-siti-laela.itch.io/edukasi" class="projects__button button">
                          <i class="ri-arrow-right-up-line"></i>
                       </a>
                    </div>
  
                    <div class="projects__content">
                       <h3 class="projects__subtitle">Game</h3>
                       <h2 class="projects__title">Edukasi 2D</h2>
  
                       <p class="projects__description">
                          Mengenal jenis profesi dan peluang usaha FASE E untuk Edukasi Pembelajaran
                       </p>
                    </div>
  
                    <div class="projects__buttons">
                       <a href="https://ela-siti-laela.itch.io/edukasi" target="_blank" class="projects__link">
                          <i class="ri-device-line"></i>Lihat
                       </a>
  
  
                    </div>
                 </article>
  
                 <article class="projects__card">
                    <div class="project__image">
                       <img src="{{ asset('halaman_depan/assets/img/game3.png')}}" alt="image" class="projects__img">
  
                       <a href="https://sebuahsemangat.itch.io/dbinstruction" class="projects__button button">
                          <i class="ri-arrow-right-up-line"></i>
                       </a>
                    </div>
  
                    <div class="projects__content">
                       <h3 class="projects__subtitle">Game</h3>
                       <h2 class="projects__title">Database Instruction</h2>
  
                       <p class="projects__description">
                          Game ini dibuat oleh Apep wahyudin pada kegiatan Diklat Upskilling dan Reskilling Game Edukasi 2 Dimensi di BBPPMPV BMTI periode 4-21 Oktober 2023.
                       </p>
                    </div>
  
                    <div class="projects__buttons">
                       <a href="https://sebuahsemangat.itch.io/dbinstruction" target="_blank" class="projects__link">
                          <i class="ri-device-line"></i>Lihat
                       </a>
  
  
                    </div>
                 </article>               
              </div>
           </section>
        
           <!--==================== BLOG ====================-->
           <section class="about section" id="blog">
              <h2 class="section__title-1">
                 <span>Blog.</span>
              </h2>
              <div class="blog__container container grid">
                     <div class="col">
                   <div class="blog-card blog-card-blog">
                     <div class="blog__image">
                       <img src="{{ asset('halaman_depan/assets/img/111.png')}}" alt="image">
                         <div class="ripple-cont"></div>
                     </div>
                     <div class="blog-table">
                         <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                         <h4 class="blog-card-caption">
                             <a href="#">SQL : Pengertian, Sejarah dan Jenis Perintah SQL</a>
                         </h4>
                         <p class="blog-card-description">Structured Query Languange adalah point penting dalam sebuah studi tek.... </p>
                         <div class="ftr">
                          <div class="blog__buttons ">
                             <a href="#" target="_blank" class="blog__buttons">
                               Selengkapnya <i class="ri-arrow-right-line"></i>
                             </a>
                          </div>
                             
                         </div>
                     </div>
                 </div>
                 </div>
                     
                 <div class="col">
                    <div class="blog-card blog-card-blog">
                      <div class="blog__image">
                       <img src="{{ asset('halaman_depan/assets/img/blog2.png')}}" alt="image">
                          <div class="ripple-cont"></div>
                      </div>
                      <div class="blog-table">
                          <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                          <h4 class="blog-card-caption">
                              <a href="#">Bahasa Pemrograman Terpopuler Untuk Membuat Website</a>
                          </h4>
                          <p class="blog-card-description">Bahasa pemrograman merupakan salah satu komponen penting apabila...</p>
                          <div class="ftr">
                             <div class="blog__buttons ">
                                <a href="#" target="_blank" class="blog__buttons">
                                  Selengkapnya <i class="ri-arrow-right-line"></i>
                                </a>
                             </div>
                              
                          </div>
                      </div>
                  </div>
                  </div>
  
                  <div class="col">
                    <div class="blog-card blog-card-blog">
                      <div class="blog__image">
                       <img src="{{ asset('halaman_depan/assets/img/blog3.png')}}" alt="image">
                          <div class="ripple-cont"></div>
                      </div>
                      <div class="blog-table">
                          <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                          <h4 class="blog-card-caption">
                              <a href="#">Apa Itu CSS : Pengertian, Fungsi dan Jenis CSS</a>
                          </h4>
                          <p class="blog-card-description">Apakah Anda sudah mengetahui mengenai apa itu CSS ? Ya, CSS sang...</p>
                          <div class="ftr">
                             <div class="blog__buttons ">
                                <a href="#" target="_blank" class="blog__buttons">
                                  Selengkapnya <i class="ri-arrow-right-line"></i>
                                </a>
                             </div>
                          </div>
                      </div>
                  </div>
                  </div>
               </div>
           
           </section>
  
      
         
         <!--==================== CONTACT ====================-->
         <section class="contact section" id="contact">
            <div class="contact__container grid">
               <div class="contact__data">
                  <h2 class="section__title-2">
                     <span>Kontak Kami.</span>
                  </h2>

                  <p class="contact__description-1">
                     Kami akan membaca semua <i>email</i>.
                      Kirim pesan apa pun yang Anda 
                      inginkan dan kami akan menghubungi Anda kembali.
                  </p>
                  
                  <p class="contact__description-2">
                     Kami memerlukan <b>Nama</b> dan <b>Alamat Email </b>Anda,
                      tetapi Anda tidak akan menerima apa pun selain balasan dari pesan Anda.
                  </p>

                  <div class="geometric-box"></div>
               </div>

               <div class="contact__mail">
                  <h2 class="contact__title">
                     Send Us A Message 
                  </h2>
                  
                  <form action="" class="contact__form" id="contact-form">
                     <div class="contact__group">
                        <div class="contact__box">
                           <input type="text" name="user_name" class="contact__input" id="name" required placeholder="First Name">
                           <label for="name" class="contact__label">First Name</label>
                        </div>

                        <div class="contact__box">
                           <input type="email" name="user_email" class="contact__input" id="email" required placeholder="Email Address">
                           <label for="email" class="contact__label">Email Address</label>
                        </div>
                     </div>

               <!--      <div class="contact__box">
                        <input type="text" name="user_subject" class="contact__input" id="subject" required placeholder="Subject">
                        <label for="subject" class="contact__label">Subject</label>
                     </div>
                  -->
                     <div class="contact__box contact__area">
                        <textarea name="user_message" id="message" class="contact__input" required placeholder="Message"></textarea>
                        <label for="message" class="contact__label">Message</label>
                     </div>

                     <p class="contact_message" id="contact-message"></p>

                     <button type="submit" class="contact__button button">
                        <i class="ri-send-plane-line"></i>Send Message
                     </button>
                  </form>
               </div>
               
               <div class="contact__social">
                  <img src="{{ asset('halaman_depan/assets/img/curved-arrow.svg')}}" alt="" class="contact__social-arrow">

                  <div class="contact__social-data">
                     <div>
                        <p class="contact__sosial-description-1">
                           Does not send emails
                        </p>
                        <p class="contact__sosial-description-2">
                           Write me on us social networks
                        </p>
                     </div>

                     <div class="contact__social-links">
                        <a href="https://www.instagram.com/timelees.digital/" target="_blank" class="contact__social-link">
                           <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://www.tiktok.com/@timelees.digital?_t=8gloRYw34jK&_r=1" target="_blank" class="contact__social-link">
                           <i class="ri-tiktok-line"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/timelees-digital-b13980297?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app " target="_blank" class="contact__social-link">
                           <i class="ri-linkedin-box-line"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

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
      <script src="{{ asset('halaman_depan/assets/js/scrollreveal.min.js')}}"></script>
      
      <!--=============== EMAIL JS ===============-->
      <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>


      <!--=============== MAIN JS ===============-->
      <script src="{{ asset('halaman_depan/assets/js/main.js')}}"></script>
   </body>
</html>