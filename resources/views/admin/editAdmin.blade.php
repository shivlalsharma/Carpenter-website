<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin</title>
    <link rel="icon" type="image/png" href="/images/logo.png">
    <link rel='stylesheet' href='{{asset("css/user/register.css")}}'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'>
</head>
<body>
    @include('admin.header')
    
    <div class="content">
        @if(session()->has('success'))
        <div class="message" id="success">
            {{session()->get('success')}}
            <i class="fa-sharp fa-solid fa-xmark" onclick="remove(this)"></i>
        </div>
        @endif

        @if(session()->has('error'))
        <div class="message" id="error">
            {{session()->get('error')}}
            <i class="fa-sharp fa-solid fa-xmark" onclick="remove(this)"></i>
        </div>
        @endif
        <form action="{{route('adminEdit',$admin->admin_id)}}" method='post'>
            <div class="box"><span class="heading">Edit Admin</span></div>
            @csrf
            <div class="input">
                <input type="text" name='name' value="{{$admin->name}}" placeholder="Enter your name" required autofocus>
                <i class="fa-sharp fa-solid fa-user"></i>
                <p class="alert">
                    @error('name')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="input">
                <input type="email" name='email' value="{{$admin->email}}" placeholder="Enter your email" required autofocus>
                <i class="fa-sharp fa-solid fa-envelope"></i>
                <p class="alert">
                    @error('email')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="input">
                <input type="password" name='password' id="password" placeholder="Enter your password" autofocus>
                <i id="show" class="fa-sharp fa-solid fa-eye-slash"></i>
                <p class="alert">
                    @error('password')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="input">
                <input type="password" name='password_confirmation' placeholder="Enter confirm password" autofocus>
                <p class="alert">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="input">
                <input type="text" name='status' value="{{$admin->status}}" placeholder="Enter your status" required autofocus>
                <p class="alert">
                    @error('status')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="input">
                <input type="text" name='token' value="{{$admin->token}}" placeholder="Enter your token" required autofocus>
                <p class="alert">
                    @error('token')
                        {{ $message }}
                    @enderror
                </p>
            </div>
            <button type="submit">Edit Admin</button>
        </form>
    </div>

    <script src="{{asset('js/register.js')}}"></script>
</body>
</html>