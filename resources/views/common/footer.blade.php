<footer>
    
@if(isset($ss) && $ss=="1")
    <h1 style="color: red; font-family: Arial, sans-serif;">this is from ss blade</h1>
@elseif(isset($ss) && $ss=="2")
    <h2 style="color: blue; font-family: 'Courier New', Courier, monospace;">this is from index blade</h2>
@else
    <h3 style="color: green; font-family: 'Times New Roman', Times, serif;">this is from footer blade</h3>
@endif
</footer>