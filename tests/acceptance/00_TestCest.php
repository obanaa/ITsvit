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
*/
    /**
     * @tr-suite 10
     * @tr-case 130
     */

    function featuresOnBigDataPage ( \Page\MainPage $mainPage){
        $mainPage->headerLinks();  }
/*
    function T2FooterLinks( \Page\MainPage $mainPage) {
        $mainPage->footerLinks();
        $mainPage->socialFooterLinks();    }

    function T3MainPage( \Page\MainPage $mainPage){
        $mainPage->sliderBlock();
        $mainPage->whoWeAreSlider();
        $mainPage->ourStrengthsBlock();
        $mainPage->whatsNewBlock();
        $mainPage->ourPartnersSlider();     }

    function T4OurServicesPage( \Page\OurServicesPage $ourServicesPage) {
        $ourServicesPage->pageNavigation();     }

    function T5AboutUsPage( \Page\AboutUsPage $aboutUsPage) {
        $aboutUsPage->aboutUsInstagramBlock(); }
*/
    /**
     * @tr-suite 10
     * @tr-case 131
     */

    function validAndInvalidDataInLeaveAMessageBlockOnContactPage  ( \Page\ContactsPage $contactsPage) {
        $contactsPage->invalidLeaveAMessageData('INVALID');
        $contactsPage->validLeaveAMessageData('Test','test@test.com','test message'); }
/*
    function T7DevOpsPage( \Page\DevOpsPage $devOpsPage) {
        $devOpsPage->devOpsFeatures();      }

    function T8WebDevelopmentPage( \Page\WebDevPage $webDevPage){
        $webDevPage ->webDevFeatures();     }

    function T9DesignPage (\Page\DesignPage $designPage ){
        $designPage->designFeatures();    }
*/
    /**
     * @tr-suite 10
     * @tr-case 132
     */

    function headerLinks (\Page\BigDataPage $bigDataPage ){
        $bigDataPage->bigDataFeatures();    }
/*
    function T11QualityAssurancePage (\Page\QualityAssurancePage $qualityAssurancePage ){
        $qualityAssurancePage->qualityAssurancePageFeatures();    }

    function T12DocumentationPage (\Page\DocumentationPage $documentationPage ){
        $documentationPage->documentationFeatures();    }

    function T13BlogPage (\Page\BlogPage $blogPage){
        $blogPage->pageNavigation();
        $blogPage->checkBlocks();    }

/**/
}

