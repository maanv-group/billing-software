@extends('master.misc')

@section('page-title', 'Payments')
@section('page-content')
    <header>
        @includeIf('components.basenav')
    </header>
    <main id="miscelleneous">
        <section class="error_content">
            <div class="row m-0 g-0 justify-content-center">
                <div class="col-xxl-8 col-xl-9 col-md-10 col-12">
                    @if ($message = Session::get('error'))
                        {{ $message }}
                    @endif
                    {!! Session::forget('error') !!}
                    @if ($message = Session::get('success'))
                        {{ $message }}
                    @endif
                    {!! Session::forget('success') !!}
                    <div class="panel">
                        <form action="{{ route('payment') }}" method="post">
                            @csrf
                            <script src="https://checkout.razorpay.com/v1/checkout.js" data-amount="1000" data-key="{!! getenv('RAZORPAY_KEY') !!}"
                                data-currency="INR" data-buttontext="Pay Amount" data-name="Techsolutionstuff"
                                data-image="{{ asset('/assets/media/logos/logo-white.png') }}" data-description="Payment" data-prefill.name="name"
                                data-prefill.email="email" data-theme.color="#5bbb7b"></script>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        @includeIf('components.footer')
    </footer>
@endsection
