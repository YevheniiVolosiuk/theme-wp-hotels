<?php

declare( strict_types=1 );

// Helpers to locate files

function getManifest(): array {
	$content = file_get_contents( STM_DIR_PATH . '/dist/manifest.json' );

	return json_decode( $content, true );
}

function assetUrl( string $entry ): string {
	$manifest = getManifest();

	return isset( $manifest[ $entry ] )
		? '/dist/' . $manifest[ $entry ]['file']
		: '';
}

function importsUrls( string $entry ): array {
	$urls     = [];
	$manifest = getManifest();

	if ( ! empty( $manifest[ $entry ]['imports'] ) ) {
		foreach ( $manifest[ $entry ]['imports'] as $imports ) {
			$urls[] = '/dist/' . $manifest[ $imports ]['file'];
		}
	}

	return $urls;
}

function cssUrls( string $entry ): array {
	$urls     = [];
	$manifest = getManifest();

	if ( ! empty( $manifest[ $entry ]['css'] ) ) {
		foreach ( $manifest[ $entry ]['css'] as $file ) {
			$urls[] = '/dist/' . $file;
		}
	}

	return $urls;
}
