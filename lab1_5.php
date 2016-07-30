<!Doctype html>
<html>
<body>

<?php
echo"This is the first line.<br>" , //<br> - line breaker
    "<b>This line is bold-faced.</b><br>" , // <b> - bold faced
    "<u>This line is underlined</u><br>" , // <u> - underlined
    "<i>This line is underlined.</u><br>" , //<u> underlined
    "<s>This line is striked out</s><br>" , //<s> striked-out
    "<p>A individual paragraph... </p>" , // <p> paragraph
    "<hr size='1' width='90%'>"; // <hr> horizantal line

echo "Fruit<ul><br>" , // <ul> unordered list
     "<li>apple</li><li>banana</li></ul>"; // <li> list item

echo ("Smartphone:<ol><li>HTC</li><li>Samsung</li><ol><br>"); //<ol> ordered list

print("<div>A new division</div><br>"); // <div> -  division

print("<table border='1'"); // <table> -  define a table
print("<tr><td>A</td><td>B</td></tr>"); // <tr> - define a row
print("<tr><td>C</td><td>D</td></tr>"); // <td> -  define a cell
print("</table>");

?>

</body>
</html>