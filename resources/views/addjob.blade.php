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
              Add Job Application
            </h3>
          </div>
          <div class="card-body">
            <form action="{{ route('JobApplication.store')}} " method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('post')
        <div class="form-control my-2">
            <label for="name" class="form-label">Name</label>
        <input class="form-control my-2" type="text"  name="name" placeholder="eg. Your Name" value="{{old('name')}}">
        </div>
        
<div class="form-control my-2">
  <label for="position" class="form-label">Position</label>  
   <input type="text" class="form-control my-2" value="{{ old('position') }}" name= "position" placeholder= "eg. Software Engineer">
</div>

<div class="form-control my-2">
  <label for="company" class="form-label">Company</label>  
   <input type="text" class="form-control my-2" value="{{ old('company') }}" name= "company" placeholder= "eg. Google">
</div>

<div class="form-control my-2">
  <label for="receiver" class="form-label">Receiver Email</label>  
   <input type="text" class="form-control my-2" value="{{ old('receiver') }}" name= "receiver" placeholder= "eg. Your Email">
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