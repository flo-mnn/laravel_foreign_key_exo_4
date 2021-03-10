@extends('template.main')
@section('content')
    {{-- display album with nom auteur photo --}}
    {{-- add a delete button & edit --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <section class="container">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Picture</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($albums as $album)
              <tr>
                <th scope="row">{{$album->id}}</th>
                <td>{{$album->name}}</td>
                <td>{{$album->author}}</td>
                <td><img src="/storage/img/{{$album->photos->src}}" alt="" width="150"></td>
                <td>
                    <form action="/albums/{{$album->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <label for="editPhoto" class="btn btn-primary">new photo</label>
                        <input type="file" id="editPhoto" class="d-none" name="src"><br>
                        <button type="submit" class="btn btn-success">save photo</button>
                    </form>
                </td>
                <td>
                    <form action="/albums/{{$album->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </section>
    
@endsection