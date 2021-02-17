<?php
echo "<select><option></option>~";
for ($i = date("Y"); $i >= date("Y")-100; $i--){ echo "<option> ". $i ." </option>";}
echo "</select>";