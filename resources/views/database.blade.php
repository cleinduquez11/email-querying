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

           </span>
           </span>

       </div>
     </div>
     <div class="row justify-content-center text-center mt-4">
       <div class="col-8-md">
         <div class="card p-2">
           <div class="card-title">
             <h1 class="display-2">
                    DATABASE
             </h1>

           </div>
           
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-striped">
               <th>
                    Timestamp
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    <!-- Position -->
                  </th>
                   <th>
                    <!-- Company -->
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
                   {{ $JobApplication->created_at }}
                 </td> 
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
             
                 </td> 
                 <td>
                 
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


 
  
