<?php
//get_html_translation_table() adalah fungsi string yang mengabil htmlentities dan HTML_SPECIALCHARS
//paramter get_html_translation_table(function,flags,charset-set);
// Parameter	Description
// function	Optional. Specifies which translation table to return.
// Possible values:
// function()
// HTML_SPECIALCHARS - Default. Translates some characters that need URL-encoding to be shown properly on a HTML page
// HTML_ENTITIES - Translates all characters that need URL-encoding to be shown properly on a HTML page
// flags	Optional. Specifies which quotes the table will contain and which document type the table is for.
// The available quote styles are:
// flags
// ENT_COMPAT - Default. Table contains entities for double quotes, not single quotes
// ENT_QUOTES - Table contains entities for double and single quotes
// ENT_NOQUOTES - Table will not contain entities for double and single quotes
// Additional flags for specifying which doctype the table is for:
//
// ENT_HTML401 - Default. Table for HTML 4.01
// ENT_HTML5 - Table for HTML 5
// ENT_XML1 - Table for XML 1
// ENT_XHTML - Table for XHTML
// character-set	Optional. A string that specifies which character-set to use.
// Allowed values are:
//charset-set
// UTF-8 - Default. ASCII compatible multi-byte 8-bit Unicode
// ISO-8859-1 - Western European
// ISO-8859-15 - Western European (adds the Euro sign + French and Finnish letters missing in ISO-8859-1)
// cp866 - DOS-specific Cyrillic charset
// cp1251 - Windows-specific Cyrillic charset
// cp1252 - Windows specific charset for Western European
// KOI8-R - Russian
// BIG5 - Traditional Chinese, mainly used in Taiwan
// GB2312 - Simplified Chinese, national standard character set
// BIG5-HKSCS - Big5 with Hong Kong extensions
// Shift_JIS - Japanese
// EUC-JP - Japanese
// MacRoman - Character-set that was used by Mac OS
// Note: Unrecognized character-sets will be ignored and replaced by ISO-8859-1 in versions prior to PHP 5.4. As of PHP 5.4, it will be ignored an replaced by UTF-8.
//
print_r(get_html_translation_table(HTML_SPECIALCHARS));
?>
