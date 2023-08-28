@extends('layout')
@section('title','Email Composer')
@section('content')


<section>
    @if ($errors->any())
    <div class="alert alert-danger m-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="list-group-item">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="container-lg">
    <div class="row justify-content-center text-center">
      <div class="col-8-md">
        <div class="card p-2">
          <div class="card-title">
            <h3 class="display-5">
              Edit Job Application
            </h3>
          </div>
          <div class="card-body">
            <form action=" {{ route('JobApplication.update',$JobApplication) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('put')
        <div class="form-control my-2">
            <label for="name" class="form-label">Name</label>
        <input class="form-control my-2" type="text"  name="name" placeholder="" value="{{$JobApplication->name }}">
        </div>
        
<div class="form-control my-2">
  <label for="position" class="form-label">Position</label>  
   <input type="text" class="form-control my-2" value="{{ $JobApplication->position }}" name= "position" placeholder= "">
</div>

<div class="form-control my-2">
  <label for="company" class="form-label">Company</label>  
   <input type="text" class="form-control my-2" value="{{ $JobApplication->company }}" name= "company" placeholder= "">
</div>

<div class="form-control my-2">
  <label for="receiver" class="form-label">Receiver Email</label>  
   <input type="text" class="form-control my-2" value="{{ $JobApplication->receiver }}" name= "receiver" placeholder= "">
</div>

  <input type="hidden" class="form-control my-2" name= "sender" value="cleinduquez11@gmail.com">


<div >
  <input  type="submit" class=" form-control btn btn-success my-2 " value="add">
</div>

      </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection