<?php
namespace Nitsanhellobar\NitsanHellobar\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * HellobarController
 */
class HellobarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * hellobarRepository
     *
     * @var \Nitsanhellobar\NitsanHellobar\Domain\Repository\HellobarRepository
     * @inject
     */

    /**
     * @type \TYPO3\CMS\Core\Page\PageRenderer
     * @inject
     */
    protected $pageRenderer;

    protected $hellobarRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
       // $GLOBALS['TSFE']->getPageRenderer()->addHeaderData('<script src="//my.hellobar.com/28f57266d1878bafbcb18d27bd9137332ba1d09e.js" type="text/javascript" charset="utf-8" async="async"></script>');
        //$GLOBALS['TSFE']->getPageRenderer()->addFooterData('<script src="//my.hellobar.com/28f57266d1878bafbcb18d27bd9137332ba1d09e.js" type="text/javascript" charset="utf-8" async="async"></script>');
    }

}