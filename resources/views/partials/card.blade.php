<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ $movie['image']}}" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">{{$movie['original_title']}}</p>
      
        @for($i=0; $i<floor($movie['vote']/2); $i++)
            <i class='fa-solid fa-star text-gold'></i>
        @endfor
        @for($i=0; $i<5-floor($movie['vote']/2); $i++)
            <i class='fa-regular fa-star text-gold'></i>
        @endfor
    </div>
  </div>