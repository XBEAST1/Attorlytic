@extends('admin.masteradmin')
@section('main')

<title>Dashboard</title>
<div id="content">
  <h1 id="dashboard-heading">Appointment Panel</h1>
  <table class="table table-dark w-100 mx-auto table-hover table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Day</th>
        <th>Time</th>
        <th>Accept</th>
        <th>Reject</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($bookings as $booking)
      <tr>
        <td>{{ $booking->client_relation->name }}</td>
        <td>{{ $booking->day }}</td>
        <td>{{ $booking->time }}</td>
        <td><a href="{{ route ( 'deletebooking', $booking->id) }}" class="btn btn-success">Accept</a></td>
        <td><a href="{{ route ( 'deletebooking', $booking->id) }}" class="btn btn-danger">Reject</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</main>
@endsection