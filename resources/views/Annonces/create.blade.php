@extends('layouts.app')

@section('title', 'Annonce')

@section('content')
<div class="row">
<div class="col-lg-6 mx-auto">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

    <div class="card">
      <div class="card-content">
        <div class="card-head bg-dark">
          <h1 style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:20px; text-transform:uppercase; color:white; text-align:center">Add New Annonce </h1><hr>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('annonces.store') }}" enctype="multipart/form-data">
            @csrf
               <div class="form-row">
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
               <div class="col-md-6">
                   <label for="id_ann">Id</label>
                   <input type="text" name="id_ann" 
                          value="{{ old('id_ann') }}" class="form-control" id="id_ann">
                         </div>
                 <div class="col-md-6">
                   <label for="name_bien">name_bien</label>
                   <input type="text" name="name_bien" 
                          value="{{ old('name_bien') }}" class="form-control" id="name_bien">
                         </div>
                         <div class="col-md-6">  
                           <label for="caracterestique">caracterestique</label>
                           <input type="text" name="caracterestique" 
                           value="{{ old('caracterestique') }}" class="form-control" id="caracterestique">
                   </div>
                 </div>
                 
               <div class="form-row">
                 <div class="col-md-6"> 
                 <div class="form-group">
                   <label for="Description">Annonce Description</label>
                   <textarea name="Description" class="form-control" id="Description" rows="3">{{ old('Description') }}</textarea>
               </div>
                 <label for="price">Annonce Price</label>
                 <input type="text" name="price" 
                        value="{{ old('price') }}" class="form-control" id="price">
             </div>
             <div class="form-group">
                   <label for="image">Annonce Image</label>
                   <input type="file" name="image" 
                          value="{{ old('image') }}" class="form-control" id="image">
               </div>
             <div class="col-md-6"> 
               <label for="date_an"> Date annonce</label>
                 <input type="text" name="date_an" 
                        value="{{ old('date_an') }}" class="form-control" id="date_an">
           </div>
           <div class="col-md-6"> 
               <label for="type_an"> type annonce</label>
                 <input type="text" name="type_an" 
                        value="{{ old('type_an') }}" class="form-control" id="type_an">
           </div>
           <div class="col-md-6"> 
               <label for="catégorie"> Catégorie annonce</label>
                 <input type="text" name="catégorie" 
                        value="{{ old('catégorie') }}" class="form-control" id="catégorie">
           </div>
           <div class="col-md-6"> 
               <label for="visualisation"> Visualisation annonce</label>
                 <input type="text" name="visualisation" 
                        value="{{ old('visualisation') }}" class="form-control" id="visualisation">
           </div>
         </div>
           
         <div class="col-md-6"> 
               <label for="id_prop"> id propr </label>
                 <input type="text" name="id_prop" 
                        value="{{ old('id_prop') }}" class="form-control" id="id_prop">
           </div>
         </div>
           
              
               <button type="submit" class="btn btn-dark">Create Annonce</button>
           </form>
        </div>
      </div>
    </div>
</div>
</div>
@endsection