@include('userpartials/header')
@include('userpartials/navbar')
<!-- Begin Page Content -->
@include('messages')
   @if (session('titlefield'))
	<div class="alert alert-success">{{ session('titlefield') }}</div>
	@endif
  @if (session('shfield'))
	<div class="alert alert-success">{{ session('shfield') }}</div>
	@endif
<form action="{{ url('user/question/update/'.$editissues->id) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('PUT')
              <div class="form-group">
               <label for="title">Title</label>
               <input type="text" class="form-control" name="title" id="title" value="{{$editissues->title_row;}}">
           </div>

           <div>
               <label for="description">Short Note on Your request</label>
               <textarea name="shortnote" id="shortnote" class="form-control" rows="10">{{$editissues->shnote_db}}</textarea>
           </div>
           <div class="form-group">
           <button class="btn btn-outline-success btn-lg" type="submit">Repost Issue</button>
                </div>
           </form>
  <!-- Content Row -->
@include('userpartials/scripts')
@include('userpartials/footer')