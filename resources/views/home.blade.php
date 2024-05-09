
@extends('layout.main')

@section('content')
<main>
    <div class="container">
        <div class="product">
            <img class="visible" src="/img/1.webp" alt="productMainImage">
            <img src="/img/1b.webp" alt="">
            <span class="heart d-flex ">&hearts;</span>
            <span class="discount d-flex"></span>
            <span v-for="(badge, index) in productbadges" key="index" class="eco d-flex"></span>
            <p></p>
            <h3></h3>
            <span class="prezzo">14,99 &euro;</span>
            <span class="overline"> &euro;</span>
        </div>

        <div class="product">
            <img class="visible" src="/img/2.webp" alt="productMainImage">
            <img src="/img/2b.webp" alt="">
            <span class="heart d-flex ">&hearts;</span>
            <span class="discount d-flex"></span>
            <span v-for="(badge, index) in productbadges" :key="index" class="eco d-flex"></span>
            <p></p>
            <h3></h3>
            <span class="prezzo">14,99 &euro;</span>
            <span class="overline"> &euro;</span>
        </div>

        <div class="product">
            <img class="visible" src="/img/3.webp" alt="productMainImage">
            <img src="/img/3b.webp" alt="">
            <span class="heart d-flex ">&hearts;</span>
            <span class="discount d-flex"></span>
            <span v-for="(badge, index) in productbadges" :key="index" class="eco d-flex"></span>
            <p></p>
            <h3></h3>
            <span class="prezzo">14,99 &euro;</span>
            <span class="overline"> &euro;</span>
        </div>

        <div class="product">
            <img class="visible" src="/img/4.webp" alt="productMainImage">
            <img src="/img/4b.webp" alt="">
            <span class="heart d-flex ">&hearts;</span>
            <span class="discount d-flex"></span>
            <span v-for="(badge, index) in productbadges" :key="index" class="eco d-flex"></span>
            <p></p>
            <h3></h3>
            <span class="prezzo">14,99 &euro;</span>
            <span class="overline"> &euro;</span>
        </div>

        <div class="product">
            <img class="visible" src="/img/5.webp" alt="productMainImage">
            <img src="/img/5b.webp" alt="">
            <span class="heart d-flex ">&hearts;</span>
            <span class="discount d-flex"></span>
            <span v-for="(badge, index) in productbadges" :key="index" class="eco d-flex"></span>
            <p></p>
            <h3></h3>
            <span class="prezzo">14,99 &euro;</span>
            <span class="overline"> &euro;</span>
        </div>

        <div class="product">
            <img class="visible" src="/img/6.webp" alt="productMainImage">
            <img src="/img/6b.webp" alt="">
            <span class="heart d-flex ">&hearts;</span>
            <span class="discount d-flex"></span>
            <span v-for="(badge, index) in productbadges" :key="index" class="eco d-flex"></span>
            <p></p>
            <h3></h3>
            <span class="prezzo">14,99 &euro;</span>
            <span class="overline"> &euro;</span>
        </div>
    </div>
</main>
@endsection
