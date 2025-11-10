<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->

    <h1>Students List</h1>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student->name }} - {{ $student->roll_number }}</li>
        @endforeach
    </ul>
</div>
