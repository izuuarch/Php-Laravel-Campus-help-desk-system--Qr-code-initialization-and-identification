@include('adminpartials/header')
@include('adminpartials/navbar')
<!-- Begin Page Content -->
<div class="row">
@forelse($students as $student)
<div class="col-md-4">
    <div class="card">
    
        <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
        <div class="card-body">
           
            <div class="form-group">
                <label for="">FullName</label>
                <input type="text" class="form-control" value="{{ $student->name; }}" readonly>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" value="{{ $student->email; }}" readonly>
            </div>
            <div class="form-group">
                <label for="">Matric/Registration Number</label>
                <input type="text" class="form-control" value="{{ $student->regnumber; }}" readonly>
            </div>
        </div>
    </div>
</div>
@empty
<div class="col-md-4">
    <div class="card">
            <div class="card-body">
            <p class="card-text">
              No Student in these Platform yet
            </p>
        </div>
    </div>
</div>
@endforelse
  <!-- Content Row -->
</div>
@include('adminpartials/scripts')
@include('adminpartials/footer')