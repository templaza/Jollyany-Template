<?php
/**
* @package      EasyDiscuss
* @copyright    Copyright (C) 2010 - 2017 Stack Ideas Sdn Bhd. All rights reserved.
* @license      GNU/GPL, see LICENSE.php
* EasyDiscuss is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Restricted access');
?>
<div class="<?php echo $post->isPending() ? 'ed-post-pending' : ''; ?> ed-reply-item <?php echo $poll && $poll->isLocked() ? ' is-lockpoll' : '';?>" 
	data-ed-post-item 
	data-ed-reply-item 
	data-id="<?php echo $post->id;?>"
>
	<a name="<?php echo JText::_('COM_EASYDISCUSS_REPLY_PERMALINK');?>-<?php echo $post->id;?>"></a>

	<div class="ed-reply-item__hd">
		<div class="o-row">
			<div class="o-col">
				<div class="o-flag">

					<?php if ($post->isAnonymous()) { ?>
						
						<?php if ($this->config->get('layout_avatar_in_post')) { ?>
						<div class="o-flag__image">
							<img src="<?php echo ED::getDefaultAvatar();?>" width="48" height="48" />
						</div>
						<?php } ?>

						<div class="o-flag__body">
							<?php if ($this->isSiteAdmin) { ?>
							<a class="ed-user-name t-lg-mb--sm" href="<?php echo $post->getOwner()->getPermalink();?>">
								<?php echo JText::_('COM_EASYDISCUSS_ANONYMOUS_USER');?> (<?php echo $post->getOwner()->getName();?>)
							</a>
							<?php } else { ?>
							<a class="ed-user-name t-lg-mb--sm" href="javascript:void(0);"><?php echo JText::_('COM_EASYDISCUSS_ANONYMOUS_USER');?></a>
							<?php } ?>
						</div>
					<?php } ?>
					
					<?php if (!$post->isAnonymous()) { ?>
						<div class="o-flag__image">
							<?php echo $this->html('user.avatar', $post->getOwner(), array('rank' => true, 'status' => false, 'size'=>'md')); ?>
						</div>

						<div class="o-flag__body">
							<a class="ed-user-name o-user-reply" href="<?php echo $post->getOwner()->getPermalink();?>">
								<?php echo $post->getOwner()->getName($post->poster_name); ?>
							</a>
                            <ol class="g-list-inline ed-post-item__post-meta t-mt--sm">
                                <li><span class="o-label o-label--success ed-state-answer"><?php echo JText::_('COM_EASYDISCUSS_ENTRY_ACCEPTED_ANSWER'); ?></span></li>
                                <li><span class="o-label o-label--primary-o ed-state-pending"><?php echo JText::_('COM_EASYDISCUSS_PENDING_MODERATION'); ?></span></li>
                                <li><div class="ed-user-rank o-label o-label--<?php echo $post->getOwner()->getRoleLabelClassname()?>"><?php echo $post->getOwner()->getRole(); ?></div></li>
                            </ol>
						</div>
					<?php } ?>
				</div>        
			</div>
			<div class="o-col">
				<div class="pull-right">
					<?php if (!$post->isPending()) { ?>
						<?php echo $this->output('site/post/default.actions', array('post' => $post)); ?>
					<?php } else { ?>
						<?php echo $this->output('site/post/default.moderator.actions', array('post' => $post)); ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="ed-reply-item__bd">
		
		<div data-ed-reply-editor></div>

		<div class="o-row">
			<?php echo $this->output('site/post/default.vote', array('post' => $post)); ?>

			<div class="ed-reply-content">
				<?php echo $post->getContent(true); ?>
			</div>

			<div class="ed-post-widget-group t-lg-mb--lg">
				<?php if ($post->hasPolls()) { ?>
					<?php echo $this->output('site/post/default.polls', array('post' => $post)); ?>
				<?php } ?>

				<?php if ($post->hasAttachments()) { ?>
					<?php echo $this->output('site/post/default.attachments', array('post' => $post)); ?>
				<?php } ?>
				
				<?php echo $this->output('site/post/default.fields', array('post' => $post)); ?>

				<?php echo $this->output('site/post/default.references', array('post' => $post, 'composer' => $composer)); ?>

				<?php echo $this->output('site/post/default.site.detail', array('post' => $post, 'composer' => $composer)); ?>
			
			</div>                    
			
			<?php echo ED::likes()->button($post); ?>

			<?php echo $this->output('site/post/default.signature', array('post' => $post)); ?>
		</div>
	</div>

	<?php echo $this->output('site/post/default.location', array('post' => $post)); ?>
	
	<?php if ($this->config->get('main_comment')) { ?>
		<div class="ed-reply-item__comments-wrap">
			<?php echo $this->output('site/comments/default', array('post' => $post)); ?>
		</div>
	<?php } ?>

	<div class="ed-reply-item__ft">
		<ol class="g-list-inline g-list-inline--dashed">
			<li><span class=""><?php echo $post->getDuration(); ?></span></li>
			<li>
				<a href="<?php echo EDR::getCategoryRoute($post->getCategory()->id); ?>"><?php echo JText::_($post->getCategory()->title); ?></a>
			</li>
			<li>
				<a data-ed-post-reply-seq="<?php echo $post->seq; ?>" href="<?php echo $post->permalink; ?>">
					<?php echo JText::sprintf('COM_EASYDISCUSS_REPLY_PERMALINK_TO', $post->seq); ?>
				</a>
			</li>
			
			<?php if ($post->getLastReplier()) { ?> 
			<li class="current">
				<div class="">
					<span><?php echo JText::_('COM_EASYDISCUSS_VIEW_LAST_REPLY'); ?>: </span>
					<a href="" class="o-avatar o-avatar--sm">
						<img src="<?php echo $post->getLastReplier()->getAvatar(); ?>"/>
					</a>
				</div>
			</li>
			<?php } ?>
		</ol>
	</div>
</div>