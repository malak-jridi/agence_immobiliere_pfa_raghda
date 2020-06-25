@extends('layouts.app')

@section('name', $Annonce->name_bien)

@section('content')
<div class="card">
    <div class="card-head bg-dark">
    <a href="{{route('annonces.index')}}"><button class="btn btn-dark pull-right">Back</button></a>
  <h1 style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:20px; text-transform:uppercase; color:white; text-align:center">{{ $Annonce->name_bien }}</h1><hr>
    </div>
    <div class="card-body">
        <div class="form-row">
            <label for="" class="col-md-2"><strong> Name:</strong></label>
            <div class="col-md-4">
                <p>{{ $Annonce->name_bien }}</p>
            </div>
            </div>
            <div class="form-row">
            <label for="" class="col-md-2"><strong>caracterestique :</strong></label>
            <div class="col-md-4">
                <p>{{ $Annonce->caracterestique }}</p>
            </div>
        </div>
        <div class="form-row">
            <label for="" class="col-md-2"><strong> Description:</strong></label>
            <div class="col-md-4">
                <p>{{ $Annonce->Description }}</p>
            </div>
            </div>
            <div class="form-row">
            <label for="" class="col-md-2"><strong> Price:</strong></label>
            <div class="col-md-4">
                <p><i class="fa fa-usd"></i> {{ $Annonce->price }}</p>
            </div>
            </div>
        
            <div class="form-row">
            <label for="" class="col-md-2"><strong> date Annonce:</strong></label>
            <div class="col-md-4">
                <p>{{ $Annonce->date_an }}</p>
            </div>
            </div>
            <div class="form-row">
            <label for="" class="col-md-2"><strong>type :</strong></label>
            <div class="col-md-4">
                <p>{{ $Annonce->type_an }}</p>
            </div>
            </div>
            <div class="form-row">
            <label for="" class="col-md-2"><strong>catégorie :</strong></label>
            <div class="col-md-4">
                <p>{{ $Annonce->catégorie }}</p>
            </div>
        </div>
        <div class="form-row">
            <label for="" class="col-md-2"><strong>visualisation :</strong></label>
            <div class="col-md-4">
                <p>{{ $Annonce->visualisation }}</p>
            </div>
        </div>
        <div class="form-row">
            <label for="" class="col-md-2"><strong>id_prop :</strong></label>
            <div class="col-md-4">
                <p>{{ $Annonce->id_prop }}</p>
            </div>
        </div>
        <div class="form-row">
           <label for="" class="col-md-2"><strong> Image:</strong></label>
            <div class="col-md-4">
                <p><img src="{{asset('images/' . $Annonce->image) }}" width="80px" height="50" alt=""></p>
            </div>
            </div>
        
           
    </div>
</div>
@endsection