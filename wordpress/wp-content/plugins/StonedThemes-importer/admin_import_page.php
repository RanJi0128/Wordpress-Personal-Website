<?php
class options_page {

    function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    function admin_menu() {
       
         add_submenu_page(
            'themes.php',
            'Import Demo Data',
            'Collective Import Dummy',
            'manage_options',
            'options_collective_import',
            array(
                $this,
                'settings_page'
            )
        );
    }

    function  settings_page() {
        ?>
        <style>
            .stoned_importer{
                margin: 20px 20px 0 0;
                background: #fff;
                padding: 30px;
            }
            .import_form{
                display: block;
                padding-top: 20px;
            }
            .collective_import{
                padding: 5px;
                background: #0085ba;                
                color: #fff;
                text-decoration: none;
            }
            .collective_import:hover{
                  color: #fff;
            }
            .importing{
                padding-top: 20px;
            }
        </style>
        <div class="stoned_importer">
            <strong>Import Collective Demo</strong>
            <p>Install the demo content only on a clean WordPress. Use <a href="https://wordpress.org/plugins/reset-wp/" target="_blank">Reset WP</a> plugin to clean the current Theme.</p>
            <p>What If The Import Fails Or Stalls? <a href="http://collective.stonedthemes.com/documentation/#3" target="_blank">Check documentation</a></p>
            <p>Required php configuration</p>
            <ul>
                <li>max_execution_time 600</li>
                <li>memory_limit 128M </li>
                <li>post_max_size 32M </li>
                <li>upload_max_filesize 32M</li> 
            </ul>
            <p>If you have a shared host with low performance we suggest you to import Light (fast import) version it has less images and will import faster</p>
            <img width="400" height="200" src="<?php echo plugin_dir_url( __FILE__ ); ?>img/collective.jpg"/>
          
            <div class="import_form">
                <select id="version">
                    <option value="demo">Demo</option>
                    <option value="arch">Demo Architect</option>
                    <option value="photo">Demo Photography</option>
                    <option value="onepage">Demo Onepage</option>
                    <option value="woocommerce">Woocommerce</option>
                    <option value="light">Light (fast import)</option>
                </select>    
                <a href="" class="collective_import">Import</a>
               
            </div>   
            <div class="importing" style="display:none;">
                 <p class="import_message">Importing Demo Content it might take several minutes!</p> 
                 <img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/spinner.gif" alt="spinner">
            </div>

            <div class="sth_message_success" style="display:none;">
            </div>
        </div>    
        <?php 
    }
}

new options_page;