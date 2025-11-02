<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
     <h1>Student View</h1>

     @if(isset($name))
         <p>Welcome, {{ $name }}!</p>
     @else
         <p>Welcome, Student!</p>
     @endif
</div>
