@php
    use Illuminate\Support\Facades\File;

    // Dynamically load all image files from public/images/menu
    $files = File::files(public_path('images/menu'));
    $slides = collect($files)
        ->filter(fn($file) => in_array(strtolower($file->getExtension()), ['jpg','jpeg','png']))
        ->map(fn($file) => asset('images/menu/' . $file->getFilename()))
        ->values();
@endphp

<section id="jedalny-listok" class="menu-section position-relative">


    <!-- Background and overlay -->
    <div class="position-absolute inset-0 menuBG "></div>
    <div class="position-absolute inset-0 bg-dark opacity-50"></div>

    <!-- Heading -->
    <div class="container position-relative text-white py-5 " >
        <div class="divider-lines mb-4 d-flex align-items-center menuHeading">

            <h2 class=" mx-3" style="font-family:'Lobster', cursive; color:#D6C796;">Jedálny Lístok</h2>

        </div>
    </div>

    <!-- Images displayed in a single horizontal scrollable row -->
    <div class="slider-controls position-absolute w-100 d-flex justify-content-between px-4" style="top: 50%; z-index: 4;">
        <button id="prevSlide" class="btn btn-link text-white">
            <i class="bi bi-chevron-left fs-1"></i>
        </button>
        <button id="nextSlide" class="btn btn-link text-white">
            <i class="bi bi-chevron-right fs-1"></i>
        </button>
    </div>
    <div class="my-auto images-row-container d-flex align-items-start flex-nowrap overflow-auto py-3 position-relative mx-auto" style="z-index: 3; width: 70%">
        @foreach($slides as $index => $img)
            <div class="flex-shrink-0 text-center mx-2" style="width: 25vw;">
                <img
                  src="{{ $img }}"
                  alt="Menu {{ $index + 1 }}"
                  class="img-fluid zoomable"
                  style="cursor: zoom-in;"
                  data-img="{{ $img }}"
                  data-index="{{ $index }}"
                >
            </div>
        @endforeach
    </div>



    <!-- Image Zoom Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0 position-relative">
                <!-- Zatváracie tlačidlo -->
                <button type="button"
                        class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal"
                        aria-label="Zatvoriť"
                style="z-index: 5">
                </button>

                <!-- Carousel -->
                <div id="modalCarousel" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        @foreach($slides as $index => $img)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ $img }}"
                                     class="d-block mx-auto img-fluid"
                                     style="object-fit: contain; max-height: 90vh; width: auto;"
                                     alt="Menu {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>

                    <!-- Šípka vľavo -->
                    <button class="carousel-control-prev position-absolute top-50 start-0 translate-middle-y"
                            type="button"
                            data-bs-target="#modalCarousel"
                            data-bs-slide="prev"
                            style="width: 4rem;">
                        <span class="carousel-control-prev-icon white-arrow" aria-hidden="true"></span>
                        <span class="visually-hidden">Predchádzajúci</span>
                    </button>

                    <!-- Šípka vpravo -->
                    <button class="carousel-control-next position-absolute top-50 end-0 translate-middle-y"
                            type="button"
                            data-bs-target="#modalCarousel"
                            data-bs-slide="next"
                            style="width: 4rem;">
                        <span class="carousel-control-next-icon white-arrow" aria-hidden="true"></span>
                        <span class="visually-hidden">Ďalší</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modalEl = document.getElementById('imageModal');
            const modalInstance = new bootstrap.Modal(modalEl);
            const carouselEl = document.getElementById('modalCarousel');
            const carouselInstance = new bootstrap.Carousel(carouselEl, { interval: false });
            document.querySelectorAll('img.zoomable').forEach(img => {
                img.style.cursor = 'zoom-in';
                img.addEventListener('click', () => {
                    const idx = parseInt(img.getAttribute('data-index'), 10);
                    carouselInstance.to(idx);
                    modalInstance.show();
                });
            });

            // Inline slider controls for horizontal scroll
            const sliderContainer = document.querySelector('.images-row-container');
            document.getElementById('prevSlide').addEventListener('click', () => {
                sliderContainer.scrollBy({ left: -sliderContainer.clientWidth * 0.8, behavior: 'smooth' });
            });
            document.getElementById('nextSlide').addEventListener('click', () => {
                sliderContainer.scrollBy({ left: sliderContainer.clientWidth * 0.8, behavior: 'smooth' });
            });
        });
    </script>
@endpush
