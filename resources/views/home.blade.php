<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     span {
           
            color: black;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
    
</head>
<body>
    <x-message-banner msg="hi this is message banner component from home" class="red" />
    <h2> hi sasank</h2>
    <a href="{{URL::to('/form')}}">Go to Form Page</a>
    <a href="{{URL::to('/form2')}}">Go to Form2 Page</a>
<h3> {{$name}}</h3>
<h4>{{URL::current()}}</h4>
<h4>{{URL::full()}}</h4>
<h4>{{URL::previous()}}</h4> 
<!-- many pages may redirect to this page it can come from index or form page we will get to know which page called this page by using this method -->
<h4>{{Request::url()}}</h4> 
<h4>{{Request::fullUrl()}}</h4>
<h4>{{Request::path()}}</h4>
<h4>{{Request::method()}}</h4>

</body>
</html>

