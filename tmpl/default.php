<?php
/**
 * @package    M.S. Social Module
 *
 * @author     Koen Vandezande <koen@rioguides.biz>
 * @copyright  RioGuides.Biz
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://rioguides.biz
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

// Access to module parameters
$instagram = $params->get('instagram', 'koenvdx');
$whatsapp = $params->get('whatsapp', '5521985906685');
// Load the smart search component language file.
$lang = $app->getLanguage();
$lang->load('mod_mssocial', JPATH_SITE);
?>

<div class="social_wrapper">
  <div class="social_icons">
    <a id="contacteme" class="social_icon social_icon_uk" href="#"><i class="fal fa-envelope fa-2x"></i></a>
    <a class="social_icon social_icon_1" target="_blank" href="https://www.instagram.com/<?php echo $instagram; ?>/"><i class="fab fa-instagram fa-2x"></i></a>
    <a class="social_icon social_icon_2" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp; ?>"><i class="fab fa-whatsapp fa-2x"></i></a>
  </div>
</div>
