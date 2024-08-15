@extends('admin.admin_dashboard')
@section('admin')
<div class="card">
    <div class="card-body">
        <form action="{{route('store.projet')}}" method="post">
            @csrf
        <div class="row row-cols-1 g-3 row-cols-lg-auto align-items-center">
            
               
                <div class="col">
                    <input name="lien" type="text" class="form-control" id="input51" placeholder="Liens de la vidéo">
                 </div>

                 <div class="col">
                    <input name="evenement" type="text" class="form-control" id="input51" placeholder="Evenement">
                 </div>

                 <div class="col">
                    <input name="auteur" type="text" class="form-control" id="input51" placeholder="Auteur">
                 </div>
                 
              
               <div class="col">
                  <button type="submit" class="btn btn-primary px-4">Enrigistrer</button>
               </div>
           
          
        </div><!--end row-->
    </form>
    </div>
</div>
@endsection