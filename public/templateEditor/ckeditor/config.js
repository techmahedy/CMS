/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
   
   	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ,'eqneditor','mathjax'] },
		{ name: 'links' },
		{ name: 'insert' , groups: ['insert' , 'youtube', 'uploadfile','font','colorbutton','autogrow','imageresizerowandcolumn','tableresize','colordialog','mathjax','codesnippet','slideshow'] },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools','scayt'   ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
			
	];
    
    config.extraPlugins = ['youtube','uploadfile','font','colorbutton','autogrow','imageresizerowandcolumn','tableresize','colordialog','eqneditor','codesnippet','slideshow','scayt'];
    
    config.codeSnippet_languages = {
    javascript: 'JavaScript',
    php: 'PHP',
    sql: 'SQL',
    laravel: 'LARAVEL',
    css: 'CSS',
    html: 'HTML'
    };

    config.codeSnippet_theme = 'monokai_sublime';

    config.filebrowserBrowseUrl = '/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash';
};

