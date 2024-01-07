@extends('layouts.app1')
@section('title','Course Page Form')

@section('content')

 <div class="container mt-4">
     <h2>Kurs Ekle</h2>
    @if(session()->has('success'))
     <div class="alert alert-success">
            {{session('success')}}
     </div>
     @endif
     @if(session()->has('error'))
     <div class="alert alert-danger">
            {{session('error')}}
     </div>
     @endif
     <hr width="650">

        @if($errors->any())
               <ul>
                    @foreach($errors->all() as $error)
                       <li>{{$error}}</li>

                    @endforeach
               </ul>      
        @endif        

        <!-- {{$errors->first()}} -->
        <!-- <p>
              @if($errors->has('course_title'))
                <b>Kurs Title Boş</b>
              @endif 
        </p> -->
     <div class="col-md-6 mt-4">
        <form method="post" action="{{route('courseInsertPost')}}" enctype="multipart/form-data">
            @CSRF
            <div class="form-group">
            <input type="text" class="form-control" name  ='    course_title' value="{{old('course_title')}}" placeholder="Title">
            </div><br>

            <div class="form-group">
            <input type="text" class="form-control" name='          course_content'value="{{old('course_content')}}"  placeholder="Content">
            </div><br>

            <div class="form-group">
            <input type="text" class="form-control" name='          course_must' value="{{old('course_must')}}"   placeholder="must">
            </div><br>

           
    
    
            <input type="submit" value="Kurs Ekle" class="btn btn-primary">



        </form>
    </div>
</div>


@endsection
    