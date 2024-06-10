<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ $movie['image']}}" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">{{$movie['original_title']}}</p>
      <p class="card-text"> {{!!$movie['star']!!}}</p>
    </div>
  </div>