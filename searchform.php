<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <div>
    	<input type="text" name="s" id="s" placeholder="<?php _e('Search for stories', 'ekuatorial'); ?>" value="<?php /* by mohjak 2019-11-24 tag excel line 4 issue#120 */ echo isset($_GET['s']) ? $_GET['s'] : ''; ?>" />
        <input type="submit" class="button" id="searchsubmit" value="<?php _e('Search', 'ekuatorial'); ?>" />
    </div>
</form>
