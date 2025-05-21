@props([
    'title' => 'Vitajte u nás',
    'subtitle' => 'Objavte chute, ktoré si zamilujete',
    'ctaText' => 'Rezervovať teraz',
    'ctaLink' => '#'
])
<header class="hero-header position-relative text-white" style="background: url('{{ asset('images/bg.png') }}') no-repeat center center; background-size: cover; height: 107vh;">
    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6);"></div>



    <div class="container position-relative h-100 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000">
        <!-- Subtitle -->
        <small class="text-uppercase text-light" style="letter-spacing:0.2em;">REŠTAURÁCIA</small>
        <!-- Main Title -->
        <h1 class="display-1 fw-bold mb-3 lobster" style="font-family: 'Switzer', sans-serif;">Pub u Joža</h1>
        <!-- Address -->
        <p class=" text-uppercase mb-1 headerPodnadpis" style="letter-spacing:0.1em;">ANTONA BERNOLÁKA 2137/17</p>
        <p class=" text-uppercase mb-5 headerPodnadpis" style="letter-spacing:0.1em;">ŽILINA – BULVÁR</p>

        <!-- Scroll Indicator -->
        <a href="#denne-menu" class="iconMouse  scroll-down text-white text-decoration-none position-absolute d-flex flex-column align-items-center">
            <i class=" bi bi-mouse" style="font-size:2.5rem;"></i>
            <i class=" bi bi-chevron-compact-down" style="font-size:1.5rem;"></i>
        </a>
    </div>

    <div class="torn-edge"></div>
</header>
