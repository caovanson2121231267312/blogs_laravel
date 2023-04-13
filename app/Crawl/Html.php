<?php

namespace App\Crawl;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Tag;
use App\Models\Article;

class Html
{
    public function html()
    {
        $html = public_path() . '/html.html';

        $doc = new \DOMDocument();
        $doc->encoding = 'UTF-8';
        $htmltext = file_get_contents($html);
        $doc->loadHTML(mb_convert_encoding($htmltext, 'HTML-ENTITIES', 'UTF-8'));

        $elements = $doc->getElementsByTagName('*');
        foreach ($elements as $element) {
            $element->removeAttribute('class');
            $element->removeAttribute('id');
        }

        $h2Elements = $doc->getElementsByTagName('h2');
        $strongElements = $doc->getElementsByTagName('strong');

        foreach ($h2Elements as $h2) {
            $h2->setAttribute('id', $this->to_slug($h2->nodeValue));
            $h2->setAttribute('class', 'h2 code-h2');
            foreach ($strongElements as $strong) {
                while ($strong->childNodes->length > 0) {
                    $child = $strong->childNodes->item(0);
                    $strong->parentNode->insertBefore($child, $strong);
                }
                $strong->parentNode->removeChild($strong);
            }
        }

        $h3Elements = $doc->getElementsByTagName('h3');
        foreach ($h3Elements as $h3) {
            $h3->setAttribute('id', $this->to_slug($h3->nodeValue));
            $h3->setAttribute('class', 'h3 code-h3');
        }

        $h1Elements = $doc->getElementsByTagName('h1');
        foreach ($h1Elements as $h1) {
            $h1->setAttribute('id', $this->to_slug($h1->nodeValue));
            $h1->setAttribute('class', 'h1 code-h1');
        }

        $data = ['ul', 'p', 'a'];
        foreach ($data as $value) {
            $elements = $doc->getElementsByTagName($value);
            foreach ($elements as $key => $ul) {
                $ul->setAttribute('id', $value . "-" . $key * rand(10, 10000000) * 123);
                $ul->setAttribute('class', 'code-' . $value);
            }
        }

        $data1 = ['em', 'span', 'blockquote', 'label', 'table', 'tr', 'td', 'th'];
        foreach ($data1 as $value) {
            $elements = $doc->getElementsByTagName($value);
            foreach ($elements as $key => $ul) {
                $ul->setAttribute('class', 'code-' . $value);
            }
        }

        $aElements = $doc->getElementsByTagName('a');
        foreach ($aElements as $a) {
            $href = $a->getAttribute('href');
            $a->setAttribute('href', '');
            $title = $a->getAttribute('title');
            $a->setAttribute('title', $this->removeAllSpace($a->nodeValue));
            // $a->setAttribute('title', $this->to_slug($a->nodeValue, " "));
            $a->removeAttribute('target');
        }

        $htmltext = html_entity_decode($doc->saveHTML(), ENT_COMPAT, 'UTF-8');
        $htmltext = $this->removeAllSpace($htmltext);
        file_put_contents($html, $htmltext);
    }

    // <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd"> <html><body>

    function to_slug($str, $char = "-")
    {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', $char, $str);
        return $str;
    }

    function removeAllSpace($str)
    {
        return preg_replace('/\s+/', ' ', str_replace(array("\r", "\n"), " ", $str));
    }
}