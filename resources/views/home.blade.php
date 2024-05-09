
@extends('layout.main')

@section('content')
<main>
    <div class="container">

        @foreach ($products as $item)
        <div class="product">
            <img class="visible" src="/img/{{ $item['frontImage'] }}" alt="{{ $item['frontImage'] }}">
            <img src="/img/{{ $item['backImage'] }}" alt="{{ $item['backImage'] }}">
            <span class="heart d-flex {{ $item['isInFavorites'] ? 'active' : '' }}">&hearts;</span>
            @if (isset($item['badges']))
            @foreach ($item['badges'] as $badge)
                <span class="discount d-flex">{{ $badge['value'] }}</span>
                <span class="eco d-flex">{{ $badge['value'] }}</span>
                @endforeach
            @endif
            <p>{{ $item['brand'] }}</p>
            <h3>{{ $item['name'] }}</h3>
            <span class="prezzo">{{ $item['price'] }} &euro;</span>
            <span class="overline">{{ $item['price'] }} &euro;</span>
        </div>
        @endforeach
    </div>
</main>
@endsection
