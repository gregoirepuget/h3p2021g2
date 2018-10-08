<?php
if ( ! function_exists( 'specia_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function specia_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'specia' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'specia' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'specia_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function specia_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'specia' ) );
		if ( $categories_list && specia_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'specia' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'specia' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'specia' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'specia' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'specia' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function specia_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'specia_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'specia_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so specia_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so specia_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in specia_categorized_blog.
 */
function specia_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'specia_categories' );
}
add_action( 'edit_category', 'specia_category_transient_flusher' );
add_action( 'save_post',     'specia_category_transient_flusher' );

/**
 * This Function Check whether Sidebar active or Not
 */
if(!function_exists( 'specia_post_column' )) :
function specia_post_column(){
	if(is_active_sidebar('sidebar-primary'))
		{ echo 'col-md-8'; } 
	else 
		{ echo 'col-md-12'; }  
} endif; 


/**
 * Function that returns if the menu is sticky
 */
if (!function_exists('specia_sticky_menu')):
    function specia_sticky_menu()
    {
        $is_sticky = get_theme_mod('sticky_header_setting', 'on');

        if ($is_sticky == 'on'):
            return 'sticky-nav';
        else:
            return false;
        endif;
    }
endif;


/**
 * Register Google fonts for Specia.
 */
function specia_google_font() {
	
    $get_fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Open Sans:300,400,600,700,800', 'Raleway:400,700');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $get_fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return esc_url($get_fonts_url);
	
}

function specia_scripts_styles() {
    wp_enqueue_style( 'specia-fonts', specia_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'specia_scripts_styles' );


// Admin notice first time activating
function specia_welcome_message () {
    if ( ! get_theme_mod( 'been_welcomed' ) ) { ?>
	   <div class="updated notice is-dismissible specia-notice">
			<h1><?php
			$theme_info = wp_get_theme();
			printf( esc_html__('Welcome to %1$s - Version %2$s', 'specia'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
			</h1>
			<p><?php echo sprintf( esc_html__("Welcome! Thank you for choosing Specia WordPress theme. To take full advantage of the features this theme has to offer visit our %1\$s welcome page %2\$s.", "specia"), '<a href="' . esc_url( admin_url( 'themes.php?page=specia-store' ) ) . '">', '</a>' ); ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=specia-store' ) ); ?>" class="button button-blue-secondary button_erzen" style="text-decoration: none;"><?php echo esc_html__('Get started with Specia','specia'); ?></a></p>
		</div>
        <?php set_theme_mod( 'been_welcomed', true );
    }
}
?>
