@extends('master.misc')

@section('page-title', '404 Error!')
@section('page-content')
    <header>
        @includeIf('components.basenav')
    </header>
    <main id="miscelleneous">
        <section class="error_content">
            <div class="row m-0 g-0 justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-md-10 col-12">
                    <div class="row m-0 align-items-center">
                        <div class="col-md-6 col-12">
                            <img src="{{ asset('assets/media/error.jpg') }}" alt="" class="w-100">
                        </div>
                        <div class="col-md-6 col-12">
                            <h1 class="error_heading">
                                <span>5</span>0<span>3</span>
                            </h1>
                            <h2>
                                Oops! It looks like you're lost.
                            </h2>
                            <p>
                                The page you're looking for isn't available. Try to search again or use the go to.
                            </p>
                            <a href="{{ url('/') }}" class="btn btn-theme-primary-rounded">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        @includeIf('components.footer')
    </footer>
@endsection
