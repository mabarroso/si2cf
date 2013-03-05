<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^I am on homepage$/
     */
    public function iAmOnHomepage()
    {
        throw new PendingException();
    }

    /**
     * @When /^I go to an inexistent page$/
     */
    public function iGoToAnInexistentPage()
    {
        throw new PendingException();
    }

    /**
     * @Then /^the response status code should be (\d+)$/
     */
    public function theResponseStatusCodeShouldBe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^the response should contain "([^"]*)"$/
     */
    public function theResponseShouldContain($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I should see "([^"]*)" in the "([^"]*)" element$/
     */
    public function iShouldSeeInTheElement($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given /^the response should contain a proper title$/
     */
    public function theResponseShouldContainAProperTitle()
    {
        throw new PendingException();
    }
}
