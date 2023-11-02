@extends('admin.layouts.app')

@section('title', 'Contacts')

@section('content')
    
<section class="order_detail">
  <div class="container-fluid pt-4 px-4">
    <div class="text-center rounded p-4" style="background-color: #07509E">
      <div class="row">
        <div class="col-md-8 col-sm mb-4">
          <h3 class="mb-0 text-start">Contact Details</h3>
        </div>
        <div class="col-md-4 col-sm mb-4">
          <a href="{{ route('admin.contact') }}" class="btn float-end w-25 back-btn" style="background-color: #FFCE00; color: #07509E;">Back</a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered text-white align-middle mb-3">
          <tbody class="text-start">
            <tr style="border: 1px solid white">
              <th>Name</th>
              <td>{{ $contact->contact_name }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Phone</th>
              <td>{{ $contact->contact_phone }}</td>
            </tr>
            <tr style="border: 1px solid white">
              <th>Description</th>
              <td>{{ $contact->contact_description }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

@endsection