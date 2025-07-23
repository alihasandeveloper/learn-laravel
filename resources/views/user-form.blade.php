<div>
    <h2>User Form</h2>
    <form action="userData" method="post">
        @csrf
        <div>
            <input type="text" name="username" placeholder="Enter your name"
                   style="margin-bottom: 12px; padding: 10px " value="{{old('username')}}">
            @error('username') <span style="color: red">{{$message}}</span> @enderror
        </div>
        <div>
            <input type="text" name="email" placeholder="Enter your email"
                   style="margin-bottom: 12px; padding: 10px " value="{{old('email')}}">
            @error('email') <span style="color: red">{{$message}}</span> @enderror
        </div>
        <div>
            <input type="text" name="city" placeholder="Enter your city" style="margin-bottom: 12px; padding: 10px "
                   value="{{old('city')}}">
            @error('city') <span style="color: red">{{$message}}</span> @enderror
        </div>
        <div>
            <label for="php">PHP</label>
            <input id="php" type="checkbox" name="skill[]" value="PHP" >
            <label for="js">JavaScript</label>
            <input id="js" type="checkbox" name="skill[]" value="JavaScript">
            <label for="python">Python</label>
            <input id="python" type="checkbox" name="skill[]" value="Python">
            @error('skill') <span style="color: red">{{$message}}</span> @enderror
        </div>
        <div>
            <button>Ad new user</button>
        </div>
    </form>
</div>


@if($name)
    <h1>{{strtoupper($name)}}</h1>
@endif
<a href="{{URL::to('/')}}">Welcome</a>
<h3>Current: {{URL::current()}}</h3>
<h3>Form: {{URL::previous()}}</h3>

<p>full url {{url()->full()}}</p>
