<?php

namespace App\Models;

class Defines
{
    public static function getFeatures()
    {
        $features = [
            'БЕСПЛАТНАЯ диагностика АКПП,',
            'БЕСПЛАТНЫЙ эвакуатор по Москве,',
            'свыше 150 сервисов-партнёров в Москве и регионах,',
            'гарантия на ремонт без ограничений по пробегу от 6 месяцев до 3х лет,',
            'фиксированные цены на ремонт АКПП,',
            'срок ремонта АКПП 1-3 дня,',
            'любые запчасти для АКПП на складе в наличие,',
            'развитие партнерских программ и акций,',
            'спонсорская поддержка партнеров,',
            'обучение или курсы повышения квалификации механиков,',
            'проведение независимых экспертиз',
        ];

        return $features;
    }

    public static function getBrands()
    {
        $brands = [
            'mercedes'   => ['image' => '/img/models/logos/photo_0.jpg', 'title' => 'Ремонт АКПП', 'subtitle' => 'Mercedes'],
            'audi'       => ['image' => '/img/models/logos/logo_audi_0.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'Audi'],
            'jaguar'     => ['image' => '/img/models/logos/logo_jaguar.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'Jaguar'],
            'land_rover' => ['image' => '/img/models/logos/logo_rover.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'Land Rover'],
            'bmw'        => ['image' => '/img/models/logos/logo_bmw.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'BMW'],
            'other'      => ['image' => '/img/models/logos/logo_other.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'на других авто'],
        ];

        return $brands;
    }

    public static function getPrices()
    {
        $prices = [
            'mercedes'   => [
                ["A CLASS", "2000-2005", "L4 1.4L 1.6L 1.7L 1.9L 2.1L", "722.6", "79.000"],
                ["A CLASS", "2004-2012", "L4 1.5L 1.7L 2.0L", "722,8", "Нет фиксированной цены, звоните"],
                ["A CLASS", "2004-2012", "1.8L 1.8D 2.0D", "722,8", "Нет фиксированной цены, звоните"],
                ["B CLASS", "2005-2012", "L4 1.5L 1.7L 2.0L", "722,8", "Нет фиксированной цены, звоните"],
                ["B CLASS", "2005-2012", "1.8L 1.8D 2.0D", "722,8", "Нет фиксированной цены, звоните"],
                ["C CLASS", "1995-2014", "L4 1.6L 1.8L 2.0L 2.2L 2.3L L5 2.5L V6 2.4L 2.5L 2.6L 2.8L 3.2L", "722,6", "79.000"],
                ["C CLASS", "1998-2007", "L4 2.2L L5 2.7L V6 3.2L V8 4.3L 5.4L", "722,6", "79.000"],
                ["C CLASS", "2000-2014", "L4 2.2L V6 2.5L 3.0L 3.5L V8 6.3L", "722.9 (W7A700)", "89.000 / 110.000"],
                ["C CLASS", "2000-2014", "L4 2.2L V6 3.2L 3.5L", "722,6", "79.000"],
                ["C CLASS", "2007-2014", "V6 3.0L V8 6.3L", "722.9(W7B700)", "89.000 / 110.000"],
                ["C CLASS", "2007-2014", "V6 2.5L 3.0L 3.5L", "722.9(W7X550)", "89.000 / 110.000"],
                ["CL", "1998-2003", "V8 5.0L V12 5.8L", "722,6", "79.000"],
                ["CL", "2001-2013", "V8 5.4L V12 5.5L", "722,6", "79.000"],
                ["CL", "2003-14", "V8 5.0L 5.5L 6.3L", "722.9(W7A700)", "89.000 / 110.000"],
                ["CLC", "2008-2011", "L4 1.6L 1.8L 2.2L", "722,6", "79.000"],
                ["CLC", "2008-2012", "V6 2.5L 3.5L", "722.9(W7A700)", "89.000"],
                ["CLC", "2009-2011", "L4 2.2L", "722,6", "79.000"],
                ["CLK", "1999-2008", "L5 2.7L V8 4.3L 5.4L V8 5.0L 5.4L", "722,6", "79.000"],
                ["CLK", "2000-2002", "V6 3.2L", "722,6", "79.000"],
                ["CLK", "2000-2009", "L4 1.8L 2.0L 2.2L 2.3L V6 2.6L 3.2L", "722,6", "79.000"],
                ["CLK", "2004-2009", "V6 2.5L 3.0L 3.5L V8 5.0L 5.5L 6.3L", "722.9(W7A700)", "89.000"],
                ["CLS", "2004-2014", "V6 3.0L 3.5L V8 4.6L 5.0L 5.4L 5.5L 6.3L", "722.9(W7A700)", "89.000 / 110.000"],
                ["CLS", "2010-2014", "V8 6.3L", "722.9(W7B700)", "89.000"],
                ["E CLASS", "1995-2014", "L4 1.8L 2.0L 2.2L V6 2.4L 2.6L 2.8L 3.0L 3.2L", "722,6", "79.000"],
                ["E CLASS", "1997-2014", "L4 2.2L L5 2.7L V6 3.0L 3.2L 3.5LV8 4.0L 4.3L 5.0L 5.4L 5.5L", "722,6", "79.000"],
                ["E CLASS", "2000-2014", "L4 2.2L V6 2.6L 3.2L 3.5L", "722,6", "79.000"],
                ["E CLASS", "2002-2014", "L4 2.2L V6 2.5L 2.6L 3.0L 3.5L V8 4.0L 5.0L 5.5L 6.3L", "722.9(W7A700)", "89.000 / 110.000"],
                ["E CLASS", "2003-2006", "V8 5.4L", "722,6", "79.000"],
                ["E CLASS", "2009-2014", "V8 5.5L 6.3L", "722.9(W7B700)", "89.000"],
                ["E CLASS", "2009-2014", "V6 3.0L 3.5L V8 5.5L", "722.9(W7X550)", "89.000 / 110.000"],
                ["G WAGEN", "2000-2006", "V6 3.2L", "722,6", "79.000"],
                ["G WAGEN", "2000-2006", "L5 2.7L 2.9L V8 4.0L 5.0L 5.4L", "722,6", "79.000"],
                ["G WAGEN", "2004-2011", "V8 5.4L", "722,6", "79.000"],
                ["G WAGEN", "2006-2014", "V6 3.0L V8 4.0L 4.6L 5.5L", "722.9(W7A700)", "110.000"],
                ["GL CLASS", "2006-2014", "V6 3.0L V8 4.0L 4.6L 5.5L", "722.9(W7A700)", "110.000"],
                ["GLK", "2008-2014", "L4 2.2L V6 3.0L 3.5L", "722.9 (W7X550)", "110.000"],
                ["GLK", "2009-2014", "V6 3.0L", "722.9(W7A700)", "110.000"],
                ["ML CLASS", "1998-2005", "L5 2.7L V6 3.7L V8 4.0L 4.3L 5.0L 5.4L 5.5L", "722,6", "79.000"],
                ["ML CLASS", "2000-2002", "V6 3.2L", "722,6", "79.000"],
                ["ML CLASS", "2000-2005", "V6 3.2L", "722,6", "79.000"],
                ["ML CLASS", "2005-2014", "V6 3.0L 3.5L V8 4.0L 4.6L 5.0L 5.5L 6.3L", "722.9(W7A700)", "110.000"],
                ["R CLASS", "2005-2014", "V6 3.0L 3.5L V8 4.6L 5.0L 5.5L", "722.9(W7A700)", "110.000"],
                ["S CLASS", "1996-2012", "V6 3.2L 3.5L 3.7L V8 4.0L 4.3L V12 5.8L", "722,6", "79.000"],
                ["S CLASS", "2000-2005", "V6 3.2L", "722,6", "79.000"],
                ["S CLASS", "2000-2005", "V6 2.8L", "722,6", "79.000"],
                ["S CLASS", "2002-11", "V8 5.4L V12 5.5L", "722,6", "79.000"],
                ["S CLASS", "2004-2012", "V12 6.0L", "722,6", "79.000"],
                ["S CLASS", "2005-2014", "L4 2.2L V6 3.0L 3.5L V8 4.0L 4.3L 4.6L 5.5L 6.3L V12 5.5L", "722.9(W7A700)", "110.000"],
                ["S CLASS", "2006-2014", "V6 3.0L 3.5L V8 4.6L 5.5L", "722.9(W7X550)", "110.000"],
                ["SL", "2000-2006", "V6 2.8L 3.2L 3.7L V8 5.0L V12 5.8L", "722,6", "79.000"],
                ["SL", "2002-2011", "V8 5.4L V12 5.5L", "722,6", "79.000"],
                ["SL", "2004-2011", "V12 6.0L", "722,6", "79.000"],
                ["SL", "2005-2014", "V6 3.0L 3.5L V8 5.0L 5.5L", "722.9(W7A700)", "110.000"],
                ["SL", "2007-2014", "V8 6.3L", "722.9(W7B700)", "110.000"],
                ["SLK", "1997-2011", "L4 1.8L 2.0L 2.3L, V6 3.2L", "722,6", "79.000"],
                ["SLK", "2005-2014", "L4 1.8L 2.2L V6 3.0L 3.5L V8 5.4L 5.5L", "722.9(W7A700)", "89.000 / 110.000"],
                ["SLR", "2003-2009", "V8 5.4L", "722,6", "79.000"],
                ["SPRINTER", "2000-2014", "L4 2.2L L5 2.7L V6 3.5L", "722,6", "79.000"],
                ["SPRINTER", "2006-2014", "L4 2.2L V6 3.0L", "722,6", "79.000"],
                ["SPRINTER", "2011-2014", "V6 3.5L", "722.9", "89.000"],
                ["VANEO", "2001-05", "L4 1.7L 1.9L", "722,6", "79.000"],
                ["V-CLASS", "2000-02", "V6 2.8L", "01P", "65.000"],
                ["VIANO", "2003-2014", "L4 2.2L V6 2.5L 3.0L 3.2L 3.5L 3.7L", "722,6", "79.000"],
                ["VIANO", "2011-14", "V6 2.5L 3.5L", "722.9", "89.000"],
                ["VITO", "2003-14", "L4 2.2L V6 3.0L 3.2L 3.7L", "722,6", "79.000"],
                ["VITO", "2010-14", "V6 3.2L", "722.9", "89.000"]
            ],
            'audi'       => [
                ["A1", "2010-16", "L4 1.4L 1.6L", "DQ200", "Цена по запросу"],
                ["A3", "2003-16", "L4 1.6L 1.8L 1.9L 2.0L V6 3.2L", "DQ250 (02E)", "Цена по запросу"],
                ["A3", "2006-13", "L4 2.0L", "09G", "75.000"],
                ["A3", "2007-16", "L3 1.0L L4 1.2L 1.4L 1.6L 1.8L", "DQ200", "Цена по запросу"],
                ["A3", "2011-16", "L5 2.5L", "DQ500", "Цена по запросу"],
                ["A3", "2014", "L4 2.0L", "DQ500", "Цена по запросу"],
                ["A3, QUATTRO", "2006-09", " ", "ZF6HP26A", "80.000"],
                ["A4", "2006-10", "L4 2.0L", "09G", "75.000"],
                ["A4", "2007-13", "L4 2.0L V6 3.0L 3.2L", "ZF6HP28", "80.000"],
                ["A4", "2007-16", "L4 2.0L V6 3.0L 3.2L", "ZF6HP28AF", "80.000"],
                ["A4", "2009-15", "V6 3.0L 3.2L", "ZF6HP26A", "80.000"],
                ["A4", "2010-16", "L4 2.0L", "ZF8HP55AF", "92.000"],
                ["A4/A4 ALLROAD", "2007-16", "L4 2.0L V6 3.0L V8 4.0L 4.2L", "DL501", "Цена по запросу"],
                ["A4/A4 CABRIOLET", "1995-07", "L4 1.8L V6 2.4L 2.6L 2.8L 3.0L", "ZF5HP19FL", "80.000"],
                ["A4/A4 CABRIOLET", "2002-13", "L4 2.0L V6 3.0L V8 4.2L", "ZF6HP26A", "80.000"],
                ["A4/A4 CABRIOLET", "2003-14", "L4 2.0L V6 3.2L 4.2L", "ZF6HP19A", "80.000"],
                ["A5", "2006-16", "L4 2.0L V6 3.0L 3.2L V8 4.2L", "ZF6HP28AF", "80.000"],
                ["A5", "2007-12", "L4 2.0L V6 3.0L 3.2L V8 4.2L", "ZF6HP28", "80.000"],
                ["A5", "2008-16", "L4 2.0L V6 3.0L 3.2L V8 4.2L", "DL501", "Цена по запросу"],
                ["A5", "2010-16", "L4 2.0L V6 3.0L", "ZF8HP55AF", "92.000"],
                ["A6", "2004-11", "V6 2.7L 2.8L 3.0L 3.2L", "ZF6HP19A", "80.000"],
                ["A6", "2004-11", "V6 3.0LV8 4.2L V10 5.0L 5.2L", "ZF6HP26A", "80.000"],
                ["A6", "2008-11", "V6 3.0L", "ZF6HP28A", "80.000"],
                ["A6", "2011-14", "V8 4.0", "ZF8HP90AF", "92.000"],
                ["A6", "2011-16", "L4 2.0L V6 2.8L 3.0L 3.2L V8 4.0L", "DL501", "Цена по запросу"],
                ["A6", "2011-16", "V6 2.7L 2.8L 3.0L V8 4.0L", "ZF8HP55AF", "92.000"],
                ["A6", "2011-16", "L4 2.0L", "ZF8HP55H", "92.000"],
                ["A6", "2014", "L4 2.0L V6 3.0L", "ZF8HP75AF", "92.000"],
                ["A7", "2010-16", "L4 2.0L V6 2.5L 2.8L 3.0L V8 4.0L", "DL501", "Цена по запросу"],
                ["A7", "2010-16", "V6 3.0L V8 4.0L", "ZF8HP55AF", "92.000"],
                ["A7", "2014", "V6 3.0L", "ZF8HP75AF", "92.000"],
                ["A8", "2002-10", "V6 3.0L 3.2L V8 3.7L 4.2L", "ZF6HP19A", "80.000"],
                ["A8", "2003-10", "V8 4.0L 4.2L V10 5.2L V12 6.0L", "ZF6HP26A", "80.000"],
                ["A8", "2009-16", "V6 2.5L 3.0L", "ZF8HP55", "92.000"],
                ["A8", "2009-16", "L4 2.0L V6 2.5L 2.8L 3.0L V8 4.0L 4.2L W12 6.3L", "ZF8HP55AF", "92.000"],
                ["A8", "2009-16", "V8 4.2L", "ZF8HP90AF", "92.000"],
                ["A8", "2011-16", "L4 2.0L", "ZF8HP55H", "92.000"],
                ["A8", "2014", "L4 2.0L V6 2.5L 3.0L V8 4.0L W12 6.3L", "ZF8HP75AF", "92.000"],
                ["ALLROAD", "2002-05", "V6 2.7L V8 4.2L", "ZF5HP19", "80.000"],
                ["ALLROAD", "2006-12", "V6 2.7L 3.0L 3.2L V8 4.2L", "ZF6HP19A", "80.000"],
                ["Q1", "2016", "L3 1.0L 1.4L L4 1.4L 1.6L", "DQ200", "Цена по запросу"],
                ["Q3", "2011-16", "L4 1.6L 2.0L V6 3.2L", "DQ250 (02E)", "Цена по запросу"],
                ["Q3", "2012-16", "L4 2.0L", "DQ500", "Цена по запросу"],
                ["Q5", "2016", "L4 2.0L V6 3.0L", "ZF8HP65A", "92.000"],
                ["Q5", "2008-16", "L4 2.0L V6 3.0L 3.2L", "DL501", "Цена по запросу"],
                ["Q5", "2009-16", "V6 3.2L", "ZF6HP28AF", "80.000"],
                ["Q5", "2010-16", "L4 2.0L V6 3.0L", "ZF8HP55AF", "92.000"],
                ["Q5", "2011-16", "L4 2.0L", "ZF8HP55H", "92.000"],
                ["Q7", "2005-15", "V6 3.0L V8 4.2L", "09D, TR-60SN", "75.000"],
                ["Q7", "2005-15", "V6 3.6L", "ZF6HP19", "80.000"],
                ["Q7", "2008-15", "V12 6.0L", "ZF6HP32", "80.000"],
                ["Q7", "2009-15", "V6 3.0L V8 4.2L", "TR-80SD", "Цена по запросу"],
                ["Q7", "2010-11", "V6 3.6L", "ZF8HP45", "92.000"],
                ["S4/RS4", "2004-09", "V8 4.2L", "ZF6HP19A", "80.000"],
                ["S5", "2008-09", "V8 4.2L", "ZF6HP28A", "80.000"],
                ["S6", "2007-08", "V10 5.2L", "ZF6HP26A", "80.000"],
                ["S6/RS6", "2003-06", "V8 4.2L", "ZF5HP19", "80.000"],
                ["S8", "2007-08", "V10 5.2L", "ZF6HP26A", "80.000"],
                ["TT", "1998-16", "L4 1.8L 2.0L V6 3.2L", "DQ250 (02E)", "Цена по запросу"],
                ["TT", "2003-09", "L4 1.8L 2.0L V6 3.0L", "09G", "75.000"],
                ["TT", "2009-16", "L5 2.5L", "DQ500", "Цена по запросу"],
                ["TT", "2011-16", "L4 1.8L", "DQ200", "Цена по запросу"]
            ],
            'jaguar'     => [
                ["F TYPE", "2013-16", "V6 3.0L V8 5.0L", "ZF8HP70", "92.000"],
                ["F TYPE", "2015-16", "L4 2.0L", "ZF8HP45", "92.000"],
                ["F-PACE", "2016", "L4 2.0L 2.2L V6 3.0L", "ZF8HP50", "92.000"],
                ["S TYPE", "2001-08", "V6 2.5L D2.7L V6 3.0L V8 4.2L", "ZF6HP26", "80.000"],
                ["S TYPE", "2003-05", "V6 2.5L", "ZF6HP19", "80.000"],
                ["X TYPE", "1999-10", "V6 2.0L 2.1L 2.5L 3.0L", "JF506E", "Цена по запросу"],
                ["X TYPE", "2008-10", "L4 2.2L", "TF-80SC", "Цена по запросу"],
                ["XE", "2015-16", "L4 2.0L V6 3.0L V8 5.0L", "ZF8HP45", "92.000"],
                ["XE", "2016", "L4 2.0L", "ZF8HP50", "92.000"],
                ["XE", "2016", "V8 5.0L", "ZF8HP75", "92.000"],
                ["XF", "2006-09", "V6 2.7L D, 3.0L, V8 4.2L", "ZF6HP26", "80.000"],
                ["XF", "2007-10", "V6 3.0L", "ZF6HP21", "80.000"],
                ["XF", "2007-16", "V6 2.7L 3.0L V8 4.2L 5.0L", "ZF6HP28", "80.000"],
                ["XF", "2010-12", "V6 3.0L", "ZF8HP45", "92.000"],
                ["XF", "2010-16", "V6 3.0L", "ZF8HP70", "92.000"],
                ["XF", "2015-16", "L4 2.0L", "ZF8HP45", "92.000"],
                ["XF", "2015-16", "V6 3.0L V8 5.0L", "ZF8HP75", "92.000"],
                ["XF", "2015-16", "L4 2.0L V6 3.0L", "ZF8HP75H", "92.000"],
                ["XF", "2016", "L4 2.0L", "ZF8HP50", "92.000"],
                ["XJ", "2009-16", "V6 3.0L V8 5.0L", "ZF6HP28", "80.000"],
                ["XJ", "2011-16", "L4 2.0L V6 3.0L V8 5.0L", "ZF8HP70", "92.000"],
                ["XJ", "2015-16", "V6 3.0L", "ZF8HP70H", "92.000"],
                ["XJ SERIES", "2001-11", "V6 D2.7L, V8 3.5L 4.2L", "ZF6HP26", "80.000"],
                ["XJ SERIES", "2003-09", "V6 3.0L", "ZF6HP19", "80.000"],
                ["XJ SERIES", "2009-14", "V6 3.0L V8 3.6L 5.0L", "ZF8HP70", "92.000"],
                ["XJ SERIES", "2010-12", "V6 3.0L", "ZF8HP45", "92.000"],
                ["XJ6", "2004-05", "V6 3.0L", "ZF6HP26", "80.000"],
                ["XJ8", "2004-08", "V6 3.5L V8 4.2L", "ZF6HP26", "80.000"],
                ["XJR SUPER", "2004-07", "V8, 4.2L", "ZF6HP26", "80.000"],
                ["XK SERIES", "2003-08", "V8 3.5L 4.2L", "ZF6HP26", "80.000"],
                ["XK SERIES", "2008-11", "V8 5.0L", "ZF6HP28", "80.000"],
                ["XK SERIES", "2011-14", "V8 5.0L", "ZF8HP70", "92.000"],
                ["XK8", "2001-07", "V8, 4.2L", "ZF6HP26", "80.000"]
            ],
            'land_rover' => [
                ["DISCOVERY", "2004-16", "L6 2.7L 3.0L 4.0L 4.4L", "ZF6HP26", "80.000"],
                ["DISCOVERY", "2009-16", "V6 2.7L 3.0L V8 5.0L", "ZF6HP28", "80.000"],
                ["DISCOVERY", "2010-11", "L6 3.7L", "ZF8HP45", "92.000"],
                ["DISCOVERY", "2010-16", "V6 3.0L V8 5.0L", "ZF8HP70", "92.000"],
                ["DISCOVERY(LR3)", "2004-11", "L6 2.7L 3.0L 4.0L 4.4L", "ZF6HP26", "80.000"],
                ["DISCOVERY(LR3)", "2010-11", "L6 3.7L", "ZF8HP45", "92.000"],
                ["FREELANDER", "1999-06", "L4 2.0L L6 2.5L", "JF506E", "Цена по запросу"],
                ["FREELANDER", "2006-14", "L4 2.0L 2.2L L6 3.0L 3.2L", "TF-81SC", "Цена по запросу"],
                ["FREELANDER", "2011-15", "L4 2.2L", "TF-80SC", "Цена по запросу"],
                ["RANGE ROVER", "2001-05", "V8 4.4L", "ZF5HP24", "80.000"],
                ["RANGE ROVER", "2001-06", "L6 2.9L", "5L40E", "100.000/115.000"],
                ["RANGE ROVER", "2010-16", "V6 3.0L V8 4.4L 5.0L", "ZF8HP70", "92.000"],
                ["RANGE ROVER", "2013-16", "V6 3.0L", "ZF8HP70H", "92.000"],
                ["RANGE ROVER", "2014", "L4 2.0L", "ZF8HP75", "92.000"],
                ["RANGE ROVER EVOQUE", "2011-16", "L4 2.0L 2.2L L6 3.0L", "TF-81SC", "Цена по запросу"],
                ["RANGE ROVER EVOQUE", "2011-up", "L4 2.0L 2.2L", "ZF9HP48", "Цена по запросу"],
                ["RANGE ROVER GRAND EVOQUE", "2016", "L4 2.0L", "ZF8HP75", "92.000"],
                ["RANGE ROVER SPORT", "2016", "V6 3.0L", "ZF8HP75", "92.000"],
                ["RANGE ROVER SPORT", "2011-16", "V6 3.0L V8 4.4L 5.0L", "ZF8HP70", "92.000"],
                ["RANGE ROVER SPORT", "2014-16", "V6 3.0L", "ZF8HP70H", "92.000"],
                ["RANGE ROVER/RANGE ROVER SPORT", "2003-10", "L6 2.7L V8 3.6L 4.2L 4.4L", "ZF6HP26X", "80.000"],
                ["RANGE ROVER/RANGE ROVER SPORT", "2009-13", "L6 3.0L V8 4.4L 5.0L", "ZF6HP28", "80.000"]
            ],
            'bmw'        => [
                ["1 SERIES", "2004-07", "L4 1.6L 2.0L", "ZF6HP19", "80.000"],
                ["1 SERIES", "2006-13", "L4 1.6L 2.0L L6 3.0L", "6L45", "100.000/ 115.000"],
                ["1 SERIES", "2007-13", "L4 1.6L 2.0L L6 3.0L", "ZF6HP21", "80.000"],
                ["1 SERIES", "2010-16", "L4 1.6L 2.0L L6 3.0L", "ZF8HP45", "92.000"],
                ["1 SERIES", "2013-16", "L3 1.5L L4 1.6L 2.0L L6 3.0L", "ZF8HP50", "92.000"],
                ["2 SERIES", "2013-16", "L4 2.0L L6 3.0L", "ZF8HP45", "92.000"],
                ["2 SERIES", "2014-16", "L3 1.5L L4 2.0L", "ZF8HP50", "92.000"],
                ["3 SERIES", "1999-16", "L4 2.0L L6 2.5L 3.0L", "ZF6HP19", "80.000"],
                ["3 SERIES", "2000-07", "L4 1.8L/1.9L/2.0L L6 2.0L/2.5L/2.8L/2.9L/3.0L", "5L40E", "100.000/115.000"],
                ["3 SERIES", "2005-11", "L6 3.0L", "ZF6HP26", "80.000"],
                ["3 SERIES", "2006-13", "L6 2.5L 3.0L", "6L45R", "100.000/115.000"],
                ["3 SERIES", "2006-13", "L4 2.0L L6 2.5L 3.0L", "ZF6HP21", "80.000"],
                ["3 SERIES", "2006-13", "L4 2.0L L6 3.0L", "ZF6HP28", "80.000"],
                ["3 SERIES", "2011-16", "L4 1.6L 2.0L L6 3.0L", "ZF8HP45", "92.000"],
                ["3 SERIES", "2011-16", "L4 2.0L L6 3.0L", "ZF8HP70", "92.000"],
                ["3 SERIES", "2012-16", "L3 1.5L L4 2.0L L6 3.0L", "ZF8HP50", "92.000"],
                ["3 SERIES", "2015-16", "L6 3.0L", "ZF8HP75", "92.000"],
                ["3 SERIES", "2015-16", "L4 2.0L", "ZF8HP75H", "92.000"],
                ["3 SERIES GT", "2013-16", "L4 2.0L L6 3.0L", "ZF8HP45", "92.000"],
                ["3 SERIES GT", "2014-16", "L6 3.0L", "ZF8HP70", "92.000"],
                ["3 SERIES GT", "2015-16", "L4 2.0L L6 3.0L", "ZF8HP50", "92.000"],
                ["3 SERIES GT", "2015-16", "L6 3.0L", "ZF8HP75", "92.000"],
                ["3 SERIES GT", "2016", "L4 2.0L", "ZF8HP75H", "92.000"],
                ["4 SERIES", "2013-16", "L4 2.0L L6 3.0L", "ZF8HP45", "92.000"],
                ["4 SERIES", "2013-16", "L6 3.0L", "ZF8HP70", "92.000"],
                ["4 SERIES", "2014-16", "L3 1.5L L4 2.0L L6 3.0L", "ZF8HP50", "92.000"],
                ["4 SERIES", "2016", "L6 3.0L", "ZF8HP75", "92.000"],
                ["4 SERIES GRAN COUPE", "2014-16", "L4 2.0L L6 3.0L", "ZF8HP45", "92.000"],
                ["4 SERIES GRAN COUPE", "2014-16", "L6 3.0L", "ZF8HP75", "92.000"],
                ["4 SERIES GRAN COUPE", "2015-16", "L4 2.0L", "ZF8HP50", "92.000"],
                ["5 SERIES", "2000-11", "L6 2.2L 2.5L 2.8L 2.9L 3.0L V8 4.4L", "5L40E", "100.000/115.000"],
                ["5 SERIES", "2003-10", "L6 2.5L 3.0L V8 4.0L 4.4L 4.8L", "ZF6HP26", "80.000"],
                ["5 SERIES", "2004-08", "L4 2.0L L6 2.2L 2.5L 3.0L", "ZF6HP19", "80.000"],
                ["5 SERIES", "2006-10", "L6 2.5L 3.0L", "6L45", "100.000/115.000"],
                ["5 SERIES", "2006-10", "L4 2.0L L6 2.5L 3.0L", "ZF6HP21", "80.000"],
                ["5 SERIES", "2006-10", "L6 3.0L V8 4.0L 4.8L", "ZF6HP28", "80.000"],
                ["5 SERIES", "2009-16", "L4 2.0L L6 3.0L", "ZF8HP45", "92.000"],
                ["5 SERIES", "2009-16", "L4 2.0L L6 2.5L L6 3.0L V8 4.4L", "ZF8HP70", "92.000"],
                ["5 SERIES", "2013-16", "L6 3.0L", "ZF8HP90", "92.000"],
                ["5 SERIES", "2014-16", "L4 1.6L 2.0L L6 3.0L", "ZF8HP50", "92.000"],
                ["5 SERIES", "2015-16", "L6 3.0L V8 4.0L 4.4L", "ZF8HP70", "92.000"],
                ["5 SERIES", "2015-16", "L4 2.0L", "ZF8HP75H", "92.000"],
                ["5 SERIES GT", "2009-16", "L4 2.0L L6 3.0L", "ZF8HP45", "92.000"],
                ["5 SERIES GT", "2009-16", "L6 3.0L V8 4.4L", "ZF8HP70", "92.000"],
                ["6 SERIES", "2003-08", "V8 4.4L 4.8L", "ZF6HP26", "80.000"],
                ["6 SERIES", "2004-08", "L6 3.0L", "ZF6HP19", "80.000"],
                ["6 SERIES", "2007-11", "L6 3.0L", "ZF6HP21", "80.000"],
                ["6 SERIES", "2007-12", "L6 3.0L V8 4.8L", "ZF6HP28", "80.000"],
                ["6 SERIES", "2007-13", "L6 3.0L", "6L45", "100.000/115.000"],
                ["6 SERIES", "2010-16", "L6 3.0L", "ZF8HP45", "92.000"],
                ["6 SERIES", "2010-16", "L6 3.0L V8 4.0L 4.4L", "ZF8HP70", "92.000"],
                ["6 SERIES", "2015-16", "L6 3.0L", "ZF8HP50", "92.000"],
                ["6 SERIES", "2015-16", "L6 3.0L V8 4.0L 4.4L", "ZF8HP75", "92.000"],
                ["6 SERIES GRAN COUPE", "2012-16", "L6 3.0L", "ZF8HP45", "92.000"],
                ["6 SERIES GRAN COUPE", "2012-16", "L6 3.0L V8 4.0L 4.4L", "ZF8HP70", "92.000"],
                ["6 SERIES GRAN COUPE", "2015-16", "L6 3.0L", "ZF8HP50", "92.000"],
                ["6 SERIES GRAN COUPE", "2015-16", "L6 3.0L V8 4.0L 4.4L", "ZF8HP75", "92.000"],
                ["7 SERIES", "2001-08", "V8 D4.0L D4.4L D4.5L", "ZF6HP32", "80.000"],
                ["7 SERIES", "2001-10", "L6 2.9L 3.0L V8 3.6L 4.0L 4.4L 4.8L V12 6.0L", "ZF6HP26", "80.000"],
                ["7 SERIES", "2003-08", "L6 3.0L", "ZF6HP19", "80.000"],
                ["7 SERIES", "2008-15", "L6 3.0L", "ZF6HP21", "80.000"],
                ["7 SERIES", "2008-15", "L6 3.0L V8 4.4L", "ZF6HP28", "80.000"],
                ["7 SERIES", "2009-15", "L4 2.0L L6 3.0L V8 4.4L", "ZF8HP70", "92.000"],
                ["7 SERIES", "2009-15", "V12 6.0L", "ZF8HP90", "92.000"],
                ["7 SERIES", "2010-15", "L6 3.0L", "ZF8HP45", "92.000"],
                ["7 SERIES", "2015-16", "L6 3.0L V8 4.0L 4.4L V12 6.6L", "ZF8HP75", "92.000"],
                ["7 SERIES", "2016", "L4 2.0L L6 3.0L", "ZF8HP50", "92.000"],
                ["7 SERIES", "2016", "L4 2.0L L6 3.0L", "ZF8HP75H", "92.000"],
                ["X1", "2009-16", "L4 2.0L L6 3.0L", "6L45", "100.000/115.000"],
                ["X1", "2009-16", "L4 2.0L", "ZF6HP21", "80.000"],
                ["X1", "2010-16", "L4 2.0L", "ZF6HP19", "80.000"],
                ["X1", "2010-16", "L4 1.6L 2.0L L6 3.0L", "ZF8HP45", "92.000"],
                ["X3", "2003-10", "L6 2.5L 2.9L 3.0L", "5L40E", "100.000/115.000"],
                ["X3", "2005-07", "L6 3.0L", "ZF6HP26", "80.000"],
                ["X3", "2006-10", "L6 2.5L 3.0L", "6L45R", "100.000/115.000"],
                ["X3", "2006-10", "L6 3.0L", "ZF6HP28", "80.000"],
                ["X3", "2006-11", "L6 3.0L", "ZF6HP19", "80.000"],
                ["X3", "2007-10", "L4 2.0L", "ZF6HP21", "80.000"],
                ["X3", "2010-11", "L4 2.0L L6 2.5L", "ZF8HP23", "92.000"],
                ["X3", "2010-16", "L4 1.6L 2.0L L6 2.5L 3.0L", "ZF8HP45", "92.000"],
                ["X3", "2010-16", "L4 2.0L L6 3.0L", "ZF8HP70", "92.000"],
                ["X3", "2014-16", "L4 2.0L L6 3.0L", "ZF8HP50", "92.000"],
                ["X4", "2014", "L6 3.0L", "ZF8HP75", "92.000"],
                ["X4", "2014-16", "L4 2.0L", "ZF8HP45", "92.000"],
                ["X4", "2014-16", "L4 2.0L", "ZF8HP50", "92.000"],
                ["X4", "2014-16", "L6 3.0L", "ZF8HP70", "92.000"],
                ["X5", "1998-06", "L6 2.9L 3.0L", "5L40E", "100.000/115.000"],
                ["X5", "2003-10", "L6 3.0L V8 4.4L 4.8L", "ZF6HP26", "80.000"],
                ["X5", "2006-12", "L6 3.0L", "ZF6HP21", "80.000"],
                ["X5", "2006-13", "L6 3.0L V8 4.8L", "ZF6HP28", "80.000"],
                ["X5", "2010-11", "L6 3.0L", "ZF8HP23", "92.000"],
                ["X5", "2010-14", "L6 3.0L", "ZF8HP45", "92.000"],
                ["X5", "2010-14", "L4 2.0L", "ZF8HP70", "92.000"],
                ["X5", "2014-16", "L4 2.0L L6 3.0L", "ZF8HP50", "92.000"],
                ["X5", "2014-16", "L6 3.0L V8 4.0L 4.4L", "ZF8HP75", "92.000"],
                ["X5", "2016", "L4 2.0L", "ZF8HP75H", "92.000"],
                ["X6", "2007-10", "L6 3.0L", "ZF6HP21", "80.000"],
                ["X6", "2007-10", "L6 3.0L V8 4.4L", "ZF6HP26", "80.000"],
                ["X6", "2007-14", "L6 3.0L V8 4.4L", "ZF6HP28", "80.000"],
                ["X6", "2010-14", "L6 3.0L", "ZF8HP45", "92.000"],
                ["X6", "2010-14", "L6 3.0L V8 4.4L", "ZF8HP70", "92.000"],
                ["X6", "2014-16", "L4 2.0L L6 3.0L", "ZF8HP50", "92.000"],
                ["X6", "2014-16", "L6 3.0L V8 4.0L 4.4L", "ZF8HP75", "92.000"],
                ["Z3 ROADSTER", "2000-02", "L6 2.5L 2.8L 3.0L 3.2L", "5L40E", "100.000/115.000"],
                ["Z4 ROADSTER", "2012", "L4 2.0L", "ZF8HP45", "92.000"],
                ["Z4 ROADSTER", "2009-16", "L6 3.0L", "6L45", "100.000/115.000"],
                ["Z4 ROADSTER", "2009-16", "L6 2.5L 3.0L", "ZF6HP21", "80.000"],
                ["Z4 ROADSTER", "2011-16", "L4 2.0L", "ZF8HP45", "92.000"],
                ["Z4 ROADSTER/COUPE", "2005-08", "L6 2.5L 3.0L", "ZF6HP19", "80.000"]
            ],
        ];

        return $prices;
    }

    public static function getCompanyPhone()
    {
        return '+7(495)664-41-00';
    }

    public static function getSeries()
    {
        $series = [
            'mercedes'   => [
                'a_class'     => [
                    'title'  => 'A-CLASS',
                    'models' => [
                        'mercedes_A_class' => 'MERCEDES A-CLASS W169'
                    ]
                ],
                'b_class'     => [
                    'title'  => 'B-CLASS',
                    'models' => [
                        'mercedes_b_class' => 'MERCEDES B-CLASS'
                    ]
                ],
                'c_class'     => [
                    'title'  => 'C-CLASS',
                    'models' => [
                        'mercedes_w203' => 'MERCEDES W203'
                    ]
                ],
                'clc_class'     => [
                    'title'  => 'CLC-CLASS',
                    'models' => [
                        'mercedes_clc_class' => 'MERCEDES CLC-CLASS'
                    ]
                ],
                'e_class'     => [
                    'title'  => 'E-CLASS',
                    'models' => [
                        'mercedes_w210' => 'MERCEDES W210',
                        'mercedes_w211' => 'MERCEDES W211',
                        'mercedes_w212' => 'MERCEDES W212',
                    ]
                ],
                's_class'     => [
                    'title'  => 'S-CLASS',
                    'models' => [
                        'mercedes_w220' => 'MERCEDES W220',
                        'mercedes_w221' => 'MERCEDES W221',
                        'mercedes_w222' => 'MERCEDES W222',
                    ]
                ],
                'glk_class'     => [
                    'title'  => 'GLK-CLASS',
                    'models' => [
                        'mercedes_glk_class' => 'MERCEDES GLK-CLASS',
                    ]
                ],
                'ml_class'     => [
                    'title'  => 'ML-CLASS',
                    'models' => [
                        'mercedes_w163' => 'MERCEDES W163',
                        'mercedes_w164' => 'MERCEDES W164',
                        'mercedes_w166' => 'MERCEDES W166',
                    ]
                ],
                'gl_class'     => [
                    'title'  => 'GL-CLASS',
                    'models' => [
                        'mercedes_gl_class_x164' => 'MERCEDES GL-CLASS X164',
                        'mercedes_gl_class_x166' => 'MERCEDES GL-CLASS X166',
                    ]
                ],
                'r_class'     => [
                    'title'  => 'R-CLASS',
                    'models' => [
                        'mercedes_r_class' => 'MERCEDES R-CLASS',
                    ]
                ],
                'gl_class_gelentwagen'     => [
                    'title'  => 'G-CLASS GELENTWAGEN',
                    'models' => [
                        'mercedes_g_class' => 'MERCEDES G-CLASS',
                    ]
                ],
                'cl_class'     => [
                    'title'  => 'CL-CLASS',
                    'models' => [
                        'mercedes_w215' => 'MERCEDES W215',
                        'mercedes_w216' => 'MERCEDES W216',
                    ]
                ],
                'sl_class'     => [
                    'title'  => 'SL-CLASS',
                    'models' => [
                        'mercedes_sl_class' => 'MERCEDES SL-CLASS',
                    ]
                ],
                'slk_class'     => [
                    'title'  => 'SLK-CLASS',
                    'models' => [
                        'mercedes_slk_class' => 'MERCEDES SLK-CLASS',
                    ]
                ],
                'v_class'     => [
                    'title'  => 'V-CLASS',
                    'models' => [
                        'mercedes_v_class' => 'MERCEDES V-CLASS',
                    ]
                ],
                'sprinter'     => [
                    'title'  => 'SPRINTER',
                    'models' => [
                        'mercedes_sprinter' => 'MERCEDES SPRINTER',
                    ]
                ],
            ],
            'audi'       => [
                'a1'     => [
                    'title'  => 'A1',
                    'models' => [
                        'audi_a1' => 'AUDI A1'
                    ]
                ],
                'a3'     => [
                    'title'  => 'A3',
                    'models' => [
                        'audi_a3' => 'AUDI A3'
                    ]
                ],
                'a4'     => [
                    'title'  => 'A4',
                    'models' => [
                        'audi_a4' => 'AUDI A4'
                    ]
                ],
                'a5'     => [
                    'title'  => 'A5',
                    'models' => [
                        'audi_a5' => 'AUDI A5'
                    ]
                ],
                'a6'     => [
                    'title'  => 'A6',
                    'models' => [
                        'audi_a6' => 'AUDI A6'
                    ]
                ],
                'a7'     => [
                    'title'  => 'A7',
                    'models' => [
                        'audi_a7' => 'AUDI A7'
                    ]
                ],
                'a8'     => [
                    'title'  => 'A8',
                    'models' => [
                        'audi_a8' => 'AUDI A8'
                    ]
                ],
                'q3'     => [
                    'title'  => 'Q3',
                    'models' => [
                        'audi_q3' => 'AUDI Q3'
                    ]
                ],
                'q5'     => [
                    'title'  => 'Q5',
                    'models' => [
                        'audi_q5' => 'AUDI Q5'
                    ]
                ],
                'q7'     => [
                    'title'  => 'Q7',
                    'models' => [
                        'audi_q7' => 'AUDI Q7'
                    ]
                ],
                's4'     => [
                    'title'  => 'S4',
                    'models' => [
                        'audi_s4' => 'AUDI S4'
                    ]
                ],
                's5'     => [
                    'title'  => 'S5',
                    'models' => [
                        'audi_s5' => 'AUDI S5'
                    ]
                ],
                's6_rs6' => [
                    'title'  => 'S6/RS6',
                    'models' => [
                        'audi_s6' => 'AUDI S6'
                    ]
                ],
                's8'     => [
                    'title'  => 'S8',
                    'models' => [
                        'audi_s8' => 'AUDI S8'
                    ]
                ],
                'tt'     => [
                    'title'  => 'TT',
                    'models' => [
                        'audi_tt' => 'AUDI TT'
                    ]
                ],
            ],
            'jaguar'     => [
                'x_type' => [
                    'title'  => 'X-Type',
                    'models' => [
                        'x_type' => 'X-Type',
                    ]
                ],
                's_type' => [
                    'title'  => 'S-Type',
                    'models' => [
                        's_type' => 'S-Type',
                    ]
                ],
                'xf'     => [
                    'title'  => 'XF',
                    'models' => [
                        'xf' => 'XF',
                    ]
                ],
                'xk'     => [
                    'title'  => 'XK',
                    'models' => [
                        'xk' => 'XK',
                    ]
                ],
                'xj'     => [
                    'title'  => 'XJ',
                    'models' => [
                        'xj' => 'XJ',
                    ]
                ],
            ],
            'land_rover' => [
                'land_rover'  => [
                    'title'  => 'Land Rover',
                    'models' => [
                        'discovery_3' => 'Land Rover Discovery 3',
                        'discovery_4' => 'Land Rover Discovery 4',
                        'freelander'  => 'Land Rover Freelander',
                    ]
                ],
                'range_rover' => [
                    'title'  => 'Range Rover',
                    'models' => [
                        'classic_vogue' => 'Range Rover Classic (Vogue)',
                        'sport'         => 'Range Rover Sport',
                        'evoque'        => 'Range Rover Evoque',
                    ]
                ]
            ],
            'bmw'        => [
                'x_series' => [
                    'title'  => 'X Серия',
                    'models' => [
                        'bmw_x1_e84'          => 'BMW Х1 Е84',
                        'bmw_e83_x3'          => 'BMW Х3 E83',
                        'bmw_f25'             => 'BMW X3 F25',
                        'bmw_x5_e53'          => 'BMW X5 E53',
                        'bmw_x5_e70'          => 'BMW X5 E70',
                        '6hp28_na_bmw_x5_e70' => '6HP28 НА BMW X5 Е70.',
                        'bmw_f15_x5'          => 'BMW X5 F15',
                        'bmw_x6_e71'          => 'BMW X6 E71',
                        'x6_f16'              => 'X6 F16',
                    ]
                ],
                '1_series' => [
                    'title'  => '1 Серия',
                    'models' => [
                        'bmw_F20_F21'         => 'BMW F20/F21',
                        'bmw_e81_e82_e87_e88' => 'BMW E81 E82 E87 E88',
                    ]
                ],
                '3_series' => [
                    'title'  => '3 Серия',
                    'models' => [
                        'bmw_e90'     => 'BMW E90/E91/E92/E93',
                        'bmw_f30_f31' => 'BMW F30/F31',
                    ]
                ],
                '5_series' => [
                    'title'  => '5 Серия',
                    'models' => [
                        'bmw_e60'     => 'BMW E60/E61',
                        'bmw_f10_f11' => 'BMW F10/F11/F07',
                    ]
                ],
                '6_series' => [
                    'title'  => '6 Серия',
                    'models' => [
                        'bmw_e63_e64'     => 'BMW Е63/E64',
                        'bmw_f12_f13_f06' => 'BMW F12/F13/F06',
                    ]
                ],
                '7_series' => [
                    'title'  => '7 Серия',
                    'models' => [
                        'bmw_e_65_66' => 'BMW Е65/66',
                        'bmw_f01'     => 'BMW F01/F02',
                    ]
                ],
                'z_series' => [
                    'title'  => 'Z Серия',
                    'models' => [
                        'bmw_z4' => 'BMW Z4 E85/E86/E89',
                    ]
                ],
            ],
            'other'      => [
                'title'  => 'Другие',
                'models' => [
                    'aston_martin' => 'Aston Martin',
                    'bentley'      => 'Bentley',
                    'chrysler'     => 'Chrysler',
                    'dodge'        => 'DODGE',
                    'daimler'      => 'Daimler',
                    'jeep'         => 'Jeep',
                    'kia'          => 'Kia',
                    'lancia'       => 'Lancia',
                    'lincoln'      => 'Lincoln',
                    'maserati'     => 'Maserati',
                    'porsche'      => 'Porsche',
                    'rr'  => 'Rolls Royce',
                    'seat'         => 'Seat',
                    'vw'   => 'Volkswagen',
                ]
            ],
        ];

        return $series;
    }
}
