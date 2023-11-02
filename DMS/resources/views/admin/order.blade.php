@extends('admin.layouts.app')

@section('title', 'Orders')

@section('content')
    
<section class="orders">
  <div class="container-fluid pt-4 px-4">
    <div class="text-center rounded p-4" style="background-color: #07509E">
      <div class="row">
        <div class="col-sm mb-2">
          <h3 class="mb-0 text-start">Orders</h3>
        </div>
      </div>
      <div class="table-responsive">
          <table class="table text-center align-middle table-hover mb-3">
              <thead>
                  <tr class="text-white">
                      <th scope="col">No.</th>
                      <th scope="col">Order Number</th>
                      <th scope="col">Sender Name</th>
                      <th scope="col">Receiver Name</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              @if(count($orders) > 0)
                @foreach ($orders as $index => $order)
                  <tbody>
                    <tr class="text-white">
                      <td>{{ $orders->firstItem() + $index }}.</td>
                      <td>{{ $order->order_number }}</td>
                      <td>{{ $order->sender_name }}</td>
                      <td>{{ $order->receiver_name }}</td>
                      <td>{{ $order->order_status }}</td>
                      <td>
                        <a href="{{ route('admin.order.detail', $order->id) }}" class="btn btn-sm" data-bs-toggle="tooltip" title="View Detail"><i class="fa-solid fa-eye" style="background-color: white; padding: 10px; border-radius: 50%; color: green;"></i></a>
                        <a href="{{ route('admin.order.edit', $order->id) }}" class="btn btn-sm" data-bs-toggle="tooltip" title="Edit"><i class="fa-sharp fa-solid fa-pen" style="background-color: white; padding: 10px; border-radius: 50%; color: blue;"></i></a>
                        <a href="#" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $order->id }}"><i class="fa-solid fa-trash" data-bs-toggle="tooltip" title="Delete" style="background-color: white; padding: 10px; border-radius: 50%; color: red;"></i></a>
                        <!-- Delete Modal -->
                        <div class="modal" id="deleteModal{{ $order->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header text-body">
                                <p class="modal-title fs-5 fw-bold" id="exampleModalLabel">Delete</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body text-body">
                                <p class="mb-0">Are you sure you want to delete this record?</p>
                              </div>
                              <div class="modal-footer text-body">
                                <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                                <form action="{{ route('admin.order.destroy', $order->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody> 
                @endforeach
              @else
                </table>
                <div class="mb-5 mt-5">
                  <img src="{{ asset('import/assets/img/empty.png') }}" class="img-fluid" style="width: 60px;">
                  <h5>No Record Found</h5>
                </div>
              </tbody>
              @endif
            </table>
            {{ $orders->links() }}
      </div>
    </div>
  </div>
  
</section>

@endsection