<section class="py-3">
    <nav aria-label="breadcrumb py-3">
        <h1>
            @foreach ($hierarchy as $key => $value)
                @if ($value == 'current')
                {{ $key }}
                @endif
            @endforeach
        </h1>
        <ol class="breadcrumb">
            @foreach ($hierarchy as $key => $value)
                @if ($value == 'current')
                    <li class="breadcrumb-item active" aria-current="page">{{ $key }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ url($value) }}">{{ $key }}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>
</section>
