<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Web Publisher Core Bundle.
 *
 * Copyright 2018 Sourcefabric z.ú. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2018 Sourcefabric z.ú.
 * @license http://www.superdesk.org/license
 */

namespace SWP\Bundle\CoreBundle\HttpCache;

use SWP\Bundle\ContentBundle\Model\ArticleInterface;

final class HttpCacheArticleTagGenerator implements HttpCacheArticleTagGeneratorInterface
{
    public function generateTag(ArticleInterface $article): string
    {
        $articleId = $article->getId();
        $tag = "article-$articleId";

        if (null !== ($route = $article->getRoute())) {
            $routeId = $route->getId();

            $tag .= "-route-$routeId";
        }

        return $tag;
    }
}
