@extends('layouts.app')

@section('name', 'Annonce Crud')

@section('content')
<a href="{{ route('annonces.create') }}" class="btn btn-dark">Create New Annonce</a>

 @if(session()->get('success'))
    <div class="alert alert-success mt-3">
      <h1 style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:20px; text-transform:uppercase; text-align:center">
        {{ session()->get('success') }} 
       </h1> 
    </div>
@endif
@if(session()->get('error'))
    <div class="alert alert-danger mt-3">
      {{ session()->get('error') }}  
    </div>
@endif
<div class="card">
<div class="card-head bg-dark">
  <h1 style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:20px; text-transform:uppercase; color:white; text-align:center">Annonces List </h1><hr>

</div>
    <div class="card-content">
      <div class="card-body">

     
<table class="table table-striped mt-3">
  <thead>
    <tr>
     <th scope="col">Image</th>
      <th scope="col">id <sup>o</sup></th>
      <th scope="col">Name </th>
      <th scope="col">Caracteristique </th>
      <th scope="col"> Description </th>
      <th scope="col">Price</th>
      <th scope="col"> Date</th>
      <th scope="col"> type</th>
      <th scope="col"> catégorie</th>
      <th scope="col"> visualisation</th>
      <th scope="col"> id prop</th>
      <th scope="col">Operation</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   @foreach($annonces as $key => $Annonce)
    <tr>
      <td><img src="{{ asset('images/' .$Annonce->image) }}" alt="" style="width:80px; height:50px"></td>
      <th scope="row">{{ $key+1}}</th>
      <td>{{ $Annonce->name_bien }}</td>
      <td>{{ $Annonce->caracterestique}}</td>
      <td>{{ $Annonce->Description}}</td>
      <td><i class="fa fa-usd"></i> {{ $Annonce->price}}</td>
      <td>{{ $Annonce->date_an }}</td>
      <td>{{ $Annonce->type_an }}</td>
      <td>{{ $Annonce->catégorie }}</td>
      <td>{{ $Annonce->visualisation }}</td>
      <td>{{ $Annonce->id_prop }}</td>


      <td class="table-buttons">
        <a href="{{ route('annonces.show', $Annonce->id_ann) }}" class="btn btn-dark">
          <i class="fa fa-tag"></i>
        </a>
        <a href="{{ route('annonces.edit', $Annonce->id_ann) }}" class="btn btn-info">
          <i class="fa fa-edit" ></i>
        </a>
        <form method="POST" action="{{ route('annonces.destroy', $Annonce->id_ann) }}">
         @csrf
         @method('DELETE')
            <button type="submit" class="btn btn-danger">
              <i class="fa fa-remove"></i>
            </button>
        </form>     
         </td>

    </tr>
  @endforeach
  </tbody>
</table>
</div>
</div>
<div class="card-footer bg-dark">
  {{$annonces->links()}}
  <h1 style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:20px; text-transform:uppercase; color:white; text-align:center"><b>Total Annonces</b> {{$annonces->count()}} </h1>
</div>
</div>
@endsection