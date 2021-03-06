@include('userpartials/header')
@include('userpartials/navbar')
<!-- Begin Page Content -->
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
            <a href="/user/issues/{{ $issue->id; }}" class="btn btn-secondary">Edit</a>
            <a href="/user/viewissue/{{ $issue->id; }}" class="btn btn-success">View</a>
            <form action="/user/deleteissue/{{ $issue->id; }}" method="POST">
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
@include('userpartials/scripts')
@include('userpartials/footer')