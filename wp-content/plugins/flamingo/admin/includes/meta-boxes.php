<?php

function flamingo_contact_submit_meta_box( $post ) {
?>
<div class="submitbox" id="submitlink">
<div id="major-publishing-actions">

<div id="delete-action">
<?php
	if ( current_user_can( 'flamingo_delete_contact', $post->id ) ) {
		$delete_text = __( 'Delete', 'flamingo' );

		$delete_link = admin_url(
			sprintf( 'admin.php?page=flamingo&post=%s&action=delete', $post->id ) );
		$delete_link = wp_nonce_url( $delete_link, 'flamingo-delete-contact_' . $post->id );

?><a class="submitdelete deletion" href="<?php echo $delete_link; ?>" onclick="if (confirm('<?php echo esc_js( sprintf( __( "You are about to delete this contact '%s'\n 'Cancel' to stop, 'OK' to delete." ), $post->email ) ); ?>')) {return true;} return false;"><?php echo esc_html( $delete_text ); ?></a><?php } ?>
</div>

<div id="publishing-action">
<?php if ( ! empty( $post->id ) ) : ?>
	<input name="save" type="submit" class="button-primary" id="publish" tabindex="4" accesskey="p" value="<?php echo esc_attr( __( 'Update Contact', 'flamingo' ) ); ?>" />
<?php else : ?>
	<input name="save" type="submit" class="button-primary" id="publish" tabindex="4" accesskey="p" value="<?php echo esc_attr( __( 'Add Contact', 'flamingo' ) ); ?>" />
<?php endif; ?>
</div>

<div class="clear"></div>
</div><!-- #major-publishing-actions -->

<div class="clear"></div>
</div>
<?php
}

function flamingo_contact_tags_meta_box( $post ) {
	$taxonomy = get_taxonomy( Flamingo_Contact::contact_tag_taxonomy );

	if ( ! $taxonomy )
		return;

	$tags = wp_get_post_terms( $post->id, $taxonomy->name );
	$tag_names = $tag_ids = array();

	if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
		foreach( $tags as $tag ) {
			$tag_names[] = $tag->name;
			$tag_ids[] = $tag->term_id;
		}
	}

	$tag_names = implode( ', ', $tag_names );

	$most_used_tags = get_terms( Flamingo_Contact::contact_tag_taxonomy, array(
		'orderby' => 'count',
		'order' => 'DESC',
		'number' => 10,
		'exclude' => $tag_ids,
		'fields' => 'names' ) );

	if ( is_wp_error( $most_used_tags ) )
		$most_used_tags = array();

?>
<div class="tagsdiv" id="<?php echo esc_attr( $taxonomy->name ); ?>">
<textarea name="<?php echo "tax_input[$taxonomy->name]"; ?>" rows="3" cols="20" class="the-tags" id="tax-input-<?php echo $taxonomy->name; ?>"><?php echo esc_textarea( $tag_names ); ?></textarea>

<p class="howto"><?php echo esc_html( __( 'Separate tags with commas', 'flamingo' ) ); ?></p>

<?php if ( $most_used_tags ) : ?>
<p class="howto"><?php echo esc_html( __( 'Choose from the most used tags', 'flamingo' ) ); ?>
<br />

<?php foreach ( $most_used_tags as $tag ) {
	echo '<a href="#" class="append-this-to-contact-tags">' . esc_html( $tag ) . '</a> ';
} ?>
</p>
<script type='text/javascript'>
/* <![CDATA[ */
(function($) {
$(function() {
	$('a.append-this-to-contact-tags').click(function() {
		var tagsinput = $('#tax-input-<?php echo esc_js( $taxonomy->name ); ?>');
		tagsinput.val($.trim(tagsinput.val()));
		if (tagsinput.val()) tagsinput.val(tagsinput.val() + ', ');
		tagsinput.val(tagsinput.val() + $(this).text());
		return false;
	});
});
})(jQuery);
/* ]]> */
</script>
<?php endif; ?>
</div>
<?php
}

function flamingo_inbound_submit_meta_box( $post ) {
?>
<div class="submitbox" id="submitlink">
<div id="major-publishing-actions">

<div id="delete-action">
<?php
	if ( current_user_can( 'flamingo_delete_inbound_message', $post->id ) ) {
		if ( ! EMPTY_TRASH_DAYS )
			$delete_text = __( 'Delete Permanently', 'flamingo' );
		else
			$delete_text = __( 'Move to Trash', 'flamingo' );

		$delete_link = admin_url(
			sprintf( 'admin.php?page=flamingo_inbound&post=%s&action=trash', $post->id ) );
		$delete_link = wp_nonce_url( $delete_link, 'flamingo-trash-inbound-message_' . $post->id );

?><a class="submitdelete deletion" href="<?php echo $delete_link; ?>"><?php echo esc_html( $delete_text ); ?></a><?php } ?>
</div>

<div id="publishing-action">
<?php if ( ! empty( $post->id ) ) : ?>
	<input disabled="disabled" name="save" type="submit" class="button-primary" id="publish" tabindex="4" accesskey="p" value="<?php echo esc_attr( __( 'Update Message', 'flamingo' ) ); ?>" />
<?php else : ?>
	<input disabled="disabled" name="save" type="submit" class="button-primary" id="publish" tabindex="4" accesskey="p" value="<?php echo esc_attr( __( 'Add Message', 'flamingo' ) ); ?>" />
<?php endif; ?>
</div>

<div class="clear"></div>
</div><!-- #major-publishing-actions -->

<div class="clear"></div>
</div>
<?php
}

function flamingo_contact_name_meta_box( $post ) {
?>
<table class="form-table">
<tbody>

<tr class="contact-prop">
<th><label for="contact_name"><?php echo esc_attr( __( 'Full name', 'flamingo' ) ); ?></th>
<td><input type="text" name="contact[name]" id="contact_name" value="<?php echo esc_attr( $post->get_prop( 'name' ) ); ?>" class="widefat" /></td>
</tr>

<tr class="contact-prop">
<th><label for="contact_first_name"><?php echo esc_attr( __( 'First name', 'flamingo' ) ); ?></th>
<td><input type="text" name="contact[first_name]" id="contact_first_name" value="<?php echo esc_attr( $post->get_prop( 'first_name' ) ); ?>" class="widefat" /></td>
</tr>

<tr class="contact-prop">
<th><label for="contact_last_name"><?php echo esc_attr( __( 'Last name', 'flamingo' ) ); ?></th>
<td><input type="text" name="contact[last_name]" id="contact_last_name" value="<?php echo esc_attr( $post->get_prop( 'last_name' ) ); ?>" class="widefat" /></td>
</tr>

</tbody>
</table>
<?php
}

function flamingo_inbound_fields_meta_box( $post ) {
?>
<table class="widefat message-fields" cellspacing="0">
<tbody>

<?php foreach ( (array) $post->fields as $key => $value ) : $alt = 0; ?>
<tr<?php $alt = 1 - $alt; echo $alt ? ' class="alt"' : ''; ?>>
<td class="field-title"><?php echo esc_html( $key ); ?></td>
<td class="field-value"><?php echo flamingo_htmlize( $value ); ?></td>
</tr>
<?php endforeach; ?>

</tbody>
</table>
<?php
}

?>