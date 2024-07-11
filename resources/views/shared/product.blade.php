<div class="img-product">
    <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="Img-{{ $product['id'] }}">
    <div class="heart @if($product['isInFavorites']) heart-favourite @endif"><i class="fa-solid fa-heart"></i></div>
</div>
<p>{{$product['brand']}}</p>
<p class="text-uppercase fw-bold">{{$product['name']}}</p>
<span class="new-price"></span>
<span class="price">{{$product['price']}}</span>