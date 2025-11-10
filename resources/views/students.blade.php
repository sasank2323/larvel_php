<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->

    <h1>Students List</h1>
    <ul>
        <!-- <?php print_r($data); ?>
        <?php exit() ?> -->
        @foreach ($data as $d)
            <li>{{ $d->userId }} - {{ $d->id }}</li>
            <li>{{ $d->title }}</li>
            <li>{{ $d->body }}</li>
            <br>
        @endforeach
    </ul>


</div>
