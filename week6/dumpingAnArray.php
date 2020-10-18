<pre>

The function <strong>print_r()</strong> shows PHP data => This is good for dubugging

</pre>

<pre>
<p>The Code</p>

$stuff = array("name"=>"Osama","course"=>"php");
echo ("<pre>\n");
print_r($stuff);
echo ("\n</pre>\n");



</pre>
<p>The Result</p>
<?php

$stuff = array("name"=>"Osama","course"=>"php");
echo ("<pre>\n");
print_r($stuff);
echo ("\n</pre>\n");


?>