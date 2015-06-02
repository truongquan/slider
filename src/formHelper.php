<?php
//using boostrap HTML structure

function input_text($name, $label, $value, $type = 'text')
{
    return '<div class="form-group">
                <label for="'.$name.'">'.$label.'</label>
                <input type="'.$type.'" class="form-control" id="'.$name.'" name="'.$name.'" value="'.$value.'">
              </div>';
}

function select_box($name, $label, $options, $selected = false)
{
    $html = '<div class="form-group">
            <label for="'.$name.'">'.$label.'</label>
            <select id="'.$name.'" name="'.$name.'" class="form-control">';

    if (!is_array($options)) {

        return '';
    }

    foreach ($options as $key => $value) {
        $html .= '<option value="'.$key.'">'.$value.'</option>';
    }

    $html .= '</select></div>';

    return $html;
}