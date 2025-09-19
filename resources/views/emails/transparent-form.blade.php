<h2>Client Servuce Request</h2>
<p><strong>Service Type:</strong> {{ $data['service_type'] }}</p>
<p><strong>Healthcare Type:</strong> {{ $data['healthcare_type'] }}</p>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
@if(!empty($data['website']))
<p><strong>Website:</strong> {{ $data['website'] }}</p>
@endif
