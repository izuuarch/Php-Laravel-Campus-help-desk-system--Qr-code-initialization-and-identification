@include('adminpartials/header')
@include('adminpartials/navbar')
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
        </div>
    </div>
</div>

<div class="mt-5 col-md-10">
<div class="card-header bg-dark text-white">
  <h6>Solve the solutions here</h6>
</div>
@include('messages')
   @if (session('titlefield'))
	<div class="alert alert-success">{{ session('titlefield') }}</div>
	@endif
  @if (session('shfield'))
	<div class="alert alert-success">{{ session('shfield') }}</div>
	@endif
<form action="{{ url('admin/resolveissue') }}" method="POST">
             @csrf
             <input type="hidden" name="issueid" value="{{ $reviewissue->id; }}">
             <div class="form-group mt-2">
             <textarea name="solutionnote" id="solutionnote" class="ckeditor form-control" placeholder="Drop a solution" rows="10"></textarea>
           </div>
            <button class="btn btn-secondary btn-block" type="submit">Drop Solve</button>
            </form>
</div>
@endforeach
  <!-- Content Row -->
</div>
@include('adminpartials/scripts')
@include('adminpartials/footer')