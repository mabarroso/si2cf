<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * @When /^I go to an inexistent page$/
     */
    public function iGoToAnInexistentPage()
    {
        $this->getSession()->visit("/404");
    }

    /**
     * @Given /^the response should contain a proper title$/
     */
    public function theResponseShouldContainAProperTitle()
    {
        throw new PendingException();
    }
}