@include('adminpartials/header')
@include('adminpartials/navbar')
@include('messages')
   @if (session('titlefield'))
	<div class="alert alert-success">{{ session('titlefield') }}</div>
	@endif
  @if (session('shfield'))
	<div class="alert alert-success">{{ session('shfield') }}</div>
	@endif
<div class="row">
@forelse($issues as $issue)
<div class="col-md-4">
    <div class="card">
    
        <img class="card-img-top" src="{{ asset('/uploads/'.$issue['image_row']) }}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mb-3">
            {{ $issue->title_row; }}
            </h4>
            <p class="card-text">
            {{ $issue->shnote_db; }}
            </p>
            <a href="issues/{{ $issue->trackid; }}" class="btn btn-success">View</a>
            <form action="deleteissue/{{ $issue->id; }}" method="POST">
             @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>
@empty
<div class="col-md-4">
    <div class="card">
            <div class="card-body">
            <p class="card-text">
              You Dont Have any issues yet
            </p>
        </div>
    </div>
</div>
@endforelse
  <!-- Content Row -->
</div>
@include('adminpartials/scripts')
@include('adminpartials/footer')