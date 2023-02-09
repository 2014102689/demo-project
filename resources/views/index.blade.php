<h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>

@foreach ($coffee_var as $list)
    <h3>{{ $list['flavor'] }}</h3>
    <p>{{ $list['desc'] }}</p>
@endforeach

{{-- <button>{{ url('products') }}</button> --}}