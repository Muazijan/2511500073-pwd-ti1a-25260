<?php
if (!function_exists('redirect')) {
    function redirect($url) {
        header("Location: $url");
        exit;
    }
}

if (!function_exists('bersihkan')) {
    function bersihkan($str) {
        return htmlspecialchars(trim($str));
    }
}

if (!function_exists('tampilkanBiodata')) {
    function tampilkanBiodata($conf, $arr) {
        $html = "<dl>";
        foreach ($conf as $key => $meta) {
            $val = $arr[$key] ?? "";
            $label = $meta['label'] ?? $key;
            $suffix = $meta['suffix'] ?? '';
            $html .= "<dt>{$label}</dt><dd>" . htmlspecialchars($val) . " {$suffix}</dd>";
        }
        $html .= "</dl>";
        return $html;
        
    }
    require_once 'functions.php';

}
