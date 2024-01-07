@extends('layouts.app1')
@section('title','Course Page Form')

@section('content')

 <div class="container mt-4">
     <h1>Course Page</h1>
     <hr width="650">
     <h2>Kurslar</h2>

     <div class="col-md-12">
        <p>Kurslar Burada </p>
         <div align="right">
          <a href="{{route('courseInsert')}}"><button class="btn btn-success">Ekle</button></a> 
         </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Must</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($course as $key)
    
            <tr>
            <th scope="row">{{$key->id}}</th>
            <td>{{$key->course_title}}</td>
            <td>{{$key->course_content}}</td>
            <td>{{$key->course_must}}</td>
            <td><a href="{{route('courseUpdate',['id'=>$key->id])}}">
                   <button class="btn btn-warning">Düzenle</button>
            </a>
            <a href="{{route('courseDelete',['id'=>$key->id])}}">
                   <button class="btn btn-danger">Sil</button>
            </a></td></td>
            </tr>


    @endforeach
  </tbody>
</table>













    </div>
</div>


@endsection
    