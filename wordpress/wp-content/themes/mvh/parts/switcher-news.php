<?php
$terms = get_terms('category', [
	'post_type' => ['post', 'news'],
	'fields' => 'all',
	'hide_empty' => true,
]);
?>
<form method="GET" class="sorting__form hide" id="filter-news">
	<label for="post-filter-news" class="sorting__label"><?= __('Filtrer les actualités','wp'); ?></label>
	<select id="post-filter-news" name="post-filter-news" class="sorting__select">
		<option value="none" class="sorting__option">Tous</option>
		<?php foreach($terms as $term): ?>
			<option value="<?= $term->slug; ?>"><?= $term->name; ?></option>
		<?php endforeach; ?>
	</select>
</form>