<?php
/**
 * @package  Joomla.Test
 * @subpackage  AcceptanceTester.Page
 *
 * @copyright   Copyright (C) 20018 - 2019 Open Source Matters, Inc.All rights reserved.
 * @license     GNU General Public License version 2 or later;see LICENSE.txt
 *  7.0.30
 */

namespace Page\Acceptance\Administrator;
/**
 * Acceptance Page object class to menu items page objects.
 *
 * @package Page\Acceptance\Administrator
 *
 * @since __DEPLOY_VERSION__
 */
class MenuItemForm
{
	/**
	 * URL of MenuItems
	 *
	 * @var   string
	 * @since 3.7.3
	 */
	public static $url = "administrator/index.php?option=com_menus&view=items";
	/**
	 * New User Button
	 *
	 * @var   string
	 * @since 3.7.3
	 */
	public static $newButton = ['id' => 'toolbar-new'];
	/**
	 * Menu Item Title
	 *
	 * @var   string
	 * @since 3.7.3
	 */
	public static $menuItemTitle = ['id' => 'jform_title'];
	/**
	 * Menu Item Alias
	 *
	 * @var   string
	 * @since 3.7.3
	 */
	public static $menuItemAlias = ['id' => 'jform_alias'];
	/**
	 * Menu Item Save
	 *
	 * @var   string
	 * @since 3.7.3
	 */
	public static  $saveButton = ['id' => 'toolbar-apply'];
	/**
	 * Page title of the user manager listing page.
	 *
	 * @var   string
	 * @since 3.7.3
	 */
	public static $pageTitleText = "Menus";
	/**
	 * A drop down menu
	 *
	 * @var   string
	 * @since 3.7.3
	 */
	public static $menuDropDown = ['xpath' => '//select[@id="jform_menutype"]'];
	/**
	 * Selecting option from dropdown menu
	 *
	 * @var   string
	 * @since 3.7.3
	 */
	public static $selectOption = ['xpath' => '//select[@id="jform_menutype"]/option[@value="mainmenu"]'];
	/**
	 * Select Menu Type Modal
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $menuTypeModal = ['id' => 'menuTypeModal'];

	/**
	 * Select Article Link
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $articlesLink = ['link' => 'Articles'];
	/**
	 * Archive Articles
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $archiveArticles = ['link' => 'Archived Articles'];
	/**
	 * Success Message
	 *
	 * @var    string
	 * @since  __DEPLOY_VERSION__
	 */
	public static $successMessage = 'Menu item saved';
	/**
	 * Select category
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $selectCategory = ['xpath' => '//*[@id="jform_request_catid"]/option[2]'];
	/**
	* Drop Down Toggle Element.
	*
	* @var    array
	* @since  __DEPLOY_VERSION__
	*/
	public static $dropDownToggle = ['xpath' => "//button[contains(@class, 'dropdown-toggle')]"];
	/**
	 * Selecting category or article
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $select = ['id' => 'jform_request_id_select'];
	/**
	 * Select Menu Type
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $selectMenuType = ['xpath' => '//select[@id=\'jform_request_id\']'];
	/**
	 * Select Archived Article
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $selectArchivedArticle = ['id' => 'jform_request_catid'];
	/**
	 * URL for Wrapper
	 *
	 * @var    array
	 * @since  __DEPLOY_VERSION__
	 */
	public static $wrapperUrl = ['id' => 'jform_params_url'];

}
