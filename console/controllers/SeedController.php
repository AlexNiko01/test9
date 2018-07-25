<?php


namespace console\controllers;

use yii\console\Controller;
use common\models\Page;
use common\models\PageTranslation;

class SeedController extends Controller
{

    public function actionIndex()
    {
//        $home = new Page();
//        $about = new Page();
//        $news = new Page();
//        $services = new Page();
//        $publications = new Page();
//        $contacts = new Page();
//
//        $home->main_slug = 'home';
//        if ($home->save()) {
//            $homeTranslationEn = new PageTranslation();
//            $homeTranslationEn->page_id = $home->id;
//            $homeTranslationEn->name = 'home';
//            $homeTranslationEn->slug = 'home';
//            $homeTranslationEn->lang = 'en';
//            $homeTranslationEn->save();
//
//
//            $homeTranslationUa = new PageTranslation();
//            $homeTranslationUa->page_id = $home->id;
//            $homeTranslationUa->name = 'головна';
//            $homeTranslationUa->slug = 'golovna';
//            $homeTranslationUa->lang = 'ua';
//            $homeTranslationUa->save();
//
//            $homeTranslationRu = new PageTranslation();
//            $homeTranslationRu->page_id = $home->id;
//            $homeTranslationRu->name = 'главная';
//            $homeTranslationRu->slug = 'glavnaya';
//            $homeTranslationRu->lang = 'ru';
//            $homeTranslationRu->save();
//        }
//
//        $about->main_slug = 'about-us';
//        if ($about->save()) {
//            $aboutTranslationEn = new PageTranslation();
//            $aboutTranslationEn->page_id = $about->id;
//            $aboutTranslationEn->name = 'about-us';
//            $aboutTranslationEn->slug = 'about-us';
//            $aboutTranslationEn->lang = 'en';
//            $aboutTranslationEn->save();
//
//
//            $aboutTranslationUa = new PageTranslation();
//            $aboutTranslationUa->page_id = $about->id;
//            $aboutTranslationUa->name = 'про нас';
//            $aboutTranslationUa->slug = 'pro-nas';
//            $aboutTranslationUa->lang = 'ua';
//            $aboutTranslationUa->save();
//
//            $aboutTranslationUa = new PageTranslation();
//            $aboutTranslationUa->page_id = $about->id;
//            $aboutTranslationUa->name = 'о нас';
//            $aboutTranslationUa->slug = 'o-nas';
//            $aboutTranslationUa->lang = 'ru';
//            $aboutTranslationUa->save();
//        }
//
//
//        $services->main_slug = 'services';
//        if ($services->save()) {
//            $servicesTranslationEn = new PageTranslation();
//            $servicesTranslationEn->page_id = $services->id;
//            $servicesTranslationEn->name = 'services';
//            $servicesTranslationEn->slug = 'services';
//            $servicesTranslationEn->lang = 'en';
//            $servicesTranslationEn->save();
//
//            $servicesTranslationUa = new PageTranslation();
//            $servicesTranslationUa->page_id = $services->id;
//            $servicesTranslationUa->name = 'послуги';
//            $servicesTranslationUa->slug = 'poslugy';
//            $servicesTranslationUa->lang = 'ua';
//            $servicesTranslationUa->save();
//
//            $servicesTranslationRu = new PageTranslation();
//            $servicesTranslationRu->page_id = $services->id;
//            $servicesTranslationRu->name = 'сервисы';
//            $servicesTranslationRu->slug = 'servisy';
//            $servicesTranslationRu->lang = 'ru';
//            $servicesTranslationRu->save();
//        }
//
//        $publications->main_slug = 'publications';
//        if ($publications->save()) {
//            $publicationsTranslationEn = new PageTranslation();
//            $publicationsTranslationEn->page_id = $publications->id;
//            $publicationsTranslationEn->name = 'publications';
//            $publicationsTranslationEn->slug = 'publications';
//            $publicationsTranslationEn->lang = 'en';
//            $publicationsTranslationEn->save();
//
//            $publicationsTranslationUa = new PageTranslation();
//            $publicationsTranslationUa->page_id = $publications->id;
//            $publicationsTranslationUa->name = 'статті';
//            $publicationsTranslationUa->slug = 'publikaciyi';
//            $publicationsTranslationUa->lang = 'ua';
//            $publicationsTranslationUa->save();
//
//            $publicationsTranslationRu = new PageTranslation();
//            $publicationsTranslationRu->page_id = $publications->id;
//            $publicationsTranslationRu->name = 'cтатьи';
//            $publicationsTranslationRu->slug = 'publikacii';
//            $publicationsTranslationRu->lang = 'ru';
//            $publicationsTranslationRu->save();
//        }
//        $news->main_slug = 'news';
//        if ($news->save()) {
//            $newsTranslationEn = new PageTranslation();
//            $newsTranslationEn->page_id = $news->id;
//            $newsTranslationEn->name = 'news';
//            $newsTranslationEn->slug = 'news';
//            $newsTranslationEn->lang = 'en';
//            $newsTranslationEn->save();
//
//            $newsTranslationUa = new PageTranslation();
//            $newsTranslationUa->page_id = $news->id;
//            $newsTranslationUa->name = 'новини';
//            $newsTranslationUa->slug = 'novini';
//            $newsTranslationUa->lang = 'ua';
//            $newsTranslationUa->save();
//
//            $newsTranslationRu = new PageTranslation();
//            $newsTranslationRu->page_id = $news->id;
//            $newsTranslationRu->name = 'новости';
//            $newsTranslationRu->slug = 'novosti';
//            $newsTranslationRu->lang = 'ru';
//            $newsTranslationRu->save();
//        }
//
//        $contacts->main_slug = 'contacts';
//        if ($contacts->save()) {
//            $contactsTranslationEn = new PageTranslation();
//            $contactsTranslationEn->page_id = $contacts->id;
//            $contactsTranslationEn->name = 'contacts';
//            $contactsTranslationEn->slug = 'contacts';
//            $contactsTranslationEn->lang = 'en';
//            $contactsTranslationEn->save();
//
//            $contactsTranslationUa = new PageTranslation();
//            $contactsTranslationUa->page_id = $contacts->id;
//            $contactsTranslationUa->name = 'контакти';
//            $contactsTranslationUa->slug = 'kontakti';
//            $contactsTranslationUa->lang = 'ua';
//            $contactsTranslationUa->save();
//
//            $contactsTranslationRu = new PageTranslation();
//            $contactsTranslationRu->page_id = $contacts->id;
//            $contactsTranslationRu->name = 'контакты';
//            $contactsTranslationRu->slug = 'kontakty';
//            $contactsTranslationRu->lang = 'ru';
//            $contactsTranslationRu->save();
//        }


        $morgunSergey = new Page();
        $morgunSergey->main_slug = 'morgun-sergey';
        if ($morgunSergey->save()) {
            //TODO: change parent id to $about->id
            $morgunSergey->parent_id = 2;
            $morgunSergeyTranslationEn = new PageTranslation();
            $morgunSergeyTranslationEn->page_id = $morgunSergey->id;
            $morgunSergeyTranslationEn->name = 'Morgun Sergey';
            $morgunSergeyTranslationEn->slug = 'morgun-sergey';
            $morgunSergeyTranslationEn->lang = 'en';
            $morgunSergeyTranslationEn->save();

            $morgunSergeyTranslationUa = new PageTranslation();
            $morgunSergeyTranslationUa->page_id = $morgunSergey->id;
            $morgunSergeyTranslationUa->name = 'Моргун Сергій';
            $morgunSergeyTranslationUa->slug = 'morgun-sergii';
            $morgunSergeyTranslationUa->lang = 'ua';
            $morgunSergeyTranslationUa->save();

            $morgunSergeyTranslationRu = new PageTranslation();
            $morgunSergeyTranslationRu->page_id = $morgunSergey->id;
            $morgunSergeyTranslationRu->name = 'Моргун Сергей';
            $morgunSergeyTranslationRu->slug = 'morgun-sergey';
            $morgunSergeyTranslationRu->lang = 'ru';
            $morgunSergeyTranslationRu->save();
        }
        echo '123';

    }

}