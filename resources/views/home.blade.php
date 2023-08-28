@extends('layout')
@section('title','Email Composer App')
@section('content')

 <section>
@if (session()->has('success'))
            <div class="alert alert-success m-2">
                {{ session('success') }}
            </div>
        @endif
   
   <div class="container-lg">
     <div class="row justify-content-end">
       <div class="col-8-sm text-end">
        <span >
    <a href="{{ route('JobApplication.create') }}" class="btn btn-success m-2  ">Add a Query Email</a>
    <a href="/delete" class="btn btn-danger ">Delete all Query Email</a> 
           </span>

       </div>
     </div>
     <div class="row justify-content-center text-center mt-4">
       <div class="col-8-md">
         <div class="card p-2">
           <div class="card-title">
             <h1 class="display-2">
                    Querying Today
             </h1>

           </div>
           
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-striped">
                  <th>
                    Name
                  </th>
                  <th>
                    Position
                  </th>
                   <th>
                    Company
                  </th>
                   <th>
                    Receiver Email
                  </th>
                  <th>
                    Sender Email
                  </th>
                   <th>
                   
                  </th>
                  <th>
                   
                  </th>
                 @forelse($JobApplications as $JobApplication) 
                  <tr>
                 <td>
                   {{ $JobApplication->name }}
                 </td> 
                                  <td>
                   {{ $JobApplication->position}}
                 </td>  
                                  <td>
                   {{ $JobApplication->company}}
                 </td>  
                     <td>
                   {{ $JobApplication->receiver}}
                 </td>  
                                  <td>
                   {{ $JobApplication->sender}}
                 </td> 
                                          <td>
                <a href="{{ route('JobApplication.edit',[$JobApplication]) }}" class="btn btn-primary">edit</a>
                 </td> 
                 <td>
                   <form action="{{ route('JobApplication.destroy', $JobApplication) }}" method="post">
                     @csrf
                     @method('delete')
                     <input class="btn btn-danger" type="submit" value="Delete">
                   </form>
                 </td>

                  </tr>
                  
           @empty
       <tr>

         <td colspan="4">
                         <p>No users</p>
                 </td>
                  
       </tr>

                  @endforelse
              </table>
             </div>
           </div>
         </div>
       </div>
    
     </div>
   </div>
   
 </section> 

@endsection


 
  
