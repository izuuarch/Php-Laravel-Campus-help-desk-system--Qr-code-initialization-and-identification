@include('userpartials/header')
@include('userpartials/navbar')
<div class="row">
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Successful api requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">233</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Failed api requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">23</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="col-md-4">
    <div class="card">
            <div class="card-body">
          <div class="form-group">
            <label for="">apikey for you</label>
            <input type="text" name="" value="{{$user->apikey}}" class="form-control" readonly>
            <button class="btn btn-success text-dark">copy</button>
          </div>
        </div>
    </div>
</div>
@include('userpartials/scripts')
@include('userpartials/footer')