Feature: 404
  In order to see a site not-found page
  As a website user
  I need to be able to reach that page when looking for something that does not exist

  Scenario: Browsing to a page that does not exist
    Given I am on homepage
    When I go to an inexistent page
    Then the response status code should be 404
    And the response should contain "SI2CF</title>"
    And I should see "Page not found" in the "#content" element

