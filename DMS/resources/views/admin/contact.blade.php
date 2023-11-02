@extends('admin.layouts.app')

@section('title', 'Contacts')

@section('content')
    
<section class="Contact">
  <div class="container-fluid pt-4 px-4">
    <div class="text-center rounded p-4" style="background-color: #07509E">
      <div class="row">
        <div class="col-sm mb-2">
          <h3 class="mb-0 text-start">Contacts</h3>
        </div>
      </div>
      <div class="table-responsive">
          <table class="table text-center align-middle table-hover mb-3">
              <thead>
                  <tr class="text-white">
                      <th scope="col">No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              @if(count($contacts) > 0)
                @foreach ($contacts as $index => $contact)
                <tbody>
                  <tr class="text-white">
                      <td>{{ $contacts->firstItem() + $index }}.</td>
                      <td>{{ $contact->contact_name }}</td>
                      <td>{{ $contact->contact_phone }}</td>
                      <td>{{ Str::limit($contact->contact_description, 30) }}</td>
                      <td>
                        <a href="{{ route('admin.contact.detail', $contact->id) }}" class="btn btn-sm" data-bs-toggle="tooltip" title="View Detail"><i class="fa-solid fa-eye" style="background-color: white; padding: 10px; border-radius: 50%; color: green;"></i></a>
                        <a href="#" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $contact->id }}"><i class="fa-solid fa-trash" data-bs-toggle="tooltip" title="Delete" style="background-color: white; padding: 10px; border-radius: 50%; color: red;"></i></a>
                        <!-- Delete Modal -->
                        <div class="modal" id="deleteModal{{ $contact->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST">
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
          {{ $contacts->links() }}
      </div>
    </div>
  </div>
  
</section>

@endsection