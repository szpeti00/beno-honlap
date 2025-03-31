    <!-- Footer (adapted from your index.html :contentReference[oaicite:6]{index=6}&#8203;:contentReference[oaicite:7]{index=7}) -->
    <footer class="py-2">
      <div class="container pt-5">
        <div class="row">
          <!-- Logo Column -->
          <div class="col-md-4 mb-3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/vdb_web_logo.jpg" alt="Logo" style="max-width: 220px;">
          </div>
          <!-- Sitemap Column -->
          <div class="col-md-4 mb-3">
            <h4 class="fw-bold mb-3">Oldaltérkép</h4>
            <ul class="list-unstyled">
              <li class="mb-2"><a class="footer-link" href="https://www.drvb.hu/">Kezdőlap</a></li>
              <li class="mb-2"><a class="footer-link" href="https://www.drvb.hu/#about">Rólunk</a></li>
              <li class="mb-2"><a class="footer-link" href="https://www.drvb.hu/#services">Szakterületek</a></li>
              <li class="mb-2"><a class="footer-link" href="https://www.drvb.hu/#contact">Elérhetőség</a></li>
              <li class="mb-2"><a class="footer-link" href="#">Blog</a></li>
              <li class="mb-2">
                <a class="footer-lang-link mb-2" href="https://www.drvb.hu/en/"><span class="fi fi-gb"></span>English</a>
                <a class="footer-lang-link mb-2" href="https://www.drvb.hu/de/"><span class="fi fi-de"></span>Deutsch</a>
                <a class="footer-lang-link mb-2" href="https://www.drvb.hu/no/"><span class="fi fi-no"></span>Norsk</a>
              </li>
            </ul>
          </div>
          <!-- Contact Info Column -->
          <div class="col-md-4 mb-3">
            <h4 class="fw-bold mb-3">Elérhetőség</h4>
            <address>
                <a href="https://maps.app.goo.gl/R5WsG7V8Pyd11RFv9" class="contact-link">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                    </svg>
                    1122 Budapest, XII. kerület Csaba utca 12. szám 3. emelet 14. ajtó                         
                </a>
            </address>
            <p>
                <a href="mailto:benedek.varga@drvb.hu" class="contact-link">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>benedek.varga@drvb.hu
                </a>
            </p>
            <p>
                <a href="tel:+36303064847" class="contact-link">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    +36 30 306 4847
                </a> 
            </p>
          </div>
        </div>
        <!-- Copyright -->
        <div class="text-center mt-5 small">
          <p>&copy; <?php echo date("Y"); ?> Varga D. Benedek ügyvédi iroda</p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>