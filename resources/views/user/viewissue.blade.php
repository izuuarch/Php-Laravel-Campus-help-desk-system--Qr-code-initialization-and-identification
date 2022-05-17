@include('userpartials/header')
@include('userpartials/navbar')
<!-- Begin Page Content -->

<div class="col-md-4">
    <div class="card">
    
        <img class="card-img-top" src="{{ asset('/uploads/'.$viewissue['image_row']) }}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mb-3">
            {{ $viewissue->title_row; }}
            </h4>
            <p class="card-text">
            {{ $viewissue->shnote_db; }}
            </p>
        </div>
    </div>
</div>
  <!-- Content Row -->
@include('userpartials/scripts')
@include('userpartials/footer')