<?php
/**
 * Part of phoenix project. 
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Controller\Post;

use Phoenix\Controller\Display\EditGetController;

/**
 * The GetController class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class GetController extends EditGetController
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'post';

	/**
	 * Property itemName.
	 *
	 * @var  string
	 */
	protected $itemName = 'post';

	/**
	 * Property listName.
	 *
	 * @var  string
	 */
	protected $listName = 'posts';
}