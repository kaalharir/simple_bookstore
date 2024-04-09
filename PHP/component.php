<?php
function inputElement($icon, $placeholder, $name, $value)
{
    $ele = "
    <div class=\"input-group mb-2\">
        <div class=\"input-group-prepend\">
            <div class=\"input-group-text bg-warning\">$icon</div>
        </div>
        <input type=\"text\" autocomplete=\"off\" name='$name' value='$value' class=\"form-control\" id=\"name\" placeholder='$placeholder'>
    </div>
";
    echo $ele;
}
function buttonElement($btnId, $style, $text, $name, $attr)
{
    $btn = "
    <button name='$btnId' class='$style' id='$btnId' $attr>$text</button>
    ";
    echo $btn;
}
