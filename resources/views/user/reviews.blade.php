@include('userpartials/header')
@include('userpartials/navbar')
<!-- Begin Page Content -->

<div class="row">
@foreach($reviewissues as $reviewissue)
<div class="col-md-4">
    <div class="card">
    
        <img class="card-img-top" src="{{ asset('/uploads/'.$reviewissue['image_row']) }}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mb-3">
            {{ $reviewissue->title_row; }}
            </h4>
            <p class="card-text">
            {{ $reviewissue->shnote_db; }}
            </p>
            <a href="/user/review/{{ $reviewissue->id; }}" class="btn btn-success btn-block">View solved solution</a>
        </div>
    </div>
</div>
@endforeach
  <!-- Content Row -->
</div>
  <!-- Content Row -->
@include('userpartials/scripts')
@include('userpartials/footer')