<a class="hidden" id="page_info_form_trigger" href="#page_info_form">&nbsp;</a>

<div id="page_info_form_wrapper" class="hidden">
	<form id="page_info_form">
		<h2><?php echo $page_info->title; ?></h2>	
		<p id="element_file_info"></p>
		<input type="hidden" value="<?php echo $page_info->id; ?>" name="id" />
		<label for="description"> Description: </label>
        <textarea name="description"><?php echo $page_info->description; ?> </textarea>
        <br />
        <label for="keywords"> Keywords: </label>
        <input id="pageKeywords" type="text" name="keywords" value="<?php echo $page_info->keywords; ?>" /> <br /><br />
		
        <input type="radio" name="public" value="1" checked="true"> Public   <input type="radio" name="public" value="0" <?php if($page_info->public == 0) echo 'selected="true"'; ?>> Private

        <br /> <br/>
		<div>
				<input type="submit" value="Submit" class="submit_element" />&nbsp;<input type="button" value="Remove" class="submit_element" />
		</div>
    </form>
</div>