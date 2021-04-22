<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'FancyBoxThumbs' );

	wfWarn(
		'Deprecated PHP entry point used for the FancyBoxThumbs extension. ' .
		'Please use wfLoadExtension() instead, ' .
		'see https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:Extension_registration for more details.'
	);

	return;
} else {
	die( 'This version of the FancyBoxThumbs extension requires MediaWiki 1.35+' );
}
