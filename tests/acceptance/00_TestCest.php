<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
/*
    function T1Links( \Page\MainPage $mainPage)
    {
        $mainPage->headerLinks();
        $mainPage->footerLinks();
        $mainPage->socialFooterLinks();
        $mainPage->whatsNewBlock();
    }
*/

/**/
    function T1HeaderLinks( \Page\MainPage $mainPage){
        $mainPage->headerLinks();  }

    function T2FooterLinks( \Page\MainPage $mainPage) {
        $mainPage->footerLinks();
        $mainPage->socialFooterLinks();    }

    function T3MainPageTests( \Page\MainPage $mainPage){
        $mainPage->whoWeAreSlider();
        $mainPage->sliderBlock();
        $mainPage->ourPartnersSlider();
        $mainPage->ourStrengthsBlock();
        $mainPage->whatsNewBlock();
    }

    function T4OurServicesPage( \Page\OurServicesPage $ourServicesPage) {
        $ourServicesPage->pageNavigation(); }

    function T5AboutUsPageInstagramBlock( \Page\AboutUsPage $aboutUsPage) {
        $aboutUsPage->aboutUsInstagramBlock(); }

    function T6ContactsPageInvalidDataLeaveAMessageBlock( \Page\ContactsPage $contactsPage) {
        $contactsPage->invalidLeaveAMessageData('INVALID'); }


    function T7ContactsPageValidDataLeaveAMessageBlock( \Page\ContactsPage $contactsPage) {
        $contactsPage->validLeaveAMessageData('Test','test@test.com','test message'); }

    /**/































}

