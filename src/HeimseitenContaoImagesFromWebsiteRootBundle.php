<?php

declare(strict_types=1);

/*
 * This file is part of images form website root.
 * 
 * (c) heimseiten.de - Webdesign aus Köln 2021 <info@heimseiten.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/heimseiten/contao-images-from-website-root-bundle
 */

namespace Heimseiten\ContaoImagesFromWebsiteRootBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class HeimseitenContaoImagesFromWebsiteRootBundle
 */
class HeimseitenContaoImagesFromWebsiteRootBundle extends Bundle
{
	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container): void
	{
		parent::build($container);
		
	}
}
