@include('userpartials/header')
@include('userpartials/navbar')
<!-- Begin Page Content -->

<div class="mt-5 col-md-10">
<div class="card-header bg-dark text-white">
  <h6>Fast Track Issues Here</h6>
</div>
<form action="{{ url('user/searchtrackissue') }}" method="POST">
             @csrf
             <div class="form-group mt-2">
               <input type="text" class="form-control" name="trackid" placeholder="Track Your Issue" required="Please place a trackid">
           </div>
            <button class="btn btn-secondary btn-block" type="submit">Track</button>
            </form>
</div>
<div>
<div class="row">
  @foreach($fastrackissues as $track)
  <div class="mt-5 col-md-4">
<div class="card">
<div class="card-header bg-dark text-white">
  <h6>{{$track->title_row}}</h6>
</div>
<div class="card-body">
  @if($track->resolved_status == "1")
  <img src='https://chart.googleapis.com/chart?cht=qr&chl=The%20issue%20have%20been%20resolved%20by%20the%20administrator&chs=180x180&choe=UTF-8&chld=L|2' rel='nofollow' alt='qr code'><a href='https://www.qr-code-generator.com' border='0' style='cursor:default'  rel='nofollow'></a>
            @else
            <img src='https://chart.googleapis.com/chart?cht=qr&chl=The%20issue%20have%20not%20been%20resolved%20yet&chs=180x180&choe=UTF-8&chld=L|2' rel='nofollow' alt='qr code'><a href='https://www.qr-code-generator.com' border='0' style='cursor:default'  rel='nofollow'></a>
            @endif
            <span class="badge bg-danger text-white">Strictly for desktop users</span>
        </div>
</div>
</div>
  @endforeach
</div>
</div>
  <!-- Content Row -->
@include('userpartials/scripts')
@include('userpartials/footer')