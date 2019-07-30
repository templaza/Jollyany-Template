<?php
/**
* @package      EasyDiscuss
* @copyright    Copyright (C) 2010 - 2016 Stack Ideas Sdn Bhd. All rights reserved.
* @license      GNU/GPL, see LICENSE.php
* EasyDiscuss is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Restricted access');
?>
<div class="ed-forums">
	<?php if ($activeCategory) { ?>
		<?php echo $this->output('site/forums/active', array('activeCategory' => $activeCategory, 'listing' => $listing, 'childs' => $childs)); ?>
	<?php } ?>
	<div class="ed-list">
	<?php if (!empty($threads)) { ?>
		<?php foreach ($threads as $thread) { ?>
			<div class="ed-forum">
				<div class="ed-forum__hd">
					<div class="o-row">
						<div class="o-col-sm o-col-sm--8">
							<div class="o-flag">
								<?php if ($this->config->get('layout_category_show_avatar', true)) { ?>
								<div class="o-flag__image o-flag--top">
									<a class="o-avatar o-avatar--md" href="<?php echo EDR::getForumsRoute($thread->category->id); ?>">
										<img src="<?php echo $thread->category->getAvatar();?>" alt="<?php echo $this->html('string.escape', $thread->category->getTitle());?>" width="24" class="t-lg-mr--sm"/>
									</a>
								</div>
								<?php } ?>
								<div class="o-flag__body">
									<a class="ed-forum__hd-title" href="<?php echo EDR::getForumsRoute($thread->category->id); ?>">
										<?php echo JString::strtoupper($thread->category->getTitle()); ?>
									</a>
									<?php if ($thread->childs) { ?>
										<div class="o-grid t-lg-mt--md">
											<div class="o-grid__cell o-grid__cell--auto-size t-lg-pr--md t-fs--sm">
													<?php echo JText::_('COM_EASYDISCUSS_SUB_CATEGORY'); ?>
											</div>
											<div class="o-grid__cell">
												<ul class="g-list-inline g-list-inline--dashed">
													<?php foreach($thread->childs as $catItem) { ?>
													  <li><a href="<?php echo $catItem->getPermalink() ?>"><?php echo $catItem->getTitle(); ?></a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="o-col-sm"></div>

						<div class="o-col-sm ed-forum-item__col-avatar t-text--center">
							<div>
								<?php echo JText::_('COM_EASYDISCUSS_FORUMS_LAST_REPLY'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="ed-forum__bd">
					<?php if ($thread->posts) { ?>
						<?php echo $this->output('site/forums/item', array('thread' => $thread->posts)); ?>
					<?php } else { ?>
						<div class="t-mt--xl is-empty">
						  <div class="o-empty">
							  <div class="o-empty__content">
								  <i class="o-empty__icon fa fa-book"></i>
								  <div class="o-empty__text"><?php echo JText::_('COM_EASYDISCUSS_FORUMS_CATEGORY_EMPTY_DISCUSSION_LIST'); ?></div>
							  </div>
						  </div>
						</div>
					<?php } ?>
				</div>
				<div class="ed-forum__ft">
					<?php if ($thread->posts && $this->my->id) { ?>
					<a href="<?php echo EDR::_('view=categories&layout=listings&category_id=' . $thread->category->id . '&filter=unread'); ?>">
						<?php echo JText::_('COM_ED_VIEW_UNREAD_POSTS') ; ?> &rarr;
					</a>
					&nbsp;
					<?php } ?>

					<?php if (!$thread->category->container) { ?>
					<a href="<?php echo EDR::getCategoryRoute($thread->category->id); ?>">
						<?php echo $thread->posts ? JText::_('COM_EASYDISCUSS_FORUMS_VIEW_ALL_POST') : JText::_('COM_EASYDISCUSS_FORUMS_VIEW_CATEGORY') ; ?> &rarr;
					</a>
					<?php } ?>

					<?php if ($thread->posts) { ?>
					<span class="pull-right"><?php echo JText::sprintf('COM_EASYDISCUSS_FORUMS_COUNT_POST', count($thread->posts), $thread->category->getTotalPosts()); ?></span>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

	<?php } else { ?>
		<div class="ed-forum">
			<div class="ed-forum__empty t-mt--xl is-empty">
				<div class="o-empty">
					<div class="o-empty__content">
						<i class="o-empty__icon fa fa-book"></i>
						<div class="o-empty__text"><?php echo JText::_('COM_EASYDISCUSS_FORUMS_EMPTY_THREAD');?></div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>
</div>

<?php if (isset($pagination)) { ?>
	<div class="ed-pagination">
		<?php echo $pagination->getPagesLinks();?>
	</div>
<?php } ?>

<?php if ($this->config->get('layout_board_stats') && $this->acl->allowed('board_statistics')) { ?>
	<?php echo $this->html('forums.stats'); ?>
<?php } ?>
