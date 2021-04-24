<?php

class FancyBoxThumbsHooks {
	/**
	 * @param OutputPage $out
	 * @param Skin $skin
	 */
	public static function onBeforePageDisplay( OutputPage $out, Skin $skin ) {
		global $wgFancyBoxThumbsOptions;

		$out->addModules( 'ext.FancyBoxThumbs' );

		$out->addInlineScript( "var wgFancyBoxThumbsOptions = {$wgFancyBoxThumbsOptions};" );
	}
}
