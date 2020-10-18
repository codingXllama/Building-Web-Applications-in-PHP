<pre>
    You can allocater a new item in th array and append a value at the same time 
    using empty square braces [] on the right hand side of an assignment statement.
</pre>


<pre>
    <p>The Code:</p>

    $val= array();
    $val[]="Hello";
    $val[]="Nexa";
    print_r($val);
</pre>

<p>The Result</p>
<?php
 
    
    $val= array();
    $val[]="Hello";
    $val[]="Nexa";
    print_r($val);
?>