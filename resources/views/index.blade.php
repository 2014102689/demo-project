<h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($product as $item)
    <h3>{{ $item['flavor'] }}</h3>
    <p>{{ $item['desc'] }}</p>
@endforeach