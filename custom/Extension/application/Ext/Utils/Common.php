<?php

function makeHtmlOfMultiEnumOptions(array $allOptions, array $selectedOptions, $view, array $displayParams = array()) {
    if ($view === 'DetailView') {
        return makeNonEditableRelateMultiEnumHtml($selectedOptions, $displayParams);
    }

    return makeEditableRelateMultiEnumHtml($allOptions, $selectedOptions, $view, $displayParams);
}

function makeEditableRelateMultiEnumHtml(array $options, array $selected, $view, array $displayParams = array()) {
    if (empty($options)) {
        return '';
    }
    $html = '';
    if ($view === 'MassUpdate') {
        $html = '<select name="test">';
    }
    foreach ($options as $id => $name) {
        $selectedHtml = array_key_exists($id, $selected) ? ' selected' : '';
        $html .= '<option label="' . htmlentities($name) . '" value="' . htmlentities($id) . '"' . $selectedHtml . '>';
        $html .= htmlentities($name);
        $html .= '</option>';
    }
    if ($view === 'MassUpdate') {
        $html .= '</select>';
    }
    return $html;
}

function makeNonEditableRelateMultiEnumHtml(array $options, array $displayParams = array()) {
    $noLiTags = false;
    if (isset($displayParams['singleSelectOnly']) && $displayParams['singleSelectOnly'] && count($options) <= 1) {
        $noLiTags = true;
    }

    $html = '';
    foreach ($options as $id => $name) {
        if (!$noLiTags) {
            $html .= '<li style="margin-left:10px;">';
        }

        $html .= printRelateMultiEnumListItem($id, $name, $displayParams);

        if (!$noLiTags) {
            $html .= '</li>';
        }
    }
    return $html;
}

function makeHtmlOfEnumOptions(array $allOptions, array $selectedOptions, $view, array $displayParams = array()) {
    if ($view === 'DetailView') {
        return makeNonEditableRelateEnumHtml($selectedOptions);
    }

    return makeEditableRelateEnumHtml($allOptions, $selectedOptions, $view, $displayParams);
}

function makeEditableRelateEnumHtml(array $options, array $selected, $view, array $displayParams = array()) {
    if (empty($options)) {
        return '';
    }

    $html = '';
    if ($view === 'MassUpdate') {
        $name = $displayParams['name'];
        $html = '<select name="' . $name . '" id="mass_' . $name . '">';
    }
    foreach ($options as $id => $name) {
        $selectedHtml = array_key_exists($id, $selected) ? ' selected' : '';
        $html .= '<option label="' . htmlentities($name) . '" value="' . htmlentities($id) . '"' . $selectedHtml . '>';
        $html .= htmlentities($name);
        $html .= '</option>';
    }
    if ($view === 'MassUpdate') {
        $html .= '</select>';
    }
    return $html;
}

function makeNonEditableRelateEnumHtml(array $options) {
    $html = '';
    foreach ($options as $name) {
        $html .= '<li style="margin-left:10px;">' . htmlentities($name) . '</li>';
    }
    return $html;
}




function printRelateMultiEnumListItem($id, $name, array $displayParams = array()) {
    $link = isset($displayParams['link']) && $displayParams['link'];
    $module = isset($displayParams['module']) ? $displayParams['module'] : '';
    if ($link && $module) {
        $target = 'index.php?module=' . htmlentities($module) . '&action=DetailView&record=' . htmlentities($id);
        return '<a href="' . ajaxLink($target) . '">' . htmlentities($name) . '</a>';
    }
    return htmlentities($name);
}
