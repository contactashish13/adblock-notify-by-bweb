<?php
/**
 * The custom query field type
 *
 * @package adblock-notify-pro
 */

foreach ( $exclusions as $type => $q ) {
?>
	<div class="an_exclude_div">
		<select name="an_excl_type[]">
			<option value=""><?php _e( 'Type', 'an-translate' );?></option>
			<?php
			foreach ( $types as $key => $val ) {
			?>
			<option value="<?php echo $key;?>"><?php echo $val['name'];?></option>
			<?php
			}
			?>
		</select>
		<select name="an_excl_condition[]">
			<option value=""><?php _e( 'Condition', 'an-translate' );?></option>
			<option value="="><?php _e( 'is equal to/includes', 'an-translate' );?></option>
			<option value="!="><?php _e( 'is not equal to/does not include', 'an-translate' );?></option>
		</select>
		<select name="an_excl_value[]">
			<option value=""><?php _e( 'Value', 'an-translate' );?></option>
		</select>
		<span class="an_exclude_actions">
			<span class="an_exclude_add"><a href="#">+</a></span>
			<span class="an_exclude_delete"><a href="#">-</a></span>
		</span>
	</div>
<?php
}
?>

<script>
	var exclusions  = '<?php echo json_encode( $exclusions );?>';
</script>
