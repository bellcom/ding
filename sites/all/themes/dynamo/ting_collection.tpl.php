<?php 
//dsm($collection);

?>
<div id="collection">
	<div class="content-left">

		<div class="collection-navigation">

			<ul>
				<li class="active"><a href="#">Materialer</a></li>
				<li><a href="#">foobar </a></li>
				<li><a href="#">baz bar </a></li>				
			</ul>

		</div>

		<div class="collection-main">
			<div class="collection-info">
				<h2> title</h2>
				af forfatter (2006)
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				
				<div class="terms">
					<ul>
						<li>foo</li>
						<li>foo</li>
						<li>foo</li>												
					</ul>
				</div>
				<?php print $collection->url; ?>
	
			</div>

			<?php
			foreach ($collection->objects as $key => $value) {
			?>
			<div class="collection clearfix">

	  		<div class="picture">
					<?php if($collection->objects[$key]->additionalInformation->thumbnailUrl){ ?>
			    	<?php print theme('image', $collection->objects[$key]->additionalInformation->thumbnailUrl, '', '', null, false); ?>
				    <?php // print theme('imagecache', '120_120', $collection->objects[$key]->additionalInformation->thumbnailUrl); ?>      
					<?php } ?>
				</div>
			  <div class="content">	

					<?php print theme('item_list', $collection->objects[$key]->data->date, NULL, 'div-span', array('class' => 'date'));?>	

					<h5><?php print $collection->objects[$key]->data->title['0'];?></h5>
					<?php print theme('item_list', $collection->objects[$key]->data->creator, t('by'), 'span', array('class' => 'creator'));?>

					<?php print theme('item_list', $collection->objects[$key]->data->description, NULL, 'div', array('class' => 'description'));?>

					<?php print l(t('More information'), "..".$collection->objects[$key]->url); ?> 

					<?php print theme('item_list', $collection->objects[$key]->data->subject, t('terms'), 'span', array('class' => 'subject'));?>

					<?php print theme('item_list', $collection->objects[$key]->data->type, t('type'), 'span', array('class' => 'type'));?>

					<?php print theme('item_list', $collection->objects[$key]->data->format, t('format'), 'span', array('class' => 'format'));?>

					<?php print theme('item_list', $collection->objects[$key]->data->source, t('source'), 'span', array('class' => 'source'));?>

					<?php print theme('item_list', $collection->objects[$key]->data->publisher, t('publisher'), 'span', array('class' => 'publisher'));?>

					<?php print theme('item_list', $collection->objects[$key]->data->language, t('language'), 'div', array('class' => 'language'));?>

					<ul class="types">
						<li class="out">out</li>
						<li class="reserved">reserved</li>					
						<li class="available">available</li>										
					</ul>

				</div>

				<div class="cart">

					<ul>
						<li><a href="">reserver nu</a></li>
						<li><a href="">læg i kurv</a></li>
					</ul>

				</div>

			</div>
			<?php 
			} //foreach collection
			?>
		</div>

	</div>	
	<div class="content-right">
	 campagner...
	</div>
	
</div>	