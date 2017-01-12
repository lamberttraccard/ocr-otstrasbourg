<?php
if ( have_rows( 'activity', 'option' ) ):

	$activitiesToSort = get_field( 'activity', 'option' );
	$activitiesBySchedule = activities_by_schedule( $activitiesToSort );
	?>

	<?php foreach ( $activitiesBySchedule as $schedule => $activities ): ?>

	<h2>Activités le <?php echo $schedule; ?></h2>
	<table>
		<?php foreach ( $activities as $key => $activity ): ?>

			<tr>
				<td>
					<?php echo wp_get_attachment_image( $activity['image'], 'thumbnail' ); ?>
				</td>
				<td>
					<h3><?php echo $activity['title']; ?></h3>
					<?php echo $activity['description_short']; ?>
				</td>
				<td>
					<form class="activity-register-form" action="">
						<input type="hidden" name="schedule" value="<?php echo $schedule ?>">
						<input type="hidden" name="title" value="<?php echo $activity['title'] ?>">
						<p>
							<label for="name">Votre nom:</label>
							<input type="text" id="name" name="name" value="">
						</p>

						<!-- Echo link to plus d'infos page + anchor to the activity -->
						<a href="<?php echo get_page_link(96) . '#' . $key ?>" class="button small alt">Détails</a>
						<input type="submit" value="Inscription" class="button small">
					</form>
				</td>
			</tr>

		<?php endforeach; ?>
	</table>
<?php endforeach; ?>
<?php endif; ?>