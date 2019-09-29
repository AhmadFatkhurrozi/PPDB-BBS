<?php

if (! function_exists('__menu_active')) 
{
	function __menu_active($default, $menu)
	{
		return ($default==$menu)? 'active' : '';
	}
}
	
if (! function_exists('__css')) {
	function __css($css){

		$src = '';

		switch ($css) {

			case 'bootstrap':
				$src = base_url().'dist/css/bootstrap.min.css';
				break;
			case 'creative':
				$src = base_url().'dist/css/creative.css';
				break;
			case 'fontawesome':
				$src = base_url().'dist/font-awesome/css/font-awesome.min.css';
				break;
			case 'popup':
				$src = base_url().'dist/css/popup.css';
				break;
			default:
				break;

		}

		return '<link rel="stylesheet" href="'.$src.'">';
	}

}

if (! function_exists('__js')) {
	function __js($js){

		$src = '';

		switch ($js) {

			case 'bootstrap':
				$src = base_url().'dist/js/bootstrap.min.js';
				break;
			case 'popup':
				$src = base_url().'dist/js/jquery.popup.min.js';
				break;
			case 'bootstrap-bundle':
				$src = base_url().'dist/js/bootstrap.bundle.min.js';
				break;
			case 'jquery':
				$src = base_url().'dist/js/jquery.min.js';
				break;
			case 'popper':
				$src = base_url().'dist/js/popper.min.js';
				break;
			case 'creative':
				$src = base_url().'dist/js/creative.min.js';
				break;
			case 'checkall':
				$src = base_url().'dist/js/jquery-check-all.js';
				break;
			case '_checkall':
				$src = base_url().'dist/js/__jquery-check-all.js';
				break;
			case 'tiny':
				$src = base_url().'dist/tinymce/tinymce.min.js';
				break;
			default:
				break;

		}

		return '<script src="'.$src.'"></script>';
	}

}
