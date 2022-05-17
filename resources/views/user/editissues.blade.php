@include('userpartials/header')
@include('userpartials/navbar')
<!-- Begin Page Content -->
<form action="{{ route('question') }}" method="POST" enctype="multipart/form-data">
             @csrf
           <div class="form-group">
               <label for="title">Title</label>
               <input type="text" class="form-control" name="edittitle" id="title" value="{{$editissues['title_row']}}">
           </div>

           <div>
               <label for="description">Short Note on Your request</label>
               <textarea name="shortnote" id="editshnote" class="form-control" rows="10">{{$editissues['shnote_db']}}</textarea>
           </div>
           <div class="form-group">
           <button class="btn btn-outline-success btn-lg" type="submit">Repost</button>
                </div>
           </form>
  <!-- Content Row -->
@include('userpartials/scripts')
@include('userpartials/footer')