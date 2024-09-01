 @extends('layouts.admin_layout')
 @section('main_content')
     <div class="col-12">
         <div class="d-flex justify-content-between py-2">
             <h5 class="text-dark fw-bold"> All Resturants</h5>
             <a href="{{ route('addResturantsView') }}"class="btn btn-success btn-xl" style="margin-right: em;"><i
                     class="bi bi-plus-circle"></i>
                 Add New
             </a>
         </div>
         <!-- <h4>Product Details</h4> -->
         <!-- <button class="btn btn-primary btn-xl"><i class="bi bi-plus-circle"></i> Add new product</button> -->
         <table class="table cart-table text-dark">
             <thead>
                 <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Resturant</th>
                     <th scope="col">Banner Img</th>
                     <th scope="col">Name</th>
                     <th scope="col">Description</th>
                     <th scope="col">Opening time</th>
                     <th scope="col">Closing time</th>
                     <th scope="col">Status</th>
                     <th scope="col">Action</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($resturants as $rest)
                     @php
                         $index = ($resturants->currentPage() - 1) * $resturants->perPage() + $loop->iteration;
                     @endphp

                     <tr>
                         <td>{{ $index }}</td>
                         <td><img class="mmm" src="all_images/{{ $rest->image }}" alt="Greek salad"></td>
                         <td><img class="mmm" src="all_images/{{ $rest->resturant_banner_image }}" alt="Greek salad">
                         </td>
                         <td>{{ $rest->name }}</td>
                         <td><span>{{ $rest->description }}</span></td>

                         <td>{{ \Carbon\Carbon::parse($rest->opening_time)->format('g:i A') }}</span></td>
                         <td>{{ \Carbon\Carbon::parse($rest->closing_time)->format('g:i A') }}</td>
                         <td>
                             <span
                                 class="@if ($rest->status == false) {{ 'text-danger' }} @else {{ 'text-success' }} @endif fw-bolder">
                                 @if ($rest->status == false)
                                     {{ 'Closed Now' }}
                                 @else
                                     {{ 'Open Now' }}
                                 @endif
                             </span>
                         </td>
                         <td>
                             <a href="admin/{{ $rest->id }}/edit_resturant">
                                 <button class="btn btn-dark btn-xl"><i class="bi bi-pencil-square"></i>
                                 </button>
                             </a>
                             <a href="admin/{{ $rest->id }}/delete"
                                 onClick= "return confirm ('Are you sure want to delete ?')">
                                 <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                             </a>
                         </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
         {{ $resturants->links() }}
     </div>
 @endsection
