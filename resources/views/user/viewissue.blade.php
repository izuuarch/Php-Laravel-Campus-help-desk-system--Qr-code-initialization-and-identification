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
            <form action="{{ url('user/searchtrackissue') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="trackid" class="form-control" value="{{ $viewissue->trackid; }}" readonly>
            </div>
            <div class="form-group">
            <button class="btn btn-secondary btn-block" type="submit">FastTrack</button>
                    </div>
            </form>
          
            
        </div>
    </div>
</div>
  <!-- Content Row -->
@include('userpartials/scripts')
@include('userpartials/footer')