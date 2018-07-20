<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Web Publisher Fixtures Bundle.
 *
 * Copyright 2018 Sourcefabric z.u. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2018 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Bundle\FixturesBundle\Faker\Provider;

use Faker\Provider\Base as BaseProvider;

final class ArticleDataProvider extends BaseProvider
{
    public const AUTHORS = [
        'Sarrah Staffwriter',
        'John Smith',
        'Test Persona',
        'Jane Stockwriter',
        'James Q. Reporter',
        'Karen Ruhiger',
        'George Langsamer',
    ];

    public function articleMetadata(): array
    {
        return [
            'located' => 'Sydney',
            'byline' => self::AUTHORS[array_rand(self::AUTHORS)],
            'place' => [
                [
                    'qcode' => 'AUS',
                    'world_region' => 'Rest Of World',
                ], [
                    'qcode' => 'EUR',
                    'world_region' => 'Europe',
                ],
            ],
        ];
    }

    public function articleEmbed(): string
    {
        return '<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BNaM68Cj7kD/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Meet Enzo (right), a #Doogler at our Palo Alto office who loves hosting his pal Olive for campus tours (and striking a few poses).</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Zdjęcie zamieszczone przez użytkownika Google (@google) <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-11-29T21:37:32+00:00">29 Lis, 2016 o 1:37 PST</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script> <paragraph(10)> <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook%2Fposts%2F10154597567106729%3A0&width=500" width="500" height="608" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>';
    }

    public function articleKeywords(): array
    {
        $keywords = [
            'city',
            'traffic',
            'car',
            'news',
            'building',
        ];

        shuffle($keywords);

        return $keywords;
    }
}
