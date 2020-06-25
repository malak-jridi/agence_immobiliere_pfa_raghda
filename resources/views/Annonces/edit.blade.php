@extends('layouts.app')

@section('name_bien', 'Annonce Edit '.$Annonce->name_bien)

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
      <div class="card-head bg-dark">
      <a href="{{route('annonces.index')}}"><button class="btn btn-dark pull-right">Back</button></a>
    <h1 style="font-family:'Times New Roman', Times, serif; font-weight:bolder; font-size:20px; text-transform:uppercase; color:white; text-align:center"><b style="color:red">edit </b> {{ $Annonce->name_bien }}</h1><hr>
      </div>
      <div class="card-body">

    <form method="POST" action="{{ route('annonces.update', $Annonce->id_ann) }}" enctype="multipart/form-data">
     @csrf
     @method('PATCH') 

     <div class="form-row">
     <div class="col-md-6">
         <label for="id_ann">Id </label>
         <input type="text" name="id_ann" 
                value="{{$Annonce->id_ann }}" class="form-control" id="id_ann">
               </div>
       <div class="col-md-6">
         <label for="name_bien">Annonce name</label>
         <input type="text" name="name_bien" 
                value="{{$Annonce->name_bien }}" class="form-control" id="name_bien">
               </div>
               <div class="col-md-6">  
                 <label for="caracterestique">caracterestique </label>
                 <input type="text" name="caracterestique" 
                 value="{{$Annonce->caracterestique }}" class="form-control" id="caracterestique">
         </div>
       </div>

     <div class="form-row">
      <div class="col-md-6"> 
            <div class="form-group">
         <label for="Description"> Annonce Description</label>
         <textarea name="Description" class="form-control" id="Description" rows="3">{{$Annonce->Description}}</textarea>
     </div>
       <div class="col-md-6"> 
       <label for="price"> Price</label>
       <input type="text" name="price" 
              value="{{ $Annonce->price }}" class="form-control" id="price">
   </div>
</div>
    
     <div class="form-group">
         <label for="image">Annonce Image</label>
          <input type="hidden"  name="image" value="{{$Annonce->image}}">
         <input type="file" name="image" 
                class="form-control" id="image">
                <p><img src="{{asset('images/' . $Annonce->image) }}" width="80px" height="50" alt=""></p>
     </div>
     <div class="col-md-6"> 
       <label for="date_an"> Date Annonce</label>
       <input type="text" name="date_an" 
              value="{{ $Annonce->date_an }}" class="form-control" id="date_an">
   </div>
   <div class="col-md-6"> 
       <label for="type_an"> Type Annonce</label>
       <input type="text" name="type_an" 
              value="{{ $Annonce->type_an }}" class="form-control" id="type_an">
   </div>
   <div class="col-md-6"> 
       <label for="catégorie"> catégorie</label>
       <input type="text" name="catégorie" 
              value="{{ $Annonce->catégorie }}" class="form-control" id="catégorie">
   </div>

   <div class="col-md-6"> 
       <label for="visualisation"> Visualisation</label>
       <input type="text" name="visualisation" 
              value="{{ $Annonce->visualisation }}" class="form-control" id="visualisation">
   </div>
   <div class="col-md-6">
         <label for="id_prop">Id prop</label>
         <input type="text" name="id_prop" 
                value="{{$Annonce->id_prop }}" class="form-control" id="id_prop">
               </div>
        
        <button type="submit" class="btn btn-dark">Update Annonce</button>
    </form>
</div>
</div>
@endsection