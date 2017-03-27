<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SalonsController;


class ProcessingController extends Controller
{
    //「関東レベル」のエリアコード
    private $_regionCode;

    //詳細エリアのエリアコード
    private $_detailAreaCode;

    //詳細エリアの名前配列
    private $_daNameArray;

    //こだわり条件の文字列
    private $_kodawari;

    //エリアフォーム要selectAreaArr
    private $_areaForm;

    public function __construct($region_cookie, $ses_dacode, $ses_kodawari)
    {
        $this->setRegionCode($region_cookie);
        $this->setDetailAreaCode($ses_dacode);
        $this->setDaNameArray($ses_dacode);
        $this->setKodawari($ses_kodawari);
        $this->setAreaForm($region_cookie);
    }

    // $_regionCode accessor
    public function setRegionCode($region_cookie)
    {
        $reg_c = new RegionController();
        $this->_regionCode = $reg_c->largeAreaEv($region_cookie);
    }

    public function getRegionCode()
    {
        return $this->_regionCode;
    }


    // $_detailAreaCode accessor
    public function setDetailAreaCode($ses_dacode)
    {
        if (isset($ses_dacode)) {
            $this->_detailAreaCode = $ses_dacode;
        } else {
            $this->_detailAreaCode = $this->_regionCode;
        }
    }

    public function getDetailAreaCode()
    {
        return $this->_detailAreaCode;
    }

    public function setDaNameArray($ses_dacode)
    {
        $reg_c = new RegionController();
        if (is_array($ses_dacode)) {
            $this->_daNameArray = array();
            foreach ($ses_dacode as $key => $value) {
                array_push($this->_daNameArray, $reg_c->areaEvaluate($value));
            }
        } else {
            $this->_daNameArray = $reg_c->areaEvaluate($this->_regionCode);
        }

    }

    public function getDaNameArray()
    {
        return $this->_daNameArray;
    }

    public function setKodawari($ses_kodawari)
    {
        if (isset($ses_kodawari)) {
            $this->_kodawari = $ses_kodawari;
        } else {
            $this->_kodawari = array();
            array_push($this->_kodawari, '条件未設定');
        }
    }

    public function getKodawari()
    {
        return $this->_kodawari;
    }

    public function setAreaForm($region_cookie)
    {
        $reg_c = new RegionController();
        $this->_areaForm = $reg_c->evaluateAreaName($region_cookie);
    }

    public function getAreaForm()
    {
        return $this->_areaForm;
    }

}
