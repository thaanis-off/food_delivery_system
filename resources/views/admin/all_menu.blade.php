   @extends('layouts.admin_layout')
   @section('main_content')
       <div class="col-12">
           <div class="d-flex justify-content-between py-2">
               <h5 class="text-dark fw-bold"> Food Menu</h5>
               <a href="{{ route('addMenuview') }}" class="btn btn-success btn-xl" style="margin-right: 4em;"><i
                       class="bi bi-plus-circle"></i>
                   New Item</a>
           </div>
           <!-- <h4>Product Details</h4> -->
           <!-- <button class="btn btn-primary btn-xl"><i class="bi bi-plus-circle"></i> Add new product</button> -->
           <table class="table cart-table text-dark">
               <thead>
                   <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Items</th>
                       <th scope="col">Name</th>
                       <th scope="col">Description</th>
                       <th scope="col">MRP</th>
                       <th scope="col">Selling Price</th>
                       <th scope="col">Is top dish</th>
                       <th scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>

                   @foreach ($allFoods as $food)
                       @php
                           $foods = ($allFoods->currentPage() - 1) * $allFoods->perPage() + $loop->iteration;
                       @endphp
                       <tr>
                           <td>{{ $foods }}</td>
                           <td><img class="admin-index-img" src="{{ asset('food_menu_images/' . $food->image) }}"
                                   alt="{{ $food->name }}">
                           </td>
                           <td>{{ $food->name }}</td>
                           <td>{{ $food->description }}</td>
                           <td><span>LKR </span>{{ $food->mrp }}<span>.00</span></td>
                           <td><span>LKR </span>{{ $food->selling_price }}<span>.00</span></td>
                           <td>
                               <div class="form-check mb-3">
                                   <input class="form-check-input" name="top_dishes" type="checkbox" value="1"
                                       @if (old('top_dishes', $food->top_dishes) == '1') checked @endif id="flexCheckDefault" disabled>
                                   <label class="form-check-label" for="flexCheckDefault" name="top_dishes">

                                   </label>
                               </div>
                           </td>
                           <td>
                               <a href="admin/{{ $food->id }}/edit_menu"> <button class="btn btn-dark btn-xl"><i
                                           class="bi bi-pencil-square"></i></button></a>
                               <a href="admin/{{ $food->id }}/deleteFood"
                                   onClick= "return confirm ('Are you sure want to delete ?')"> <button
                                       class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button></a>
                           </td>
                       </tr>
                   @endforeach
               </tbody>
           </table>
           {{ $allFoods->links() }}
       </div>
   @endsection
