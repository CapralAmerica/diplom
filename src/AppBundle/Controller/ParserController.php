<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CompetitorsItems;
use AppBundle\Traits\ParserTrait;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use DiDom\Document;

class ParserController extends Controller
{
    use ParserTrait;
    /**
     * @Route("admin/parser", name="parser")
     */
    public function parserAction()
    {
        $em = $this->getDoctrine()->getManager();
        $competitors = $em->getRepository('AppBundle\Entity\Competitors')->findAll();

        $user_agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36';
        $cookie_path = __DIR__.'src/AppBundle/Traits/Cookie.txt';


        $urlContent_lambre = $this->getUrlContent($competitors[0]->getUrl(),$user_agent, $cookie_path);

        $document = new Document();

        $document->loadHtml($urlContent_lambre);
        $item_names_lambre = $document->find('.productpage__title');
        $prices_lambre = $document->find('.product__price');


        $result_lambre = array();
        foreach ($item_names_lambre as $name) {
            foreach ($prices_lambre as $price) {
                $result_lambre = array_merge($result_lambre, array(
                    $name->text() => $price->text())
                );
            }
        }


            $item = new CompetitorsItems();
            $item->setCompetitor(
                $em->getRepository('AppBundle\Entity\Competitors')->find(1)
            );
            $item->setItem($item_names_lambre[0]->text());
            $item->setPrice($prices_lambre[0]->text());
            $em->persist($item);


        $urlContent_bigl_ua = $this->getUrlContent($competitors[1]->getUrl(),$user_agent, $cookie_path);

        $document_2 = new Document();

        $document_2->loadHtml($urlContent_bigl_ua);
        $item_names_bigl = $document_2->find('.product-item__name');
        $prices_bigl = $document_2->find('.rus');


        $result_bigl = array();
        foreach ($item_names_bigl as $name) {
            foreach ($prices_bigl as $price) {
                $result_bigl = array_merge($result_bigl, array(
                        $name->text() => $price->text())
                );
            }
        }


            $item_2 = new CompetitorsItems();
            $item_2->setCompetitor(
                $em->getRepository('AppBundle\Entity\Competitors')->find(2)
            );
            $item_2->setItem($item_names_bigl[0]->text());
            $item_2->setPrice($prices_bigl[0]->text());
            $em->persist($item_2);



        $url_makeup = $this->getUrlContent($competitors[3]->getUrl(),$user_agent, $cookie_path);

        $document_3 = new Document();

        $document_3->loadHtml($url_makeup);
        $item_makeup = $document_3->find('.product-item__name');
        $prices_makeup = $document_3->find('.rus');


        $item_3 = new CompetitorsItems();
        $item_3->setCompetitor(
            $em->getRepository('AppBundle\Entity\Competitors')->find(2)
        );
        $item_3->setItem($item_makeup[0]->text());
        $item_3->setPrice($prices_makeup[0]->text());
        $em->persist($item_3);


        $em->flush();

        $url_parfums = $this->getUrlContent($competitors[2]->getUrl(),$user_agent, $cookie_path);

        $document_4 = new Document();

        $document_4->loadHtml($url_parfums);
        $item_parfums = $document_4->find('.productpage__title');
        $prices_parfums = $document_4->find('.product__price');

        $item_4 = new CompetitorsItems();
        $item_4->setCompetitor(
            $em->getRepository('AppBundle\Entity\Competitors')->find(1)
        );
        $item_4->setItem($item_parfums[0]->text());
        $item_4->setPrice($prices_parfums[0]->text());
        $em->persist($item_4);

       return $this->redirect('/admin/parsing/results');
    }

}
