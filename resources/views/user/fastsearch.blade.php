@include('userpartials/header')
@include('userpartials/navbar')
<!-- Begin Page Content -->
            @forelse($fastsearchissue as $fastsearchissue)
            <div class="d-flex justify-content-center">
<div class="col-md-4 mt-2">
<div class="card-header bg-dark text-white">
  <h6>{{$fastsearchissue->title_row}}</h6>
</div>
    <div class="card">
            <div class="card-body">
            @if($fastsearchissue->resolved_status == "1")
            <p class="card-text">The issue Have been Resolved By the administrator</p>
            @else
            <p class="card-text">The issue Have not been Resolved By the administrator</p>
             @endif
        </div>
    </div>
</div>
            </div>
@empty
<div class="mt-5">
<div class="col-md-12">
    <div class="card">
            <div class="card-body">
            <p class="card-text">
              Nothing To show
            </p>
        </div>
    </div>
</div>
</div>
@endforelse
  <!-- Content Row -->
  @include('userpartials/scripts')
@include('userpartials/footer')