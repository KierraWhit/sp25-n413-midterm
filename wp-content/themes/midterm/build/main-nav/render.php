<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<nav <?php echo get_block_wrapper_attributes(); ?>>
    <ul>
         <li>
            <a href="#">Saas Brand</a>
        </li>
        <li>
            <a href="#">Features</a>
        </li>
        <li>
            <a href="#">Pricing</a>
        </li>
        <li>
        	<a href="#">Resources</a>
        </li>
        <li>
            <a href="#">Blog</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>
</nav>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Main Nav – hello from a dynamic block!', 'main-nav' ); ?>
</p>
