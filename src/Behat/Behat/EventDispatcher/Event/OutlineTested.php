<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\EventDispatcher\Event;

use Behat\Gherkin\Node\FeatureNode;
use Behat\Gherkin\Node\NodeInterface;
use Behat\Gherkin\Node\OutlineNode;
use Behat\Testwork\EventDispatcher\Event\LifecycleEvent;

/**
 * Represents an outline event.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
abstract class OutlineTested extends LifecycleEvent implements GherkinNodeTested
{
    const BEFORE = 'tester.outline_tested.before';
    const AFTER = 'tester.outline_tested.after';

    /**
     * Returns feature.
     *
     * @return FeatureNode
     */
    abstract public function getFeature();

    /**
     * Returns outline node.
     *
     * @return OutlineNode
     */
    abstract public function getOutline();

    /**
     * Returns node.
     *
     * @return NodeInterface
     */
    final public function getNode()
    {
        return $this->getOutline();
    }
}
