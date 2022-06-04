@include('adminpartials/header')
@include('adminpartials/navbar')
<div class="row">
@foreach($unresolved as $unresolved)
<div class="col-md-4">
    <div class="card">
    
        <img class="card-img-top" src="{{ asset('/uploads/'.$unresolved['image_row']) }}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mb-3">
            {{ $unresolved->title_row; }}
            </h4>
            <p class="card-text">
            {{ $unresolved->shnote_db; }}
            </p>
            <a href="/admin/issues/{{ $unresolved->trackid; }}" class="btn btn-success btn-block">View</a>
        </div>
    </div>
</div>

@endforeach
  <!-- Content Row -->
</div>
@include('adminpartials/scripts')
@include('adminpartials/footer')