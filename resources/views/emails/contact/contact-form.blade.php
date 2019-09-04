@component('mail::message')

# Thank You for your message

<strong>Name : </strong><small class="text-muted">{{ $data['name'] }}</small>
<br>
<strong>Email : </strong><small class="text-muted">{{ $data['email'] }}</small>
<br><br>
<strong>Message : </strong>
<p>{{ $data['message'] }}</p>
@endcomponent
