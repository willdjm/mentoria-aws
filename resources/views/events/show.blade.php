@extends('layouts.main')

@section('title', $event->title)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $event->title }}</h1>
        <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
        <h3>O evento conta com:</h3>
        <ul id="items-list">
          @foreach($event->items as $item)
          <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span></li>
        @endforeach
 
      </ul>
    <td>
   <a href="/events/edit/{{ $event->id }}" class="btn btn-outline-warning edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
   <form action="/events/{{ $event->id }}" method="POST">
    @csrf
    @method('DELETE')
   <button type="submit" class="btn btn-outline-warning delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
   </form>
   </td>
      </div>
      <div class="col-md-12" id="description-container">
        <h3>Sobre o evento:</h3>
        <p class="event-description">{{ $event->description }}</p>
      </div>
    </div>
  </div>

@endsection