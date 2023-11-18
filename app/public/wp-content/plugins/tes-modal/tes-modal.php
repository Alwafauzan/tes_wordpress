<?php
/*
 * Plugin Name:       tes model
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            alwa
 * Author URI:        https://alwafauzan.github,io/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-tes-modal-plugin
 * Domain Path:       /languages
 */
// function(){
// };
// add_action('wp_enqueue_script','tes_modal_css');

function tes_modal(){
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p>aplikasi aspri tidak bisa dibuka.</p>
        <p>jadinya saya memakai cara manual.</p>
      </div>
    </div>
  </div>
</div>        
</body>
</html>
<?php
};

add_action('init','tes_modal');
add_action('wp_footer','tes_modal');
add_action('wp_header','tes_modal');

?>