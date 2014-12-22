<div class="row container">
<div class="one">
<a name="anime"></a>
<h2>Anime</h2>
<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Hash</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
	<?php
	if(count($anime) > 0)
	{
		foreach($anime as $row)
		{
			?>	
				<tr>
					<td>
					<?=$row['name']?>
					</td>
					<td>
						<?=$row['category']?>
					</td>
					<td>
						<?=$row['hash']?>
					</td>
					<td>
						<a href="<?=$row['download']?>">[Download]</a>
					</td>
				</tr>
			<?
		}

	}
	?>
  </tbody>
</table>
<a name="applications"></a>
<h2>Applications</h2>
<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Hash</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
	<?php
	if(count($applications) > 0)
	{
		foreach($applications as $row)
		{
			?>	
				<tr>
					<td>
					<?=$row['name']?>
					</td>
					<td>
						<?=$row['category']?>
					</td>
					<td>
						<?=$row['hash']?>
					</td>
					<td>
						<a href="<?=$row['download']?>">[Download]</a>
					</td>
				</tr>
			<?
		}

	}
	?>
  </tbody>
</table>
<a name="books"></a>
<h2>Books</h2>
<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Hash</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
	<?php
	if(count($books) > 0)
	{
		foreach($books as $row)
		{
			?>	
				<tr>
					<td>
					<?=$row['name']?>
					</td>
					<td>
						<?=$row['category']?>
					</td>
					<td>
						<?=$row['hash']?>
					</td>
					<td>
						<a href="<?=$row['download']?>">[Download]</a>
					</td>
				</tr>
			<?
		}

	}
	?>
  </tbody>
</table>
<a name="games"></a>
<h2>Games</h2>
<table class="u-full-width">
  <thead>
	<?php
	if(count($games) > 0)
	{
		foreach($games as $row)
		{
			?>	
				<tr>
					<td>
					<?=$row['name']?>
					</td>
					<td>
						<?=$row['category']?>
					</td>
					<td>
						<?=$row['hash']?>
					</td>
					<td>
						<a href="<?=$row['download']?>">[Download]</a>
					</td>
				</tr>
			<?
		}

	}
	?>
  </tbody>
</table>
<a name="movies"></a>
<h2>Movies</h2>
<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Hash</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
	<?php
	if(count($movies) > 0)
	{
		foreach($movies as $row)
		{
			?>	
				<tr>
					<td>
					<?=$row['name']?>
					</td>
					<td>
						<?=$row['category']?>
					</td>
					<td>
						<?=$row['hash']?>
					</td>
					<td>
						<a href="<?=$row['download']?>">[Download]</a>
					</td>
				</tr>
			<?
		}

	}
	?>
  </tbody>
</table>

<a name="music"></a>
<h2>Music</h2>
<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Hash</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
	<?php
	if(count($music) > 0)
	{
		foreach($music as $row)
		{
			?>	
				<tr>
					<td>
					<?=$row['name']?>
					</td>
					<td>
						<?=$row['category']?>
					</td>
					<td>
						<?=$row['hash']?>
					</td>
					<td>
						<a href="<?=$row['download']?>">[Download]</a>
					</td>
				</tr>
			<?
		}

	}
	?>
  </tbody>
</table>

<a name="other"></a>
<h2>Other</h2>
<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Hash</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
	<?php
	if(count($other) > 0)
	{
		foreach($other as $row)
		{
			?>	
				<tr>
					<td>
					<?=$row['name']?>
					</td>
					<td>
						<?=$row['category']?>
					</td>
					<td>
						<?=$row['hash']?>
					</td>
					<td>
						<a href="<?=$row['download']?>">[Download]</a>
					</td>
				</tr>
			<?
		}

	}
	?>
  </tbody>
</table>

<a name="tv"></a>
<h2>TV</h2>
<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Hash</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
	<?php
	if(count($tv) > 0)
	{
		foreach($tv as $row)
		{
			?>	
				<tr>
					<td>
					<?=$row['name']?>
					</td>
					<td>
						<?=$row['category']?>
					</td>
					<td>
						<?=$row['hash']?>
					</td>
					<td>
						<a href="<?=$row['download']?>">[Download]</a>
					</td>
				</tr>
			<?
		}

	}
	?>
  </tbody>
</table>
<a name="xxx"></a>
<h2>XXX</h2>
<table class="u-full-width">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Hash</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
	<?php
	if(count($xxx) > 0)
	{
		foreach($xxx as $row)
		{
			?>	
				<tr>
					<td>
					<?=$row['name']?>
					</td>
					<td>
						<?=$row['category']?>
					</td>
					<td>
						<?=$row['hash']?>
					</td>
					<td>
						<a href="<?=$row['download']?>">[Download]</a>
					</td>
				</tr>
			<?
		}

	}
	?>
  </tbody>
</table>

</div>
</div>