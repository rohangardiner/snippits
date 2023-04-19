// Add Custom Dashboard Widget
function rg_add_dashboard_widget() {
	wp_add_dashboard_widget(
		'rg_custom_widget',
		'Custom Dashboard Widget Title',
		'rg_dashboard_widget'
	);    
}
add_action( 'wp_dashboard_setup', 'rg_add_dashboard_widget' );


function rg_dashboard_widget() {
	// Display whatever you want to show.
	?>
    <p>Hello world!</p>
  <?php
}
