<h2>New Contact Form Submission</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>City:</strong> {{ $data['city'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Company:</strong> {{ $data['company'] }}</p>
<p><strong>Title/Role:</strong> {{ $data['title'] }}</p>

@if(!empty($data['message']))
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
@endif
