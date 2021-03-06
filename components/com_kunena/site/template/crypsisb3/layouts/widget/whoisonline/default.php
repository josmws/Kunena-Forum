<?php
/**
 * Kunena Component
 *
 * @package         Kunena.Template.Crypsis
 * @subpackage      Layout.Statistics
 *
 * @copyright   (C) 2008 - 2016 Kunena Team. All rights reserved.
 * @license         http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die;
?>

<div class="kfrontend">
	<div class="btn-toolbar pull-right">
		<div class="btn-group">
			<div class="btn btn-default btn-small" data-toggle="collapse" data-target="#kwho"></div>
		</div>
	</div>
	<h2 class="btn-link">
		<?php if ($this->usersUrl) : ?>
			<a href="<?php echo $this->usersUrl; ?>">
				<?php echo JText::_('COM_KUNENA_MEMBERS'); ?>
			</a>
		<?php else : ?>
			<?php echo JText::_('COM_KUNENA_MEMBERS'); ?>
		<?php endif; ?>
	</h2>

	<div class="row collapse in" id="kwho">
		<div class="well-small">
			<ul class="unstyled col-md-1 btn-link"><i class="glyphicon glyphicon-user glyphicon-super"></i></ul>
			<ul class="unstyled col-md-11">
			<span>
				<?php echo JText::sprintf('COM_KUNENA_VIEW_COMMON_WHO_TOTAL', $this->membersOnline); ?>
			</span>
				<?php if (!empty($this->onlineList)) : ?>
				<div>
					<?php
					foreach ($this->onlineList as $user)
					{
						$onlinelist[] = $user->getLink();
					}
					?>
					<?php echo implode(', ', $onlinelist); ?>
				</div>
				<?php endif; ?>

				<?php if (!empty($this->hiddenList)) : ?>
				<div>
					<span><?php echo JText::_('COM_KUNENA_HIDDEN_USERS'); ?>:</span>

					<?php
					foreach ($this->hiddenList as $user)
					{
						$hiddenlist[] = $user->getLink();
					}
					?>
					<?php echo implode(', ', $hiddenlist); ?>
				</div>
				<?php endif; ?>

				<?php if (!empty($this->onlineList)) : ?>
				<div class="legend">
					<span><?php echo JText::_('COM_KUNENA_LEGEND'); ?>:</span>
					<span class="kwho-admin">
						<?php echo JText::_('COM_KUNENA_COLOR_ADMINISTRATOR'); ?>
					</span>
					<span class="kwho-globalmoderator">
						<?php echo JText::_('COM_KUNENA_COLOR_GLOBAL_MODERATOR'); ?>
					</span>
					<span class="kwho-moderator">
						<?php echo JText::_('COM_KUNENA_COLOR_MODERATOR'); ?>
					</span>
					<span class="kwho-banned">
						<?php echo JText::_('COM_KUNENA_COLOR_BANNED'); ?>
					</span>
					<span class="kwho-user">
						<?php echo JText::_('COM_KUNENA_COLOR_USER'); ?>
					</span>
					<span class="kwho-guest">
						<?php echo JText::_('COM_KUNENA_COLOR_GUEST'); ?>
					</span>
				</div>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>
