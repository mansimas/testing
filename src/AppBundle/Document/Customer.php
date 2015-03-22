<?php
 
 /*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Document;

use ONGR\ElasticsearchBundle\Annotation as ES;
use ONGR\ElasticsearchBundle\Document\AbstractDocument;

/**
 * @ES\Document
 */
class Customer extends AbstractDocument
{
    /**
     * @var string
     *
     * @ES\Property(name="name", type="string")
     */
    public $name;

    /**
     * @var string
     *
     * @ES\Property(name="email", type="string", analyzer="simple")
     */
    public $email;

    // Setters and getters boilerplate follows:
    // ...



}

