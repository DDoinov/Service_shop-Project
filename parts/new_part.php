<?php

echo"<form name=\"new_part\" action=\"insert_part.php\" method=\"GET\">
        <table border=\"1\">
        <tr>
        <td bgcolor=#66cc00>Part:</td>
        <td><input name=\"p_name\" size=\"15\" maxlenght=\"30\"></td>
        </tr>
        <tr>
        <td bgcolor=#66cc00>Part information:</td>
        <td><textarea name=\"p_other\" rows=\"5\" 
                cols=\"20\" maxlenght=\"300\"></textarea></td>
        </tr>



        </table>
        <input type=\"submit\" value=\"Done\">
            </form>";

?>
