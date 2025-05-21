<section id="catering-oslavy" class="catering-section py-5 position-relative">
    <div class="container position-relative" style="z-index:2;" >
        <!-- Section Title -->
        <div class="container position-relative text-white  " data-aos="fade-down" data-aos-duration="1000">
            <div class="divider-lines mb-4 d-flex align-items-center ">

                <h2 class=" mx-3 text-dark" style="font-family:'Lobster', cursive; color:#D6C796;">Catering a
                    Oslavy</h2>

            </div>
        </div>

        <!-- Subtitle -->
        <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="1000">
            <p class="mb-1 fst-italic">CHRUMKAVÉ PEČENÉ PRASIATKO 10KG–25KG</p>
            <p class="mb-1 fst-italic">OSLAVY, SMÚTOČNÉ POSEDENIA, FIREMNÉ VEČIERKY</p>
            <p class="fst-italic">CATERINGOVÉ SLUŽBY</p>
        </div>

        <!-- Image Gallery -->
        <div class="row g-3 mb-5 catering-gallery" data-aos="fade-down" data-aos-duration="1000">
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-6 col-md-3 gallery-item">
                    <div class="gallery-inner">
                        <img src="{{ asset("images/catering/{$i}.jpg") }}" alt="Catering {{ $i }}" class="img-fluid">
                    </div>
                </div>
            @endfor
        </div>

        <!-- Call to Action -->
        <div class="text-center position-relative catering-cta" style="z-index:2;" data-aos="fade-up" data-aos-duration="1000">
            <p class="text-uppercase text-muted mb-2" style="letter-spacing:0.1em;">Napíšte nám pre cenovú ponuku</p>
            <a href="#contact" class="btn btn-dark btn-lg rounded-pill px-5 position-relative">
                Napísať <i class="bi bi-arrow-right ms-2"></i>

            </a>
        </div>
    </div>
</section>

<style>
    /* Section background and overlay */
    .catering-section {
        background: url('{{ asset('images/woodBG.jpg') }}') center/cover no-repeat;
    }

    .catering-section::before {
        content: '';
        position: absolute;
        inset: 0;
        z-index: 1;
    }

    .catering-gallery {
        position: relative;
        z-index: 2;
    }

    /* Ensure all gallery items are same aspect ratio */
    .catering-gallery .gallery-item {
        overflow: hidden;
    }

    .catering-gallery .gallery-inner {
        width: 100%;
        aspect-ratio: 3 / 4;
        position: relative;
    }

    .catering-gallery .gallery-inner img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .catering-cta .avatar-icon {
        width: 56px;
        height: 56px;
        border: 3px solid #fff;
        border-radius: 50%;
        position: absolute;
        right: -28px;
        top: 50%;
        transform: translateY(-50%);
        background: #fff;
    }
</style>
