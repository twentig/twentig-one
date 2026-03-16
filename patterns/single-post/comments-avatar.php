<?php
/**
 * Title: Comments section with avatars
 * Slug: twentigone/comments-avatar
 * Categories: utilities
 * Post Types: wp_template
 */
?>

<!-- wp:comments {"style":{"border":{"top":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"margin":{"top":"var:preset|spacing|65"},"padding":{"top":"var:preset|spacing|65"}}}} -->
<div class="wp-block-comments" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:1px;margin-top:var(--wp--preset--spacing--65);padding-top:var(--wp--preset--spacing--65)">
	<!-- wp:group {"className":"tw-align-baseline","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"},"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group tw-align-baseline" style="margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Comments', 'twentig-one' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:comments-title {"showPostTitle":false,"level":3,"className":"tw-has-parenthesis","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"normal"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:comment-template -->
		<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|tertiary","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"28px"},"margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--20);padding-bottom:28px">
			<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group" style="margin-bottom:10px">
				<!-- wp:avatar {"size":32,"style":{"border":{"radius":"99px"}}} /-->
				<!-- wp:group {"className":"tw-align-baseline","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group tw-align-baseline">
					<!-- wp:comment-author-name {"className":"tw-active-author"} /-->
					<!-- wp:comment-date /-->
					<!-- wp:comment-edit-link /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:comment-content /-->
			<!-- wp:comment-reply-link /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:comment-template -->
	<!-- wp:comments-pagination -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->
	<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->
</div>
<!-- /wp:comments -->
