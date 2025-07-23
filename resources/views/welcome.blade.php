@include('commom.header')


@include('template.page', ['title' => 'Welcome to laravel', 'desc' => 'Today i am learn laravel 12 blade template , yahooo!!!!!'])


<a href="{{URL::to('user-form')}}">Welcome</a>
<a href="{{url()->to('user-form',['asif'])}}">Go to asif</a>
<h3>Current: {{URL::current()}}</h3>
<h3>Form: {{URL::previous()}}</h3>

