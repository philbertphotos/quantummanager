<?php
/**
 * @package    quantummanager
 * @author     Dmitry Tsymbal <cymbal@delo-design.ru>
 * @copyright  Copyright © 2019 Delo Design & NorrNext. All rights reserved.
 * @license    GNU General Public License version 3 or later; see license.txt
 * @link       https://www.norrnext.com
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
?>

<div class="quantummanager-jedreview">
	<div class="quantummanager-jedreview-content">
		<div>
			<span><?php echo Text::_('COM_QUANTUMMANAGER_JEDREIVIEW'); ?></span>
		</div>
		<div>
            <a class="stars" href="https://extensions.joomla.org/extension/quantum-manager/">
                <img class="svg" src="/media/com_quantummanager/images/icons/action/rate-star-button.svg" />
                <img class="svg" src="/media/com_quantummanager/images/icons/action/rate-star-button.svg" />
                <img class="svg" src="/media/com_quantummanager/images/icons/action/rate-star-button.svg" />
                <img class="svg" src="/media/com_quantummanager/images/icons/action/rate-star-button.svg" />
                <img class="svg" src="/media/com_quantummanager/images/icons/action/rate-star-button.svg" />
            </a>
            <a href="https://extensions.joomla.org/extension/quantum-manager/" class="btn" target="_blank"><?php echo Text::_('COM_QUANTUMMANAGER_JEDREIVIEW_REIVEW'); ?></a>
        </div>
		<div>
			<button class="btn btn-close"><?php echo Text::_('COM_QUANTUMMANAGER_JEDREIVIEW_CLOSE'); ?></button>
		</div>
	</div>
</div>
