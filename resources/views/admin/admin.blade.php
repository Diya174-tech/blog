<h1>Admin Page</h1>

<div>
    @foreach ($users as $user) 
        <h1>{{$user}}</h1>
    @endforeach
</div>

<div>
    @for($i = 0; $i<=10; $i++) 
        <h2>{{$i}}</h2>
        @endfor
</div>