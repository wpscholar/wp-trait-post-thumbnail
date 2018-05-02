<?php

namespace wpscholar\WordPress\Traits;

/**
 * Trait PostThumbnail
 *
 * @package wpscholar\WordPress\Traits
 *
 * @property \WP_Post $post
 */
trait PostThumbnail {

	/**
	 * Check if the post has a featured image.
	 *
	 * @return bool
	 */
	public function hasPostThumbnail() {
		return has_post_thumbnail( $this->post );
	}

	/**
	 * Get the featured image HTML.
	 *
	 * @param string $size
	 *
	 * @return string
	 */
	public function postThumbnail( $size = 'full' ) {
		return get_the_post_thumbnail( $this->post, $size );
	}

	/**
	 * Get the featured image ID.
	 *
	 * @return int
	 */
	public function postThumbnailID() {
		return absint( get_post_thumbnail_id( $this->post ) );
	}

	/**
	 * Get the featured image URL.
	 *
	 * @param string $size
	 *
	 * @return string
	 */
	public function postThumbnailUrl( $size = 'full' ) {
		return (string) get_the_post_thumbnail_url( $this->post, $size );
	}

}
