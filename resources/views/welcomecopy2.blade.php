
<h1>
    All Students
</h1>

@foreach ($students as $data)
    <div>

        <p>ID: {{ $data->id }}</p>
        <p>{{ $data->name }}</p>
        <p>Email: {{ $data->email }}</p>
        <p>Age: {{ $data->age }}</p>
        <p>City: {{ $data->city_name }}</p>
    </div>
    <hr>
    
@endforeach