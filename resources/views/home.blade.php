@if (empty($data['image']))
    <img src="<?= Gravatar::get($data['email']); ?>" alt=""/>
@else
    <img src="<?='/uploads/' . $data['image']; ?>" alt=""/>
@endif

<p>First name : {{$data['first_name']}}</p>
<p>Last name : {{$data['last_name']}}</p>
<p>Email : {{$data['email']}}</p>
<a href="auth/logout">Logout</a>