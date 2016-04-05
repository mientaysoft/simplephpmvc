<?php

/**
 * Generate Site URL
 */
if ( ! function_exists("site_url") ) {
	function site_url( $uri = '' ) {
		if ( ! empty( $uri ) ) {
			$uri = str_replace("\\", "/", $uri);
		}

		return BASEURL . "/" . $uri;

	}
}


/**
 * Redirect to some page
 */
if ( ! function_exists("redirect_to") ) {
	function redirect_to(  $uri = '', $method = '' ) {
		$uri = site_url($uri);

		if ( strtolower($method) == 'refresh' ) {
			header('Refresh:0;url='.$uri);
		} else {
			header('Location: '.$uri);
		}
		exit;
	}
}


/**
 * Redirect with JS Comfirm
 */
if ( ! function_exists("js_redirect") ) {
	function js_redirect( $message, $where ) {

		if ( ! is_null( $message ) ) {
			echo '<script>alert("' . $message . '");</script>';
		}

		echo '<script>window.location.assign("' . $where . '");</script>';
		exit();

	}
}
