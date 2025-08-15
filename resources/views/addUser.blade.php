<!DOCTYPE html>
<html>

<head>
    <title>User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-4">

    <div class="container">
        <h2> Add New User Form</h2>

        <!-- Success message -->
        {{-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <br>
            <pre>{{ print_r(session('data'), true) }}</pre>
        </div>
    @endif --}}

        <!-- Validation Errors -->
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        {{-- @php
            print_r($errors->all());
        @endphp --}}



        <!-- Form -->
        <form action="{{ route('add.user') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
            
                <span class="text-danger">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" >
            
                
                <span class="text-danger">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        
                    @enderror
                </span>
            </div>


            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" value="{{ old('password') }}">
            
                
                <span class="text-danger">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label>Age</label>
                <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}">
            
                <span class="text-danger">
                    @error('age')
                        <div class="text-danger">{{ $message }}</div>
                        
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label>City</label>
                <select name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                    <option value="">Select City</option>
                    <option value="lahore">Lahore</option>
                    <option value="karachi">Karachi</option>
                    <option value="islamabad">Islamabad</option>
                    {{-- @foreach ($cities as $city)
                    <option value="{{ $city }}" {{ old('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                @endforeach --}}
                </select>

                <span class="text-danger">
                    @error('city')
                        <div class="text-danger">{{ $message }}</div>
                        
                    @enderror
                </span>
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
