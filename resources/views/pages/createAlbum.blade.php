@extends('template.main')
@section('content')
    {{-- form with nom auteur photo file --}}
    <section class="container p-5 mb-5">
        <form action="/albums" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Album Name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
              <label>Author</label>
              <input type="text" class="form-control" name="author">
            </div>
            <div class="form-group">
              <label>Cover Photo</label>
              <input type="file" class="form-control" name="src">
            </div>
            <button type="submit" class="btn btn-primary">Add an album</button>
          </form>
          <a href="/" class="btn btn-dark my-2">go back</a>
    </section>
@endsection