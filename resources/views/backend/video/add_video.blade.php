@extends('admin.admin_dashboard')
@section('admin')
<div class="card">
    <div class="card-body">
        <div class="row row-cols-1 g-3 row-cols-lg-auto align-items-center">
            <form action="{{route('store.video')}}" method="post">
                @csrf
                <div class="col">
                    <input name="lien" type="text" class="form-control" id="input51" placeholder="Liens de la vidéo">
                 </div>
              
               <div class="col">
                  <button type="submit" class="btn btn-primary px-4">Enrigistrer</button>
               </div>
            </form>
          
        </div><!--end row-->
    </div>
</div>
@endsection