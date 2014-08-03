<div id="side">

	<dl>
		<dt>Category</dt>
		<dd>
			<ul>
				<?php wp_list_categories('title_li='); ?>
			</ul>
		</dd>
	</dl>

	<dl>
		<dt>Archives</dt>
			<dd>
				<ul>
					<?php wp_get_archives(); ?>
				</ul>
			</dd>
	</dl>

</div><!-- end_side -->

