<footer class="bg-black text-light position-relative pt-5">
    <div class="container">
        <div class="row gy-4">
            <!-- Logo -->
            <div class="col-md-3 col-10 offset-1 offset-md-0 text-right   text-md-center text-md-start" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="text-gold" style="font-family:'Lobster', cursive; font-size:1.75rem;">Pub u Joža</h3>
            </div>
            <!-- Kontakt -->
            <div class="col-md-3 col-10 offset-1 offset-md-0" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
                <h6 class="text-uppercase text-secondary">Kontakt</h6>
                <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-center mb-2 text-secondary"><i class="bi bi-geo-alt-fill me-2 text-gold"></i>Antona Bernoláka 17, Žilina 01001</li>
                    <li class="d-flex align-items-center mb-2 text-secondary"><i class="bi bi-telephone-fill me-2 text-gold"></i><a href="tel:0900555555" class=" text-secondary text-decoration-none">0900 555 555</a></li>
                    <li class="d-flex align-items-center text-secondary"><i class="bi bi-envelope-fill me-2 text-gold"></i><a href="mailto:pubujozagmail.com" class=" text-secondary text-decoration-none">pubujozagmail.com</a></li>
                </ul>
            </div>
            <!-- Otváracie hodiny -->
            <div class="col-md-3 col-10 offset-1 offset-md-0" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
                <h6 class="text-uppercase  text-secondary">Otváracie Hodiny</h6>
                <ul class="list-unstyled mt-3  text-secondary">
                    <li>Pon 10:00 - 22:00</li>
                    <li>Ut 10:00 - 22:00</li>
                    <li>St 10:00 - 22:00</li>
                    <li>Št 10:00 - 22:00</li>
                    <li>Pi 10:00 - 22:00</li>
                    <li>So 10:00 - 22:00</li>
                    <li>Ne 10:00 - 22:00</li>
                </ul>
            </div>
            <!-- Social & Newsletter -->
            <div class="col-md-3 col-10 offset-1 offset-md-0" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600">
                <h6 class="text-uppercase  text-secondary">Sociálne Siete</h6>
                <div class="d-flex gap-3 mt-3 mb-4">
                    <a href="#" class="text-light fs-4"><i class="bi bi-facebook  text-secondary"></i></a>
                    <a href="#" class="text-light fs-4"><i class="bi bi-instagram text-secondary"></i></a>
                </div>
                <h6 class="text-uppercase text-secondary">Odoberať Newsletter</h6>
                <form action="https://pubujoza.ecomailapp.cz/public/subscribe/2/2bb287d15897fe2f9d89c882af9a3a8b" method="POST" class="newsletter-form">
                    <div class="mb-3">
                        <input
                            type="email"
                            name="email"
                            class="form-control form-control-lg rounded-pill"
                            placeholder="Email"
                            required
                        >
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg rounded-pill w-100">Odoberať</button>
                </form>
            </div>
        </div>

        <!-- Footer bottom -->
        <div class="mt-5 pt-4 d-flex border-top border-secondary text-center justify-content-center" >
            <p class=" text-center text-md-start text-secondary small" >
                © {{ date('Y') }} Pub u Joža. Všetky práva vyhradené. Vytvorilo <a class="text-decoration-none " href="https://www.byteminds.sk" target="_blank" style="font-family: Montserrat; color: #00A6E3">Byteminds</a> .
            </p>

        </div>
    </div>
</footer>

<style>
    .text-gold { color: #D6C796; }
    .rounded-pill-start { border-top-left-radius: 50rem; border-bottom-left-radius: 50rem; }
    .rounded-pill-end { border-top-right-radius: 50rem; border-bottom-right-radius: 50rem; }
</style>
