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
        $select = ($selected == $key) ? 'selected="selected"' : '';
        $html .= '<option value="'.$key.'" '.$select.' >'.$value.'</option>';
    }

    $html .= '</select></div>';

    return $html;
}

function config_type($type, $element_value = null)
{
   $elements = config('slider.type');
   $element_type = config('slider.opt_type');
   $element_label = config('slider.opt_label');
   $html = '';

    foreach ($elements[$type] as $key => $value) {
        $value = (is_null($element_value)) ? $value : $element_value[$key];

        if ($element_type[$key] == 'text') {
            $html .= input_text($key, $element_label[$key], $value);
        } elseif ($element_type[$key] == 'select') {
            $html .= select_box($key, $element_label[$key], config('slider.boolean'), $value);
        }
    }

    return $html;
}

function showAllErrors($errors)
{
    $html = '<ul class="has-error">';
    if(count($errors->all())) {
        foreach ($errors->all() as $error) {
            $html .= '<li>'.$error.'</li>';
        }
    }
    $html .= '</ul>';

    return $html;
}