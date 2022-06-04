@include('userpartials/header')
@include('userpartials/navbar')
<div class="col-md-5">
    <div class="card">
    
        <img class="card-img-top" src="{{ asset('/uploads/'.$reviewsingle['image_row']) }}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mb-3">
            {{ $reviewsingle->title_row; }}
            </h4>
            <p class="card-text">
            {{ $reviewsingle->shnote_db; }}
            </p>
        </div>
    </div>
</div>
<div class="mt-5 col-md-9">
<div class="card-header bg-dark text-white">
                                    <h6>Solutions</h6>
                                  </div>
</div>
@forelse($solution as $solution)
<div class="col-md-4 mt-2">
    <div class="card">
            <div class="card-body">
            <p class="card-text">
            {{ $solution->solutionnote; }}
            </p>
            <span class="badge bg-danger text-white">resolved</span>
        </div>
    </div>
@empty
<div class="mt-5">
<div class="col-md-4">
    <div class="card">
            <div class="card-body">
            <p class="card-text">
              Nothing yet.
            </p>
        </div>
    </div>
</div>
</div>
@endforelse
@include('userpartials/scripts')
@include('userpartials/footer')