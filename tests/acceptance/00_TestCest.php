<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
/*
    function T1Links( \Page\MainPage $mainPage)    {
        $mainPage->headerLinks();
        $mainPage->footerLinks();
        $mainPage->socialFooterLinks();
       // $mainPage->whatsNewBlock();
    }
*//**/
    function T1HeaderLinks ( \Page\MainPage $mainPage){
        $mainPage->headerLinks();  }

    function T2FooterLinks( \Page\MainPage $mainPage) {
        $mainPage->footerLinks();
        $mainPage->socialFooterLinks();    }

    function T3MainPage( \Page\MainPage $mainPage){
     //   $mainPage->sliderBlock();
        $mainPage->whoWeAreSlider();
        $mainPage->ourStrengthsBlock();
        $mainPage->whatsNewBlock();
        $mainPage->ourPartnersSlider();     }

    function T4OurServicesPage( \Page\OurServicesPage $ourServicesPage) {
        $ourServicesPage->pageNavigation();     }

    function T5AboutUsPage( \Page\AboutUsPage $aboutUsPage) {
        $aboutUsPage->aboutUsInstagramBlock(); }

    function T6ValidAndInvalidDataOnContactPage  ( \Page\ContactsPage $contactsPage) {
        $contactsPage->invalidLeaveAMessageData('INVALID');
        $contactsPage->validLeaveAMessageData('Test','test@test.com','test message'); }

    function T7DevOpsPage( \Page\DevOpsPage $devOpsPage) {
        $devOpsPage->devOpsFeatures();      }

    function T8WebDevelopmentPage( \Page\WebDevPage $webDevPage){
        $webDevPage ->webDevFeatures();     }

    function T9DesignPage (\Page\DesignPage $designPage ){
        $designPage->designFeatures();    }

    function T10QualityAssurancePage (\Page\QualityAssurancePage $qualityAssurancePage ){
        $qualityAssurancePage->qualityAssurancePageFeatures();    }

    function T11DocumentationPage (\Page\DocumentationPage $documentationPage ){
        $documentationPage->documentationFeatures();    }

    function T12BigDataPage   (\Page\BigDataPage $bigDataPage ){
        $bigDataPage->bigDataFeatures();    }

    function T13BlogPage (\Page\BlogPage $blogPage){
        $blogPage->pageNavigation();
        $blogPage->checkBlocks();    }

    function T14Portfolio ( \Page\PortfolioPage $portfolioPage)    {
        $portfolioPage->portfolioTabs();
        $portfolioPage->webDevelopmentTabs();
        $portfolioPage->qaTabs();
        $portfolioPage->documentationTabs();
        $portfolioPage->devOpsTabs();
        $portfolioPage->designTabs();
        $portfolioPage->bigDataTabs();    }

/**/
}

