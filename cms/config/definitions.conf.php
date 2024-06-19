<?php
/**
 * Configuration constants for JavaScript and CSS dependencies.
 *
 * This file defines various constants used throughout the application
 * for including external JavaScript libraries, CSS stylesheets, and
 * other media-related settings. These constants ensure that the correct
 * versions and paths are used consistently across the project.
 *
 * Constants:
 * - JQUERY: URL for jQuery library.
 * - JQUERY_UI: URL for jQuery UI library.
 * - JQUERY_UI_CSS: URL for jQuery UI CSS.
 * - JQUERY_UI_HANDLER: URL for custom jQuery UI handler script.
 * - BOOTSTRAP: URL for Bootstrap JavaScript library.
 * - BOOTSTRAP_CSS: URL for Bootstrap CSS stylesheet.
 * - WYSIWYG_EDITOR: URL for the WYSIWYG editor script (TinyMCE).
 * - WYSIWYG_EDITOR_INIT: URL for the initialization script for the WYSIWYG editor.
 * - VALID_URL_CHARACTERS: Regular expression for validating URL characters.
 * - MEDIA_DIR: Directory path for media files.
 * - IMAGE_IDENTIFIER: Identifier for images.
 * - CATEGORY_IDENTIFIER: Identifier prefix for categories.
 * - AMPERSAND_REPLACEMENT: Replacement string for ampersand characters.
 * - SMILIES_DIR: Directory path for smilies.
 */

define('JQUERY', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
define('JQUERY_UI', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js');
define('JQUERY_UI_CSS', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.min.css');
define('JQUERY_UI_HANDLER', STATIC_URL . 'js/jquery_ui_handler.js');

define('BOOTSTRAP', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
define('BOOTSTRAP_CSS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

//define('WYSIWYG_EDITOR', 'https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.11/tinymce.min.js');
define('WYSIWYG_EDITOR', BASE_URL . 'static/js/tinymce/js/tinymce/tinymce.min.js');
define('WYSIWYG_EDITOR_INIT', BASE_URL . 'static/js/wysiwyg_init.js');

define('VALID_URL_CHARACTERS', '/^[a-zA-Z0-9._\-\/]+$/');
define('MEDIA_DIR', 'static/media/');
define('IMAGE_IDENTIFIER', 'photo');
define('CATEGORY_IDENTIFIER', 'category:');
define('AMPERSAND_REPLACEMENT', ':AMP:');
define('SMILIES_DIR', 'static/media/smilies/');
