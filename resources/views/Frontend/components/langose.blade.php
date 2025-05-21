@php
    use Illuminate\Support\Facades\File;

    // Načíta prvý obrázok z public/images/langos
    $files = File::files(public_path('images/langos'));
    $image = collect($files)
        ->filter(fn($file) => in_array(strtolower($file->getExtension()), ['jpg','jpeg','png']))
        ->map(fn($file) => asset('images/langos/' . $file->getFilename()))
        ->first();
@endphp

<section id="langose" class="langose-section position-relative">
    <!-- Heading -->
    <div class="container position-relative text-white py-5" data-aos="fade-down" data-aos-duration="1000">
        <div class="divider-lines mb-4 d-flex align-items-center menuHeading">
            <h2 class="mx-3" style="font-family:'Lobster', cursive; color:#D6C796;">ZA Langoše</h2>
        </div>
    </div>

        <div class="my-auto images-row-container d-flex justify-content-center align-items-center overflow-auto py-3  " style="z-index: 3; width: auto">
        <div class="flex-shrink-0 text-center mx-2 " style="z-index:2;" data-aos="fade-right" data-aos-duration="1000">
            <img
                src="{{ $image }}"
                alt="Langoše"
                id="langosImage"
                class="img-fluid"
                style=" cursor: zoom-in;"
                data-img="{{ $image }}"
            >
        </div>
    </div>

    <!-- Tlačidlá pre objednávku -->
    <div class="container position-relative text-center mt-4" style="z-index:2;" data-aos="fade-up"
         data-aos-duration="1000">
        <p class="text-white text-uppercase mb-3">Objednať cez:</p>
        <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
            <a href="https://wolt.com/sk/svk/zilina/restaurant/pub-u-joza" target="_blank"
               class="btn btn-light rounded-pill px-5 py-2 d-flex align-items-center justify-content-between">
                WOLT.COM
                <img src="{{ asset('images/wolt-logo.png') }}" alt="Wolt" class="ms-2" style="height:1.5rem;">
            </a>
            <a href="https://www.bistro.sk/restauracia/pub-u-joza" target="_blank"
               class="btn btn-light rounded-pill px-5 py-2 d-flex align-items-center justify-content-between">
                BISTRO.SK
                <img src="{{ asset('images/bistro-logo.png') }}" alt="Bistro.sk" class="ms-2" style="height:1.5rem;">
            </a>
        </div>
    </div>


</section>

<!-- Zoom Modal pre Langoše -->
<div class="modal fade" id="langosModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                    data-bs-dismiss="modal"></button>
            <img id="langosModalImage"
                 src=""
                 class="d-block mx-auto"
                 style="object-fit: contain; max-height:90vh; width: auto;"
                 alt="Zväčšený obrázok Langošov"/>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const img = document.getElementById('langosImage');
            const modalEl = document.getElementById('langosModal');
            const modalImage = document.getElementById('langosModalImage');
            const modal = new bootstrap.Modal(modalEl);

            img.addEventListener('click', () => {
                // nastavíme správny src a otvoríme modal len pre Langoše
                modalImage.src = img.getAttribute('data-img');
                modal.show();
            });
        });
    </script>
@endpush
