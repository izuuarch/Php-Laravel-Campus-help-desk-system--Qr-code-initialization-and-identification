@include('userpartials/header')
@include('userpartials/navbar')
<!-- Begin Page Content -->

<div class="container">
   <h1>Create a problem solving question</h1>
   @include('messages')
   @if (session('titlefield'))
	<div class="alert alert-success">{{ session('titlefield') }}</div>
	@endif
  @if (session('shfield'))
	<div class="alert alert-success">{{ session('shfield') }}</div>
	@endif
   <div class="row p-4">
       <div class="col-md-10">
           <!-- <form action="/user/question" method="POST" enctype="multipart/form-data"> -->
           <form action="{{ route('question') }}" method="POST" enctype="multipart/form-data">
             @csrf
           <div class="form-group">
               <label for="title">Title</label>
               <input type="text" class="form-control" name="title" id="title" placeholder="title">
           </div>

            <div class="form-group">
                    <label for="file">File Upload</label>
                    <input type="file" class="form-control" id="file" name="uploadedFile">
                </div>

           <div>
               <label for="description">Short Note on Your request</label>
               <textarea name="shortnote" id="shnote" class="form-control" placeholder="description" rows="10"></textarea>
           </div>
           <div class="form-group">
           <button class="btn btn-outline-success btn-lg" type="submit">create post</button>
                </div>
           </form>
       </div>
   </div>
</div>
  <!-- Content Row -->
@include('userpartials/scripts')
@include('userpartials/footer')