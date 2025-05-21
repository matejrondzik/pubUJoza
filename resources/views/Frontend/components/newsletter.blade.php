<section class="newsletter-section py-5 woodBG">
    <div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <div class="row g-0 align-items-center">
            <!-- Left image -->
            <div class="col-md-4 offset-md-1">
                <img src="{{ asset('images/newsletter-img.jpg') }}" alt="Newsletter" class="img-fluid w-100 h-100 object-fit-cover">
            </div>

            <!-- Right form -->
            <div class="col-md-6">
                <div class="newsletter-card bg-white p-5">
                    <h2 class="newsletter-title mb-3" style="font-family: 'Lobster', cursive;">Odobera<em>j</em> Newsletter</h2>
                    <p class="mb-4 text-uppercase ">Daj odber a mi ti pošleme každý týždeň nové menu!</p>

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
        </div>
    </div>
</section>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif
